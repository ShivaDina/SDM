@extends('adminlte::page')

@section('title', 'SI-SDM PT. GMB')

@section('content_header')
    <h1 class="m-0 text-dark">Data Pengembangan Diri</h1>
@stop

@section('content')
<button class="btn-add mb-4 border-5 px-3 py-2 text-black rounded-3 fw-medium d-flex align-items-center gap-2" onclick="location.href='{{ route('pengembangan-entry') }}'">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="green" d="M18 12.998h-5v5a1 1 0 0 1-2 0v-5H6a1 1 0 0 1 0-2h5v-5a1 1 0 0 1 2 0v5h5a1 1 0 0 1 0 2z"/></svg>
    Tambah Data
</button>
<table class="table table-bordered">
    <thead class="table-secondary">
        <tr>
            <th>ID Pengembangan Diri</th>
            <th>Jenis Pelatihan</th>
            <th>Institusi</th>
            <th>Tanggal Mulai</th>
            <th>Tanggal Selesai</th>
            <th>Keterangan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>PD001</td>
          <td>Olahraga</td>
          <td>ITN</td>
          <td>2/05/2023</td>
          <td>3/05/2023</td>
          <td>Selesai</td>
          <td><a href="">Edit</a> | <a href="">Hapus</a></td>
        </tr>
        <tr>
        <td>PD002</td>
          <td>Ilmu Pengetahuan</td>
          <td>UB</td>
          <td>2/05/2023</td>
          <td>3/05/2023</td>
          <td>Selesai</td>
          <td><a href="">Edit</a> | <a href="">Hapus</a></td>
        </tr>

      </tbody>
</table>
@stop

