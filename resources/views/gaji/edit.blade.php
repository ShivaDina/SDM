@extends('adminlte::page')

@section('title', 'Edit Absensi')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Absensi</h1>
@stop

@section('content')
    <form action="{{route('gaji.update', $gaji)}}" method="post">
        @method('PUT')
        @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="form-group">
                        <label for="id_gaji">ID Gaji</label>
                        <input type="text" class="form-control @error('id_gaji') is-invalid @enderror" id="id_gaji" placeholder="ID Gaji" name="id_gaji" value="{{$gaji->id_gaji ?? old('id_gaji')}}">
                        @error('id_gaji') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" placeholder="Tanggal" name="tanggal" value="{{$gaji->tanggal ?? old('tanggal')}}">
                        @error('tanggal') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="departemen">Departemen</label>
                        <input type="text" class="form-control @error('departemen') is-invalid @enderror" id="departemen" placeholder="Departemen" name="departemen" value="{{$gaji->departemen ?? old('departemen')}}">
                        @error('departemen') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" placeholder="Jumlah" name="jumlah" value="{{$gaji->jumlah ?? old('jumlah')}}">
                        @error('jumlah') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="potongan_gaji">Potongan Gaji</label>
                        <input type="text" class="form-control @error('potongan_gaji') is-invalid @enderror" id="potongan_gaji" placeholder="Potongan Gaji" name="potongan_gaji" value="{{$gaji->potongan_gaji ?? old('potongan_gaji')}}">
                        @error('potongan_gaji') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="lembur">Lembur</label>
                        <input type="text" class="form-control @error('lembur') is-invalid @enderror" id="lembur" placeholder="Lembur" name="lembur" value="{{$gaji->lembur ?? old('lembur')}}">
                        @error('lembur') <span class="text-danger">{{$message}}</span> @enderror
                    </div>
                    <!-- <div class="form-group">
                        <label for="id_karyawan">ID Karyawan</label>
                        <input type="text" class="form-control @error('id_karyawan') is-invalid @enderror" id="id_karyawan" placeholder="ID Karyawan" name="id_karyawan" value="{{$gaji->id_karyawan ?? old('id_karyawan')}}">
                        @error('id_karyawan') <span class="text-danger">{{$message}}</span> @enderror
                    </div> -->
                    <div class="item form-group">
                        <label for="id_karyawan">ID Karyawan</label>
                            <select name="id_karyawan" id="id_karyawan" required class="form-control">
                                @foreach ($pegawai as $pg)
                                    <option value="{{$pg->id_karyawan}}"
                                    @if ($pg->id_karyawan == old('id_karyawan', $gaji->id_karyawan))
                                        selected="selected"
                                    @endif
                                    >{{$pg->id_karyawan}}</option>
                                @endforeach
                           </select>
                        </div>
                    </div>

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{route('gaji.index')}}" class="btn btn-default">
                        Batal
                    </a>
                </div>
            </div>
        </div>
    </div>
@stop
