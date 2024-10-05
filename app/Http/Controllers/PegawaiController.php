<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pegawai', ['pegawai' => $pegawai]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addpegawai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'tanggal_masuk' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'no_telp' => 'required',
            'jabatan' => 'required',
            'image_pegawai' => 'required'
        ]);
     // Upload gambar jika ada
     if ($request->hasFile('image')) {
        $image = $request->file('image')->get();
        $validatedData['image'] = $image;
    }
    // Simpan data ke database
    Pegawai::create( [
            'nama' => $request -> input('nama'),
            'tanggal_masuk' =>  $request ->input('tanggal_masuk'),
            'jenis_kelamin' =>  $request ->input('jenis_kelamin'),
            'alamat' =>  $request ->input('alamat'),
            'kota' =>  $request ->input('kota'),
            'no_telp' =>  $request ->input('no_telp'),
            'jabatan' =>  $request ->input('jabatan'),
            'image_pegawai' =>  $request ->input('image_pegawai')
    ]);

    return redirect()->route('pegawai')->with('success', 'Data pegawai berhasil ditambahkan');
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
    public function edit(string $id)
    {
      $pegawai=Pegawai::find(id: $id);
      return view(view : 'editpegawai')->with(key: 'pegawai', value: $pegawai);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,string $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'tanggal_masuk' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required|string',
            'kota' => 'required',
            'no_telp' => 'required',
            'jabatan' => 'required',
            'image_pegawai' => 'required'
        ]);
     // Upload gambar jika ada
     if ($request->hasFile('image')) {
        $image = $request->file('image')->get();
        $validatedData['image'] = $image;
    }
    $Pegawai = Pegawai::findOrFail($id);

        // Update data
        $Pegawai->field1 = $validatedData['field1'];
        $Pegawai->field2 = $validatedData['field2'];
        // tambahkan update field lain sesuai kebutuhan

        // Simpan perubahan ke database
        $Pegawai->save();
    // Simpan data ke database
    Pegawai::update($validatedData);

    return redirect()->route('pegawai')->with('success', 'Data pegawai berhasil ditambahkan');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
