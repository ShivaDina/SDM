@extends('adminlte::page')

@section('title', 'Edit Absensi')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Absensi</h1>
@stop

@section('content')
    <form action="{{route('absensi.update', $absensi)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_absensi">ID Absensi</label>
                        <input type="text" class="form-control @error('id_absensi') is-invalid @enderror" id="id_absensi" placeholder="ID Absensi" name="id_absensi" value="{{$absensi->id_absensi ?? old('id_absensi')}}">
                        @error('id_absensi') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" placeholder="Tanggal" name="tanggal" value="{{$absensi->tanggal ?? old('tanggal')}}">
                        @error('tanggal') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="shift">Shift</label>
                        <input type="text" class="form-control @error('shift') is-invalid @enderror" id="shift" placeholder="Shift" name="shift" value="{{$absensi->shift ?? old('shift')}}">
                        @error('shift') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="id_karyawan">ID Karyawan</label>
                        <input type="text" class="form-control @error('id_karyawan') is-invalid @enderror" id="id_karyawan" placeholder="ID Karyawan" name="id_karyawan" value="{{$absensi->id_karyawan ?? old('id_karyawan')}}">
                        @error('id_karyawan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="id_pengajuan">ID Pengajuan</label>
                        <input type="text" class="form-control @error('id_pengajuan') is-invalid @enderror" id="id_pengajuan" placeholder="ID Pengajuan" name="id_pengajuan" value="{{$absensi->id_pengajuan ?? old('id_pengajuan')}}">
                        @error('id_pengajuan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('absensi.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
