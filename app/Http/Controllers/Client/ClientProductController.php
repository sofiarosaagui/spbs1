<?php

namespace App\Http\Controllers\client;
use App\Http\Controllers\controller;
use App\Models\Product;
use App\Models\order;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientProductController extends Controller

{
   public function index(){
    return view('/client_public.cat')->with('products', Product::all());
    }

   public function show($id){
    return view('/client_public.detail')->with('product', Product::find($id));
    }

    public function view(){
        if(Auth::user()->type=='ADMIN')
        return view('users.index')->with('Users', user::all());
        else {
            return redirect()->route('login');
        }   
    }
    
        public function showOrders($userId)
        {
            $user = User::find($userId);
    
            if ($user) {
                $orders = Order::where('user_id', $user->id)->get();
    
                return view('users.orders', compact('user', 'orders'));
            } else {
                // Manejo si el usuario no es encontrado
                // Puedes redirigir a una página de error o hacer algo más
            }
        }


        public function edit($userId)
        {
            $user = User::find($userId);
            $user->save();
            if ($user) {
                return view('users.edit', compact('user'));
            } else {
                abort(404);
            }
        }


        public function update(Request $request, $userId)
        {
            $user = User::find($userId);

            if ($user) {
                $user->update($request->all());

                return redirect()->route('user.edit', ['userId' => $user->id])->with('success', 'Usuario actualizado exitosamente.');
            } else {
                abort(404);
            }
        }

}

