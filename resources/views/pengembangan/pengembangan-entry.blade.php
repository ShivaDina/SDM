@extends('adminlte::page')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','SI SDM | Data Pengembangan Diri')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Pengembangan Diri</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="" data-parsley-validate class="form-horizontal form-label-left" method="POST">
            <div class="mb-4">
                <label for="id_pengembangan" class="form-label">ID Pengembangan Diri<span>*</span></label>
                <input type="text" class="form-control input" id="id_pengembangan" placeholder="ID Pengembangan" disabled>
            </div>
            <div class="mb-4">
                <label for="jenis_pelatihan" class="form-label">Jenis Pelatihan</label>
                <input type="text" class="form-control input" id="jenis_pelatihan" placeholder="Jenis Pelatihan">
            </div>
            <div class="mb-4">
                <label for="institusi" class="form-label">Institusi</label>
                <input type="text" class="form-control input" id="institusi" placeholder="Institusi">
            </div>
            <div class="mb-4">
                <label for="tgl_mulai" class="form-label">Tanggal Mulai</label>
                <input type="text" class="form-control input" id="tgl_selesai" placeholder="Tanggal Mulai">
            </div>
            <div class="mb-4">
                <label for="tgl_selesai" class="form-label">Tanggal Selesai</label>
                <input type="text" class="form-control input" id="tgl_selesai" placeholder="Tanggal Selesai">
            </div>
            <div class="mb-4">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" class="form-control input" id="keterangan" placeholder="Keterangan">
            </div>
             
            <button type="submit" class="btn btn-primary py-2 px-5 rounded-3 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection

