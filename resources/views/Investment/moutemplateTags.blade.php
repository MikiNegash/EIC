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
    @if(session('succ'))
    <div id="alert" class="alert alert-success alert-dismissable" role="alertdialog">
        {{ session('succ') }}
    </div>
    @endif

    @if(session('saved'))
    <div id="alert" class="alert alert-success alert-dismissable" role="alertdialog">
        {{ session('saved') }}
    </div>
    @endif
    @if (session('success'))
    <div id="alert" class="alert alert-success alert-dismissable" role="alertdialog">
        {{ session('success') }}
    </div>
    @endif
    <div class="card " style="margin-top: 10px;">
        <div class="card-header">
            <div class="card-title">
                <h5> <small>Registered Mou template Tags</small> </h5>

            </div>

        </div>

        <div class="card-body">

            <div class="table-responsive mt-1 pb-3" style='width:100%'>
                <table id="com_table" class="table text-nowrap user_table vertical-top">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Tag</th>
                            <th scope="col">Type</th>
                            <th scope="col">Added by</th>
                            <th scope="col">Updated by</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- insert modal -->
<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="messageModalLabel"><small>Mou Template Tag Regstration</small> </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="messageModalBody">

                <form id="invest_form" method="POST" action="/investment/registerMoutemplate">
                    @csrf
                    <div class="row gy-3">
                        <div class="col-xl-12">
                            <label for="input-rounded1" class="form-label">Title</label>
                            <input type="text" class="form-control col-xl-6" id="title" name="title" placeholder="please enter title">
                            @error('title')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xl-12">
                            <label for="input-rounded2" class="form-label">Tag</label>
                            <input type="text" class="form-control border-dotted" id="tag" name="tag" placeholder="please enter Tag">
                            @error('code')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xl-12">
                            <label for="input-rounded3" class="form-label">Type</label>
                            <input type="text" class="form-control border-dashed" id="type" name="type" placeholder="please enter Type">
                            @error('type')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xl-3">
                            <button type="submit" class="btn btn-success btn-wave">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end insert modal -->
<!-- edit modal -->
<div class="modal fade" id="editMouModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel"><small>Edit Mou Template</small></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editCommisionForm" method="POST" action="/investment/updatemoutemplate">
                    @csrf
                    <div class="row gy-3">
                        <div class="col-xl-12">
                            <label for="input-rounded1" class="form-label">Title</label>
                            <input type="text" class="form-control col-xl-6" id="edit_title" name="edit_title" placeholder="please enter title">
                            @error('name')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xl-12">
                            <label for="input-rounded2" class="form-label">Tag</label>
                            <input type="text" class="form-control border-dotted" id="edit_tag" name="edit_tag" placeholder="please enter tag">
                            @error('code')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-xl-12">
                            <label for="input-rounded3" class="form-label">Type</label>
                            <input type="text" class="form-control border-dashed" id="edit_type" name="edit_type" placeholder="please enter Type">
                            @error('type')
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
    <!-- end edit modal -->
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
        setTimeout(function() {
            $('.alert').fadeOut('slow');
        }, 3000);
        $('#com_table').DataTable({
            processing: true,
            serverSide: true,
            responsive: true,
            ajax: {
                url: '/investment/loadtemplate',
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
                    data: 'title',
                    name: 'title'
                },
                {
                    data: 'tag',
                    name: 'tag'
                },
                {
                    data: 'type',
                    name: 'type'
                },

                {
                    data: 'added_by',
                    name: 'Auth::user()->name'
                },
                {
                    data: 'updated_by',
                    name: 'updated_by'
                },

                {
                    data: null,
                    render: function(data, type, row) {

                        Edit = '<button class="btn btn-sm btn_primary edit-com" data-id="' + row.id + '">Edit</button>';
                        /* Delete ='<a class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>' */

                        Delete = '<button class="btn btn-sm btn-danger delete-com" onClick="showDeleteConfirmation()" data-id="' + row.id + '">Delete</button>';

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
                title: $('#edit_title').val(),
                tag: $('#edit_tag').val(),
                type: $('#edit_type').val(),
            };

            $.ajax({
                type: 'POST',
                url: '/investment/updatemoutemplate', // The route to handle the item update on the server
                data: formData,
                success: function(response) {
                    console.log(response);
                    // Show success message
                    showSuccessMessage(response.message);
                    $('#editMouModal').modal('hide'); // Hide the modal after successful update
                    $('#com_table').DataTable().ajax.reload();
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

        $('#com_table').on('click', '.edit-com', function() {
            var row = $(this).closest('tr');
            var editId = row.find('td:eq(0)').text(); // Get the item ID from the first column
            var editTitle = row.find('td:eq(1)').text(); // Get the item name from the second column
            var editTag = row.find('td:eq(2)').text();
            var editType = row.find('td:eq(3)').text();
            // Populate the modal form fields
            $('#edit_id').val(editId); // Set the item ID in the hidden form field
            $('#edit_title').val(editTitle); // Set the item name in the input field
            $('#edit_tag').val(editTag);
            $('#edit_type').val(editType);
            $('#editMouModal').modal('show'); // Show the modal

            
        });

        // Close Modal Event Handler
        $('#editMouModal').on('hidden.bs.modal', function(e) {
            // Clear the modal form fields when the modal is closed
            $('#editCommisionForm')[0].reset();
        });

        // In your JavaScript

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

        function showDeleteConfirmation() {
            // Display the confirmation modal
            if (confirm('Are you sure you want to delete this record?')) {
                // If confirmed, make an AJAX request to delete the record
            
            }
        }
        $('#com_table').on('click', '.delete-com', function() {

            console.log('delete btn is clicked')
            var id = $(this).data("id");
            var token = $("meta[name='csrf-token']").attr("content");

            $.ajax({
                _token: '{{ csrf_token() }}',
                url: '/investment/' + id,
                type: 'delete',
                data: {
                    "id": id,
                    "_token": token,
                },
                success: function(response) {
                    console.log("it Works");
                    if (response.success) {
                        $('#com_table').DataTable().ajax.reload();
                    }

                },
                error: function(xhr) {
                    // Handle errors here
                }
            });
        });
    </script>

    @endsection