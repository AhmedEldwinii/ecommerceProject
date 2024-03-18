<?php

namespace App\Repository;

use App\Models\Category;
use App\Models\Product;
use Yajra\DataTables\Facades\DataTables;

Class ProductRepository implements RepositoryInterface
{

    public $product;
    public $category;

    public function __construct( Product $product , Category $category ) {

        $this->product = $product ;
        $this->category = $category ;

    }


    public function baseQuery($relations=[],$withCount=[])
    {
       $query =  $this->product->select("*")->with($relations);
       foreach($withCount as $key => $value){
            $query->withCount($value);
       }
       return $query;
    }





    public function getById($id){

        return $this->product->where('id', $id)->firstOrFail();

    }

    public function getMainCategories ()
    {

        return  $this->category->where('parent_id' , null)->orWhere('parent_id', 0)->get();

    }


    public function store($params){

        return $this->product->create($params);

    }



    public function update($id,$params){
        $product = $this->getById($id);
        return $product->update($params);
    }




    public function delete ($params){

        $product = $this->getById($params['id']);
        return $product->delete();

    }



}
