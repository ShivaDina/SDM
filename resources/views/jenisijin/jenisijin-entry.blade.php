@extends('adminlte::page')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','SI SDM | Jenis Ijin')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Jenis Ijin</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="" method="">
            <div class="mb-4">
                <label for="kode_izin" class="form-label">Kode Izin <span>*</span></label>
                <input type="text" class="form-control input" id="kode_izin" placeholder="Kode Izin" disabled>
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