@extends('common.main')

@section('content')
   <div class="container">
    <label for="title"><h2>View List of Registered Region</h2></label>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table text-nowrap table-bordered">
                    <thead class="font-weight-bold">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Code</th>
                            <th scope="col">Type</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($regions as $region)
                        <tr>
                            <th scope="row">
                                <div class="d-flex align-items-center">{{ $region->name }} </div>
                            </th>
                            <td><span class="d-flex align-items-center">{{ $region->code }}</span></td>
                            <td>{{ $region->type }}</td>
                            <td>
                                <div class="hstack gap-2 flex-wrap">
                                    <a href="{{ route('edit.region', $region->id) }}">
                                        <i class="ri-edit-line"></i>
                                    </a>
                                    <a href="{{ route('delete.region', $region->id) }}"
                                        class="text-danger fs-14 lh-1" onclick="return confirm('Are you sure you want to delete this region?')">
                                        <i class="ri-delete-bin-5-line"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
    </div>
    </div>

@endsection
