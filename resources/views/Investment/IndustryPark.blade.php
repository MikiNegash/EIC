@extends('common.main')

@section('content')

<style>
    .dataTables_paginate .paginate_button {
        margin: 5px;
        padding: 5px 10px;
        border: 1px solid #ccc;
        background-color: #f0f0f0;
        color: #333;
        cursor: pointer;
        border-radius: 5px;
    }

    .dataTables_paginate .paginate_button.current {
        background-color: #007bff;
        color: #fff;
        border: 1px solid #007bff;
    }

    .dataTables_wrapper .dataTables_filter input[type="search"] {
        /* Add your custom styles here */
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f0f0f0;
        color: #333;
    }

    .dataTables_wrapper .dataTables_filter input[type="search"]:focus {
        border-color: #007bff;
        outline: none;
    }

    .custom-margin-bottom {
        margin-bottom: 20px;
        /* Adjust the value as needed */
    }

    .btn_primary {
        background: rgb(17, 28, 67) !important;
        color: #fff !important;
    }
</style>
<div class="container" id="generalForm">
    <button type="button" class="btn btn_primary" data-bs-toggle="modal" data-bs-target="#messageModal">
        <i class="bi bi-plus"></i> New
    </button>
    <div class="card " style="margin-top: 10px;">
        <div class="card-header">
            <div class="card-title">
                <h5> <small>Registered Industrial Parks</small> </h5>

            </div>

        </div>
        <div class="card-body">

            <div class="table-responsive mt-1 pb-3" style='width:100%'>
                <table id="coms_table" class="table text-nowrap user_table vertical-top">
                    <thead>
                        <tr>

                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Region</th>
                            <th scope="col">Zone</th>
                            <th scope="col">Woreda</th>
                            <th scope="col">Registered by</th>
                            <th scope="col">Status</th>
                            <th scope="col"></th>

                        </tr>
                    </thead>

                </table>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="messageModalLabel"><small>Investment Commission Regstration</small> </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="messageModalBody">

                <form id="invest_form" method="POST" action="/investment/parkSubmit">
                    @csrf
                    <div class="row gy-3">
                        <div class="col-xl-12">
                            <label for="input-rounded1" class="form-label">Name</label>
                            <input type="text" class="form-control col-xl-6" id="name" name="name" placeholder="please enter name">
                            @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xl-12">
                            <label for="input-rounded2" class="form-label">Stakeholder</label>
                            <div class="input-group">
                                <select class="form-select  validate-select" id="stakeholder" name="stakeholder">
                                    <option value="">Select a stakeholder</option>
                                    @foreach ($stakeholders as $stake)
                                    <option value="{{ $stake->id }}">{{ $stake->name }}</option>
                                    @endforeach
                                </select>
                                @error('region')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <label for="input-rounded2" class="form-label">Region</label>
                            <div class="input-group">
                                <select class="form-select  validate-select" id="region" name="region">
                                    <option value="">Select a Region</option>
                                    @foreach ($regions as $region)
                                    <option value="{{ $region->id }}">{{ $region->name }}</option>
                                    @endforeach
                                </select>
                                @error('region')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <label for="input-rounded3" class="form-label">Zone</label>
                            <div class="input-group">
                                <select class="form-select  validate-select" id="zone" name="zone">
                                    <option value="">Select Zone</option>

                                </select>
                                @error('region')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <label for="input-rounded2" class="form-label">Woreda</label>
                            <div class="input-group">
                                <select class="form-select  validate-select" id="woreda" name="woreda">
                                    <option value="">Select Woreda</option>

                                </select>
                                @error('region')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-xl-3">
                            <button id='btn_save' type="button" class="btn btn-success btn-wave">Submit</button>
                        </div>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel"><small>Edit Industry Park</small></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editCommisionForm" method="POST" action="/investment/invSector">
                    @csrf
                    <div class="row gy-3">
                        <div class="col-xl-12">
                            <label for="input-rounded1" class="form-label">Name</label>
                            <input type="text" class="form-control col-xl-6" id="edit_name" name="name" placeholder="please enter name">
                            @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xl-12">
                            <label for="input-rounded2" class="form-label">Stakeholder</label>
                            <div class="input-group">
                                <select class="form-select  validate-select" id="edit_stakeholder" name="stakeholder">
                                    <option value="">Select a stakeholder</option>
                                    @foreach ($stakeholders as $stake)
                                    <option value="{{ $stake->id }}">{{ $stake->name }}</option>
                                    @endforeach
                                </select>
                                @error('region')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <label for="input-rounded2" class="form-label">Region</label>
                            <div class="input-group">
                                <select class="form-select  validate-select" id="edit_region" name="region">
                                    <option value="">Select a Region</option>
                                    @foreach ($regions as $region)
                                    <option value="{{ $region->id }}">{{ $region->name }}</option>
                                    @endforeach
                                </select>
                                @error('region')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <label for="input-rounded3" class="form-label">Zone</label>
                            <div class="input-group">
                                <select class="form-select  validate-select" id="edit_zone" name="zone">
                                    <option value="">Select Zone</option>

                                </select>
                                @error('region')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <label for="input-rounded2" class="form-label">Woreda</label>
                            <div class="input-group">
                                <select class="form-select  validate-select" id="edit_woreda" name="woreda">
                                    <option value="">Select Woreda</option>

                                </select>
                                @error('region')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                   
                   
                    <input type="hidden" name="edit_id" id="edit_id">


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="btnUpdate" name="btnUpdate">Edit</button>
            </div>
            </form>
        </div>
    </div>
    <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this item?
                    <input type='hidden' id='deleteid' />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="messageModalLabel">Message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="messageModalBody">
                    <!-- Message content will be inserted here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#coms_table').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: {
                url: '/investment/loadInsustyPark',
                type: 'get',
                data: {
                    _token: '{{ csrf_token() }}',
                },

            },

            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'Region',
                    name: 'Region'
                },
                {
                    data: 'Zone',
                    name: 'Zone'
                },
                {
                    data: 'Woreda',
                    name: 'Woreda'
                },
                {
                    data: 'registered_by',
                    name: 'registered_by'
                },
                {
                    data: 'status',
                    name: 'status'
                },

                {
                    data: null,
                    render: function(data, type, row) {

                        Edit = '<button class="btn btn-sm btn_primary edit-com" data-id="' + row.id + '">Edit</button>';
                        /* Delete ='<a class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>' */

                        Delete = '<button class="btn btn-sm btn-danger delete-com" data-id="' + row.id + '">Delete</button>';

                        return Edit + " " + Delete;
                    }
                },

            ],
            paging: true, // Enable pagination
            pageLength: 10, // Number of rows per page
            lengthMenu: [
                [10, 25, 50, -1],
                [10, 25, 50, 'All']
            ], // Dropdown options for rows per page
            pagingType: 'full_numbers', // Style of pagination

        });


        document.getElementById("btnUpdate").addEventListener("click", function() {
            // Reset previous error messages
            console.log("Edit button clicked " + $('#edit_id').val())
            $('.error-message').empty();
            var formData = {
                _token: '{{ csrf_token() }}',
                id: $('#edit_id').val(),
                name: $('#edit_name').val(),
                woreda: $('#edit_woreda').val(),
                stakeholder: $('#edit_stake').val(),
                region: $('#edit_region').val(),
            };

            $.ajax({
                type: 'POST',
                url: '/investment/invComupdate', // The route to handle the item update on the server
                data: formData,
                success: function(response) {
                    console.log(response);
                    // Show success message
                    showSuccessMessage(response.message);
                    $('#editModal').modal('hide'); // Hide the modal after successful update
                    $('#coms_table').DataTable().ajax.reload();
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            $('#edit_' + key + '_error').text(value[0]);
                        });
                    }
                },
            });
        });

        /*  $('#btnUpdate').onClick(); */

        $('#coms_table').on('click', '.edit-com', function() {
            var row = $(this).closest('tr');
            var editId = row.find('td:eq(0)').text(); // Get the item ID from the first column
            var editName = row.find('td:eq(1)').text(); // Get the item name from the second column
            var editregion = row.find('td:eq(3)').text();
            var editzone = row.find('td:eq(5)').text();
            var editworeda = row.find('td:eq(4)').text();
            // Populate the modal form fields
            $('#edit_id').val(editId); // Set the item ID in the hidden form field
            $('#edit_name').val(editName); // Set the item name in the input field
            $('#edit_region').val(editregion);
            $('#edit_stake').append('<option value="'+editzone+'">' + editzone + '</option>');
            $('#edit_zone').append('<option value="'+editzone+'">' + editzone + '</option>');
            $('#edit_woreda').append('<option value="'+editworeda+'">' + editworeda + '</option>');
            $('#editModal').modal('show'); // Show the modal
        });

        // Close Modal Event Handler
        $('#editModal').on('hidden.bs.modal', function(e) {
            // Clear the modal form fields when the modal is closed
            $('#editCommisionForm')[0].reset();
        });


        function showSuccessMessage(message) {
            $('#messageModalLabel').text('Success');
            $('#messageModalBody').text(message);
            $('#messageModal').modal('show');
        }

        function showErrorMessage(message) {
            $('#messageModalLabel').text('Error');
            $('#messageModalBody').text(message);
            $('#messageModal').modal('show');
        }

        $('#coms_table').on('click', '.delete-com', function() {
            // var itemId = $(this).data('id');
            console.log('delete btn is clicked')

            $('#deleteConfirmationModal').modal('show');
            $('#deleteConfirmationModal').on('hidden.bs.modal', function(e) {
                // Clear the modal form fields when the modal is closed
                //  $('#editCommisionForm')[0].reset();
            });
            // Display a confirmation prompt before deleting the item
            // showDeleteConfirmation(function () {
            // If the user confirms, proceed with the deletion
            /*  $.ajax({
                 type: 'get',
                 url: '/delete/items/' + itemId,
                 data: {
                     _token: '{{ csrf_token() }}'
                 },
                 success: function (response) {
                     showSuccessMessage("Item Deleted Successfully");
                     $('#itemsTable').DataTable().ajax.reload();
                 },
                 error: function (xhr) {
                     showErrorMessage('Error occurred during Item deletion.');
                 }
             }); */
            // })
        });

        $('#region').on('change', function(e) {

            var region = e.target.value;
            $.ajax({

                url: "/investment/loadzones",
                type: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    region_id: region
                },

                success: function(data) {
                    console.log(JSON.stringify(data));
                    $('#zone').empty();
                    $('#zone').append('<option value="">' + 'select zone' + '</option>');
                    $.each(data.zones, function(index, subcategory) {

                        $('#zone').append('<option value="' + subcategory.id + '">' + subcategory.name + '</option>');
                    })
                },
                error: function(data) {
                    console.log(data);
                }
            })
        });

        $('#zone').on('change', function(e) {

            var zone = e.target.value;
            $.ajax({

                url: "/investment/loadworeda",
                type: "POST",
                data: {
                    _token: '{{ csrf_token() }}',
                    zone_id: zone
                },

                success: function(data) {
                    console.log(JSON.stringify(data));
                    $('#woreda').empty();
                    $('#woreda').append('<option value="">' + 'select woreda' + '</option>');
                    $.each(data.woredas, function(index, woreda) {

                        $('#woreda').append('<option value="' + woreda.id + '">' + woreda.name + '</option>');
                    })
                },
                error: function(data) {
                    console.log(data);
                }
            })
        });

        $('#btn_save').on('click', function(e) {

            console.log('save btn is clicked')
            var formData = {
                _token: '{{ csrf_token() }}',
                name: $('#name').val(),
                stakeholder_id: $('#stakeholder').val(),
                woreda_id: $('#woreda').val(),
            };
            console.log('FormData: '+formData.name+" "+formData.stakeholder_id+" "+formData.woreda_id);
            $.ajax({
                url: "/investment/parkSubmit",
                type: "POST",
                data: formData,

                success: function(data) {
                    console.log(JSON.stringify(data));
                   // $('#woreda').empty();
                    showSuccessMessage("Industry Park Registerd Successfully");
                 
                },
                error: function(data) {
                    console.log(data);
                    showErrorMessage('Something occured please try again or contact administrator');
                } 
            })
        });
    </script>

    @endsection