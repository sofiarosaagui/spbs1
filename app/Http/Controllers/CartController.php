<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Order;
use App\Models\Order_detail;
use Darryldecode\Cart\Cart;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('cart/cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
        session()->flash('success', '¡Producto agregado con éxito!');

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', '¡Información actualizada con éxito!');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', '¡Producto removido con éxito!');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', '¡Carrito vaciado con éxito!');

        return redirect()->route('cart.list');
    }

    public function buy()
    {   

        if (Auth::user() != null){
                
        $cartItems = \Cart::getContent();
        // dd(compact('cartItems'));
        $total =0;
            foreach ($cartItems as $item) {
                $total = $total + ($item->price * $item->quantity);
             }

        
        // $cliente = new Client();
        // $cliente->name= Auth::user()->name;
        // $cliente->last_name= Auth::user()->last_name;
        // $cliente->phone= Auth::user()->phone;
        // $cliente->address= Auth::user()->address;
        // $cliente->image= Auth::user()->image;
        // $cliente->status="Activo";
        // $cliente->save();
        
        $orden= new Order();
        $orden->time=now();
        $orden->quantity=$item->quantity;
        
        $orden->price=$total;
        $orden->phone= Auth::user()->phone;
        $orden->address= Auth::user()->address;
        $orden->status="Pendiente";

        // if(Auth::user()!=null){
        // $orden->phone= Auth::user()->phone;
        // $orden->address= Auth::user()->address;
        // }

        $orden->user_id = Auth::user()->id;
        $orden->product_id=$item->id;
        $orden->save();

        \Cart::clear();

        session()->flash('success', 'Pedido registrado, favor de acudir a tienda para pagar y recoger su orden.');

        return redirect()->route('cart.list');

        }else{
            \Cart::clear();
            session()->flash('success', 'Inicia sesión para poder realizar la compra.');
            return redirect()->route('login');
            return redirect()->route('cart.list');
        }
    }

}