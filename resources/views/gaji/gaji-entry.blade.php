@extends('adminlte::page')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','SI SDM | Data Gaji')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Gaji</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="" method="">
            <div class="mb-4">
                <label for="id_gaji" class="form-label">ID Gaji<span>*</span></label>
                <input type="text" class="form-control input" id="id_gaji" placeholder="ID Gaji" disabled>
            </div>
            <div class="mb-4">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="text" class="form-control input" id="tanggal" placeholder="Tanggal">
            </div>
            <div class="mb-4">
                <label for="departemen" class="form-label">Departemen</label>
                <input type="text" class="form-control input" id="departemen" placeholder="Departemen">
            </div>
            <div class="mb-4">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="text" class="form-control input" id="jumlah" placeholder="Jumlah">
            </div>
            <div class="mb-4">
                <label for="potongan_gaji" class="form-label">Potongan Gaji</label>
                <input type="text" class="form-control input" id="potongan_gaji" placeholder="Potongan Gaji">
            </div>
            <div class="mb-4">
                <label for="lembur" class="form-label">Lembur</label>
                <input type="text" class="form-control input" id="lembur" placeholder="Lembur">
            </div>
            <!-- <div class="mb-4">
                <label for="id_absensi" class="form-label">ID Absensi</label>
                <input type="text" class="form-control input" id="id_absensi" placeholder="ID Absensi">
            </div> -->
            <div class="item form-group">
               <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">ID Absensi </label>
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