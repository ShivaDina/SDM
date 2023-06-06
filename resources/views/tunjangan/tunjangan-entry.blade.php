@extends('adminlte::page')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','SI SDM | Data Tunjangan')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Tunjangan</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="" method="">
            <div class="mb-4">
                <label for="id_tunjangan" class="form-label">ID Tunjangan<span>*</span></label>
                <input type="text" class="form-control input" id="id_tunjangan" placeholder="ID Tunjangan" disabled>
            </div>
            <div class="mb-4">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="text" class="form-control input" id="tanggal" placeholder="Tanggal">
            </div>
            <div class="mb-4">
                <label for="bpjs" class="form-label">BPJS</label>
                <input type="text" class="form-control input" id="bpjs" placeholder="BPJS">
            </div>
            <div class="mb-4">
                <label for="thr" class="form-label">THR</label>
                <input type="text" class="form-control input" id="thr" placeholder="THR">
            </div>
            <div class="mb-4">
                <label for="tunjangan_haritua" class="form-label">Tunjangan Hari Tua</label>
                <input type="text" class="form-control input" id="tunjangan_haritua" placeholder="Tunjangan Hari Tua">
            </div>
            <div class="mb-4">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="text" class="form-control input" id="jumlah" placeholder="Jumlah">
            </div>
            <!-- <div class="mb-4">
                <label for="no" class="form-label">No. Hp Ortu </label>
                <input type="text" class="form-control input" id="no" placeholder="Masukkan Nomor HP Ortu">
            </div>
            <div class="mb-4">
                <label for="pendidikan-ayah" class="form-label">Pendidikan Ayah</label>
                <select class="form-control input" id="pendidikan-ayah" name="pendidikan-ayah">
                    <option value="" disabled selected id="defautlSelect">Pilih Pendidikan</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="Dimploma III">Diploma III</option>
                    <option value="D4/Strata I">D4/Strata I</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="pendidikan-ibu" class="form-label">Pendidikan Ibu</label>
                <select class="form-control input" id="pendidikan-ibu" name="pendidikan-ibu">
                    <option value="" disabled selected id="defautlSelect">Pilih Pendidikan</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="Dimploma III">Diploma III</option>
                    <option value="D4/Strata I">D4/Strata I</option>
                </select>
            </div> -->
            <button type="submit" class="btn btn-primary py-2 px-5 rounded-3 w-100">Submit</button>
        </form>
    </div>
</div>
@endsection