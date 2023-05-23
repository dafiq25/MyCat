<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ordercontroller extends Controller
{
    public function indexAdm(){
        $new = DB::table('cart')->where('status_cart', 0)->count();
        $finish = DB::table('cart')->where('status_cart', 1)->count();
        $produk = DB::table('product')->count();
        // dd($produk);
        return view('admin.DBadmin', compact('new', 'finish', 'produk'));
    }
    public function indexNew(){
        $history = DB::table('detail_cart')
        ->join('cart', 'detail_cart.id_cart', '=', 'cart.id_cart')
        ->join('product', 'detail_cart.id_product', '=', 'product.id_product')
        // ->where('cart.id', Auth::user()->id)
        ->where('cart.status_cart', 0)
        ->get();
        return view('admin.neworder', compact('history'));
    }

    public function indexFinish(){
        $history = DB::table('detail_cart')
        ->join('cart', 'detail_cart.id_cart', '=', 'cart.id_cart')
        ->join('product', 'detail_cart.id_product', '=', 'product.id_product')
        // ->where('cart.id', Auth::user()->id)
        ->where('cart.status_cart', 1)
        ->get();
        return view('admin.finishorder', compact('history'));
    }

    public function detailOrder(Request $request){
        $data = DB::table('cart')
        ->join('detail_cart', 'cart.id_cart', '=', 'detail_cart.id_cart')
        ->join('product', 'detail_cart.id_product', '=', 'product.id_product')
        ->where('cart.id_cart', $request->id)
        ->get();
        return view('admin.detail-order', compact('data'));
    }

    public function updateOrder(Request $request){
        // dd($request->all());
        db::table('detail_cart')->where('id_cart', $request->id)->update([
            'status' => $request->status,
            'status_bayar' => $request->status_bayar
        ]);
        return redirect('/listorder-new');
    }

    public function selesaiPesanan(Request $request){
        DB::table('cart')->where('id_cart', $request->id)->update([
            'status_cart' => 1
        ]);
        DB::table('detail_cart')->where('id_cart', $request->id)->update([
            'status' => 4
        ]);
        return redirect('/cart');
    }
}
