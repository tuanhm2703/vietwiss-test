<div class="card"></div>
    <div class="card-header">
        <h6>Update slider</h6>
    </div>
    <div class="card-body">
        {!! Form::model($slider, [
            'url' => route('admin.slider.update', $slider->id),
            'method' => 'PUT',
            'class' => 'slider-form'
        ]) !!}
        @include('admin.pages.slider.components.form')
        <div class="text-end mt-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
        {!! Form::close() !!}
    </div>
</div>

<script>
    $('.slider-form').ajaxForm({
        success: (res) => {
            $('.modal.show').modal('hide')
            table.ajax.reload()
        },
        error: (err) => {
            console.log(err);
        }
    })
</script>
