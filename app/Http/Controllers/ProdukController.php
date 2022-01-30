<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Keranjang;
use App\Models\order;
use Illuminate\Support\Facades\DB;
use Session;

class ProdukController extends Controller
{
    function index()
    {
        $data=produk::all();
        return view('produk',['produk'=>$data]);
    }
    function detail($id)
    {
        $data =produk::find($id);
        return view('detail',['produk'=>$data]);
    }
    function cari(Request $req)
    {
        return $data= produk::
        where('name', 'like', '%'.$req->input("query").'%')
        ->get();
        return view('cari',['produk'=>$data]);
    }
    function addToCart(Request $req)
    {
        if($req->session()->has('user'))
        {
            $keranjang= new Keranjang;
            $keranjang->user_id=$req->session()->get('user')['id'];
            $keranjang->produk_id=$req->produk_id;
            $keranjang->save();
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $userId=Session::get('user')['id'];
        return Keranjang::where('user_id',$userId)->count();
    }
    function cartList()
    {
        $userId=Session::get('user')['id'];
        $produk= DB::table('keranjang')
        ->join('produk_tbl', 'keranjang.produk_id', '=','produk_tbl.id')
        ->where('keranjang.user_id',$userId)
        ->select('produk_tbl.*','keranjang.id as keranjang_id')
        ->get();

        return view ('cartlist',['produk_tbl'=>$produk]);
    }
    function hapusKeranjang($id)
    {
        Keranjang::destroy($id);
        return redirect('cartlist');
    }
    function beliSekarang()
    {
        $userId=Session::get('user')['id'];
        $total = DB::table('keranjang')
        ->join('produk_tbl', 'keranjang.produk_id', '=','produk_tbl.id')
        ->where('keranjang.user_id',$userId)
        ->sum('produk_tbl.harga');

        return view ('belisekarang',['total'=>$total]);
    }

    function orderPlace(Request $req)
    {
        $userId=Session::get('user')['id'];
        $allkeranjang= keranjang::where('user_id',$userId)->get();
        foreach($allkeranjang as $keranjang)
        {
            $order= new order;
            $order->produk_id=$keranjang['produk_id'];
            $order->user_id=$keranjang['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->alamat=$req->alamat;
            $order->save();
            keranjang::where('user_id',$userId)->delete();

        }
        $req->input();
        return redirect('/');
    }
    
     public function myOrders()
    {
        $userId=Session::get('user')['id'];
        $order= DB::table('orders')
        ->join('produk_tbl', 'orders.produk_id', '=','produk_tbl.id')
        ->where('orders.user_id',$userId)
        ->sum('produk_tbl.harga');

        return view ('myorder',['orders'=>$order]);
    }
}
