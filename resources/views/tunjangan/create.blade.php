@extends('adminlte::page')

@section('title', 'Tambah Data Tunjangan')

@section('content_header')
    <h1 class="m-0 text-dark">Tambah Data Tunjangan</h1>
@stop

@section('content')
    <form action="{{route('tunjangan.store')}}" method="post">
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_pengembangan">ID Tunjangan</label>
                        <input type="text" class="form-control @error('id_tunjangan') is-invalid @enderror" id="id_tunjangan" placeholder="ID Tunjangan" name="id_tunjangan" value="{{old('id_tunjangan')}}">
                        @error('id_tunjangan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" placeholder="Tanggal" name="tanggal" value="{{old('tanggal')}}">
                        @error('tanggal') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="institusi">BPJS</label>
                        <input type="text" class="form-control @error('bpjs') is-invalid @enderror" id="bpjs" placeholder="BPJS" name="bpjs" value="{{old('bpjs')}}">
                        @error('bpjs') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="thr">THR</label>
                        <input type="text" class="form-control @error('thr') is-invalid @enderror" id="thr" placeholder="THR" name="thr" value="{{old('thr')}}">
                        @error('thr') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="tunjangan_haritua">Tunjangan Hari Tua</label>
                        <input type="text" class="form-control @error('tunjangan_haritua') is-invalid @enderror" id="tunjangan_haritua" placeholder="Tunjangan Hari Tua" name="tunjangan_haritua" value="{{old('tunjangan_haritua')}}">
                        @error('tunjangan_haritua') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" placeholder="Jumlah" name="jumlah" value="{{old('jumlah')}}">
                        @error('jumlah') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('pengembangan.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
