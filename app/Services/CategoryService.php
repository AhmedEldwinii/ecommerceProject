<?php

namespace App\Services;

use App\Models\Category;
use App\Utils\ImageUpload;
use Yajra\DataTables\Facades\DataTables;

class CategoryService {


    public function getMainCategories (){

        return  Category::where('parent_id' , null)->orWhereIn('parent_id', range(0, 255))->get();

    }


    public function store($params){

        if(isset($params['image'])){
            $params['image'] = ImageUpload::uploadImage($params['image']);
        }

        return Category::create($params);
    }



    public function dataTable(){
        $query = Category::select('id', 'name', 'image', 'created_at', 'updated_at')->with('parent');
        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                return '<a href="' . route('dashboard.categories.edit', $row->id) . '" class="edit btn btn-secondary btn-sm"><i class="fa fa-edit"></i></a>
                        <button type="button" id="deleteBtn" data-id="' . $row->id .'" class="btn btn-danger mt-md-0 mt-2" data-toggle="modal" data-target="#deletemodal"><i class="fa fa-trash"></i></button>';
            })
            ->addColumn('parent', function ($row) {
                return ($row->parent == 0) ? 'Main category' : $row->parent->name ;
            })
            ->addColumn('image', function ($row) {
                return '<img src="'.asset($row->image).'" width="100px" height="100px">';
            })
            ->rawColumns(['parent', 'action', 'image'])
            ->make(true);
    }
}
