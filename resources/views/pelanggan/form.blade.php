<div class="form-group {{ $errors->has('namapelanggan') ? 'has-error' : ''}}">
    <label for="namapelanggan" class="control-label">{{ 'Namapelanggan' }}</label>
    <input class="form-control" name="namapelanggan" type="text" id="namapelanggan" value="{{ isset($pelanggan->namapelanggan) ? $pelanggan->namapelanggan : ''}}" >
    {!! $errors->first('namapelanggan', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
    <label for="alamat" class="control-label">{{ 'Alamat' }}</label>
    <input class="form-control" name="alamat" type="text" id="alamat" value="{{ isset($pelanggan->alamat) ? $pelanggan->alamat : ''}}" >
    {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('jeniskelamin') ? 'has-error' : ''}}">
    <label for="jeniskelamin" class="control-label">{{ 'Jeniskelamin' }}</label>
    <input class="form-control" name="jeniskelamin" type="text" id="jeniskelamin" value="{{ isset($pelanggan->jeniskelamin) ? $pelanggan->jeniskelamin : ''}}" >
    {!! $errors->first('jeniskelamin', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('notelp') ? 'has-error' : ''}}">
    <label for="notelp" class="control-label">{{ 'Notelp' }}</label>
    <input class="form-control" name="notelp" type="text" id="notelp" value="{{ isset($pelanggan->notelp) ? $pelanggan->notelp : ''}}" >
    {!! $errors->first('notelp', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
