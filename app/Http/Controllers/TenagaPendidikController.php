<?php

namespace App\Http\Controllers;

use App\TenagaPendidik;
use Illuminate\Http\Request;
use Alert;

class TenagaPendidikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data= TenagaPendidik::all();
        return view ('tenaga.tampilTenaga')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('tenaga.tambahTenaga');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = new TenagaPendidik;
        $data->nama = $request->name;
        $data->NUPTK = $request->NUPTK;
        $data->jk = $request->jk;
        $data->tempat = $request->tempat;
        $data->tanggal = $request->tanggal;
        $data->NIP = $request->NIP;
        $data->status = $request->status;
        $data->save();

        Alert::success('Tenaga Pendidik Berhasil Ditambah', 'Sukses');
        return redirect('/tampil_tenaga');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TenagaPendidik  $tenagaPendidik
     * @return \Illuminate\Http\Response
     */
    public function show(TenagaPendidik $tenagaPendidik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TenagaPendidik  $tenagaPendidik
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = TenagaPendidik::find($id);
        return view ('tenaga.editTenaga')->with('data',$data);
    }

    public function tampilStruktur(){
        $data = TenagaPendidik::all();
        return view('struktur')->with('data',$data);       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TenagaPendidik  $tenagaPendidik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = TenagaPendidik::find($id);
        $data->nama = $request->name;
        $data->NUPTK = $request->NUPTK;
        $data->jk = $request->jk;
        $data->tempat = $request->tempat;
        $data->tanggal = $request->tanggal;
        $data->NIP = $request->NIP;
        $data->status = $request->status;
        $data->save();

        Alert::success('Tenaga Pendidik Berhasil Diubah', 'Sukses');
        return redirect('/tampil_tenaga');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TenagaPendidik  $tenagaPendidik
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = TenagaPendidik::find($id);
        $data->delete();

        Alert::success('Tenaga Pendidik Berhasil Dihapus', 'Sukses');
        return redirect('/tampil_tenaga');
    }
}
