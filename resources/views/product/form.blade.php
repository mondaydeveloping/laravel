<div class="form-group {{ $errors->has('namabarang') ? 'has-error' : ''}}">
    <label for="namabarang" class="control-label">{{ 'Namabarang' }}</label>
    <input class="form-control" name="namabarang" type="text" id="namabarang" value="{{ isset($product->namabarang) ? $product->namabarang : ''}}" >
    {!! $errors->first('namabarang', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('harga') ? 'has-error' : ''}}">
    <label for="harga" class="control-label">{{ 'Harga' }}</label>
    <input class="form-control" name="harga" type="number" id="harga" value="{{ isset($product->harga) ? $product->harga : ''}}" >
    {!! $errors->first('harga', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('stok') ? 'has-error' : ''}}">
    <label for="stok" class="control-label">{{ 'Stok' }}</label>
    <input class="form-control" name="stok" type="number" id="stok" value="{{ isset($product->stok) ? $product->stok : ''}}" >
    {!! $errors->first('stok', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('keterangan') ? 'has-error' : ''}}">
    <label for="keterangan" class="control-label">{{ 'Keterangan' }}</label>
    <input class="form-control" name="keterangan" type="text" id="keterangan" value="{{ isset($product->keterangan) ? $product->keterangan : ''}}" >
    {!! $errors->first('keterangan', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
