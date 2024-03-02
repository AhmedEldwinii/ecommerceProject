<?php

namespace App\Services;

use App\Models\Category;
use App\Utils\ImageUpload;
use Yajra\DataTables\Facades\DataTables;

class CategoryService {


    public function getMainCategories ()
    {
        return  Category::where('parent_id' , null)->orWhere('parent_id', 0)->get();
    }


    public function store($params)
    {
        $params['parent_id'] = $params['parent_id'] ?? 0 ;
        if(isset($params['image'])){
            $params['image'] = ImageUpload::uploadImage($params['image']);
        }
        return Category::create($params);
    }




    public function getById($id ,$children = false)
    {
        $query = Category::where('id', $id);
        if($children){
            $query->withCount('child');
        }
        return $query->firstOrFail();
    }




    public function update($id ,$params)
    {
        // dd($params);
        $category = $this->getById($id);
        $params['parent_id'] = $params['parent_id'] ?? 0 ;
        if(isset($params['image'])){
            $params['image'] = ImageUpload::uploadImage($params['image']);
        }
        return $category->update($params);
    }





    public function dataTable()
    {
        $query = Category::select("*")->with('parent');
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
}
