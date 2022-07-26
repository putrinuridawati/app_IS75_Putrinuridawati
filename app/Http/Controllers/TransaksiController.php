<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function index()
    {
        $nomor = 1;
        $transaksi = Transaksi::all();
        return view('transaksi.index' , compact('transaksi','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang = Barang::all();
        return view('transaksi.form',compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaksi = new Transaksi;

        $transaksi->kode_trans = $request->kode_trans;
        $transaksi->tanggal = $request->tanggal;
        $transaksi->kode_pelanggan = $request->kode_pelanggan;
        $transaksi->kode_kasir = $request->kode_kasir;
        $transaksi->barangs_id = $request->kode_barang;
        $transaksi->brutto = $request->brutto;
        $transaksi->tarra = $request->tarra;
        $transaksi->netto = $request->netto;
        $transaksi->harga = $request->harga;
        $transaksi->total = $request->total;
        $transaksi->bayar = $request->bayar;

        $transaksi->save();
        return redirect('/transaksi');
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
    public function edit($id)
    {
        $transaksi =Transaksi::find($id);
        return view('transaksi.edit',compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $transaksi = new Transaksi;

        $transaksi->kode_trans = $request->kode_trans;
        $transaksi->tanggal = $request->tanggal;
        $transaksi->kode_pelanggan = $request->kode_pelanggan;
        $transaksi->kode_kasir = $request->kode_kasir;
        $transaksi->barangs_id = $request->kode_barang;
        $transaksi->brutto = $request->brutto;
        $transaksi->tarra = $request->tarra;
        $transaksi->netto = $request->netto;
        $transaksi->harga = $request->harga;
        $transaksi->total = $request->total;
        $transaksi->bayar = $request->bayar;

        $transaksi->save();
        return redirect('/transaksi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->delete();

        return redirect('/transaksi');
    }
}
