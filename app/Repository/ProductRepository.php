<?php

namespace App\Repository;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Utils\ImageUpload;
use Yajra\DataTables\Facades\DataTables;

class ProductRepository implements RepositoryInterface
{

    public $product;
    public $category;

    public function __construct(Product $product, Category $category)
    {

        $this->product = $product;
        $this->category = $category;
    }


    public function baseQuery($relations = [], $withCount = [])
    {
        $query =  $this->product->select("*")->with($relations);
        foreach ($withCount as $key => $value) {
            $query->withCount($value);
        }
        return $query;
    }





    public function getById($id)
    {
        return $this->product->where('id', $id)->firstOrFail();
    }



    public function getMainCategories()
    {
        return  $this->category->where('parent_id', null)->orWhere('parent_id', 0)->get();
    }



    private function uploadMultiImages($params, $product)
    {
        $images = [];
        if (isset($params['images'])) {
            $i = 0;
            foreach ($params['images'] as $key => $value) {
                $images[$i]['image'] = ImageUpload::uploadImage($value);
                $images[$i]['product_id'] = $product->id;
                $i++;
            }
        }
        return $images;
    }


    public function store($params)
    {
        $product =  $this->product->create($params);
        $images  =  $this->uploadMultiImages($params, $product);
        $product->images()->createMany($images);
        return $product;
    }




    public function update($product, $params)
    {
        $product->update($params);
        $images  =  $this->uploadMultiImages($params, $product);
        $product->images()->createMany($images);
        return $product;
    }







    public function addColor($product, $params)
    {
        #insert array of colors to product_color table
        #createMany to insert all value at once time
        $product->productColor()->createMany($params['colors']);
    }



    public function delete($params)
    {

        $product = $this->getById($params['id']);
        return $product->delete();
    }
}
