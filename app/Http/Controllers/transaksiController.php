<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use DB;
use App\transaksi;
use App\product;
use App\pelanggan;
use Illuminate\Http\Request;

class transaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $transaksi = transaksi::with('get_product','get_pelanggan')->get();
        
        $product = product::all();
        $pelanggan = pelanggan::all();
        $perPage = 25;
        


        if (!empty($keyword)) {
            $transaksi = Product::where('namabarang','LIKE', "%$keyword%")
               
                ->latest()->paginate($perPage);
        } else {
            $transaksi = transaksi::latest()->paginate($perPage);
        }

        return view('transaksi.index', compact('transaksi'));
    }

    public function getProducts($id){
    	if($id!=0){
    		$products = transaksi::find($id)->products()->select('id', 'namabarang')->get()->toArray();
    	}else{
    		$products = Product::all()->toArray();
    	}
    	return response()->json($products);
    }

    public function getPelanggans($id){
    	if($id!=0){
    		$pelanggans = transaksi::find($id)->pelanggans()->select('id', 'namapelanggan')->get()->toArray();
    	}else{
    		$pelanggans = pelanggan::all()->toArray();
    	}
    	return response()->json($pelanggan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {   $roles = product::all();
        $selectedRole = product::first()->id;
        $products = product::pluck('id','namabarang');
        
        $roles1 = pelanggan::all();
        $selectedRole1 = pelanggan::first()->id;
        $pelanggans = pelanggan::pluck('id','namapelanggan');
         
        return view('transaksi.create',compact('products','roles','roles1','pelanggans','selectedRole','selectedRole1'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        transaksi::create($requestData);
        product::create($requestData);
        pelanggan::create($requestData);

        return redirect('transaksi')->with('flash_message', 'transaksi added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $transaksi = transaksi::findOrFail($id);

        return view('transaksi.show', compact('transaksi'));
    }


    public function show1($id)
    {
        $product = product::findOrFail($id);
    }
    public function show2($id)
    {
        $pelanggan = pelanggan::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $roles = product::all();
        $selectedRole = product::first()->id;
        $products = product::pluck('namabarang','id');
        
        $roles1 = pelanggan::all();
        $selectedRole1 = pelanggan::first()->id;
        $pelanggans = pelanggan::pluck('namapelanggan','id');
        $transaksi = transaksi::findOrFail($id);

        return view('transaksi.edit', compact('transaksi','products','roles','roles1','pelanggans','selectedRole','selectedRole1'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $transaksi = transaksi::findOrFail($id);
        $transaksi->update($requestData);

        return redirect('transaksi')->with('flash_message', 'transaksi updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        transaksi::destroy($id);

        return redirect('transaksi')->with('flash_message', 'transaksi deleted!');
    }
}
