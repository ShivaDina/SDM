@extends('adminlte::page')

@section('title', 'SI-SDM PT. GMB')

@section('content_header')
    <h1 class="m-0 text-dark">Pengajuan Ijin</h1>
@stop

@section('content')
<button class="btn-add mb-4 border-5 px-3 py-2 text-black rounded-3 fw-medium d-flex align-items-center gap-2" onclick="location.href='{{ route('pengajuanijin-entry') }}'">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="green" d="M18 12.998h-5v5a1 1 0 0 1-2 0v-5H6a1 1 0 0 1 0-2h5v-5a1 1 0 0 1 2 0v5h5a1 1 0 0 1 0 2z"/></svg>
    Tambah Data
</button>
<table class="table table-bordered">
    <thead class="table-secondary">
        <tr>
            <th>ID Pengajuan</th>
            <th>Tanggal Ijin</th>
            <th>Akhir Ijin</th>
            <th>Kode Ijin</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>PI001</td>
          <td>1/05/2023</td>
          <td>2/05/2023</td>
          <td>A0001</td>
          <td><a href="">Edit</a> | <a href="">Hapus</a></td>
        </tr>
        <tr>
          <td>PI002</td>
          <td>1/05/2023</td>
          <td>5/05/2023</td>
          <td>A0001</td>
          <td><a href="">Edit</a> | <a href="">Hapus</a></td>
        </tr>
        <tr>
          <td>PI003</td>
          <td>1/05/2023</td>
          <td>3/05/2023</td>
          <td>A0003</td>
          <td><a href="">Edit</a> | <a href="">Hapus</a></td>
        </tr>
        </tr>
        <tr>
          <td>PI004</td>
          <td>-</td>
          <td>-</td>
          <td>tidak mengajukan</td>
          <td><a href="">Edit</a> | <a href="">Hapus</a></td>
        </tr>
        </tr>

      </tbody>
</table>
@stop

