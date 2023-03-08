<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productList = Product::all();
        return view('products.index', ['productList' => $productList]);
        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $product = Product::create($request->only(['name','img','desc','category_id','price','unit','import_price','quantity']));
        $message = "thêm mới thành công";
        if($product == null){
            $message = "thêm mới thất bại ";
        }
        return redirect()->route('products.index')->with('message', $message);
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
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $product = Product::findOrFail($id);
        $bool = $product->update($request->only(['name', 'img', 'desc','category_id','price']));
        $message = "Cập nhật thành công";
        if(!$bool){
            $message = "cập nhật thất bại";

        }
        return redirect()->route('products.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $message = "xóa thành công";
        if (!Product::destroy($id)) {
            $message = "xóa thất bại";
        }

        return redirect()->route('products.index')->with('message', $message);
    }
    
}
