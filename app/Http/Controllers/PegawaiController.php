<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

use PDF;

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
        return view('pegawai.index', [
            'pegawai' => $pegawai
        ]);
    }

    public function create()
    {
        return view('pegawai.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'id_karyawan' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'email' => 'required',
            'no_rekening' => 'required',
            'pemilik_rekening' => 'required',
            'jabatan' => 'required',
            'id_pendidikan' => 'required',
            'id_pengembangan' => 'required',
            'id_tunjangan' => 'required'
        ]);

        $array = $request->only([
            'id_karyawan','nama', 'jenis_kelamin', 'alamat','no_hp','agama','status','email','no_rekening','pemilik_rekening','jabatan','id_pendidikan','id_pengembangan','id_tunjangan'
        ]);
        $pegawai = Pegawai::create($array);
        return redirect()->route('pegawai.index')
            ->with('success_message', 'Berhasil menambah data pegawai');

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

    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        if (!$pegawai) return redirect()->route('pegawai.index')
            ->with('error_message', 'Pegawai dengan id'.$id.' tidak ditemukan');

        return view('pegawai.edit', [
            'pegawai' => $pegawai
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'id_karyawan' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'email' => 'required',
            'no_rekening' => 'required',
            'pemilik_rekening' => 'required',
            'jabatan' => 'required',
            'id_pendidikan' => 'required',
            'id_pengembangan' => 'required',
            'id_tunjangan' => 'required'
        ]);

        $pegawai = Pegawai::find($id);
        $pegawai->id_karyawan = $request->id_karyawan;
        $pegawai->nama = $request->nama;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->alamat = $request->alamat;
        $pegawai->no_hp = $request->no_hp;
        $pegawai->agama = $request->agama;
        $pegawai->status = $request->status;
        $pegawai->email = $request->email;
        $pegawai->no_rekening = $request->no_rekening;
        $pegawai->pemilik_rekening = $request->pemilik_rekening;
        $pegawai->jabatan = $request->jabatan;
        $pegawai->id_pendidikan = $request->id_pendidikan;
        $pegawai->id_pengembangan = $request->id_pengembangan;
        $pegawai->id_tunjangan = $request->id_tunjangan;
        $pegawai->save();

        return redirect()->route('pegawai.index')
            ->with('success_message', 'Berhasil mengubah data pegawai');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $pegawai = Pegawai::find($id);
        // if ($pegawai == $request->user()->id) return redirect()->route('pegawai.index')
            // ->with('error_message', 'Anda tidak dapat menghapus diri sendiri.');
        if ($pegawai) $pegawai->delete();
        return redirect()->route('pegawai.index')
            ->with('success_message', 'Berhasil menghapus data pegawai');
    }
    public function cetak()
    {
        $pegawai = Pegawai::get();
        $pdf = Pdf::loadview('pegawai\cetak', ['pegawai' => $pegawai])->setPaper('a4', 'landscape');
        return $pdf->download('laporan-pegawai.pdf');
    }
}
