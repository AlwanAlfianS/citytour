<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = [
        'siswa' => Siswa::all(),
        'i' => 1
      ];

      return view('siswa.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('siswa.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $input = $request->all(); //mengambil semua request dari form

      $status = \App\Siswa::create($input);
      if($status) {
        return redirect('siswa')->with('success', 'Data berhasil ditambahkan');
      } else {
        return redirect('siswa/add')->with('error', 'Data gagal ditambahkan');
      }
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
      $data['edit'] = true;
      $data['result'] = \App\Siswa::where('id_siswa', $id)->first();
      return view('siswa.form')->with($data);
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
      $input = $request->all(); //mengambil semua request dari form

      $status = \App\Siswa::where('id_siswa', $id)->first()->update($input);
      if($status) {
        return redirect('siswa')->with('success', 'Data berhasil diubah');
      } else {
        return redirect('siswa/' . $id . '/edit')->with('error', 'Data gagal diubah');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $kelas = \App\Siswa::find($id);
      $kelas->delete();
      return redirect('siswa')->with('success','Data berhasil dihapus');
    }
}
