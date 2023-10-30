<div class="modal fade" id="modal-form" tabindex="1" role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <form  id="form-item" method="post" class="form-horizontal" data-toggle="validator" enctype="multipart/form-data" >
                {{ csrf_field() }} {{ method_field('POST') }}

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title"></h3>
                </div>


                <div class="modal-body">
                    <input type="hidden" id="id" name="id">


                    <div class="box-body">
                        <div class="form-group">
                            <label >Nama</label>
                            {{-- {!! Form::select('nama', $products->where('category_id', 3)->pluck('nama'), null, ['class' => 'form-control select', 'placeholder' => '-- Choose Product --', 'id' => 'product_id', 'required']) !!} --}}
                            {{-- <input type="text" class="form-control" id="nama" name="nama"  autofocus required> --}}
                           {{-- <select class="js-example-basic-single" name="nama" id="nama" style="width: 100%">
                            @foreach($products as $product)
                                @if ($product->category_id == 3)
                                    <option value="{{ $product->name }}">{{ $product->nama }}</option>
                                @endif
                            @endforeach
                           </select> --}}
                            <input type="text" class="form-control" id="nama" name="nama"  autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>

                        {{-- <div class="form-group">
                            <label >Material</label>
                            <select class="js-example-basic-multiple" name="nama[]" id="materials[]" multiple="multiple" style="width: 100%" required>
                                @foreach($products as $product)
                                    @if ($product->category_id == 2)
                                        <option value="{{ $product }}">{{ $product->nama }}</option> 
                                    @endif
                                @endforeach
                            </select>
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >Accessories</label>
                            
                            <select class="js-example-basic-multiple" name="nama[]" id="accessories[]" multiple="multiple" style="width: 100%" required>
            
                                @foreach($products as $product)
                                @if ($product->category_id == 1)
                                    <option value="{{ $product }}">{{ $product->nama }}</option> 
                                @endif
                                @endforeach
                            </select>
                            <span class="help-block with-errors"></span>
                        </div> --}}

                        <div class="form-group">
                            <label >Price</label>
                            <input type="text" class="form-control" id="harga_beli" name="harga_beli"   required>
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >Quantity</label>
                            <input type="text" class="form-control" id="qty" name="qty"   required>
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >Nomer SPB</label>
                            <input type="text" class="form-control" id="nomer_spb" name="nomer_spb"  autofocus required>
                            <span class="help-block with-errors"></span>
                        </div>

                        <div class="form-group">
                            <label >Keterangan</label>
                            <input type="text" class="form-control" id="keterangan" name="keterangan"  autofocus>
                            <span class="help-block with-errors"></span>
                        </div>


                        

                        <div class="form-group">
                            <label >Category</label>
                            {!! Form::select('category_id', $category, null, ['class' => 'form-control select', 'placeholder' => '-- Choose Category --', 'id' => 'category_id', 'required']) !!}
                            <span class="help-block with-errors"></span>
                        </div>




                    </div>
                    <!-- /.box-body -->

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
