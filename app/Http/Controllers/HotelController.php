<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Hotel::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $hotel = new Hotel();
        $hotel->nama_pengunjung = $request->nama_pengunjung;
        $hotel->alamat = $request->alamat;
        $hotel->jenis_kelamin = $request->jenis_kelamin;
        $hotel->no_tlp = $request->no_tlp;
        $hotel->save();

        return 'Berhasil Di simpan';
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $nama_pengunjung = $request->input('nama_pengunjung');
        $alamat = $request->input('alamat');
        $jenis_kelamin = $request->input('jenis_kelamin');
        $no_tlp = $request->input('no_tlp');


        $data = Hotel::where('id', $id)->first();
        $data->nama_pengunjung = $nama_pengunjung;
        $data->alamat = $alamat;
        $data->jenis_kelamin = $jenis_kelamin;
        $data->no_tlp = $no_tlp;


        if ($data->save()) {
            $res['message'] = "Success!";
            $res['value'] = "$data";
            return response($res);
        } else {
            $res['message'] = "Failed!";
            return response($res);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $hotel = Hotel::findOrFail($id);
        $hotel->delete();

        return 'berhasil di hapus';
    }
}
