<?php

namespace App\Services;

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


    public function getMainCategories ()
    {
        return $this->productRepository->getMainCategories();
    }




    public function store($params)
    {
        if(isset($params['image'])){
            $params['image'] = ImageUpload::uploadImage($params['image']);
        }
        return $this->productRepository->store($params);
    }






    public function getById($id ,$children = false)
    {
        return $this->productRepository->getById($id ,$children);
    }



    public function update($id ,$params)
    {
        // dd($params);
        $product  = $this->productRepository->getById($id);
        $params['parent_id'] = $params['parent_id'] ?? 0 ;
        if(isset($params['image'])){
            $params['image'] = ImageUpload::uploadImage($params['image']);
        }
        return $this->productRepository->update( $product , $params);
    }



    public function delete($params)
    {
       return $this->productRepository->delete($params);
    }


    public function dataTable()
    {
        $query = $this->productRepository->baseQuery(['category'],['productcolor']);
        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                return '<a href="' . route('dashboard.categories.edit', $row->id) . '" class="edit btn btn-secondary btn-sm"><i class="fa fa-edit"></i></a>
                        <button type="button" id="deleteBtn" data-id="' . $row->id .'" class="btn btn-danger mt-md-0 mt-2" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i></button>';
            })

            ->addColumn('category' , function($row){
                return $row->category->name;
            })

            ->rawColumns(['action'])
            ->make(true);
    }
}
