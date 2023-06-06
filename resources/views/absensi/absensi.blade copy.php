@extends('adminlte::page')

@section('title', 'SI-SDM PT. GMB')

@section('content_header')
    <h1 class="m-0 text-dark">Absensi</h1>
@stop

@section('content')
<button class="btn-add mb-4 border-5 px-3 py-2 text-black rounded-3 fw-medium d-flex align-items-center gap-2" onclick="location.href='{{ route('absensi-entry') }}'">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="green" d="M18 12.998h-5v5a1 1 0 0 1-2 0v-5H6a1 1 0 0 1 0-2h5v-5a1 1 0 0 1 2 0v5h5a1 1 0 0 1 0 2z"/></svg>
    Tambah Data
</button>
<table class="table table-bordered">
    <thead class="table-secondary">

        <tr>
            <th>ID Absensi</th>
            <th>Tanggal</th>
            <th>Shift</th>
            <th>ID Karyawan</th>
            <th>ID Pengajuan</th>
            <th>Action</th>
        </tr>

    </thead>
    <tbody>
        <tr>
        <td>AB001</td>
          <td>1/05/2023</td>
          <td>A2</td>
          <td>2118076</td>
          <td>PI003</td>
          <td><a href="">Edit</a> | <a href="">Hapus</a></td>
        </tr>
        <tr>
          <td>AB002</td>
          <td>1/05/2023</td>
          <td>A2</td>
          <td>2118089</td>
          <td>PI002</td>
          <td><a href="">Edit</a> | <a href="">Hapus</a></td>
        </tr>
        <tr>
          <td>PI003</td>
          <td>1/05/2023</td>
          <td>A2</td>
          <td>2118049</td>
          <td>PI001</td>
          <td><a href="">Edit</a> | <a href="">Hapus</a></td>
        </tr>
        </tr>
      </tbody>
</table>
@stop

