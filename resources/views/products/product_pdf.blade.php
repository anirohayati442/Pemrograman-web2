<html>
    <head>
        <title>Laporan Produk Canteek.Style</title>
        <style>
            body{
                font-size: 12px;
                color:#000;
            }
            .header{
                text-align: center;
                margin-bottom: 25px;
                border-bottom: 3px solid #000;
                padding-bottom: 10px;
            }
            .title{
                font-size: 18px;
                font-weight: bold;
            }
            table{
                width: 100%;
                border-collapse: collapse;
            }
            th{
                background-color: #f2f2f2;
                font-weight: bold;
                border: 1px solid #000;
                padding: 8px;
            }
            td{
                border: 1px solid #000;
                padding: 8px;
            }
            .text-center{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <table style="width:100%; border:none;">
                <tr>
                    <td style="width:90px; border:none; text-align:center;">
                        <img src="{{ public_path('images/canteek.jpeg') }}" alt="Logo" width="120">
                    </td>

                    <td style="border:none; text-align:center;">
                        <div class="title">LAPORAN DATA PRODUK CANTEEK.STYLE</div>
                        <p>Jl.K.H Fayumi Thowel No.123, Kab.Serang</p>
                    </td>
                </tr>    
            </table>
        </div>

        <table>
            <thead>
                <tr>
                    <th style="width: 5%">No</th>
                    <th>Nama Produk</th>
                    <th>Bahan</th>
                    <th>Warna</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $key => $p)
                    <tr>
                        <td class="text-center">{{ $key+1 }}</td>
                        <td>{{ $p->nama_barang }}</td>
                        <td>{{ $p->bahan }}</td>
                        <td>{{ $p->warna }}</td>
                        <td>Rp.{{ number_format ($p->harga,0,',','.') }} </td>
                        <td>{{ $p->stok }}</td>
                        <td>{{ $p->deskripsi }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>