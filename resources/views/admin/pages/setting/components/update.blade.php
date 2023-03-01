{!! Form::model($setting, [
    'url' => route('admin.setting.update', $setting->id),
    'method' => 'PUT'
]) !!}
<div class="row">
    <div class="col-6">
        {!! Form::label('name', 'Name', ['class' => 'form-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <div class="col-6">
        {!! Form::label('value', 'Value', ['class' => 'form-label']) !!}
    {!! Form::text('value', null, ['class' => 'form-control', 'required']) !!}
    </div>
</div>
<div class="text-end">
    {!! Form::submit('Save', ['class' => 'btn btn-primary mt-3']) !!}
</div>
{!! Form::close() !!}
