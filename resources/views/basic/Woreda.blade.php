@extends('common.main')
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

    </style>
@section('content')

<div class="card custom-card">
        <div  class="card-header justify-content-between ">
            <div class="card-title text-center pl-4"> Woreda Management</div>
            <div class="prism-toggle">
                @if(Auth::check() && Auth::user()->hasPermissionWithName("woreda_registration"))
                        <button class="btn btn-sm btn-primary-light" onclick="Register_Woreda()">NEW WOREDA</i></button>
                @endif
            </div>
        </div>
    <div class="card-body pl-3">


    <ul class="nav nav-tabs mb-4">
    @if(Auth::check() && Auth::user()->hasPermissionWithName("list_of_woreda"))
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#listTab">List of Woreda</a>
            </li>
    @endif
    </ul>
    @if(Auth::check() && Auth::user()->hasPermissionWithName("woreda_registration"))
    <!-- Register Region -->
    <div class='modal fade' id='add_new_woreda_modal' tabindex='-1' aria-labelledby='exampleModalSmLabel' aria-hidden='true'>
        <div class='modal-dialog modal-lg'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h6 class='modal-title' id='exampleModalSmLabel'>Adding New Woreda </h6>
                <button type='button' class='btn-close' data-bs-dismiss='modal'
                    aria-label='Close'></button>
            </div>
            <div class='modal-body'>
            <form id="woredaForm">
                    <div class="row gy-3">
                                <div id="successMessage" style="display: none;"></div>
                                <div id="errorMessage" style="display: none;"></div>
                        <div class="col-xl-12"> 
                            <label style="font-weight:bolder" class=" mb-2 form-label" for="zone_id">Select Region</label>
                            <select class="form-select" id="region_select">
                            </select>
                            <div class="error-message" id="region_select_error"></div>
                        </div>
                        <div class="col-xl-12"> 
                            <label style="font-weight:bolder" class=" mb-2 form-label" for="zone_id">Select Zone</label>
                            <select class="form-select" id="zone_select">
                            </select>
                            <div class="error-message" id="zone_select_error"></div>
                        </div>
                        <div class="col-xl-12"> 
                                <label style="font-weight:bolder" class=" mb-2 form-label">Woreda Name</label> 
                                <input type="text" class="form-control rounded-0" id="woreda_name" placeholder="Enter Woreda"> 
                                <div class="error-message" id="woreda_name_error"></div>
                        </div>
                        <input type="hidden" name="user_id" id="created_by" value="{{ Auth::user()->id }}">
                    </div>
                    <button type="button" class="btn btn-primary" id="registerButton">Register Woreda</button>
           </form>
            </div>
        </div>
        </div>
    </div>
    @endif
        <div class="tab-content">
        
<!-- Hidden modal for success and error messages -->
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
<!-- Hidden modal for delete confirmation -->
<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="deleteConfirmationModalBody">
                Are you sure you want to delete this Woreda?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete</button>
            </div>
        </div>
    </div>
</div>

        <!-- List of Zones Tab -->
        @if (Auth::check() && Auth::user()->hasPermissionWithName("list_of_zone"))
            <div class="table-responsive mt-3">
                <table class="table text-nowrap table-sm" id="woredasTable">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Zone Name</th>
                            <th>Region Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
    @endif
</div>

<!-- The Modal for Editing Zone -->
@if(Auth::check() && Auth::user()->hasPermissionWithName("update_woreda"))
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Edit Woreda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editWoredaForm">
                    <div class="mb-3">
                        <label for="edit_woreda_name" class="form-label">Woreda Name</label>
                        <input type="text" class="form-control" id="edit_woreda_name" placeholder="Enter Woreda Name">
                        <div class="error-message" id="edit_woreda_name_error"></div>
                    </div>
                    <input type="hidden" id="edit_woreda_id">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="zone">Select Zone</label>
                        <select class="form-select" id="zone" name="region_id"></select>
                        <div class="error-message" id="zone_id_error"></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" id="saveEditButton">Save Changes</button> 
            </div>
        </div>
    </div>
</div>
@endif


<script>
   region_sele = 
   function Register_Woreda(){
    $('#woredaForm').trigger('reset');
    $('#add_new_woreda_modal').modal('show');

   }
    $(document).ready(function () {
        function showDeleteConfirmation(callback) {
        $('#deleteConfirmationModal').modal('show');

        // Set click event for the "Delete" button inside the modal
        $('#confirmDeleteButton').off('click').on('click', function () {
            // Hide the modal
            $('#deleteConfirmationModal').modal('hide');

            // Call the provided callback function (delete action) if it exists
            if (typeof callback === 'function') {
                callback();
            }
        });
    }

    function showSuccessMessage(message) {
        $('#messageModalLabel').text('Success');
        $('#messageModalBody').text(message);
        $('#messageModal').modal('show');
    }

    // Function to show error message in the modal
    function showErrorMessage(message) {
        $('#messageModalLabel').text('Error');
        $('#messageModalBody').text(message);
        $('#messageModal').modal('show');
    }
    $('#woredasTable').DataTable({
    processing: true,
    serverSide: true,
    responsive: true,
    ajax: {
        url: '/woredas/list',
        type: 'get',
        data: {
            _token: '{{ csrf_token() }}',
        },
    },
    columns: [
        { data: 'id', name: 'id' },
        { data: 'name', name: 'name' },
        { data: 'zone.name', name: 'zone.name' }, // Use dot notation to access the region name
        {
            data: null,
            render: function (data, type, row) {
                @if (Auth::check() && Auth::user()->hasPermissionWithName("update_woreda"))
                    Edit = '<a href="#" class="btn btn-sm btn-primary edit-woreda" data-id="' + row.id + '">Edit</a>';
                @else
                    Edit = '';
                @endif
                @if (Auth::check() && Auth::user()->hasPermissionWithName("delete_woreda"))
                    Delete = '<button class="btn btn-sm btn-danger delete-woreda" data-id="' + row.id + '">Delete</button>';
                @else
                    Delete = '';
                @endif
            return Edit + " " + Delete;
            },
        },
    ],
    paging: true, // Enable pagination
    pageLength: 10, // Number of rows per page
    lengthMenu: [[10, 25, 50, -1], [10, 25, 50, 'All']], // Dropdown options for rows per page
    pagingType: 'full_numbers', // Style of pagination
});

    function loadZones() {
        $.ajax({
            type: 'GET',
            url: '/regions/list', // Replace with the correct URL to fetch regions data
            data: {
                _token: '{{ csrf_token() }}',
            },
            success: function (response) {
                var zones = response.data;
                var selectOptions = '<option value="">Select Region</option>';
                zones.forEach(function (zone) {
                    selectOptions += '<option value="' + zone.id + '">' + zone.name + '</option>';
                });
                $('#region_select').html(selectOptions);
            },
            error: function (xhr) {
                console.log('Error loading regions data');
            },
        });
    }

    // Call loadRegions() function on page load to populate the <select> dropdown
    loadZones();

    // Event listener for the Registration Tab
    $('a[data-bs-toggle="tab"][href="#registrationTab"]').on('shown.bs.tab', function (e) {
        loadZones(); // Load regions data and populate the <select> dropdown
    });

        $('#saveEditButton').click(function () {
        // Reset previous error messages
        $('.error-message').empty();
        var woredaId = $('#edit_woreda_id').val();
        var formData = {
            _token: '{{ csrf_token() }}',
            name: $('#edit_woreda_name').val(),
            zone_id: $('#zone option:selected').val()
        };

        $.ajax({
            type: 'post',
            url: '/woreda/update/'+woredaId, // The route to handle the measurement update on the server
            data: formData,
            success: function (response) {
                console.log(response);
                // Show success message
                showSuccessMessage(response.message);
                $('#editModal').modal('hide'); // Hide the modal after successful update
                $('#woredasTable').DataTable().ajax.reload();
            },
            error: function (xhr) {
                if (xhr.status === 422) {
                    var errors = xhr.responseJSON.errors;
                    $.each(errors, function (key, value) {
                        $('#edit_' + key + '_error').text(value[0]);
                    });
                }
            },
        });
    });


    $('#woredasTable').on('click', '.edit-woreda', function () {
    var row = $(this).closest('tr');
    var woredaId = row.find('td:eq(0)').text();
    var woredaName = row.find('td:eq(1)').text();
    var zoneId = row.find('td:eq(2)').data('zone-id'); // Assuming you have the region ID as a data attribute in the table cell
    var zoneName = row.find('td:eq(2)').text();

    // Populate the modal form fields
    $('#edit_woreda_id').val(woredaId);
    $('#edit_woreda_name').val(woredaName);
    $('#edit_zone_id').val(zoneId);


    // Fetch and populate the zone select element
    $.ajax({
        type: 'get',
        url: '/zones/list', // Replace with the correct URL to fetch zones data
        data: {
            _token: '{{ csrf_token() }}',
        },
        success: function (response) {
            var zones = response.data;
            var selectOptions = '';
            zones.forEach(function (zone) {
                selectOptions += '<option value="' + zone.id + '"';
                if (zone.id === zoneId) {
                    selectOptions += ' selected';
                }
                selectOptions += '>' + zone.name + '</option>';
            });
            $('#zone').html(selectOptions);
        },
        error: function (xhr) {
            console.log('Error loading zone data');
        },
    });

    $('#editModal').modal('show');
});

    // Close Modal Event Handler
    $('#editModal').on('hidden.bs.modal', function (e) {
        // Clear the modal form fields when the modal is closed
        $('#editWoredaForm')[0].reset();
    });



    $('#woredasTable').on('click', '.delete-woreda', function () {
        var woredaId = $(this).data('id');
        
        // Display a confirmation prompt before deleting the measurement
        showDeleteConfirmation(function () {
            // If the user confirms, proceed with the deletion
            $.ajax({
                type: 'get',
                url: '/delete/woredas/' + woredaId,
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function (response) {
                    showSuccessMessage('Woreda deleted successfully.');
                    $('#woredasTable').DataTable().ajax.reload();
                },
                error: function (xhr) {
                    showErrorMessage('Error deleting Woreda.');
                }
            });
       })
    });

    $('#registerButton').click(function () {
    $('.error-message').empty();
    var formData = {
            _token: '{{ csrf_token() }}',
            name: $('#woreda_name').val(),
            created_by: $('#created_by').val(),
            zone_id: $('#zone_id option:selected').val()
        };

    $.ajax({
        type: 'POST',
        url: '/woredas/register',
        data: formData,
        success: function (response) {
            console.log(response);
            showSuccessMessage(response.message);
            $('#woredaForm')[0].reset();
            $('.error-message').empty();
            $('#woredasTable').DataTable().ajax.reload();

        },
        error: function (xhr) {
            if (xhr.status === 422) {
                showErrorMessage('Error occurred during Woreda registration.');
                var errors = xhr.responseJSON.errors;
                $.each(errors, function (key, value) {
                    showErrorMessage(value[0]);
                });
                $('#' + key + '_error').text(value[0]);
            } else {
                showErrorMessage('Error occurred during Woreda registration.');
            }
        },
    });
});
});
</script>
@endsection
