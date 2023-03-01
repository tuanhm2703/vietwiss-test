@extends('layouts.app')
@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Slider list'])
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h6>Slider list</h6>
                <a href="{{route('admin.slider.create')}}" class="btn btn-primary ajax-modal-btn">Create slider</a>
            </div>
            <div class="card-body">
                <table class="slider-table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Title</th>
                            <th>Order</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>

    @push('js')
        <script>
            const table = $('.slider-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: `{{route('admin.slider.paginate')}}`,
                columns: [
                    {
                        data: 'id',
                        render: (data, type, full, meta) => {
                            const info = table.page.info()
                            const rowNumber = meta.row + 1
                            return info.page * info.length + rowNumber
                        }
                    },
                    {
                        data: 'title'
                    },
                    {
                        data: 'order'
                    },
                    {
                        data: 'image'
                    },
                    {
                        data: 'action'
                    }
                ]
            })
        </script>
    @endpush
@endsection
