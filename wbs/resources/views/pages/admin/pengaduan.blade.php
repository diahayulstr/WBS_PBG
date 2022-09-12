<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WBS | Whistle Blowing System</title>

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
            font-size: 12px;
            margin-left: 5px;
            font-family: 'Roboto Slab', serif;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="title text-center mb-5">
            <img src="img/logopbg.png" alt="" width="20%">
            <h2>Whistle Blowing System</h2>
            <h5>Inspektorat Daerah Kab. Purbalingga</h5>
            <p><a href="https://wbs.purbalinggakab.go.id">https://wbs.purbalinggakab.go.id</a></p>
        </div>

        <hr class="solid">

        <div>
            <h5 class="text-center"><b>Laporan Pengaduan Keseluruhan</b></h5>
        </div>

        <hr class="solid">

        <br>

        <table class="table table-bordered">
            <thead class="thead">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">NIK Pelapor</th>
                    <th scope="col">Nama Pelapor</th>
                    <th scope="col">Nama Pelaku</th>
                    <th scope="col">Jabatan Pelaku</th>
                    <th scope="col">Kronologis</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengaduan as $item)
                    <tr>
                        <td>{{ $item->id }} </td>
                        <td>{{ $item->created_at->format('l, d F Y') }}</td>
                        <td>{{ $item->user_nik }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->nama_pelaku }}</td>
                        <td>{{ $item->jabatan_pelaku }}</td>
                        <td>{{ $item->kronologis }}</td>
                        <td>{{ $item->status }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
