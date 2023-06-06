<!DOCTYPE html>
<html>

<head>
    <title>Laporan Data Pegawai</title>
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
        <h5 class="mb-2">Laporan Data Pegawai</h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    ID Karyawan
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Nama
                </th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Jenis Kelamin
                </th>
                <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Alamat
                </th>
                <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    No Hp
                </th> <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Agama
                </th> <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Status
                </th> <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Email
                </th> <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    No Rekening
                </th> <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Pemilik Rekening
                </th> <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    Jabatan
                </th> <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    ID Pendidikan
                </th> <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    ID Pengembangan
                </th> <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                    ID Tunjangan
                </th>
                
            </tr>
        </thead>
        <tbody>
            <?php $no = 0; ?>
            @foreach ($pegawai as $pgw)
            <?php $no++ ?>
            <tr>
                <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $pgw->id_karyawan}}</p>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $pgw->nama}}</p>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $pgw->jenis_kelamin}}</p>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $pgw->alamat}}</p>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $pgw->no_hp}}</p>
                </td> <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $pgw->agama}}</p>
                </td> <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $pgw->status}}</p>
                </td> <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $pgw->email}}</p>
                </td> <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $pgw->no_rekening}}</p>
                </td> <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $pgw->pemilik_rekening}}</p>
                </td> <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $pgw->jabatan}}</p>
                </td> 
                <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $pgw->id_pendidikan}}</p>
                </td> 
                <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $pgw->id_pengembangan}}</p>
                </td> <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $pgw->id_tunjangan}}</p>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>