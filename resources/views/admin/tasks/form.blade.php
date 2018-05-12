<div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
    <label for="name" class="col-md-4 control-label">{{ 'Name' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="name" type="text" id="name" value="{{ $task->name or ''}}" >
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
    <label for="description" class="col-md-4 control-label">{{ 'Description' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="description" type="textarea" id="description" >{{ $task->description or ''}}</textarea>
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('begin_date') ? 'has-error' : ''}}">
    <label for="begin_date" class="col-md-4 control-label">{{ 'Begin Date' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="begin_date" type="date" id="begin_date" value="{{ $task->begin_date or ''}}" >
        {!! $errors->first('begin_date', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('end_date') ? 'has-error' : ''}}">
    <label for="end_date" class="col-md-4 control-label">{{ 'End Date' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="end_date" type="date" id="end_date" value="{{ $task->end_date or ''}}" >
        {!! $errors->first('end_date', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    <label for="status" class="col-md-4 control-label">{{ 'Status' }}</label>
    <div class="col-md-6">
        <select name="status" class="form-control" id="status" >
    @foreach (json_decode('{"pendente": "Pendente", "em_desenvolvimento": "Em Desenvolvimento", "em_teste": "Em Teste", "concluido": "Concluído"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($task->status) && $task->status == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('active') ? 'has-error' : ''}}">
    <label for="active" class="col-md-4 control-label">{{ 'Active' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="active" type="text" id="active" value="{{ $task->active or ''}}" >
        {!! $errors->first('active', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
