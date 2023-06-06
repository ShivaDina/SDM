@extends('adminlte::page')

@section('title', 'Edit Data Pendidikan')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Data Pendidikan</h1>
@stop

@section('content')
    <form action="{{route('pendidikan.update', $pendidikan)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_pendidikan">ID Pendidikan</label>
                        <input type="text" class="form-control @error('id_pendidikan') is-invalid @enderror" id="id_pendidikan" placeholder="ID Pendidikan" name="id_pendidikan" value="{{$pendidikan->id_pendidikan ?? old('id_pendidikan')}}">
                        @error('id_pendidikan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="tingkat_pendidikan">Tingkat Pendidikan</label>
                        <input type="text" class="form-control @error('tingkat_pendidikan') is-invalid @enderror" id="tingkat_pendidikan" placeholder="Tingkat Pendidikan" name="tingkat_pendidikan" value="{{$pendidikan->tingkat_pendidikan ?? old('tingkat_pendidikan')}}">
                        @error('tingkat_pendidikan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" placeholder="Jurusan" name="jurusan" value="{{$pendidikan->jurusan ?? old('jurusan')}}">
                        @error('jurusan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="institusi">Institusi</label>
                        <input type="text" class="form-control @error('institusi') is-invalid @enderror" id="institusi" placeholder="Institusi" name="institusi" value="{{$pendidikan->institusi ?? old('institusi')}}">
                        @error('institusi') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" placeholder="Keterangan" name="keterangan" value="{{$pendidikan->keterangan ?? old('keterangan')}}">
                        @error('keterangan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('pendidikan.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop