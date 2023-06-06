<!DOCTYPE html>
<html>

<head>
    <title>Laporan Data Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5 class="mb-2">Laporan Data Pengajuan Ijin</h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    ID Pengajuan
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Tanggal Izin
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Akhir Izin
                </th>
                <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Kode Izin
                </th>
                
            </tr>
        </thead>
        <tbody>
            <?php $no = 0; ?>
            @foreach ($pengajuan as $pgw)
            <?php $no++ ?>
            <tr>
                <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $pgw->id_pengajuan}}</p>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $pgw->tanggal_izin }}</p>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $pgw->akhir_izin }}</p>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $pgw->kode_izin }}</p>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>