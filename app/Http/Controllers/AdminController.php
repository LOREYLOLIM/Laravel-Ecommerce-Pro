<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

use App\Models\Product;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function view_category()
    {
        $data=Category::all();

        return view('admin.category', compact('data'));
    }

    public function add_category(Request $request)
    {
        $data=new category;
        $data->category_name=$request->category;

        $data->save();

        return redirect()->back()->with('message', 'Category Added Successfully');
    }
    public function delete_category($id)
    {
        $data=category::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Category Deleted Successfully');
    }

    public function view_product()
    {
        $category = category::all();

        return view('admin.product', compact('category'));
    }

    public function add_product(Request $request)
    {
        // the name on database should match the names on form as discount_price example
        $product=new product;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->price=$request->price;
        $product->quantity=$request->quantity;
        $product->discount_price=$request->dis_price;
        $product->category=$request->category;
        // image
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('product', $imagename);
        $product->image=$imagename;


        $product->save();

        return redirect()->back()->with('message', 'Product Added Successfully');

    }

    // show product function
    public function show_product()
    {
        $product=product::all();
        return view('admin.show_product', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
}
