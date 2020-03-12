<div class="form-group {{ $errors->has('tittle') ? 'has-error' : ''}}">
    <label for="tittle" class="control-label">{{ 'Tittle' }}</label>
    <input class="form-control" name="tittle" type="text" id="tittle" value="{{ isset($post->tittle) ? $post->tittle : ''}}" >
    {!! $errors->first('tittle', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('body') ? 'has-error' : ''}}">
    <label for="body" class="control-label">{{ 'Body' }}</label>
    <textarea class="form-control" rows="5" name="body" type="textarea" id="body" >{{ isset($post->body) ? $post->body : ''}}</textarea>
    {!! $errors->first('body', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
