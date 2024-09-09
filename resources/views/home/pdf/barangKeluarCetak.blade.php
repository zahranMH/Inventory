<!DOCTYPE html>
<html>
<head>
    <title>PDF Tabel</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body onload="window.print()">
    <h1>Laporan Barang Keluar</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Nama Customer</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barang_keluars as $barang_keluar)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $barang_keluar->barang->nama_barang }}</td>
                    <td>{{ $barang_keluar->nama_customer }}</td>
                    <td>{{ $barang_keluar->jumlah }}</td>
                </tr>                                            
            @endforeach
        </tbody>
    </table>
</body>
</html>
