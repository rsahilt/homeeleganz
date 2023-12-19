<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LineItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Order;
use App\Models\Transaction;
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
        $orders = Order::latest()->paginate(10);
        $slug = "orderdashboard";
        return view('admin/orders/index', compact('orders', 'title', 'slug'));
    }

    public function viewOrder(Request $request, $id)
    {
        // Find the order by ID
        $order = Order::find($id);
        $items = LineItem::where('order_id', $id)->get();
        $transactions = Transaction::where('order_id', $id)->get();
        $slug = "orderdashboard";
        // Check if the order exists
        if (!$order) {
            // handle the case where the order is not found, for example, redirect to an error page.
            return redirect()->route('error')->with('error', 'Order not found.');
        }


        // Pass the order data to the view
        return view('admin/orders.viewOrder', compact('order', 'items', 'slug', 'transactions'));
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
