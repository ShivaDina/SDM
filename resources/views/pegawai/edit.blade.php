@extends('adminlte::page')

@section('title', 'Edit Data Karyawan')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Data Karyawan</h1>
@stop

@section('content')
    <form action="{{route('pegawai.update', $pegawai)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_karyawan">ID Karyawan</label>
                        <input type="text" class="form-control @error('id_karyawan') is-invalid @enderror" id="id_karyawan" placeholder="ID Karyawan" name="id_karyawan" value="{{$pegawai->id_karyawan ?? old('id_karyawan')}}">
                        @error('id_karyawan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Nama" name="nama" value="{{$pegawai->nama ?? old('nama')}}">
                        @error('nama') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <input type="text" class="form-control @error('jenis_kelamin') is-invalid @enderror" id="jenis_kelamin" placeholder="Jenis Kelamin" name="jenis_kelamin" value="{{$pegawai->jenis_kelamin ?? old('jenis_kelamin')}}">
                        @error('jenis_kelamin') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" placeholder="Alamat" name="alamat" value="{{$pegawai->alamat ?? old('alamat')}}">
                        @error('alamat') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No HP</label>
                        <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" placeholder="No HP" name="no_hp" value="{{$pegawai->no_hp ?? old('no_hp')}}">
                        @error('no_hp') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <input type="text" class="form-control @error('agama') is-invalid @enderror" id="agama" placeholder="Agama" name="agama" value="{{$pegawai->agama ?? old('agama')}}">
                        @error('agama') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" class="form-control @error('status') is-invalid @enderror" id="status" placeholder="Status" name="status" value="{{$pegawai->status ?? old('status')}}">
                        @error('status') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email" value="{{$pegawai->email ?? old('email')}}">
                        @error('email') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_rekening">No Rekening</label>
                        <input type="text" class="form-control @error('no_rekening') is-invalid @enderror" id="no_rekening" placeholder="No Rekening" name="no_rekening" value="{{$pegawai->no_rekening ?? old('no_rekening')}}">
                        @error('no_rekening') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="pemilik_rekening">Pemilik Rekening</label>
                        <input type="text" class="form-control @error('pemilik_rekening') is-invalid @enderror" id="pemilik_rekening" placeholder="Pemilik Rekening" name="pemilik_rekening" value="{{$pegawai->pemilik_rekening ?? old('pemilik_rekening')}}">
                        @error('pemilik_rekening') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" placeholder="Jabatan" name="jabatan" value="{{$pegawai->jabatan ?? old('jabatan')}}">
                        @error('jabatan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="id_pendidikan">ID Pendidikan</label>
                        <input type="text" class="form-control @error('id_pendidikan') is-invalid @enderror" id="id_pendidikan" placeholder="ID Pendidikan" name="id_pendidikan" value="{{$pegawai->id_pendidikan ?? old('id_pendidikan')}}">
                        @error('id_pendidikan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="id_pengembangan">ID Pengembangan</label>
                        <input type="text" class="form-control @error('id_pengembangan') is-invalid @enderror" id="id_pengembangan" placeholder="ID Pengembangan" name="id_pengembangan" value="{{$pegawai->id_pengembangan ?? old('id_pengembangan')}}">
                        @error('id_pengembangan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="id_tunjangan">ID Tunjangan</label>
                        <input type="text" class="form-control @error('id_tunjangan') is-invalid @enderror" id="id_tunjangan" placeholder="ID Tunjangan" name="id_tunjangan" value="{{$pegawai->id_tunjangan ?? old('id_tunjangan')}}">
                        @error('id_tunjangan') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('pegawai.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop