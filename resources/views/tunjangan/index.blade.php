@extends('adminlte::page')

@section('title', 'List Data Tunjangan')

@section('content_header')
    <h1 class="m-0 text-dark">List Data Tunjangan</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <a href="{{route('tunjangan.create')}}" class="btn btn-primary mb-2">
                        Tambah
                    </a>

                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                          <th>ID Tunjangan</th>
                          <th>Tanggal</th>
                          <th>BPJS</th>
                          <th>THR</th>
                          <th>Tunjangan Hari Tua</th>
                          <th>Jumlah</th>
                          <th>Action</th>
                      </tr>
                        </thead>
                        <tbody>
                        @foreach($tunjangan as $key => $abs)
                            <tr>
                                <td>{{$abs->id_tunjangan}}</td>
                                <td>{{date('d/m/y', strtotime ($abs->tanggal))}}</td>
                                <td>{{$abs->bpjs}}</td>
                                <td>{{$abs->thr}}</td>
                                <td>{{$abs->tunjangan_haritua}}</td>
                                <td>{{$abs->jumlah}}</td>

                                <td>
                                    <a href="{{route('tunjangan.edit', $abs)}}" class="btn btn-primary btn-xs">
                                        Edit
                                    </a>
                                    <a href="{{route('tunjangan.destroy', $abs)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
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
