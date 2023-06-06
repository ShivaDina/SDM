@extends('adminlte::page')

@section('title', 'List Data Pegawai')

@section('content_header')
    <h1 class="m-0 text-dark">List Data Pegawai</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <a href="{{route('pegawai.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
                    <a href="{{route('pegawai.cetak')}}" class="btn btn-primary mb-2">
                        Cetak
                    </a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>ID Karyawan</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No.HP</th>
                            <th>Agama</th>
                            <th>Status</th>
                            <th>Email </th>
                            <th>No.Rekening</th>
                            <th>Pemilik Rekening</th>
                            <th>ID Pendidikan</th>
                            <th>ID Pengembangan</th>
                            <th>ID Gaji</th>
                            <th>ID Tunjangan </th>
                            <th>Action</th>
                      </tr>
                        </thead>
                        <tbody>
                        @foreach($pegawai as $key => $abs)
                            <tr>
                                <td>{{$abs->id_karyawan}}</td>
                                <td>{{$abs->nama}}</td>
                                <td>{{$abs->jenis_kelamin}}</td>
                                <td>{{$abs->alamat}}</td>
                                <td>{{$abs->no_hp}}</td>
                                <td>{{$abs->agama}}</td>
                                <td>{{$abs->status}}</td>
                                <td>{{$abs->email}}</td>
                                <td>{{$abs->no_rekening}}</td>
                                <td>{{$abs->pemilik_rekening}}</td>
                                <td>{{$abs->jabatan}}</td>
                                <td>{{$abs->id_pendidikan}}</td>
                                <td>{{$abs->id_pengembangan}}</td>
                                <td>{{$abs->id_tunjangan}}</td>
                                
                                <td>
                                    <a href="{{route('pegawai.edit', $abs)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a href="{{route('pegawai.destroy', $abs)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@stop

@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });

        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }

    </script>
@endpush