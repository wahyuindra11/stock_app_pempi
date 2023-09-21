<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>A simple, clean, and responsive HTML invoice template</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .invoice-box {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #eee;
        }

        .table-data {
            width: 100%;
            border-collapse: collapse;
        }

        .table-data td, .table-data th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        .table-data th {
            background-color: #f2f2f2;
        }

        .signature {
            text-align: right;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="invoice-box">
    <table cellpadding="0" cellspacing="0" border="0">
        <tr class="top">
            <td colspan="2">
                <table>
                    <tr>
                        <td class="title">
                            <img src="pemapi.png" style="width:100%; max-width:300px;" alt="Company Logo">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table class="table-data">
        <tr>
            <th width="20%">Invoice ID</th>
            <td>: {{ $product_masuk->id }}</td>
            <th width="50%">Created</th>
            <td>: {{ $product_masuk->tanggal }}</td>
        </tr>

        <tr>
            <th>Telepon</th>
            <td>: {{ $product_masuk->supplier->telepon }}</td>
            <th>Alamat</th>
            <td>: {{ $product_masuk->supplier->alamat }}</td>
        </tr>

        <tr>
            <th>Nama</th>
            <td>: {{ $product_masuk->supplier->nama }}</td>
            {{-- <th>Email</th>
            <td>: {{ $product_masuk->supplier->email }}</td> --}}
        </tr>

        <tr>
            <th>Product</th>
            <td>: {{ $product_masuk->product->nama }}</td>
            <th>Quantity</th>
            <td>: {{ $product_masuk->qty }}</td>
            <th>harga beli</th>
            <td>: {{ $product_masuk->harga_beli }}</td>
        </tr>
    </table>

    <div class="signature">
        <img src="https://upload.wikimedia.org/wikipedia/en/f/f4/Timothy_Spall_Signature.png" width="100px" height="100px" alt="Signature">
        <p>Sheptian Bagja Utama</p>
    </div>
</div>
</body>
</html>
