<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Barang Keluar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            width: 80mm; /* Ukuran struk standar */
        }
        .container {
            padding: 10px;
            border: 1px solid #000;
        }
        .header {
            text-align: center;
            font-size: 1.2em;
            margin-bottom: 10px;
        }
        .item {
            display: flex;
            justify-content: space-between;
            padding: 2px 0;
            border-bottom: 1px dashed #000;
        }
        .item-left {
            flex: 3;
        }
        .item-right {
            flex: 1;
            text-align: right;
        }
        .total {
            text-align: right;
            font-weight: bold;
            margin-top: 10px;
        }
        .footer {
            text-align: center;
            margin-top: 10px;
            font-size: 0.8em;
        }
    </style>
</head>
<body onload="window.print()">
    <div class="container">
        <div class="header">
            <h3>Inventory</h3>
        </div>
        
        <div class="item">
            <div class="item-left">
                <span>{{ $barang_keluar->barang->nama_barang }} - {{ $barang_keluar->jumlah }}</span>
            </div>
            <div class="item-right">
                <span>{{ $barang_keluar->barang->harga_jual }}</span>
            </div>
        </div>
        
        <div class="total">
            <p>Total: {{ $total }}</p>
        </div>
        
        <div class="footer">
            <p>Terima Kasih telah berkunjung!</p>
            <p>Harap simpan struk ini sebagai bukti pembayaran.</p>
        </div>
    </div>
</body>
</html>
