<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReportsController extends Controller
{
    public function index() {
        if(Auth::id()) {
            $orders = DB::table('pesanans')
                    ->join('users', 'pesanans.id_user', '=', 'users.id')
                    ->join('menus', 'pesanans.id_menu', '=', 'menus.id')
                    ->where('users.id', Auth::user()->id) // Filter berdasarkan ID user
                    ->select('pesanans.*', 'users.name as user_name', 'menus.name as menu_name')
                    ->get();

            return view("user.reports", compact('orders'));
        } else {
            return redirect()->back();
        }
    }
}
