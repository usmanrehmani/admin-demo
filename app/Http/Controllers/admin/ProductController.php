<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Product;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    public function dashboard(){
        $categories = Category::all();
    //     $relation=Category::with('category')->get();
    //    return $relation;
        return view('admin.pages.dashboard',compact('categories'));
    }
    public function index()
    {
        $products = Product::with('productCategory')->get();
        $categories = Category::all();
        // $products = Product::all();
        return view('admin.pages.products', compact('products', 'categories'));
    }

    public function store(Request $request)
    {
        try{

            $request->validate([
                'name'    => 'required',
                'image'   => 'required',
                'category'  =>  'required',
                'description' => 'required',
            ]);
    
            $product = new Product;
            $product->name = $request->input('name');
            $product->category_id = $request->input('category');
            $product->description = $request->input('description');
    
            if ($request->hasfile('image')) {
                $file = $request->file('image');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extenstion;
                $file->move('uploads/product-imgs/', $filename);
                $product->image = $filename;
                // dd($filename);
            }
    
    
            $product->save();
        }catch(Exception $e){
            return response()->json([
        'message' => $e->getMessage(),

            ], JsonResponse::HTTP_INTERNAL_SERVER_ERROR);
        }
        
    }

    public function update(Request $request, $id)
    {
        // ($request)->dd();
     
        $request->validate([
            'name'    => 'required',
            'image'   => 'required',
            'category'  =>  'required',
            'description' => 'required',
        ]);

        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->category_id = $request->input('category');
        $product->description = $request->input('description');
      
        if ($request->hasfile('image')) {

            $destination = 'uploads/product-imgs/' . $product->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/product-imgs/', $filename);
            $product->image = $filename;
        }


        $product->update();
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return $product;
    }
}
