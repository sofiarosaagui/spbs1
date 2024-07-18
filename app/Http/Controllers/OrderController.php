<?php


namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{

        public function index()
        {
        $user = Auth::user();

              if ($user != null) {
            $orders = Order::where('user_id', $user->id)->get();

            return view('orders.orders_user', compact('orders'));
            } else 
            {
            return redirect()->route('login');}
        }


        public function admin(Request $request)
        {
            $user = Auth::user();
    
            if ($user != null && $user->type == 'ADMIN') {
                $query = Order::select('orders.*', 'users.name as user_name')
                    ->join('users', 'orders.user_id', '=', 'users.id');
    
                if ($request->has('status') && in_array($request->status, ['Pendiente','Cancelado', 'Pagado', 'Enviado', 'Entregado'])) {
                    $query->where('orders.status', $request->status);
                }
    
                if ($request->has('order_by_date') && $request->order_by_date == '1') {
                    $query->orderBy('orders.date', 'desc');
                }
    
                if ($request->has('order_by_date') && $request->order_by_date == '0') {
                    $query->orderBy('orders.date', 'asc');
                }
    
                $orders = $query->get();
    
                return view('orders.index', [
                    'orders' => $orders,
                    'statusFilter' => $request->status,
                    'dateOrderFilter' => $request->order_by_date
                ]);
            } else {
                return redirect()->route('login');
            }
        }


        public function show(Request $request){

        if(Auth::user()->type == 'ADMIN'){
        $orders = Order::get();
        return view('/orders.admindetail', compact('orders'));
          
        }}

        

        

        
       

       public function prod($orderId)
{
    $orders = Order::select('orders.*', 'products.name as product_name')
        ->join('products', 'orders.product_id', '=', 'products.id')
        ->where('orders.id', $orderId)
        ->get();

    if ($orders->isNotEmpty()) {
        return view('/orders.admindetail')->with('orders', $orders);
    }
}

public function updateOrder(Request $request)
    {
        $order_id = $request->input('order_id');
        $update_payment = $request->input('update_payment');
    
        $order = Order::find($order_id);
    
        if ($order) {
            $order->status = $update_payment;
            $order->save();
    
            $message = 'El pago fue actualizado!';
        } else {
            $message = 'orden no encontrada';
        }
    
        $orders = Order::all();
    
        return view('/orders.index', compact('orders', 'message'));
    }


}

