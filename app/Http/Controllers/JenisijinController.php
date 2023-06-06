<?php

namespace App\Http\Controllers;

use App\Models\Jenisijin;
use Illuminate\Http\Request;

class JenisijinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisijin = Jenisijin::all();
        return view('jenisijin.index', [
            'jenisijin' => $jenisijin
        ]);
    }

    public function create()
    {
        return view('jenisijin.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'kode_izin' => 'required',
            'keterangan' => 'required'
        ]);

        $array = $request->only([
            'kode_izin','keterangan'
        ]);
        $jenisijin = Jenisijin::create($array);
        return redirect()->route('jenisijin.index')
            ->with('success_message', 'Berhasil menambah jenis ijin');

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
        $jenisijin = Jenisijin::find($id);
        if (!$jenisijin) return redirect()->route('jenisijin.index')
            ->with('error_message', 'jenisijin dengan id'.$id.' tidak ditemukan');

        return view('jenisijin.edit', [
            'jenisijin' => $jenisijin
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_izin' => 'required',
            'keterangan' => 'required'
        ]);

        $jenisijin = Jenisijin::find($id);
        $jenisijin->kode_izin = $request->kode_izin;
        $jenisijin->keterangan = $request->keterangan;
        $jenisijin->save();

        return redirect()->route('jenisijin.index')
            ->with('success_message', 'Berhasil mengubah jenis ijin');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $jenisijin = Jenisijin::find($id);
        if ($id == $request->user()->id) return redirect()->route('jenisijin.index')
            ->with('error_message', 'Anda tidak dapat menghapus diri sendiri.');
        if ($jenisijin) $jenisijin->delete();
        return redirect()->route('jenisijin.index')
            ->with('success_message', 'Berhasil menghapus Absensi');
    }
}
