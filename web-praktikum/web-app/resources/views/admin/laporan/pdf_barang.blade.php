<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Barang | M.RAHMAN</title>
</head>
<body>

    <div style="text-align: center; margin: 1rem 0 1rem 0;">
        <h1 style="text-transform: uppercase; font-family: 'Times New Roman'">laporan barang</h1>
        <p>Muhammad Rahman | 2310010325 | TI REG N BJM'23 <br> | Universitas Islam Kalimantan Muhammad Arsyad Al Banjari Banjarmasin</p>
        <hr>
    </div>

    <table width="100%" cellpadding="10" cellspacing="0" border="1">
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama Barang</th>
            <th>Stok</th>
        </tr>

        @foreach ($data as $key => $item)
            <tr>
                <td align="center">{{ $key + 1 }}</td>
                <td align="center">{{ $item->kode }}</td>
                <td align="center">{{ $item->nama }}</td>
                <td align="center">{{ $item->stok }}</td>
            </tr>
        @endforeach
    </table>

    <div style="display: inline-flex; float: right;">
        <p>Banjarmasin, 08 November 2025 <br>Mahasiswa TI REG 5N</p> <br><br>
        <h4 style="text-align: start;"> 
            <span style="text-decoration: underline;">Muhammad Rahman</span> <br>
            2310010325 
        </h4>
    </div>
    <style>
        tr > th {
            background: yellow;
        }
    </style>
</body>
</html>