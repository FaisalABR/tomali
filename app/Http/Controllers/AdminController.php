<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function add_menu_view() {
        return view("admin.add_menu");
    }

    public function menu_view() {
        $menu = menu::all();

        return view("admin.view_menu", compact('menu'));
    }


    public function upload(Request $request) {
        $menu = new menu;

         // Ambil data image yang disimpan di name file
         $image = $request->file('file');

         // baut name image untuk disimpan didatabse
         $imagename = time().".".$image->getClientoriginalExtension();
 
         // Simpan gambar pada folder doctorimage di local project kita
         $request->file->move('foodimage', $imagename);

         $menu->name = $request->name;
         $menu->image = $imagename;
         $menu->quantity = $request->quantity;;
         $menu->harga = $request->harga;
         $menu->jenis = $request->jenis;
         $menu->deskripsi = $request->deskripsi;

         // Save ke database
        $menu->save();

        return redirect()->back()->with("message", "Tambah menu berhasil.");
    }

    public function delete_menu(Request $request) {
        $menuId = $request->input("menuId");

        $menu = menu::find($menuId);

        $menu->delete();

        return redirect()->back()->with('message', 'Menu berhasil dihapus.');
    }


    public function order_view()
    {
        $order = DB::table("pesanans")
        ->join('users', "pesanans.id_user", '=', "users.id")
        ->join('menus', "pesanans.id_menu", '=', "menus.id")
        ->select('pesanans.*', 'users.name as user_name', 'menus.name as menu_name')->get();
        
        return view("admin.view_order", compact('order'));
    }

    public function accept_order(Request $request) {
        $orderId = $request->input("orderId");

        $order = pesanan::find($orderId);

        $order->status_pemesanan = "sedang dimasak";
        $order->save();

        return redirect()->back()->with('message', 'Status pesanan berhasil diupdate.'); 

    }

    public function end_order(Request $request) {
        $orderId = $request->input("orderId");

        $order = pesanan::find($orderId);

        $order->status_pemesanan = "sudah siap";
        $order->save();

        return redirect()->back()->with('message', 'Status pesanan berhasil diupdate.'); 

    }

    public function delete_order(Request $request) {
        $orderId = $request->input("orderId");

        $order = pesanan::find($orderId);
        $order->delete();

        return redirect()->back()->with('message', 'Pesanan berhasil dihapus.'); 

    }
}
