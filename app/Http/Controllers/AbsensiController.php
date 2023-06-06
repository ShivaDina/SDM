<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absensi = Absensi::all();
        return view('absensi.index', [
            'absensi' => $absensi
        ]);
    }

    public function create()
    {
        return view('absensi.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'id_absensi' => 'required',
            'tanggal'=>'required|date',
            'shift'=>'required',
            'id_karyawan' => 'required',
            'id_pengajuan'=>'required'
        ]);

        $array = $request->only([
            'id_absensi','tanggal', 'shift', 'id_karyawan'
        ]);
        $absensi = Absensi::create($array);
        return redirect()->route('absensi.index')
            ->with('success_message', 'Berhasil menambah absensi');

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
        $absensi = Absensi::find($id);
        if (!$absensi) return redirect()->route('absensi.index')
            ->with('error_message', 'Absensi dengan id'.$id.' tidak ditemukan');

        return view('absensi.edit', [
            'absensi' => $absensi
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'id_absensi' => 'required',
            'id_karyawan' => 'required'
        ]);

        $absensi = Absensi::find($id);
        $absensi->tanggal = $request->tanggal;
        $absensi->shift = $request->shift;
        $absensi->id_karyawan = $request->id_karyawan;
        $absensi->id_pengajuan = $request->id_pengajuan;
        $absensi->save();

        return redirect()->route('absensi.index')
            ->with('success_message', 'Berhasil mengubah absensi');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $absensi = Absensi::find($id);
        if ($id == $request->user()->id) return redirect()->route('absensi.index')
            ->with('error_message', 'Anda tidak dapat menghapus diri sendiri.');
        if ($absensi) $absensi->delete();
        return redirect()->route('absensi.index')
            ->with('success_message', 'Berhasil menghapus Absensi');
    }
}
