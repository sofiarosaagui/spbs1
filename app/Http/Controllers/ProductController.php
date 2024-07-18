<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function index(){
    return view('/products/index')->with('products', Product::where('status', 'Activo')->get());
   }

   public function create(){
    return view('/products/create')->with('suppliers', Supplier::where('status', 'Activo')->get());
   }

   public function store(Request $request){
    $product=new Product();
    $product->supplier_id=$request->supplier_id;
    $product->name=$request->name;
    $product->price=$request->price;
    $product->description=$request->description;
    $product->existence=$request->existence;
    // $product->image_1=$request->image1;
    // $product->image_2=$request->image2;
    // $product->image_3=$request->image3;

    $product->image_1='default.png';
    $product->image_2='default.png';
    $product->image_3='default.png';

    $product->capability=$request->capability;
    $product->capability_type=$request->capability_type;
    $product->color=$request->color;
    $product->type=$request->type;
    $product->status=$request->status;

    $product->save();

                if ($request->hasFile('image1')) {

                    $extension = $request->image1->extension();
                    $new_name = 'product_' . $product->id . '_1.' . $extension;
                    $path = $request->image1->storeAs('/images/products', $new_name, 'public');
                    $product->image_1 = $path;
                    $product->save();
                }

                if ($request->hasFile('image2')) {

                $extension = $request->image2->extension();
                $new_name = 'product_' . $product->id . '_2.' . $extension;
                $path = $request->image2->storeAs('/images/products', $new_name, 'public');
                $product->image_2 = $path;
                $product->save();
            }

            if ($request->hasFile('image3')) {

                $extension = $request->image3->extension();
                $new_name = 'product_' . $product->id . '_3.' . $extension;
                $path = $request->image3->storeAs('/images/products', $new_name, 'public');
                $product->image_3 = $path;
                $product->save();
            }

    return view('/products/index')->with('products', Product::where('status', 'Activo')->get());
   }

   public function edit($id){
    return view('/products/edit')->with('product', Product::find($id))->with('suppliers', Supplier::where('status', 'Activo')->get());
   }

   public function update(Request $request, $id){
    $product= Product::find($id);
    $product->supplier_id=$request->supplier_id;
    $product->name=$request->name;
    $product->price=$request->price;
    $product->description=$request->description;
    $product->existence=$request->existence;
    // $product->image_1=$request->image1;
    // $product->image_2=$request->image2;
    // $product->image_3=$request->image3;
    $product->capability=$request->capability;
    $product->capability_type=$request->capability_type;
    $product->color=$request->color;
    $product->type=$request->type;
    $product->status=$request->status;

    $product->save();

        if ($request->hasFile('image1')) {
            $extension = $request->image1->extension();
            $new_name='product_'.$product->id.'_1.'.$extension;
            $path = $request->image1->storeAs('/images/products', $new_name, 'public');
            $product->image_1=$path;
            $product->save();
        }

        if ($request->hasFile('image2')) {
            $extension = $request->image2->extension();
            $new_name='product_'.$product->id.'_2.'.$extension;
            $path = $request->image2->storeAs('/images/products', $new_name, 'public');
            $product->image_2=$path;
            $product->save();
        }
        
        if ($request->hasFile('image3')) {
            $extension = $request->image3->extension();
            $new_name='product_'.$product->id.'_3.'.$extension;
            $path = $request->image3->storeAs('/images/products', $new_name, 'public');
            $product->image_3=$path;
            $product->save();
        }

    return view('/products/index')->with('products', Product::where('status', 'Activo')->get());
   }

   public function show($id){
    return view('/products/show')->with('product', Product::find($id));
   }

   public function delete(Request $request, $id){
    $product= Product::find($id);
    $product->status='Inactivo';
    $product->save();
    return view('/products/index')->with('products', Product::where('status', 'Activo')->get());
   }


}