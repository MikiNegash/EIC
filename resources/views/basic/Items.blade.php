@extends('common.main')
<style>
        .dataTables_paginate .paginate_button 
        {
            margin: 5px;
            padding: 5px 10px;
            border: 1px solid #ccc;
            background-color: #f0f0f0;
            color: #333;
            cursor: pointer; 
            border-radius: 5px; 
        }

        .dataTables_paginate .paginate_button.current 
        {
            background-color: #007bff; 
            color: #fff; 
            border: 1px solid #007bff; 
        }    
        .dataTables_wrapper .dataTables_filter input[type="search"]
         {
            /* Add your custom styles here */
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f0f0f0;
            color: #333;
        }

        .dataTables_wrapper .dataTables_filter input[type="search"]:focus 
        {
            border-color: #007bff;
            outline: none;
        }
        .custom-margin-bottom {
                margin-bottom: 20px; /* Adjust the value as needed */
            }




    </style>
@section('content')


<div class="card custom-card mt-1">
    <div class="card-header justify-content-between ">
        <div class="card-title text-center pl-4"> Item Management</div>
        <div class="prism-toggle">
        @if(Auth::check() && Auth::user()->hasPermissionWithName("register_item"))
                <button class="btn btn-sm btn-primary-light" onclick="Register_Item()">NEW ITEM</i></button>
        @endif
        </div>
    </div>
    <div class="card-body pl-3">
    <ul class="nav nav-tabs mb-4">

    @if(Auth::check() && Auth::user()->hasPermissionWithName("list_of_item"))
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#listTab">List of Items</a>
        </li>
    @endif
    </ul>

    @if(Auth::check() && Auth::user()->hasPermissionWithName("register_item"))
          <!-- Item or Material Registration -->
    <div class='modal fade' id='add_new_item_modal' tabindex='-1' aria-labelledby='exampleModalSmLabel' aria-hidden='true'>
    <div class='modal-dialog modal-lg'>
       <div class='modal-content'>
          <div class='modal-header'>
              <h6 class='modal-title' id='exampleModalSmLabel'>Adding New Item or Material </h6>
              <button type='button' class='btn-close' data-bs-dismiss='modal'
                      aria-label='Close'></button>
          </div>
          <div class='modal-body'>
          <form id="itemForm">
                    <div class="mb-3">
                        <label style="font-weight:bolder" class="mb-2" class="form-label">Item Name</label>
                        <input type="text" class="form-control" id="item_name" placeholder="Enter Item Name">
                        <div class="error-message" id="item_name_error"></div>
                    </div>
                    <input type="hidden" name="user_id" id="created_by" value="{{ Auth::user()->id }}">
                    <div class="mb-3">
                            <label style="font-weight:bolder" class="mb-2" class="form-label">Investment Item or Material</label>
                            <select class="form-select" id="item_or_material">
                                <option value="">Choose Type</option>
                                <option value="IR">Item Registration</option>
                                <option value="MR">Material Registration</option>
                            </select>
                    </div>
                    <button type="button" class="btn btn-primary" id="registerButton">Register Item</button>
                </form>
          </div>
      </div>
    </div>
  </div>
  @endif


<div class="tab-content">
        <!-- Registration Form Tab -->
       
    @if(Auth::check() && Auth::user()->hasPermissionWithName("list_of_item"))
        <!-- List of Items Tab -->
           <div class="table-responsive mt-1 pb-3" style='width:100%'>
                <table class="table text-nowrap " id="itemsTable">
                    <thead>
                            <tr>
                                <th>ID</th>
                                <th>Item Name</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                    </thead>
                    <tbody id='role_table_body'>
                        <tr class='no_role_message'>
                            <th colspan = '5' style='color:red'>There is no item  created yet!!</th>
                        </tr>
                    </tbody>
                </table>
            </div>
   @endif
</div>
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
                Are you sure you want to delete this item?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteButton">Delete</button>
            </div>
        </div>
    </div>
</div>

@if(Auth::check() && Auth::user()->hasPermissionWithName("update_item"))
    <!-- The Modal for Editing Item -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">    <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Item</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editItemForm" >
                        <div class="mb-3">
                            <label for="edit_item_name" class="form-label">Item Name</label>
                            <input type="text" class="form-control" id="edit_item_name" placeholder="Enter Item Name">
                            <div class="error-message" id="edit_item_name_error"></div>
                        </div>
                        <input type="hidden" name="item_id" id="edit_item_id" value="">
                        
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveEditButton">Save Changes</button> 
                </div>
            </div>
    </div>
@endif
    </div>




<script>

function Register_Item()
{
    $('#itemForm').trigger("reset");
    $('#add_new_item_modal').modal("show");
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

        // Initialize DataTable inside the List of Items Tab
        $('#itemsTable').DataTable({
        processing: true,
        serverSide: true,
        responsive: true, 
        ajax: {
            url: '/items/list',
            type: 'get',
            data: {
                _token: '{{ csrf_token() }}',
            },
        },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'type', name: 'type' },

            {
                data: null,
                render: function (data, type, row) 
                {
                    @if (Auth::check() && Auth::user()->hasPermissionWithName("update_item"))
                        Edit= '<button class="btn btn-sm btn-primary edit-item" data-id="' + row.id + '">Edit</button>';
                    @else
                        Edit= ''; 
                    @endif
                    @if (Auth::check() && Auth::user()->hasPermissionWithName("delete_item"))
                        Delete = '<button class="btn btn-sm btn-danger delete-item" data-id="' + row.id + '">Delete</button>';
                    @else
                        Delete = ''; 
                    @endif
                    return Edit + " " + Delete;
                }
            },

        ],
        paging: true, // Enable pagination
        pageLength: 10, // Number of rows per page
        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, 'All']], // Dropdown options for rows per page
        pagingType: 'full_numbers', // Style of pagination
    });

        $('#saveEditButton').click(function () {
        // Reset previous error messages
        $('.error-message').empty();
        var formData = {
            _token: '{{ csrf_token() }}',
            id: $('#edit_item_id').val(),
            name: $('#edit_item_name').val(),
            created_by: $('#edit_created_by').val(),
        };

        $.ajax({
            type: 'POST',
            url: '/items/update', // The route to handle the item update on the server
            data: formData,
            success: function (response) {
                console.log(response);
                // Show success message
                showSuccessMessage(response.message);
                $('#editModal').modal('hide'); // Hide the modal after successful update
                $('#itemsTable').DataTable().ajax.reload();
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


    $('#itemsTable').on('click', '.edit-item', function () {
        var row = $(this).closest('tr');
        var itemId = row.find('td:eq(0)').text(); // Get the item ID from the first column
        var itemName = row.find('td:eq(1)').text(); // Get the item name from the second column

        // Populate the modal form fields
        $('#edit_item_id').val(itemId); // Set the item ID in the hidden form field
        $('#edit_item_name').val(itemName); // Set the item name in the input field
        $('#editModal').modal('show'); // Show the modal
    });

    // Close Modal Event Handler
    $('#editModal').on('hidden.bs.modal', function (e) {
        // Clear the modal form fields when the modal is closed
        $('#editItemForm')[0].reset();
    });



    $('#itemsTable').on('click', '.delete-item', function () {
        var itemId = $(this).data('id');
        
        // Display a confirmation prompt before deleting the item
        showDeleteConfirmation(function () {
            // If the user confirms, proceed with the deletion
            $.ajax({
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
            });
       })
    });

    $('#registerButton').click(function () {
    $('.error-message').empty();
    var formData = {
        _token: '{{ csrf_token() }}',
        name: $('#item_name').val(),
        items_or_material: $('#item_or_material option:selected').val(),
        created_by: $('#created_by').val(),
    };

    $.ajax({
        type: 'POST',
        url: '/items/register',
        data: formData,
        success: function (response) {
            console.log(response);
            showSuccessMessage(response.message);
            $('#itemForm')[0].reset();
            $('.error-message').empty();
            $('#itemsTable').DataTable().ajax.reload();

        },
        error: function (xhr) {
            if (xhr.status === 422) {
                showErrorMessage('Error occurred during item registration.');
                var errors = xhr.responseJSON.errors;
                $.each(errors, function (key, value) {
                    alert(value[0]);
                });

                $('#' + key + '_error').text(value[0]);
            } else {
                showErrorMessage('Error occurred during item registration.');
            }
        },
    });
});


    });
</script>
@endsection
