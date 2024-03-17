<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Services\ProductService;
use App\Services\CategoryService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Products\StoreProductRequest;

class ProductController extends Controller
{


    private $categoryService;
    private $productService;

    public function __construct(CategoryService $categoryService , ProductService $productService ){
        $this->categoryService = $categoryService;
        $this->productService = $productService;
    }




    public function index()
    {
        return view("dashboard.products.index");
    }



    public function getall(){

        return $this->productService->dataTable();
    }



    public function create()
    {
        $Categories =$this->categoryService->getAll();
        return view("dashboard.products.create" , compact('Categories') );
    }





    public function store(StoreProductRequest $request)
    {
        $this->productService->store($request->validated());
        return redirect()->route("dashboard.products.index")->with('success' , 'Success add a new category');
    }





    public function edit(string $id)
    {
        $category = $this->categoryService->getById($id , true);
        $mainCategories = $this->categoryService->getMainCategories();
        return view('dashboard.categories.edit' , compact('category' , 'mainCategories' ));
    }





    // public function update( string $id , ProductUpdateRequest $request)
    // {
    //     $this->categoryService->update($id , $request->validated());
    //     return redirect()->route("dashboard.categories.edit" ,$id)->with('success' , 'Success add a new category');
    // }






    // public function delete (ProductDeleteRequest $request){

    //     $this->categoryService->delete($request->validated());
    //     return redirect()->route("dashboard.categories.index");

    // }

}
