<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
    <style>
        body {
            font-family: 'Roboto Slab', serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Roboto Slab', serif;
        }

        p {
            font-family: 'Roboto Slab', serif;
        }
        hr.solid {
            border-top: 1.5px solid #000;
        }

        table {
           font-family: 'Roboto Slab', serif;
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="title text-center mb-5">
            <img src="img/logopbg.png" alt="" width="20%">
            <h2>Whistle Blowing System</h2>
            <h5>Inspektorat Daerah Kab. Purbalingga</h5>
            <p><a href="https://wbs.purbalinggakab.go.id">https://wbs.purbalinggakab.go.id</a></p>
        </div>
        <hr class="solid">

        <div>
            <h5 class="text-center"><b>Laporan Pengaduan</b></h5>
        </div>

        <hr class="solid">
        <div class="mt-3 mb-3">
            <h6>{{ $pengaduan->created_at->format('l, d F Y') }}</h6>
            <br>
            <h6>IDENTITAS PELAPOR</h6>
            <p>Nama : {{ $pengaduan->name }}</p>
            <p>NIK : {{ $pengaduan->user_nik }}</p>
            <p>Alamat : {{ $pengaduan->alamat_pelapor }}</p>
            <p>Email : {{ $pengaduan->email }}</p>
            <p>No. Telepon : {{ $pengaduan->user->phone }}</p>
            <p>OPD/Alamat Tempat Tugas : {{ $pengaduan->opd }}</p>
            <p>Jabatan : {{ $pengaduan->jabatan_pelapor }}</p>
            <br>
            <h6>DATA TERLAPOR</h6>
            <p>Nama Pelaku : {{ $pengaduan->nama_pelaku }}</p>
            <p>Jabatan Pelaku : {{ $pengaduan->jabatan_pelaku }}</p>
        </div>

        <table class="table table-bordered">
            <thead class="thead">
                <tr>
                    <th scope="col">Laporan Pengaduan</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <td>{{ $pengaduan->kronologis }}</td>
                <td>{{ $pengaduan->status }}</td>
            </tbody>
        </table>
    </div>
</body>

</html>
