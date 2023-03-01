@extends('layouts.app')
@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Setting list'])
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h6>Setting list</h6>
                <button id="addSettingBtn" class="btn btn-primary">Add setting</button>
            </div>
            <div class="card-body setting-wrapper">
                <div class="row">
                    @foreach ($settings as $setting)
                        @include('admin.pages.setting.components.update')
                    @endforeach
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection

@push('js')
    <script>
        $('#addSettingBtn').on('click', (e) => {
            $('.setting-wrapper').append(
                `@include('admin.pages.setting.components.create')`
            )
        })
    </script>
@endpush
