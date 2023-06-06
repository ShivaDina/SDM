@extends('adminlte::page')

@section('title', 'Edit Data Pengembangan')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Data Pengembangan</h1>
@stop

@section('content')
    <form action="{{route('pengembangan.update', $pengembangan)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_pengembangan">ID Pengembangan</label>
                        <input type="text" class="form-control @error('id_pengembangan') is-invalid @enderror" id="id_pengembangan" placeholder="ID Pengembangan" name="id_pengembangan" value="{{$pengembangan->id_pengembangan ?? old('id_pengembangan')}}">
                        @error('id_pengembangan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis_pelatihan">Jenis Pelatihan</label>
                        <input type="text" class="form-control @error('jenis_pelatihan') is-invalid @enderror" id="jenis_pelatihan" placeholder="Jenis Pelatihan" name="jenis_pelatihan" value="{{$pengembangan->jenis_pelatihan ?? old('jenis_pelatihan')}}">
                        @error('jenis_pelatihan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="institusi">Institusi</label>
                        <input type="text" class="form-control @error('institusi') is-invalid @enderror" id="institusi" placeholder="Institusi" name="institusi" value="{{$pengembangan->institusi ?? old('institusi')}}">
                        @error('institusi') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="tgl_mulai">Tanggal Mulai</label>
                        <input type="text" class="form-control @error('tgl_mulai') is-invalid @enderror" id="tgl_mulai" placeholder="Tanggal Mulai" name="tgl_mulai" value="{{$pengembangan->tgl_mulai ?? old('tgl_mulai')}}">
                        @error('tgl_mulai') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="tgl_selesai">Tanggal Selesai</label>
                        <input type="text" class="form-control @error('tgl_selesai') is-invalid @enderror" id="tgl_selesai" placeholder="Tanggal Selesai" name="tgl_selesai" value="{{$pengembangan->tgl_selesai ?? old('tgl_selesai')}}">
                        @error('tgl_selesai') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" placeholder="Keterangan" name="keterangan" value="{{$pengembangan->keterangan ?? old('keterangan')}}">
                        @error('keterangan') <span class="text-danger">{{$message}}</span> @enderror
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