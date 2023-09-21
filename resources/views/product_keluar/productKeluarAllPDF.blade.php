<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            font-size: 12px;
        }

        #product-masuk {
            font-family: 'Times New Roman', Times, serif;
            border-collapse: collapse;
            width: 100%;
        }

        #product-masuk td, #product-masuk th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #product-masuk tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #product-masuk tr:hover {
            background-color: #ddd;
        }

        #product-masuk th {
            padding-top: 5px;
            padding-bottom: 5px;
            text-align: left;
            background-color: #ffffff;
            color: #000000;
        }

        /* Gaya khusus untuk kolom Nomer SPB */
        #product-masuk td:nth-child(5) {
            font-weight: normal; /* Menghapus teks tebal (bold) */
        }
    </style>
</head>
<body>
<table id="product-masuk" width="100%">
    <thead>
    <tr>
        <td>ID</td>
        <td>Material</td>
        <td>Customer</td>
        <td>Quantity</td>
        <th>Nomer SPB</th>
        <td>Tanggal</td>
        <td>Keterangan</td>
    </tr>
    </thead>
    @foreach($product_keluar as $p)
        <tbody>
        <tr>
            <td>{{ $p->id }}</td>
            <td>{{ $p->product->nama }}</td>
            <td>{{ $p->customer->nama }}</td>
            <td>{{ $p->qty }}</td>
            <td>{{ $p->nomer_spb }}</td>
            <td>{{ $p->tanggal }}</td>
            <td>{{ $p->keterangan }}</td>
            <td></td>
        </tr>
        </tbody>
    @endforeach
</table>
</body>
</html>
