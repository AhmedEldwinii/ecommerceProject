<?php

namespace App\Services;

use App\Models\ProductColor;
use App\Utils\ImageUpload;
use App\Repository\ProductRepository;
use Yajra\DataTables\Facades\DataTables;

class ProductService
{

    public $productRepository;
    public function __construct(ProductRepository $repo)
    {
        $this->productRepository = $repo;
    }


    public function getMainCategories()
    {
        return $this->productRepository->getMainCategories();
    }



    public function store($params)
    {
        if (isset($params['image'])) {
            $params['image'] = ImageUpload::uploadImage($params['image']);
        }
        $product =  $this->productRepository->store($params);

        if (isset($params['colors'])) {
            $params['colors'] = array_map(function ($color) use ($product) {
                $colors['color'] = $color;
                $colors['product_id'] = $product->id;
                return $colors;
            }, $params['colors']);
            // dd($params['colors']);
            $this->productRepository->addColor($product, ['colors' => $params['colors']]);
        }
        return $product;
    }




    public function getById($id)
    {
        // Call baseQuery to fetch the model instance
        return $this->productRepository->baseQuery(['ProductColor'], [])->findOrFail($id);
    }




    // public function update($id, $params)
    // {

    //     $product  = $this->productRepository->getById($id);
    //     if (isset($params['image'])) {
    //         $params['image'] = ImageUpload::uploadImage($params['image']);
    //     }
    //     $product =  $this->productRepository->update($product, $params);

        // if (isset($params['colors'])) {
        //     $params['colors'] = array_map(function ($color) use ($product) {
        //         $colors['color'] = $color;
        //         $colors['product_id'] = $product->id;
        //         return $colors;
        //     }, $params['colors']);
        //     // dd($params['colors']);
        //     $this->productRepository->addColor($product, ['colors' => $params['colors']]);
        // }
    //     return $product;
    // }



    public function update($id, $params)
    {
        try {
            $product = $this->productRepository->getById($id);

            if (isset($params['image'])) {
                $params['image'] = ImageUpload::uploadImage($params['image']);
            }

            // Update the product
            $this->productRepository->update($product, $params);

            if (isset($params['colors'])) {
                $params['colors'] = array_map(function ($color) use ($product) {
                    $colors['color'] = $color;
                    $colors['product_id'] = $product->id;
                    return $colors;
                }, $params['colors']);
                // dd($params['colors']);
                $this->productRepository->addColor($product, ['colors' => $params['colors']]);
            }

            return $product;
        } catch (\Exception $e) {
            throw $e;
        }
    }






    public function delete($params)
    {
        return $this->productRepository->delete($params);
    }


    public function dataTable()
    {
        $query = $this->productRepository->baseQuery(['category'], ['productColor']);
        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                return '<a href="' . route('dashboard.products.edit', $row->id) . '" class="edit btn btn-secondary btn-sm"><i class="fa fa-edit"></i></a>
                        <button type="button" id="deleteBtn" data-id="' . $row->id . '" class="btn btn-danger mt-md-0 mt-2" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i></button>';
            })

            ->addColumn('category', function ($row) {
                return $row->category->name;
            })

            ->rawColumns(['action'])
            ->make(true);
    }
}
