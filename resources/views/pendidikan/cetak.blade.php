<!DOCTYPE html>
<html>

<head>
    <title>Laporan Data Pendidikan</title>
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
        <h5 class="mb-2">Laporan Data Pendidikan</h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    ID Pendidikan
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Tingkat Pendidikan
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Jurusan
                </th>
                <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Institusi
                </th>
                <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Keterangan
                </th>
                
            </tr>
        </thead>
        <tbody>
            <?php $no = 0; ?>
            @foreach ($pendidikan as $pgw)
            <?php $no++ ?>
            <tr>
                <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $pgw->id_pendidikan}}</p>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $pgw->tingkat_pendidikan }}</p>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $pgw->jurusan}}</p>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $pgw->institusi}}</p>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $pgw->keterangan}}</p>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>