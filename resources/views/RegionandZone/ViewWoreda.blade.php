@extends('common.main')

@section('content')
   <div class="container">
    <label for="title"><h2>View List of Woreda Registered</h2></label>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table text-nowrap table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Woreda Name</th>
                            <th scope="col">Zone Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($woredas as $woreda)
                        <tr>
                            <th scope="row">
                                <div class="d-flex align-items-center">{{ $woreda->name }} </div>
                            </th>
                            <td><span class="d-flex align-items-center">{{ $woreda->zone->name }}</span></td>
                            <td>
                                <div class="hstack gap-2 flex-wrap">
                                    <a href="{{ route('edit.woreda', $woreda->id) }}">
                                        <i class="ri-edit-line"></i>
                                    </a>
                                    <a href="{{ route('delete.woreda', $woreda->id) }}"
                                        class="text-danger fs-14 lh-1" onclick="return confirm('Are you sure you want to delete this zone?')">
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
