@extends('adminlte::page')

@section('title', 'Tambah Jenis Ijin')

@section('content_header')
    <h1 class="m-0 text-dark">Tambah Jenis Ijin</h1>
@stop

@section('content')
    <form action="{{route('jenisijin.store')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="kode_izin">Kode Izin</label>
                        <input type="text" class="form-control @error('kode_izin') is-invalid @enderror" id="kode_izin" placeholder="Kode Izin" name="kode_izin" value="{{old('kode_izin')}}">
                        @error('kode_izin') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" placeholder="Keterangan" name="keterangan" value="{{old('keterangan')}}">
                        @error('keterangan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('jenisijin.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop