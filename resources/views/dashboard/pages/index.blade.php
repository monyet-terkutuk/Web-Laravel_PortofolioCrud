@extends('dashboard.partials.main')

@section('container')

    <p class="card-title">Pages Management</p>
    <a href="{{ route('page.create') }}" class="btn btn-primary text-white">+ Add New Page</a>
    <div class="table-responsive">
<table class="table table-stripped">
    <thead>
        <tr>
            <th class="col-1">#</th>
            <th>Title</th>
            <th class="col-3">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>

    </div>

@endsection
    