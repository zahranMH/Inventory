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
    <h1>Laporan Barang Masuk</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Nama Supplier</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barang_masuks as $barang_masuk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $barang_masuk->barang->nama_barang }}</td>
                    <td>{{ $barang_masuk->supplier->nama_supplier }}</td>
                    <td>{{ $barang_masuk->jumlah }}</td>
                </tr>                                            
            @endforeach
        </tbody>
    </table>
</body>
</html>
