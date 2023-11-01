@extends('layouts.master')

@section('top')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
    <div class="box" id="box">
        <div class="box-header">
            <h3 class="box-title">Create Finish Good</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form id="form-item" action="/FinishGood" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('POST') }}

                <div class="modal-body">
                    <div class="box-body">
                        <div class="modal-body" style="margin-bottom: 60px">
                            <div class="box-header">
                                <h3 class="box-title" style="font-weight:600">Produk yang akan dibuat</h3>
                            </div>
                            <hr>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Quantity</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="col-auto">
                                            <select name="nama" class="form-control" required>
                                                @foreach ($products as $product)
                                                    @if ($product->category_id == 3)
                                                        <option value="{{ $product->nama }}">{{ $product->nama }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </th>
                                    <td>
                                        <div class="col-auto">
                                            <input name="qty[]" type="text" class="form-control"  required>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-body">
                            <div class="box-header">
                                <h3 class="box-title" style="font-weight:600">Material yang digunakan</h3>
                            </div>
                            <hr>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Category</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Material Usage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">
                                            <div class="col-auto">
                                                <h5 style="font-weight: bold">Accessories</h5>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="col-auto">
                                                <select name="accessories_nama" id="accessories_nama" class="form-control" required>
                                                    @foreach ($products as $product)
                                                        @if ($product->category_id == 1)
                                                            <option value="{{ $product->nama }}" data-qty="{{ $product->qty }}">{{ $product->nama }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-auto">
                                                <input type="text" class="form-control" id="accessories_stock" disabled>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-auto">
                                                <input name="qty[]" type="text" class="form-control" required>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <div class="col-auto">
                                                <h5 style="font-weight: bold">Material</h5>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="col-auto">
                                                <select name="material_nama" id="material_nama" class="form-control" required>
                                                    @foreach ($products as $product)
                                                        @if ($product->category_id == 2)
                                                            <option value="{{ $product->nama }}" data-qty="{{ $product->qty }}">{{ $product->nama }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-auto">
                                                <input type="text" class="form-control" id="material_stock" disabled>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-auto">
                                                <input name="qty[]" type="text" class="form-control" required>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <div class="modal-footer">
                    <button type="button" id="submit-button" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>
@endsection

@section('bot')
<script>
     // Menambahkan event listener untuk setiap elemen select
        const accessoriesSelect = document.getElementById("accessories_nama");
        const materialSelect = document.getElementById("material_nama");
        const accessoriesStockInput = document.getElementById("accessories_stock");
        const materialStockInput = document.getElementById("material_stock");

        accessoriesSelect.addEventListener("change", function () {
            const selectedOption = accessoriesSelect.options[accessoriesSelect.selectedIndex];
            const qty = selectedOption.getAttribute("data-qty");
            accessoriesStockInput.value = qty;
        });

        materialSelect.addEventListener("change", function () {
            const selectedOption = materialSelect.options[materialSelect.selectedIndex];
            const qty = selectedOption.getAttribute("data-qty");
            materialStockInput.value = qty;
        });


    // Menambahkan event listener untuk tombol Submit
    const submitButton = document.getElementById("submit-button");
    submitButton.addEventListener("click", function () {
        // Cek apakah semua elemen input telah diisi
        const namaInput = document.querySelector('select[name="nama"]');
        const accessoriesNamaInput = document.querySelector('select[name="accessories_nama"]');
        const materialNamaInput = document.querySelector('select[name="material_nama"]');
        const qtyInputs = document.querySelectorAll('input[name="qty[]"]');

        let isValid = true;

        if (!namaInput.value) {
            isValid = false;
            swal('Gagal!', 'Nama produk harus diisi.', 'error');
        }
        if (!accessoriesNamaInput.value) {
            isValid = false;
            swal('Gagal!', 'Nama aksesoris harus diisi.', 'error');
        }
        if (!materialNamaInput.value) {
            isValid = false;
            swal('Gagal!', 'Nama material harus diisi.', 'error');
        }
        qtyInputs.forEach((qtyInput, index) => {
            if (!qtyInput.value) {
                isValid = false;
                swal('Gagal!', `Quantity dan Material Usage harus diisi.`, 'error');
            }
        });

        

        if (isValid) {
            // Tampilkan SweetAlert sebelum mengirim formulir
            swal({
                title: 'Mengirimkan...',
                text: 'Sedang memproses data...',
                type: 'info',
                showConfirmButton: false,
            });

            // Kirim formulir menggunakan AJAX
            $.ajax({
                url: "/FinishGood", // Ganti dengan URL yang sesuai
                type: "POST",
                data: $('#form-item').serialize(), // Ambil data formulir
                success: function (data) {
                    swal({
                        title: 'Berhasil!',
                        text: data.message, // Gunakan pesan dari respons
                        type: 'success',
                        timer: 1500,
                        showConfirmButton: false,
                    });

                    // Redirect ke halaman finishgood.index setelah menampilkan pesan sukses
                    window.location.href = "{{ route('finishgood.index') }}";
                },
                error: function (xhr, status, error) {
                    var errorMessage = xhr.responseJSON.message;

                    swal({
                        title: 'Gagal!',
                        text: errorMessage, // Gunakan pesan error dari respons JSON
                        type: 'error',
                        timer: 1500,
                        showConfirmButton: false,
                    });
                },
            });
        }
    });
</script>

@endsection
