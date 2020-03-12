<!-- <div class="form-group {{ $errors->has('id_product') ? 'has-error' : ''}}">
    <label for="id_product" class="control-label">{{ 'Id Product' }}</label>
    <input class="form-control" name="id_product" type="number" id="id_product" 
    value="{{ isset($transaksi->id_product) ? $transaksi->id_product : ''}}" >
    {!! $errors->first('id_product', '<p class="help-block">:message</p>') !!}
</div> 

<div class="form-group {{ $errors->has('id_pelanggan') ? 'has-error' : ''}}">
    <label for="id_pelanggan" class="control-label">{{ 'Id Pelanggan' }}</label>
    <input class="form-control" name="id_pelanggan" type="number" id="id_pelanggan" value="{{ isset($transaksi->id_pelanggan) ? $transaksi->id_pelanggan : ''}}" >
    {!! $errors->first('id_pelanggan', '<p class="help-block">:message</p>') !!}
</div> -->

<div class="form-group {{ $errors->has('id_product') ? 'has-error' : ''}}" >
{!! Form::label('id_product', 'Pilih Produk') !!}
{!! Form::select('id_product', $products, null, array('id' =>'products'))  !!}
 
</div>
 
<div class="form-group {{ $errors->has('id_pelanggan') ? 'has-error' : ''}}" >
{!! Form::label('id_pelanggan', 'Pilih Pelanggan') !!}
{!! Form::select('id_pelanggan', $pelanggans, null, array('id' =>'pelanggans'))  !!} 
</div>

<div class="form-group {{ $errors->has('jumlah') ? 'has-error' : ''}}">
    <label for="jumlah" class="control-label">{{ 'Jumlah' }}</label>
    <input class="form-control" name="jumlah" type="number" id="jumlah" value="{{ isset($transaksi->jumlah) ? $transaksi->jumlah : ''}}" >
    {!! $errors->first('jumlah', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>



