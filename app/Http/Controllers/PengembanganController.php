<?php

namespace App\Http\Controllers;

use App\Models\Pengembangan;
use Illuminate\Http\Request;

class PengembanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengembangan = Pengembangan::all();
        return view('pengembangan.index', [
            'pengembangan' => $pengembangan
        ]);
    }

    public function create()
    {
        return view('pengembangan.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'id_pengembangan' => 'required',
            'jenis_pelatihan' => 'required',
            'institusi' => 'required',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date',
            'keterangan' => 'required'
        ]);

        $array = $request->only([
            'id_pengembangan','jenis_pelatihan', 'institusi', 'tgl_mulai', 'tgl_selesai','keterangan'
        ]);
        $pengembangan = Pengembangan::create($array);
        return redirect()->route('pengembangan.index')
            ->with('success_message', 'Berhasil menambah pengembangan');

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
        $pengembangan = Pengembangan::find($id);
        if (!$pengembangan) return redirect()->route('pengembangan.index')
            ->with('error_message', 'Pengembangan dengan id'.$id.' tidak ditemukan');

        return view('pengembangan.edit', [
            'pengembangan' => $pengembangan
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pengembangan' => 'required',
            'jenis_pelatihan' => 'required',
            'institusi' => 'required',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date',
            'keterangan' => 'required'
        ]);

        $pengembangan = Pengembangan::find($id);
        $pengembangan->jenis_pelatihan = $request->jenis_pelatihan;
        $pengembangan->institusi = $request->institusi;
        $pengembangan->tgl_mulai = $request->tgl_mulai;
        $pengembangan->tgl_selesai = $request->tgl_selesai;
        $pengembangan->keterangan = $request->keterangan;
        $pengembangan->save();

        return redirect()->route('pengembangan.index')
            ->with('success_message', 'Berhasil mengubah pengembangan');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $pengembangan = Pengembangan::find($id);
        if ($id == $request->user()->id) return redirect()->route('pengembangan.index')
            ->with('error_message', 'Anda tidak dapat menghapus diri sendiri.');
        if ($pengembangan) $pengembangan->delete();
        return redirect()->route('pengembangan.index')
            ->with('success_message', 'Berhasil menghapus Pengembangan');
    }
}
