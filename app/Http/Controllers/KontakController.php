<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use App\Models\Kontak;
use App\Models\Siswa;
use App\Models\Jns_siswa;
class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data1 = Siswa::all('id','nisn', 'nama');
        return view('admin.masterkontak', compact('data1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Jns_siswa::all();
        return view('admin.addKontak', compact('data'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message =[
            'required' => ':atribut harus diisi dulu lur',
            'min' => ':atribut minimal :min karakter cak!',
            'max' => ':atribut maksimal :max karakter gaes',
            'numeric' => ':atribut harus pake nomer bang',
            'mimes' => ':atribut harus bertipe jpg,png,jpeg',
            'size' => 'file yang diupload maksimal :size'
        ];
        $this->validate($request,[
            'desc_kntk' => 'required',
            'id_siswa' => 'required',
            'id_jns' => 'required'
        ],$message);
        // insert db
        Kontak::create([
            'desc_kntk' => $request->desc_kntk,
            'id_siswa' => $request->id_siswa,
            'id_jns' => $request->id_jns
        ]);

        return redirect('/masterkontak');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Siswa::find($id)->kontak()->get();
        return view('admin.showKontak', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Jns_siswa::all();
        $kontak = Kontak::find($id);
        return view('admin.editKontak', compact('data', 'kontak'));
        
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
        // dd($request);
        $message =[
            'required' => ':atribut harus diisi dulu lur',
            'min' => ':atribut minimal :min karakter cak!',
            'max' => ':atribut maksimal :max karakter gaes',
            'numeric' => ':atribut harus pake nomer bang',
            'mimes' => ':atribut harus bertipe jpg,png,jpeg',
            'size' => 'file yang diupload maksimal :size'
        ];
        $this->validate($request,[
            'desc_kntk' => 'required',
            'id_jns' => 'required'
        ],$message);
        // insert db
        Kontak::find($id)->update([
            'desc_kntk' => $request->desc_kntk,
            'id_jns' => $request->id_jns
        ]);

        return redirect('/masterkontak');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Kontak::destroy($id);
        return redirect('/masterkontak');
    }
    
    public function tambah($id)
    {
        // dd($id);
        $data = Jns_siswa::all();
        $siswa = Siswa::find($id);
        return view('admin.addKontak', compact('siswa', 'data'));
    }

    public function hapus($id)
    {
        $data = Kontak::destroy($id);
        return redirect('/masterkontak');
    }
}
