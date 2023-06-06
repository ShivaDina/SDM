@extends('adminlte::page')

@section('css')
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

@section('title','SI SDM | Data Pendidikan')

@section('content')
<div class="content-form">
    <h4 class="fw-semibold mb-4">Form Data Pendidikan</h4>
    {{-- Form --}}
    <div class="form-add p-4 bg-white rounded-4">
        <form action="" method="">
            <div class="mb-4">
                <label for="id_pendidikan" class="form-label">ID Pendidikan<span>*</span></label>
                <input type="text" class="form-control input" id="id_pendidikan" placeholder="ID Pendidikan" disabled>
            </div>
            <div class="mb-4">
                <label for="tingkat_pendidikan" class="form-label">Tingkat Pendidikan</label>
                <input type="text" class="form-control input" id="tingkat_pendidikan" placeholder="Tingkat Pendidikan">
            </div>
            <div class="mb-4">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" class="form-control input" id="jurusan" placeholder="Jurusan">
            </div>
            <div class="mb-4">
                <label for="institusi" class="form-label">Institusi</label>
                <input type="text" class="form-control input" id="institusi" placeholder="Institusi">
            </div>
            <div class="mb-4">
                <label for="keterangan" class="form-label">Keterangan</label>
                <input type="text" class="form-control input" id="keterangan" placeholder="Keterangan">
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