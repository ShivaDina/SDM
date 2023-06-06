@extends('adminlte::page')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','SI SDM | Data Absensi')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Absensi</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="" method="">
            <div class="mb-4">
                <label for="id_absensi" class="form-label">ID Absensi <span>*</span></label>
                <input type="text" class="form-control input" id="id_absensi" placeholder="ID Absensi" disabled>
            </div>
            <div class="mb-4">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="text" class="form-control input" id="tanggal" placeholder="Tanggal">
            </div>
            <div class="mb-4">
                <label for="shift" class="form-label">Shift</label>
                <input type="text" class="form-control input" id="shift" placeholder="Shift">
            </div>
            <div class="mb-4">
                <label for="id_karyawan" class="form-label">ID Karyawan</label>
                <input type="text" class="form-control input" id="id_karyawan" placeholder="ID Karyawan">
            </div>
            <!-- <div class="mb-4">
                <label for="id_pengajuan" class="form-label">ID Pengajuan</label>
                <input type="text" class="form-control input" id="id_pengajuan" placeholder="ID Pengajuan">
            </div> -->
            <div class="item form-group">
               <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">ID Pengajuan </label>
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