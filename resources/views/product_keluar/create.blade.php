@extends('layouts.master')

@section('top')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
@endsection

@section('content')
    <div class="box" id="box">
        <div class="box-header">
            <h3 class="box-title">Add Material Keluar</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <form id="form-item" action="/productsOut" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data">
                {{ csrf_field() }} {{ method_field('POST') }}

                <div class="modal-body">
                    <div class="box-body">
                        <div class="modal-body">
                            
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Category</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Customer</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">nomor spb</th>
                                        <th scope="col">Tanggal Pembelian</th>
                                        <th scope="col">Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="col-auto">
                                                <label>Acessories</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-auto">
                                                <select name="product_id[]" id="" class="form-control">
                                                    @foreach ($products as $product)
                                                        @if ($product->category_id == 1)
                                                            <option value="{{ $product->id }}">{{ $product->nama }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-auto">
                                                <select name="customer_id[]" id="" class="form-control">
                                                    @foreach ($customers as $customer)
                                                        <option value="{{ $customer->id }}">{{ $customer->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-auto">
                                                <input name="qty[]" type="text" class="form-control" required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-auto">
                                                <input name="nomer_spb[]" type="text" class="form-control" required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-auto">
                                                <input data-date-format='yyyy-mm-dd' type="text" class="form-control" id="tanggal" name="tanggal[]"   required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-auto">
                                                <input name="keterangan[]" type="text" class="form-control" required>
                                            </div>
                                        </td>
                                        
                                    </tr>
                                    <hr>
                                    <tr>
                                        <td>
                                            <div class="col-auto">
                                                <label>Material</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-auto">
                                                <select name="product_id[]" id="" class="form-control">
                                                    @foreach ($products as $product)
                                                        @if ($product->category_id == 2)
                                                            <option value="{{ $product->id }}">{{ $product->nama }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-auto">
                                                <select name="customer_id[]" id="" class="form-control">
                                                    @foreach ($customers as $customer)
                                                        <option value="{{ $customer->id }}">{{ $customer->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-auto">
                                                <input name="qty[]" type="text" class="form-control" required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-auto">
                                                <input name="nomer_spb[]" type="text" class="form-control" required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-auto">
                                                <input data-date-format='yyyy-mm-dd' type="text" class="form-control" id="tanggal1" name="tanggal[]" required >
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-auto">
                                                <input name="keterangan[]" type="text" class="form-control" required>
                                            </div>
                                        </td>
                                    </tr>
                                        <td>
                                            <div class="col-auto">
                                                <label>FinishGood</label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-auto">
                                                <select name="product_id[]" id="" class="form-control">
                                                    @foreach ($products as $product)
                                                        @if ($product->category_id == 3)
                                                            <option value="{{ $product->id }}">{{ $product->nama }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-auto">
                                                <select name="customer_id[]" id="" class="form-control">
                                                    @foreach ($customers as $customer)
                                                        <option value="{{ $customer->id }}">{{ $customer->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-auto">
                                                <input name="qty[]" type="text" class="form-control" required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-auto">
                                                <input name="nomer_spb[]" type="text" class="form-control" required>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-auto">
                                                <input data-date-format='yyyy-mm-dd' type="text" class="form-control" id="tanggal2" name="tanggal[]" required >
                                            </div>
                                        </td>
                                        <td>
                                            <div class="col-auto">
                                                <input name="keterangan[]" type="text" class="form-control" required>
                                            </div>
                                        </td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <div class="modal-footer">
                    <button type="button" id="submit-button" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
        <!-- /.box-body -->
    </div>
@endsection

@section('bot')
<script src="{{ asset('assets/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('assets/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
<!-- bootstrap time picker -->
<script src="{{ asset('assets/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
<script>
     $(function () {
        //Date picker
        $('#tanggal').datepicker({
            autoclose: true,
            // dateFormat: 'yyyy-mm-dd'
        })
        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()
        //Timepicker
        $('.timepicker').timepicker({
            showInputs: false
        })
        $(document).ready(function() {
        $('#tanggal1').datepicker({
            autoclose: true,
            // dateFormat: 'yy-mm-dd'
            
        });
        
    });
    })
    $(document).ready(function() {
        $('#tanggal2').datepicker({
            autoclose: true,
            // dateFormat: 'yy-mm-dd'
        })   
        });
</script>
<script>
    // Menambahkan event listener untuk tombol Submit
    const submitButton = document.getElementById("submit-button");
    submitButton.addEventListener("click", function () {
        // Cek apakah semua elemen input telah diisi
        // const namaInput = document.querySelector('input[name="nama"]');
        const product_idInputs = document.querySelectorAll('select[name="product_id[]"]');
        const customer_idInputs = document.querySelectorAll('select[name="customer_id[]"]');
        const qtyInputs = document.querySelectorAll('input[name="qty[]"]');
        const nomer_spbInputs = document.querySelectorAll('input[name="nomer_spb[]"]');
        const tanggalInputs = document.querySelectorAll('input[name="tanggal[]"]');
        const keteranganInputs = document.querySelectorAll('input[name="keterangan[]"]');
        
        let isValid = true;
        
        // if (!namaInput.value) {
        //     isValid = false;
        //     swal('Gagal!', 'Nama produk harus diisi.', 'error');
        // }
        
        keteranganInputs.forEach((keteranganInputs, index) => {
            if (!keteranganInputs.value) {
                isValid = false;
                swal('Gagal!', `keterangan harus diisi.`, 'error');
            }
        });
        tanggalInputs.forEach((tanggalInputs, index) => {
            if (!tanggalInputs.value) {
                isValid = false;
                swal('Gagal!', `Tanggal masuk harus diisi.`, 'error');
            }
        });
        nomer_spbInputs.forEach((nomer_spbInputs, index) => {
            if (!nomer_spbInputs.value) {
                isValid = false;
                swal('Gagal!', `Nomor spb harus diisi.`, 'error');
            }
        });
        qtyInputs.forEach((qtyInput, index) => {
            if (!qtyInput.value) {
                isValid = false;
                swal('Gagal!', `Quantity harus diisi.`, 'error');
            }
        });
        customer_idInputs.forEach((customer_idInputs, index) => {
            if (!customer_idInputs.value) {
                isValid = false;
                swal('Gagal!', `Customer harus diisi.`, 'error');
            }
        });
        product_idInputs.forEach((product_idInputs, index) => {
            if (!product_idInputs.value) {
                isValid = false;
                swal('Gagal!', `Nama produk harus diisi.`, 'error');
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
                url: "/productsOut", // Ganti dengan URL yang sesuai
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
                    window.location.href = "/productsOut";
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
