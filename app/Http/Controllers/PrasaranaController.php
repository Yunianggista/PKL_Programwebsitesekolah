<?php

namespace App\Http\Controllers;
use App\Sarana;
use App\Prasarana;
use Illuminate\Http\Request;
use Alert;

class PrasaranaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
       public function index()
    {
        //
        $data= Prasarana::all();
        return view ('prasarana.tampilPrasarana')->with('data',$data);
    }
    public function fasilitas(){
        $data= Sarana::all();
        $data1 = Prasarana::all();
        return view ('fasilitas')->with('sarana',$data)->with('prasarana',$data1);
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('prasarana.tambahPrasarana');
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
        $data = new Prasarana;
        $data->nama= $request->nama;
        $data->panjang = $request->panjang;
        $data->lebar = $request->lebar;
        $data->kepemilikan = $request->kepemilikan;
        $data->status = $request->status;
        $data->presentase = $request->presentase;
        $data->save();

        Alert::success('Prasarana Berhasil Ditambah', 'Sukses');
        return redirect('/tampil_prasarana');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sarana  $sarana
     * @return \Illuminate\Http\Response
     */
    public function show(Sarana $sarana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sarana  $sarana
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = Prasarana::find($id);
        return view ('prasarana.editPrasarana')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sarana  $sarana
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = Prasarana::find($id);
        $data->nama= $request->nama;
        $data->panjang = $request->panjang;
        $data->lebar = $request->lebar;
        $data->kepemilikan = $request->kepemilikan;
        $data->status = $request->status;
        $data->presentase = $request->presentase;
        $data->save();

        Alert::success('Prasarana Berhasil Diubah', 'Sukses');
        return redirect('/tampil_prasarana');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sarana  $sarana
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data = Prasarana::find($id);
        $data->delete();
        Alert::success('Prasarana Berhasil Dihapus', 'Sukses');
        return redirect('/tampil_prasarana');
    }
}
