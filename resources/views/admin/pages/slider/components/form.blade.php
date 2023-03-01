<div class="mb-3">
    {!! Form::label('title', 'Title', ['class' => 'form-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="mb-3">
    {!! Form::label('description', 'Description', ['class' => 'form-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'required']) !!}
</div>
<div class="mb-3">
    {!! Form::label('type', 'Type', ['class' => 'form-label']) !!}
    {!! Form::select('type', App\Enums\SliderType::getSliderOptions(), [], ['class' => 'form-select', 'required']) !!}
</div>
<div class="mb-3">
    {!! Form::label('order', 'Order', ['class' => 'form-label']) !!}
    {!! Form::number('order', null, ['class' => 'form-control', 'required']) !!}
</div>
<div>
    {!! Form::label('image', 'Image', ['class' => 'form-label']) !!}
    {!! Form::file('image', ['class' => 'form-control', !isset($slider) ? 'required' : '']) !!}
    @isset($slider)
        <div>
            <img src="{{}}" alt="">
        </div>
    @endisset
</div>

