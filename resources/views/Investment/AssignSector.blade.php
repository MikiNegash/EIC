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

    <div class="card " style="margin-top: 10px;">
        <div class="card-header">
            <div class="card-title">
                <h5> <small>Assigned Sectors</small> </h5>

            </div>

        </div>
        <div class="card-body">

            <div class="table-responsive mt-1 pb-3" style='width:100%'>
                <table id="coms_table" class="table text-nowrap user_table vertical-top">
                    <thead>
                        <tr>

                            <th scope="col">#</th>
                            <th scope="col">Investment commission</th>
                            <th scope="col">Assigned Sectors</th>
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
                <h5 class="modal-title" id="messageModalLabel"><small>Assign Sector</small> </h5>
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
<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel"><small>View Assigned Sectors</small></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="viewSecForm">
                    @csrf
                    <input type="hidden" name="assign_edit_id" id="assign_edit_id" class="form-control col-xl-6">
                    <div class="row gy-3">
                        <div class="col-xl-12">
                            <label for="input-rounded1" class="form-label">Investment Commission</label>
                            <input type="text" class="form-control col-xl-6" id="assigninvesCom" name="assigninvesCom" readonly>
                        </div>

                        <div id="check" style="overflow:scroll; max-height:250px;">

                        </div>
                        <div class="table-responsive mt-1 pb-3" style='width:100%'>
                            <table id="views_table" class="table text-nowrap user_table vertical-top">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Assigned Sectors</th>
                                        <th scope="col"></th>

                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>

                            </table>
                        </div>


                    </div>

                </form>
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
            url: '/investment/loadComSector',
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
                data: 'Investment commission',
                name: 'Investment commission'
            },
            {
                data: 'Assigned Sectors',
                name: 'Assigned Sectors'
            },

            {
                data: null,
                render: function(data, type, row) {

                    assign = '<button class=" bi bi-list btn btn-sm btn_primary assign-com" data-id="' + row.id + '" title="Assign"></button>';
                    view = '<button class="bi bi-search btn btn-sm btn-info view-com" data-id="' + row.id + '" title="View"></button>';
                    Edit = '<button class="bi bi-pencil-square btn btn-sm btn-primary edit-com" data-id="' + row.id + '" title="Edit"></button>';
                    /* Delete ='<a class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>' */

                  /*   Delete = '<button class="btn btn-sm btn-danger delete-com bi bi-trash-fill" data-id="' + row.id + '" title="Delete"></button>'; */

                    return assign + " " + view + " " + Edit ;
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



    /*  $('#btnUpdate').onClick(); */

    $('#coms_table').on('click', '.view-com', function() {
        var row = $(this).closest('tr');
        var viewId = row.find('td:eq(0)').text(); // Get the item ID from the first column
        console.log('id: ' + viewId);
        var editName = row.find('td:eq(1)').text(); // Get the item name from the second column
        $.ajax({

            url: "/investment/viewSector",
            type: 'GET',
            data: {
                id: viewId
            },
            beforeSend: function() {
                $('#views_table tbody').empty();
                $('#check').empty();
            },

            success: function(data) {
                console.log(JSON.stringify(data));
                $('#invesCom').val(editName); // Set the item name in the input field
                if (data.assigned.length > 0) {
                    for (var i = 0; i < data.assigned.length; i++) {
                        var j = i + 1;
                        tr = $('<tr/>');
                        tr.append("<td>" + j + "</td>");
                        tr.append("<td>" + data.assigned[i].name + "</td>");
                        $('#views_table').append(tr);
                    }
                } else {
                    tr = $('<tr/>');
                    tr.append("<td colspan='2'>No Record found</td>");
                    $('#views_table').append(tr);
                }


                $('#viewModal').modal('show');
            },
            error: function(data) {
                console.log(data);
            }
        })
    });

    $('#coms_table').on('click', '.assign-com', function() {
        var row = $(this).closest('tr');
        var viewId = row.find('td:eq(0)').text(); // Get the item ID from the first column
        console.log('id: ' + viewId);
        var editName = row.find('td:eq(1)').text(); // Get the item name from the second column
        console.log('Name: '+editName);
        $.ajax({

            url: "/investment/viewSector",
            type: 'GET',
            data: {
                id: viewId
            },
            beforeSend: function() {
                $('#views_table tbody').empty();
                $('#check').empty();
                $('#viewSecForm')[0].reset();
            },
            success: function(data) {
                console.log(editName + " " + viewId);

                // document.getElementById('invesCom').val =editName;


                if (data.assigned.length > 0) {
                    for (var i = 0; i < data.assigned.length; i++) {
                        var j = i + 1;
                        tr = $('<tr/>');
                        tr.append("<td>" + j + "</td>");
                        tr.append("<td>" + data.assigned[i].name + "</td>");
                        tr.append("<td><button class='btn btn-sm btn-danger delete-assign bi bi-trash-fill'  title='Delete'></button></td>");
                        $('#views_table').append(tr);
                    }
                } else {


                    tr = $('<tr/>');
                    tr.append("<td colspan='2'>No Record found</td>");
                    $('#views_table').append(tr);
                }

                if (data.unassigned.length > 0) {
                    lable = "<small>UnAssigned Sectors</small>";
                    $('#check').append(lable + "<br/>");
                    for (var i = 0; i < data.unassigned.length; i++) {

                        input = "<input type='checkbox' id='" + data.unassigned[i].id + "' name='" + data.unassigned[i].id + "'>" + data.unassigned[i].name + "</input><br/>"
                        $('#check').append(input);
                    }

                } else {

                }

                $('#assigninvesCom').val(editName); // Set the item name in the input field
                $('#assign_edit_id').val(viewId);
                $('#viewModal').modal('show');
            },
            error: function(data) {
                console.log(data);
            }
        })
    });



    // Close Modal Event Handler
    $('#viewModal').on('hidden.bs.modal', function(e) {
        // Clear the modal form fields when the modal is closed
        $('#viewSecForm')[0].reset();
    });




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


    $(document).on('click', 'input[type="checkbox"]', function() {
        var sectorid = $(this).attr('id');
        var invCom = $('#assigninvesCom').val();
        var invid = $('#assign_edit_id').val();
        console.log('secID' + sectorid + " invCom: " + invCom + " invid: " + invid);

        $.ajax({

            url: "/investment/assignSectorSubmit",
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                sectorid: sectorid,
                invid: invid,
            },
            beforeSend: function() {
                $('#views_table tbody').empty();
                $('#check').empty();
            },
            success: function(data) {
                console.log(data.assigned);
                if(data.assigned.length > 0){
                    for (var i = 0; i < data.assigned.length; i++) {
                        var j = i + 1;
                        tr = $('<tr/>');
                        tr.append("<td>" + j + "</td>");
                        tr.append("<td>" + data.assigned[i].name + "</td>");
                        tr.append("<td><button class='btn btn-sm btn-danger delete-assign bi bi-trash-fill'  title='Delete'></button></td>");
                        $('#views_table').append(tr);
                    }
                }
                if (data.unassigned.length > 0) {
                    lable = "<small>UnAssigned Sectors</small>";
                    $('#check').append(lable + "<br/>");
                    for (var i = 0; i < data.unassigned.length; i++) {

                        input = "<input type='checkbox' id='" + data.unassigned[i].id + "' name='" + data.unassigned[i].id + "'>" + data.unassigned[i].name + "</input><br/>"
                        $('#check').append(input);
                    }

                }

                //$('#viewModal').modal('show');
            },
            error: function(data) {
                console.log(data);
            }
        })

    });

    function showDeleteConfirmation() {
        // Display the confirmation modal
        var row = $(this).closest('tr');
        //row.find('td:eq(1)').text();
        //var name =$(this).data("id");
        console.log('Delete clicked: ' + delName)
        if (confirm('Are you sure you want to delete this record?')) {
            // If confirmed, make an AJAX request to delete the record


        }
    }
    $('#views_table').on('click', '.delete-assign', function() {
        var row = $(this).closest('tr');
        // var name = $(this).data("id");
        var delId = row.find('td:eq(0)').text(); // Get the item ID from the first column
        var delName = row.find('td:eq(1)').text(); // Get the item name from the second column
        console.log('Delete clicked: ' + delName)
        var token = $("meta[name='csrf-token']").attr("content");
        if (confirm('Are you sure you want to delete this record?')) {
            // If confirmed, make an AJAX request to delete the record
            $.ajax({

                _token: '{{ csrf_token() }}',
                url: "/investment/delSector/" + delName,
                type: 'delete',
                data: {
                    _token: token,
                    delName: delName,
                },
                beforeSend: function(data) {
                    console.log("before send: " + JSON.stringify(data));
                },
                success: function(data) {
                    console.log(new JSON.stringify(data));
                },
                error: function(data) {
                    console.log(JSON.stringify(data));
                }

            })

        }


    });
</script>

@endsection
