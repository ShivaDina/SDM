@extends('adminlte::page')

@section('title', 'SI-SDM PT. GMB')

@section('content_header')
    <h1 class="m-0 text-dark">Data Pegawai</h1>
@stop

@section('content')
<button class="btn-add mb-4 border-5 px-3 py-2 text-black rounded-3 fw-medium d-flex align-items-center gap-2" onclick="location.href='{{ route('pegawai-entry') }}'">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="green" d="M18 12.998h-5v5a1 1 0 0 1-2 0v-5H6a1 1 0 0 1 0-2h5v-5a1 1 0 0 1 2 0v5h5a1 1 0 0 1 0 2z"/></svg>
    Tambah Data
</button>
<table class="table table-bordered">
    <thead class="table-secondary">
        <tr>
            <th>ID Karyawan</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No.HP</th>
            <th>Agama</th>
            <th>Status</th>
            <th>Email </th>
            <th>No.Rekening</th>
            <th>Pemilik Rekening</th>
            <th>ID Pendidikan</th>
            <th>ID Pengembangan</th>
            <th>ID Gaji</th>
            <th>ID Tunjangan </th>
            <th>ID Pengguna</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
          <td>2118076</td>
          <td>Nabila Paramita</td>
          <td>Perempuan</td>
          <td>Malang</td>
          <td>085785565334</td>
          <td>Islam</td>
          <td>Belum Menikah</td>
          <td>nabilapara72@gmail.com</td>
          <td>1111</td>
          <td>Nabila Paramita</td>
          <td>PE001</td>
          <td>PD002</td>
          <td>GJ001</td>
          <td>TU001</td>
          <td>2118076</td>
          <td><a href="">Edit</a> | <a href="">Hapus</a></td>
        </tr>
      </tbody>
</table>
@stop

