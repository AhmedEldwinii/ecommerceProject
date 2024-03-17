<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Categories\CategoryDeleteRequest;
use App\Http\Requests\Dashboard\Categories\CategoryStoreRequest;
use App\Http\Requests\Dashboard\Categories\CategoryUpdateRequest;
use App\Services\CategoryService;
use Yajra\DataTables\Facades\DataTables;






class CategoryController extends Controller
{

    private $categoryService;

    public function __construct(CategoryService $categoryService){
        $this->categoryService = $categoryService;
    }





    public function index()
    {
        $mainCategories = $this->categoryService->getMainCategories();
        return view("dashboard.categories.index" , compact('mainCategories'));
    }






    public function create()
    {
        $mainCategories =$this->categoryService->getMainCategories();
        return view("dashboard.categories.create" , compact('mainCategories') );
    }






    public function getAll(){

        return $this->categoryService->dataTable();
    }




    public function store(CategoryStoreRequest $request)
    {
        $this->categoryService->store($request->validated());
        return redirect()->route("dashboard.categories.index")->with('success' , 'Success add a new category');
    }





    public function edit(string $id)
    {
        $category = $this->categoryService->getById($id , true);
        $mainCategories = $this->categoryService->getMainCategories();
        return view('dashboard.categories.edit' , compact('category' , 'mainCategories' ));
    }





    public function update( string $id , CategoryUpdateRequest $request)
    {
        $this->categoryService->update($id , $request->validated());
        return redirect()->route("dashboard.categories.edit" ,$id)->with('success' , 'Success add a new category');
    }






    public function delete (CategoryDeleteRequest $request){

        $this->categoryService->delete($request->validated());
        return redirect()->route("dashboard.categories.index");

    }
}
