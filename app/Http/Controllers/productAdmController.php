<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productAdmController extends Controller
{
    public function index(Request $request){
        
        $id = $request->id_category;
        $category = DB::table('categories')->where('id_category', $id)->get();
        $data = DB::table('product')
        ->join('categories', 'product.id_category', '=', 'categories.id_category')
        ->where('categories.id_category', $request->id_category)
        ->where('product.status_product', 1)
        ->get();
        // $data = DB::table('categories')
        // ->join('product', 'categories.id_category', '=', 'product.id_category')
        // ->where('categories.id_category', $request->id_category)->get();
        // dd($category);
        return view('admin.viewProduct', compact('data', 'id', 'category'));
    }

    public function create(Request $request){
        $id = $request->id;
        return view('admin.createProduct', compact('id'));
    }

    public function insert(Request $request){
        // dd($request->all());
        $name = $request->file('foto_product')->store('foto-product');
        DB::table('product')->insert([
            'id_category'=>$request->id,
            'nama_produk'=>$request->nama_product,
            'berat'=>$request->berat_product,
            'deskripsi'=>$request->deskripsi_product,
            'harga'=>$request->harga_product,
            'foto_product'=>$name,
            'status_product'=>1
        ]);
        return redirect('/product-view' .'/' .$request->id);
    }

    public function delete(Request $request){
        DB::table('product')->where('id_product', $request->id)->update([
            'status_product'=>0
        ]);
        return redirect('/product-view' .'/' .$request->id_category);
    }

    public function indexUpdate(Request $request){
        $id = $request->id;
        $data = DB::table('product')->where('id_product', $request->id_product)->get();
        return view('admin.updateProduct', compact('data', 'id'));
    }

    public function updateProduct(Request $request){
        // dd($request->all());
        if ($request->hasFile('foto_product') == false) {
            DB::table('product')->where('id_product', $request->id_product)->update([
            'nama_produk'=>$request->nama_product,
            'berat'=>$request->berat_product,
            'deskripsi'=>$request->deskripsi_product,
            'harga'=>$request->harga_product,
            'foto_product'=>$request->foto_product,
            ]);
        }else{
            $name = $request->file('foto_product')->store('foto-kategori');
            DB::table('product')->where('id_product', $request->id_product)->update([
                'nama_produk'=>$request->nama_product,
                'berat'=>$request->berat_product,
                'deskripsi'=>$request->deskripsi_product,
                'harga'=>$request->harga_product,
                'foto_product'=>$name,
            ]);
        }
        return redirect('/product-view' .'/' .$request->id);
    }
}
