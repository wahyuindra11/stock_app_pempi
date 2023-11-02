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
                                            <input name="nama" type="text" class="form-control" value="{{ $product->nama }}">
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
                                        <th scope="col">Material Name</th>
                                        <th scope="col">Material Stock</th>
                                        <th scope="col">Material Usage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="col-auto">
                                                <select name="material[]" id="material1" class="form-control" required>
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
                                                <input type="text" class="form-control" id="material1_stock" disabled>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-auto">
                                                <input name="qty[]" type="text" class="form-control" required>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="col-auto">
                                                <select name="material[]" id="material2" class="form-control" required>
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
                                                <input type="text" class="form-control" id="material2_stock" disabled>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-auto">
                                                <input name="qty[]" type="text" class="form-control" required>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="col-auto">
                                                <select name="material[]" id="material3" class="form-control" required>
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
                                                <input type="text" class="form-control" id="material3_stock" disabled>
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
                    <button type="button" id="submit-button" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>
@endsection

@section('bot')
<script>
    // Menambahkan event listener untuk setiap elemen select
    const material1Select = document.getElementById("material1");
    const material2Select = document.getElementById("material2");
    const material3Select = document.getElementById("material3");
    const material1StockInput = document.getElementById("material1_stock");
    const material2StockInput = document.getElementById("material2_stock");
    const material3StockInput = document.getElementById("material3_stock");

    material1Select.addEventListener("change", function () {
        const selectedOption = material1Select.options[material1Select.selectedIndex];
        const qty = selectedOption.getAttribute("data-qty");
        material1StockInput.value = qty;
    });

    material2Select.addEventListener("change", function () {
        const selectedOption = material2Select.options[material2Select.selectedIndex];
        const qty = selectedOption.getAttribute("data-qty");
        material2StockInput.value = qty;
    });

    material3Select.addEventListener("change", function () {
        const selectedOption = material3Select.options[material3Select.selectedIndex];
        const qty = selectedOption.getAttribute("data-qty");
        material3StockInput.value = qty;
    });

    // Menambahkan event listener untuk tombol Submit
    const submitButton = document.getElementById("submit-button");
    submitButton.addEventListener("click", function () {
        // Cek apakah semua elemen input telah diisi
        const namaInput = document.querySelector('input[name="nama"]');
        // const qtyInputs = document.querySelectorAll('input[name="qty[]"]');
        
        let isValid = true;
        
        if (!namaInput.value) {
            isValid = false;
            swal('Gagal!', 'Nama produk harus diisi.', 'error');
        }
        
        // qtyInputs.forEach((qtyInput, index) => {
        //     if (!qtyInput.value) {
        //         isValid = false;
        //         swal('Gagal!', `Quantity dan Material Usage harus diisi.`, 'error');
        //     }
        // });
        
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
