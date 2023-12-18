<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Order;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    /**
     * Display a listing of the orders.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'List of orders';
        $orders = Order::all();
        $slug = "orderdashboard";
        return view('admin/orders/index', compact('orders', 'title', 'slug'));
    }

    public function viewOrder(Request $request, $id)
    {
        $title = 'List of orders';
        $orders = Order::all();
        $slug = "orderdashboard";
        return view('admin/orders/index', compact('orders', 'title', 'slug'));
    }

    /**
     * Remove the specified order from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $order = Order::find($id);

    //     if (!$order) {
    //         return redirect()->route('admin.orders.index')->with('error', 'Order not found.');
    //     }

    //     $order->delete();
    //     return redirect()->route('admin.orders.index')->with('success', 'Order deleted successfully.');
    // }
}
