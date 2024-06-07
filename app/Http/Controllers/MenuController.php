<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class MenuController extends Controller
{
    public function index() {
        return view("menu");
    }

    public function show_menu($idMenu) {
        $menu = Menu::where('id', $idMenu)->firstOrFail();

        return view("user.detail-menu", ['menu' => $menu]);
    }

    public function add_to_cart(Request $request) {
        $cart = Session::get('cart', []);

        if(!$cart) {
            $cart = [];
        }

        if(array_key_exists($request->menuId, $cart)) {
            $cart[$request->menuId]['quantity'] += 1;
        } else {
            $cart[$request->menuId] = [
                'menuId' => $request->menuId,
                'quantity' => 1,
                'name' => $request->name,
                'price' => $request->price,
            ];
        }

        Session::put('cart', $cart);

        return redirect()->back()->with('message', 'Data berhasil dimasukan ke keranjang');
    }

    public function remove_cart(Request $request)
    {
        $menuId = $request->input("menuId");

        $cart = Session::get('cart', []);

        if(isset($cart[$menuId])){
            unset($cart[$menuId]);
            Session::put("cart", $cart);
            return redirect()->back()->with('message', "Menu dihapus dari cart");
        }

        return redirect()->back()->with('messsage', 'Menu tidak ditemukan di cart');
    }
}
