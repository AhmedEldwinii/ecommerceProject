<?php

namespace App\Services;

use App\Models\Category;
use App\Repository\CategoryRepository;
use App\Utils\ImageUpload;
use Yajra\DataTables\Facades\DataTables;

class CategoryService {

    public $categoryRepository;
    public function __construct(CategoryRepository $repo)
    {
        $this->categoryRepository = $repo;
    }





    public function getMainCategories ()
    {
        return $this->categoryRepository->getMainCategories();
    }





    public function store($params)
    {
        $params['parent_id'] = $params['parent_id'] ?? 0 ;
        if(isset($params['image'])){
            $params['image'] = ImageUpload::uploadImage($params['image']);
        }
        return $this->categoryRepository->store($params);
    }






    public function getById($id ,$children = false)
    {
        return $this->categoryRepository->getById($id ,$children);
    }






    public function update($id ,$params)
    {
        // dd($params);
        $category = $this->categoryRepository->getById($id);
        $params['parent_id'] = $params['parent_id'] ?? 0 ;
        if(isset($params['image'])){
            $params['image'] = ImageUpload::uploadImage($params['image']);
        }
        return $this->categoryRepository->update( $category, $params);
    }



    public function delete($params)
    {
       return $this->categoryRepository->delete($params);
    }






    public function dataTable()
    {
        $query = $this->categoryRepository->baseQuery(['parent']);
        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                return '<a href="' . route('dashboard.categories.edit', $row->id) . '" class="edit btn btn-secondary btn-sm"><i class="fa fa-edit"></i></a>
                        <button type="button" id="deleteBtn" data-id="' . $row->id .'" class="btn btn-danger mt-md-0 mt-2" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i></button>';
            })
            ->addColumn('parent', function ($row) {
               if ($row->parent) {
                return $row->parent->name ;
            } return 'Main Category';

            })
            ->addColumn('image', function ($row) {
                return '<img src="'.asset($row->image).'" width="100px" height="100px">';
            })
            ->rawColumns(['parent', 'action', 'image'])
            ->make(true);
    }



    public function getAll(){

        return $this->categoryRepository->baseQuery(['child'])->get();

    }
}
