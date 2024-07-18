<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function index(){
        return view('/suppliers/index')->with('suppliers', Supplier::where('status', 'Activo')->get());
    }

    public function create(){
        return view('/suppliers/create');
    }

    public function store(Request $request){
        $supplier=new Supplier();
        $supplier->name=$request->name;
        // $supplier->rfc=$request->rfc;
        $supplier->phone=$request->phone;
        $supplier->address=$request->address; 
        // $supplier->image=$request->image;
        
        $supplier->image='default.png'; 

        $supplier->status=$request->status;
        $supplier->save();

        if ($request->hasFile('image')) {

            $extension = $request->image->extension();
            $new_name = 'supplier_' . $supplier->id . '_1.' . $extension;
            $path = $request->image->storeAs('/images/suppliers', $new_name, 'public');
            $supplier->image= $path;
            $supplier->save();
        }

        return view('/suppliers/index')->with('suppliers', Supplier::where('status', 'Activo')->get());
    }

    public function edit($id){
        return view('/suppliers/edit')->with('supplier', Supplier::find($id));
    }

    public function update(Request $request, $id){
        $supplier= Supplier::find($id);
        $supplier->name=$request->name;
        // $supplier->rfc=$request->rfc;
        $supplier->phone=$request->phone;
        $supplier->address=$request->address; 
        $supplier->image=$request->image; 
        $supplier->status=$request->status;
   
        $supplier->save();
        return view('/suppliers/index')->with('suppliers', Supplier::where('status', 'Activo')->get());
    }
    
    public function show($id){
        return view('/suppliers/show')->with('supplier', Supplier::find($id));
    }

    public function delete(Request $request, $id){
        $supplier= supplier::find($id);
        $supplier->status='Inactivo';
        $supplier->save();    
        return view('/suppliers/index')->with('suppliers', Supplier::where('status', 'Activo')->get());  
    }
}