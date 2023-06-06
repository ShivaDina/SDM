@extends('adminlte::page')

@section('title', 'List Data Pengajuan')

@section('content_header')
    <h1 class="m-0 text-dark">List Data Pengajuan</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <a href="{{route('pengajuan.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>
                    <a href="{{route('pengajuan.cetak')}}" class="btn btn-primary mb-2">
                        Cetak
                    </a>

                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                          <th>ID Pengajuan</th>
                          <th>Tanggal Ijin</th>
                          <th>Akhir Ijin</th>
                          <th>Kode Izin</th>
                          <th>Action</th>
                      </tr>
                        </thead>
                        <tbody>
                        @foreach($pengajuan as $key => $abs)
                            <tr>
                                <td>{{$abs->id_pengajuan}}</td>
                                <td>{{date('d/m/y', strtotime ($abs->tanggal_izin))}}</td>
                                <td>{{date('d/m/y', strtotime ($abs->akhir_izin))}}</td>
                                <td>{{$abs->kode_izin}}</td>
                                <td>
                                    <a href="{{route('pengajuan.edit', $abs)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a href="{{route('pengajuan.destroy', $abs)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
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
