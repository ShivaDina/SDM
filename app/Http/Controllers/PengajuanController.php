<?php

namespace App\Http\Controllers;

use App\Models\Jenisijin;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

use PDF;

class PengajuanController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisijin = Jenisijin::all();
        $pengajuan = Pengajuan::all();
        return view('pengajuan.index', [
            'pengajuan' => $pengajuan,
            'jenisijin'=> $jenisijin
        ]);
    }

    public function create()
    {
        $jenisijin = Jenisijin::all();
        return view('pengajuan.create', [
            'jenisijin'=> $jenisijin
        ]);
    }


    public function store(Request $request)
    {

        $request->validate([
            'id_pengajuan'=> 'required',
            'tanggal_izin'=> 'required|date',
            'akhir_izin'=> 'required|date',
            'kode_izin'=> 'required'
        ]);

        $array = $request->only([
            'id_pengajuan','tanggal_izin','akhir_izin','kode_izin'
        ]);
        $pengajuan = Pengajuan::create($array);
        return redirect()->route('pengajuan.index')
            ->with('success_message', 'Berhasil menambah pengajuan');

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
        $pengajuan = Pengajuan::find($id);
        if (!$pengajuan) return redirect()->route('pengajuan.index')
            ->with('error_message', 'Pengajuan dengan id'.$id.' tidak ditemukan');

            $jenisijin = Jenisijin::all();
        return view('pengajuan.edit', [
            'pengajuan' => $pengajuan,
            "jenisijin"=>$jenisijin
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'id_pengajuan'=> 'required',
            'tanggal_izin'=> 'required',
            'akhir_izin'=> 'required',
            'kode_izin'=> 'required'
        ]);

        $pengajuan = Pengajuan::find($id);
        $pengajuan->tanggal_izin = $request->tanggal_izin;
        $pengajuan->akhir_izin = $request->akhir_izin;
        $pengajuan->kode_izin = $request->kode_izin;
        $pengajuan->save();

        return redirect()->route('pengajuan.index')
            ->with('success_message', 'Berhasil mengubah pengajuan');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $pengajuan = Pengajuan::find($id);
        if ($id == $request->user()->id) return redirect()->route('pengajuan.index')
            ->with('error_message', 'Anda tidak dapat menghapus diri sendiri.');
        if ($pengajuan) $pengajuan->delete();
        return redirect()->route('pengajuan.index')
            ->with('success_message', 'Berhasil menghapus Pengajuan');
    }
//     public function cetak_pdf()
// {
// 	$pengajuan = Pengajuan::all();

// 	$pdf = PDF::loadview('pengajuan_pdf',['pengajuan'=>$pengajuan]);
// 	return $pdf->download('laporan-pengajuan-pdf');
// }
    public function cetak()
    {
        $pengajuan = Pengajuan::get();
        $pdf = Pdf::loadview('pengajuan\cetak', ['pengajuan' => $pengajuan])->setPaper('a4', 'landscape');
        return $pdf->download('laporan-pengajuan.pdf');
    }
}
