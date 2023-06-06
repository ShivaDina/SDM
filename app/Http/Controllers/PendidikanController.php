<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;

use PDF ;

class PendidikanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendidikan = Pendidikan::all();
        return view('pendidikan.index', [
            'pendidikan' => $pendidikan
        ]);
    }

    public function create()
    {
        return view('pendidikan.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'id_pendidikan' => 'required',
            'tingkat_pendidikan' => 'required',
            'jurusan' => 'required',
            'institusi' => 'required',
            'keterangan' => 'required'
        ]);

        $array = $request->only([
            'id_pendidikan','tingkat_pendidikan', 'jurusan', 'institusi','keterangan'
        ]);
        $pendidikan = Pendidikan::create($array);
        return redirect()->route('pendidikan.index')
            ->with('success_message', 'Berhasil menambah data pendidikan');

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
        $pendidikan = Pendidikan::find($id);
        if (!$pendidikan) return redirect()->route('pendidikan.index')
            ->with('error_message', 'Pendidikan dengan id'.$id.' tidak ditemukan');

        return view('pendidikan.edit', [
            'pendidikan' => $pendidikan
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pendidikan' => 'required',
            'tingkat_pendidikan' => 'required',
            'jurusan' => 'required',
            'institusi' => 'required',
            'keterangan' => 'required'
        ]);

        $pendidikan = Pendidikan::find($id);
        $pendidikan->tingkat_pendidikan = $request->tingkat_pendidikan;
        $pendidikan->jurusan = $request->jurusan;
        $pendidikan->institusi = $request->institusi;
        $pendidikan->keterangan = $request->keterangan;
        $pendidikan->save();

        return redirect()->route('pendidikan.index')
            ->with('success_message', 'Berhasil mengubah data pendidikan');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $pendidikan = Pendidikan::find($id);
        if ($id == $request->user()->id) return redirect()->route('pendidikan.index')
            ->with('error_message', 'Anda tidak dapat menghapus diri sendiri.');
        if ($pendidikan) $pendidikan->delete();
        return redirect()->route('pendidikan.index')
            ->with('success_message', 'Berhasil menghapus Absensi');
    }
    public function cetak()
    {
        $pendidikan = Pendidikan::get();
        $pdf = Pdf ::loadview('pendidikan\cetak', ['pendidikan' => $pendidikan])->setPaper('a4', 'landscape');
        return $pdf->download('laporan-pendidikan.pdf');
    }
}
