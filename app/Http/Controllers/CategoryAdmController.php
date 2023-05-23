<?php

namespace App\Http\Controllers;
use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryAdmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = DB::table('categories')->where('status', 1)->get();
        return view('admin.categoryadm', compact('categories'));
    }

    public function viewcreate()
    {
        return view('admin.createcategory');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $name = $request->file('foto_kategori')->store('foto-kategori');
        DB::table('categories')->insert([
            'nama_kategori'=>$request->nama_kategori,
            'foto_kategori'=>$name,
            'status'=> 1
        ]);
        // $categories = DB::table('categories')->get();
        return redirect('/categoryadm');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $data = DB::table('categories')->where('id_category', $request->id)->get();
        // dd($data);
        return view('admin.updateCategory', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->hasFile('foto_kategori'));
        if ($request->hasFile('foto_kategori') == false) {
            DB::table('categories')->where('id_category', $request->id)->update([
                'nama_kategori'=>$request->nama_kategori,
                'foto_kategori'=>$request->foto_kategori
            ]);
        }else{
            $name = $request->file('foto_kategori')->store('foto-kategori');
            // dd($name);
            DB::table('categories')->where('id_category', $request->id)->update([
                'nama_kategori'=>$request->nama_kategori,
                'foto_kategori'=>$name
            ]);
        }
        // dd($request->all());
        return redirect('/categoryadm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        // dd($request->all());
        $data = DB::table('categories')->where('id_category', $request->id_category)->update([
            'status'=>0
        ]);
        // dd($data);
        return redirect('/categoryadm');
    }
}
