<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\cart;
use App\Models\detail_cart;
use Carbon\Carbon;

class productController extends Controller
{
    public function index(){
        $list = DB::table('categories')->where('status', 1)->get();
        $data = DB::table('categories')->get();
        // dd($data);
        return view('dashboard', compact('data', 'list'));
    }
    public function profile(){
        $list = DB::table('categories')->where('status', 1)->get();
        $data = DB::table('categories')->get();
        // dd($data);
        return view('profile', compact('data', 'list'));
    }

    public function indexCategory(Request $request){
        $list = DB::table('categories')->where('status', 1)->get();
        $data = DB::table('product')
        ->join('categories', 'product.id_category', '=', 'categories.id_category')
        ->where('categories.nama_kategori', $request->nama)
        ->where('product.status_product', 1)
        ->get();
        // dd($data);

        return view('shopProduct', compact('data', 'list'));
    }

    public function detailproduct(Request $request){
        $list = DB::table('categories')->where('status', 1)->get();
        $data = DB::table('product')
        ->join('categories', 'product.id_category', '=', 'categories.id_category')
        ->where('product.nama_produk', $request->nama)
        ->where('product.status_product', 1)
        ->get();
        // dd($data);

        return view('detail-item', compact('data', 'list'));
    }
    
    public function checkout(Request $request){
        $list = DB::table('categories')->where('status', 1)->get();
        $data = DB::table('product')
        ->join('categories', 'product.id_category', '=', 'categories.id_category')
        ->where('product.nama_produk', $request->nama)
        ->where('product.status_product', 1)
        ->get();
        return view('checkout', compact('data', 'list'));
    }

    public function insertCheckout(Request $request){
        // dd($request->all());
        // $date = Carbon::now();
        // dd($produk[0]->harga);
        $cart = new cart;
        $cart->tanggal_pemesanan = Carbon::now();
        $cart->id = Auth::user()->id;
        $cart->status_cart = 0;
        // dd($cart);
        $cart->save();
        
        $produk = DB::table('product')->where('id_product', $request->id)->get();
        $detail = new detail_cart;
        $detail->create([
            'id_cart'=>$cart->id_cart,
            'id_product'=>$request->id,
            'nama'=>$request->nama_user,
            'alamat'=>$request->alamat,
            'notelp'=>$request->notelp,
            'jenis_pembayaran'=>$request->radioNoLabel,
            'jumlah_barang'=>$request->quantity,
            'total_harga'=>$produk[0]->harga*$request->quantity,
            // 'tanggal_pembayaran'=>Carbon::now(),
            // 'tanggal_pengiriman'=>Carbon::now(),
            'shipping'=>$request->shipping,
            'status'=> 0,
            'status_bayar' => 0
        ]);

        return redirect('/cart');
    }

    public function history(Request $request){
        $list = DB::table('categories')->where('status', 1)->get();
        $data = DB::table('categories')
        ->get();

        $history = DB::table('detail_cart')
        ->join('cart', 'detail_cart.id_cart', '=', 'cart.id_cart')
        ->join('product', 'detail_cart.id_product', '=', 'product.id_product')
        ->where('cart.id', Auth::user()->id)
        ->get();
        
        return view('cart', compact('data', 'history', 'list'));
    }

    public function detailCart(Request $request){
        $list = DB::table('categories')->where('status', 1)->get();
        $data = DB::table('cart')
        ->join('detail_cart', 'cart.id_cart', '=', 'detail_cart.id_cart')
        ->join('product', 'detail_cart.id_product', '=', 'product.id_product')
        ->where('cart.id_cart', $request->id)
        ->get();
        return view('detail', compact('data', 'list'));
    }
    
    public function uploadBukti (Request $request){
        // dd($request->all());
        $name = $request->file('bukti_bayar')->store('foto-bukti-bayar');
        DB::table('detail_cart')->where('id_cart', $request->id)->update([
            'tanggal_pembayaran' => Carbon::now(),
            'status' => 1,
            'status_bayar' => 1,
            'foto_bukti_bayar' =>$name
        ]);
        return redirect('/cart');
    }
}
