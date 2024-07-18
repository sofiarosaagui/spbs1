<?php

namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        return view('/clients/index')->with('clients', Client::where('status', 'Activo')->get());
    }

    public function create(){
        return view('/clients/create');
    }

    public function store(Request $request){
        $client=new Client();
        $client->name=$request->name;
        $client->last_name=$request->last_name;
        $client->phone=$request->phone;
        $client->address=$request->address; 
        $client->image=$request->image; 
        $client->status=$request->status;
    
        $client->save();
        return view('/clients/index')->with('clients', Client::where('status', 'Activo')->get());
    }

    public function edit($id){
        // find solo sirven para llaves primarias
        return view('/clients/edit')->with('client', Client::find($id));
    }
    
    public function update(Request $request, $id){
        $client= Client::find($id);
        $client->name=$request->name;
        $client->last_name=$request->last_name;
        $client->phone=$request->phone;
        $client->address=$request->address;
        $client->image=$request->image; 
        $client->status=$request->status;
    
        $client->save();
        return view('/clients/index')->with('clients', Client::where('status', 'Activo')->get());
    }

    public function show($id){
        return view('/clients/show')->with('client', Client::find($id));
    }

    public function delete(Request $request, $id){
        $client= Client::find($id);   
        $client->status='Inactivo';    
        $client->save();
    
        return view('/clients/index')->with('clients', Client::where('status', 'Activo')->get());
       }
    
}