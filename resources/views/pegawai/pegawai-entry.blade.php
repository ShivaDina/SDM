@extends('adminlte::page')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','SI SDM | Data Pegawai')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Pegawai</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="" method="">
            <div class="mb-4">
                <label for="id_karyawan" class="form-label">ID Karyawan <span>*</span></label>
                <input type="text" class="form-control input" id="id_karyawan" placeholder="ID Karyawan" disabled>
            </div>
            <div class="mb-4">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control input" id="nama" placeholder="Nama">
            </div>
            <div class="mb-4">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <input type="text" class="form-control input" id="jenis_kelamin" placeholder="Jenis Kelamin">
            </div>
            <div class="mb-4">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control input" id="alamat" placeholder="Alamat">
            </div>
            <div class="mb-4">
                <label for="no_hp" class="form-label">No HP </label>
                <input type="text" class="form-control input" id="no_hp" placeholder="No HP">
            </div>
            <div class="mb-4">
                <label for="agama" class="form-label">Agama</label>
                <input type="text" class="form-control input" id="agama" placeholder="Agama">
            </div>
            <div class="mb-4">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control input" id="status" placeholder="Status">
            </div>
            <div class="mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control input" id="email" placeholder="Email">
            </div>
            <div class="mb-4">
                <label for="no_rekening" class="form-label">No Rekening</label>
                <input type="text" class="form-control input" id="no_rekening" placeholder="No Rekening">
            </div>
            <div class="mb-4">
                <label for="pemilik_rekening" class="form-label">Pemilik Rekening</label>
                <input type="text" class="form-control input" id="pemilik_rekening" placeholder="Pemilik Rekening">
            </div>
            <div class="mb-4">
                <label for="jabatan" class="form-label">Jabatan</label>
                <input type="text" class="form-control input" id="jabatan" placeholder= "Jabatan">
            </div>
            <!-- <div class="mb-4">
                <label for="id_pendidikan" class="form-label">ID Pendidikan</label>
                <input type="text" class="form-control input" id="id_pendidikan" placeholder="ID Pendidikan">
            </div>
            <div class="mb-4">
                <label for="id_pengembangan" class="form-label">ID Pengembangan</label>
                <input type="text" class="form-control input" id="id_pengembangan" placeholder="ID Pengembangan">
            </div>
            <div class="mb-4">
                <label for="id_gaji" class="form-label">ID Gaji</label>
                <input type="text" class="form-control input" id="id_gaji" placeholder="ID Gaji">
            </div>
            <div class="mb-4">
                <label for="id_tunjangan" class="form-label">ID Tunjangan</label>
                <input type="text" class="form-control input" id="id_tunjangan" placeholder="ID Tunjangan">
            </div>
            <div class="mb-4">
                <label for="id_pengguna" class="form-label">ID Pengguna</label>
                <input type="text" class="form-control input" id="id_pengguna" placeholder="ID Pengguna">
            </div>
            <div class="item form-group">
               <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Kode Izin </label>
                <div class="col-md-6 col-sm-6 ">
                    <select class="form-control" name="kode_izin" id="kode_izin" required>
                            
                    </select>
                </div>
            </div>         -->
            
            <div class="item form-group">
               <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">ID Pendidikan</label>
                <div class="col-md-6 col-sm-6 ">
                    <select class="form-control" name="kode_izin" id="kode_izin" required>
                            
                    </select>
                </div>
            </div>        <div class="item form-group">
               <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">ID Pengembangan </label>
                <div class="col-md-6 col-sm-6 ">
                    <select class="form-control" name="kode_izin" id="kode_izin" required>
                            
                    </select>
                </div>
            </div>        <div class="item form-group">
               <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">ID Gaji </label>
                <div class="col-md-6 col-sm-6 ">
                    <select class="form-control" name="kode_izin" id="kode_izin" required>
                            
                    </select>
                </div>
            </div>        <div class="item form-group">
               <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">ID Tunjangan </label>
                <div class="col-md-6 col-sm-6 ">
                    <select class="form-control" name="kode_izin" id="kode_izin" required>
                            
                    </select>
                </div>
            </div> 
            <div class="item form-group">
               <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">ID Pengguna</label>
                <div class="col-md-6 col-sm-6 ">
                    <select class="form-control" name="kode_izin" id="kode_izin" required>
                            
                    </select>
                </div>
            </div>             
            <button type="submit" class="btn btn-primary py-2 px-5 rounded-3 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection