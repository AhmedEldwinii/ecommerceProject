<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;





class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mainCategories = Category::where('parent_id',0)->orWhere('parent_id',null)->get();
        $categories = Category::paginate(10);
        return view("dashboard.categories.index" , compact('mainCategories','categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mainCategories = Category::where('parent_id',0)->orWhere('parent_id',null)->get();
        $categories = Category::paginate(10);
        return view("dashboard.categories.create" , compact('mainCategories','categories') );
    }


    public function getall(){

        $query = Category::select('*')->with('parents');
        return DataTables::of($query)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                return '<a href="' . route('dashboard.categories.edit', $row->id) . '" class="edit btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                        <button type="button" id="deleteBtn" data-id="' . $row->id .'" class="btn btn-danger mt-md-0 mt-2" data-bs-toggle="modal" data-bs-target="#deletemodal"><i class="fa fa-trash"></i></button>';
            })
            ->addColumn('parent', function ($row) {
                return $row->parent == 0 ? 'Main category' : ($row->parent ? $row->parent->name : '');
            })
            ->addColumn('image', function ($row) {
                return '<img src="'.asset($row->image).'" width="100px" height="100px">';
            })
            ->rawColumns(['parent', 'action', 'image'])
            ->make(true);

    }


    /**

     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function delete (Request $request){
        dd($request->all());
    }
}
