<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Pesanan;

class OrderController extends Controller
{
    public function index() {
        if(Auth::id()) {
            $cart = Session::get('cart', []);
            return view("user.orders", compact('cart'));
        } else {
            return redirect()->back();
        }
    }

    public function remove_cart(Request $request)
    {
        $menuId = $request->input("menuId");

        $cart = Session::get('cart', []);

        if(isset($cart[$menuId])){
            unset($cart[$menuId]);
            Session::put("cart", $cart);
            return redirect()->back()->with('success', "Item removed from cart");
        }

        return redirect()->back()->with('error', 'Item not found in cart!');
    }

    public function confirm_order(Request $request)
    {

        $data = new pesanan;

        $data->id_menu = $request->input("menuId");
        $data->total_pesanan = $request->input("quantity") ;
        $data->total_harga = $request->input("quantity") * $request->input("price");
        $data->status_pemesanan = "menunggu konfirmasi";

        $menu = menu::find($request->input('menuId'));

        $menu->quantity -= $request->input("quantity");

        $menu->save();

        if(Auth::id()) {
            $data->id_user = Auth::user()->id;
        }
        $cart = Session::get('cart', []);

        if(isset($cart[$request->input("menuId")])){
            unset($cart[$request->input("menuId")]);
            Session::put("cart", $cart);
        }

        $data->save();

        return redirect()->back()->with('message', 'Order dikirimkan ke dapur, silahkan liat reports page untuk status pesanan anda');
    }

   
}
