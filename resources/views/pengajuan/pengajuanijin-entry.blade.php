@extends('adminlte::page')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','SI SDM | Data Pengajuan Ijin')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Pengajuan Ijin</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="" data-parsley-validate class="form-horizontal form-label-left" method="POST">
            <div class="mb-4">
                <label for="id_pengajuan" class="form-label">ID Pengajuan<span>*</span></label>
                <input type="text" class="form-control input" id="id_pengajuan" placeholder="Pengajuan Ijin" disabled>
            </div>
            <div class="mb-4">
                <label for="tanggal_izin" class="form-label">Tanggal Izin </label>
                <input type="text" class="form-control input" id="tanggal_izin" placeholder="Tanggal Izin">
            </div>
            <div class="mb-4">
                <label for="akhir_izin" class="form-label">Akhir Izin</label>
                <input type="text" class="form-control input" id="akhir_izin" placeholder="Akhir Izin">
            </div>
            <!-- <div class="mb-4">
                <label for="kode_izin" class="form-label">Kode Izin</label>
                <input type="text" class="form-control input" id="kode_izin" placeholder="kode_izin">
            </div> -->
            <div class="item form-group">
               <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Kode Izin </label>
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

