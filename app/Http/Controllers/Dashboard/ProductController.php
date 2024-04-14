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

    public function __construct(CategoryService $categoryService, ProductService $productService)
    {
        $this->categoryService = $categoryService;
        $this->productService = $productService;
    }




    public function index()
    {
        return view("dashboard.products.index");
    }



    public function getall()
    {

        return $this->productService->dataTable();
    }



    public function create()
    {
        $Categories = $this->categoryService->getAll();
        return view("dashboard.products.create", compact('Categories'));
    }





    public function store(StoreProductRequest $request)
    {
        $this->productService->store($request->validated());
        return redirect()->route("dashboard.products.index")->with('success', 'Success add a new category');
    }





    public function edit(string $id)
    {
        $product = $this->productService->getById($id);
        $Categories = $this->categoryService->getAll();
        return view('dashboard.products.edit', compact('product', 'Categories'));
    }




    public function update($id, Request $request)
    {
        try {
            $this->productService->update($id, $request->all());
            return redirect()->route('dashboard.products.edit', $id)->with('success', 'Product successfully updated.');
        } catch (\Exception $e) {
            return back()->withInput()->withErrors(['error' => 'Failed to update product.']);
        }
    }







    public function delete(Request $request)
    {

        $this->productService->delete($request->validated());
        return redirect()->route("dashboard.products.index");
    }
}
