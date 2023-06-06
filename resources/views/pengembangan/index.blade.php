@extends('adminlte::page')

@section('title', 'List Data Pengembangan')

@section('content_header')
    <h1 class="m-0 text-dark">List Data Pengembangan</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <a href="{{route('pengembangan.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>

                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                          <th>ID Pengembangan</th>
                          <th>Jenis Pelatihan</th>
                          <th>Institusi</th>
                          <th>Tanggal Mulai </th>
                          <th>Tanggal Selesai </th>
                          <th>Keterangan</th>
                          <th>Action</th>
                      </tr>
                        </thead>
                        <tbody>
                        @foreach($pengembangan as $key => $abs)
                            <tr>
                                <td>{{$abs->id_pengembangan}}</td>
                                <td>{{$abs->jenis_pelatihan}}</td>
                                <td>{{$abs->institusi}}</td>
                                <td>{{date('d/m/y', strtotime ($abs->tgl_mulai))}}</td>
                                <td>{{date('d/m/y', strtotime ($abs->tgl_selesai))}}</td>
                                <td>{{$abs->keterangan}}</td>

                                <td>
                                    <a href="{{route('pengembangan.edit', $abs)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a href="{{route('pengembangan.destroy', $abs)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
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
