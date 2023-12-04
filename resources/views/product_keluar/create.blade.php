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
                            <div class="table-responsive">
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
                                            <th scope="col"></th>
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
                                                    <select name="product_id[]" id="" class="form-control select" required>
                                                        <option value="" disabled selected>-- Choose Product --</option>
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
                                                    <select name="customer_id[]" id="" class="form-control" required>
                                                        <option value="" disabled selected>-- Choose Customer --</option>
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
                                            <td>
                                                <div class="col-auto">
                                                    <input type="checkbox" class="isi-checkbox" checked>
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
                                                    <select name="product_id[]" id="" class="form-control select" required>
                                                        <option value="" disabled selected>-- Choose Product --</option>
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
                                                    <select name="customer_id[]" id="" class="form-control" required>
                                                        <option value="" disabled selected>-- Choose Customer --</option>>
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
                                            <td>
                                                <div class="col-auto">
                                                    <input type="checkbox" class="isi-checkbox" checked>
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
                                                    <select name="product_id[]" id="" class="form-control select" required>
                                                        <option value="" disabled selected>-- Choose Product --</option>
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
                                                    <select name="customer_id[]" id="" class="form-control" required>
                                                        <option value="" disabled selected>-- Choose Customer --</option>
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
                                            <td>
                                                <div class="col-auto">
                                                    <input type="checkbox" class="isi-checkbox" checked>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <div class="modal-footer">
                    <button type="submit" id="submit-button" class="btn btn-primary">Add</button>
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

        $(".isi-checkbox").on("change", function () {
            const row = $(this).closest("tr");
            const inputFields = row.find("input:not(:checkbox), select");

            if (this.checked) {
                inputFields.prop("disabled", false);
            } else {
                inputFields.prop("disabled", true);
            }
        });
</script>
<script>
   // Tunggu hingga halaman sepenuhnya dimuat
document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("form-item");
    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Mencegah tindakan submit bawaan

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
            data: $(form).serialize(), // Ambil data formulir
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
    });
});

</script>

@endsection
