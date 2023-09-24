@extends('common.main')

@section('content')

<style>
 .disabled_ele{
    opacity:0.3;
    cursor: not-allowed;
    pointer-events: none;
 }
</style>
<div class="card custom-card">
    <div class="card-header ">
        <div class="card-title text-center pl-4"> Role Management</div>
    </div>
    <div class="card-body pl-3">


       <table style="width:90%" >
            <tr>
                <td style="width:150px;padding:0px">
                    @if(Auth::user()->hasPermissionWithName("create_new_role"))
                        <div class="prism-toggle "> <button class="btn btn-primary-light" onclick='add_new_role()' >New Role</button> </div>
                    @endif
                </td>
                <td style='padding:0px'>
                    <div class="prism-toggle p-0 bg-success">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><i class="bx bx-search-alt-2 header-link-icon"></i></span>
                            <input type="text" class="form-control" id='search_role_input' onkeyup="load_roles()" placeholder="enter role name...." >
                        </div>
                    </div>
                </td>

            </tr>
        </table>



        <div class="table-responsive mt-3">
            <table class="table text-nowrap table-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Role Name</th>
                        <th scope="col">Permissions</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody id='role_table_body'>

                    <tr class='no_role_message'>
                        <th colspan='5' style='color:red'>There is no role created yet!!</th>

                    </tr>

                </tbody>
            </table>
        </div>



        </div>

</div>


<div class="modal fade" id="view_role_permissions" tabindex="-1"
    aria-labelledby="exampleModalSmLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalSmLabel">Role permissions </h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">

                    <div class="spinner-border spinner" style='position: absolute;' id='load_role_permission_spinner' role="status"> <span class="visually-hidden">Loading...</span> </div>

                <div style="width:100%;background-color:whitesmoke;border:1px solid gray;border-radius:5px" class='p-2'>
                    <table style="width:100%">

                            <tr>
                                <td>
                                    <span style='font-size:16px'><span style='font-weight:bolder'>Role name</span> : <span id='role_name_for_permission' role_id=""></span></span>

                                </td>

                                @if(Auth::user()->hasPermissionWithName("assign_role_permission"))
                                    <td style="width:150px">

                                        <button class='btn btn-sm btn-primary' onclick="$('#assign_all_permission_modal').modal('show');$('#assign_all_permission_role_name').html($('#role_name_for_permission').html())">Assign all</button>
                                    </td>
                                    <td style="width:150px">
                                        <button class='btn  btn-sm btn-danger' onclick="$('#remove_all_permission_modal').modal('show')">Remove all</button>
                                    </td>
                               @endif

                            </tr>

                    </table>

                </div>

                <div id='display_role_permissions'>

                </div>
            </div>
        </div>
    </div>
</div>


<div class='modal fade' id='add_new_role_modal' tabindex='-1' aria-labelledby='exampleModalSmLabel' aria-hidden='true'>
  <div class='modal-dialog modal-lg'>
     <div class='modal-content'>
        <div class='modal-header'>
            <h6 class='modal-title' id='exampleModalSmLabel'>Adding New Role </h6>
            <button type='button' class='btn-close' data-bs-dismiss='modal'
                    aria-label='Close'></button>
        </div>
        <div class='modal-body'>
            <form id='add_new_role_form' action='/role/add_new_role'>
                <div class="col-xl-12">
                    <label style="font-weight:bolder" class="mb-2">Role Name *</label><br/>
                    <input type="text" id='new_role_name' name='role_name' class="form-control" placeholder="Enter role name .....">

                </div>
                <br/>
                <input class='btn btn-primary' type='submit'value='Add'>
                <div id='add_new_role_error'></div>
                <br/>
            </form>
        </div>
    </div>
  </div>
</div>


<div class='modal fade' id='update_role_modal' tabindex='-1' aria-labelledby='exampleModalSmLabel' aria-hidden='true'>
    <div class='modal-dialog modal-lg'>
       <div class='modal-content'>
          <div class='modal-header'>
              <h6 class='modal-title' id='exampleModalSmLabel'>Update Role </h6>
              <button type='button' class='btn-close' data-bs-dismiss='modal'
                      aria-label='Close'></button>
          </div>
          <div class='modal-body'>
              <form id='update_role_form' action='/role/update_role'>
                  <input  id='update_role_id' name='role_id' value="" hidden>
                  <div class="col-xl-12">
                        <label style="font-weight:bolder" class="mb-2">Role Name *</label><br/>
                        <input type="text" id='update_role_name' name='role_name' class="form-control" placeholder="Enter role name .....">
                  </div>
                  <br/>
                        <input class='btn btn-primary' type='submit'value='Update'>
                        <div id='update_role_error'></div>
                  <br/>
              </form>
          </div>
      </div>
    </div>
  </div>



<div class='modal fade' id='delete_role_modal' tabindex='-1' aria-labelledby='exampleModalSmLabel' aria-hidden='true'>
    <div class='modal-dialog modal-lg'>
       <div class='modal-content'>
          <div class='modal-header'>
              <h6 class='modal-title' id='exampleModalSmLabel'>Delete Role </h6>
              <button type='button' class='btn-close' data-bs-dismiss='modal'
                      aria-label='Close'></button>
          </div>
          <div class='modal-body'>

                <div class='alert alert-danger'>
                    <table style="width:100%;font-size:16px">
                        <tr>
                            <td>Do you want to delete role with a name of "<span id='delete_role_name' style='color:brown;font-weight:bolder'></span>"? <br/>
                                <br/><span style='color:red;font-weight:bolder;font-size:14px'>Notice : Every users with this role will lose their permission!!</span></td>
                            <td style="width:60px;vertical-align:top" class='pr-3'><button id='delete_role_confirm' role_id="" onclick='confirm_deleting_role()' class='btn btn-sm btn-primary'>YES</button></td>
                            <td style="width:40px;vertical-align:top"><button class='btn btn-sm btn-danger' onclick="hide_delete_modal()">NO</button></td>
                        </tr>
                    </table>
                </div>

          </div>
      </div>
    </div>
  </div>




<div class='modal fade ' id='assign_all_permission_modal' tabindex='-1' aria-labelledby='exampleModalSmLabel' aria-hidden='true'>
    <div class='modal-dialog modal-dialog-centered modal-lg'>
       <div class='modal-content' style='border:5px solid gray'>
          <div class='modal-header'>
              <h6 class='modal-title' id='exampleModalSmLabel'>Assign all permission for Role </h6>
              <button type='button' class='btn-close' data-bs-dismiss='modal'
                      aria-label='Close'></button>
          </div>
          <div class='modal-body'>

                <div class='alert alert-success'>
                    <table style="width:100%;font-size:16px">
                        <tr>
                            <td>Do you want to assign all the permission for the role of "<span id='assign_all_permission_role_name' style='color:brown;font-weight:bolder'></span>"? <br/>
                            </td>
                            <td style="width:60px;vertical-align:top" class='pr-3'><button id='assign_all_permission_confirm' onclick='$("#assign_all_permission_modal").modal("hide");confirm_assigning_all_permission()' class='btn btn-sm btn-primary'>YES</button></td>
                            <td style="width:40px;vertical-align:top"><button class='btn btn-sm btn-danger' onclick="$('#assign_all_permission_modal').modal('hide')">NO</button></td>
                        </tr>
                    </table>
                </div>

          </div>
      </div>
    </div>
  </div>



  <div class='modal fade ' id='remove_all_permission_modal' tabindex='-1' aria-labelledby='exampleModalSmLabel' aria-hidden='true'>
    <div class='modal-dialog modal-dialog-centered modal-lg'>
       <div class='modal-content' style='border:5px solid gray'>
          <div class='modal-header'>
              <h6 class='modal-title' id='exampleModalSmLabel'>Remove all permission for Role </h6>
              <button type='button' class='btn-close' data-bs-dismiss='modal'
                      aria-label='Close'></button>
          </div>
          <div class='modal-body'>

                <div class='alert alert-danger'>
                    <table style="width:100%;font-size:16px">
                        <tr>
                            <td>Do you want to remove all the permission for the role of "<span id='remove_all_permission_role_name' style='color:brown;font-weight:bolder'></span>"? <br/>
                            </td>
                            <td style="width:60px;vertical-align:top" class='pr-3'><button id='remove_all_permission_confirm' onclick='$("#remove_all_permission_modal").modal("hide");confirm_removing_all_permission()' class='btn btn-sm btn-primary'>YES</button></td>
                            <td style="width:40px;vertical-align:top"><button class='btn btn-sm btn-danger' onclick="$('#remove_all_permission_modal').modal('hide')">NO</button></td>
                        </tr>
                    </table>
                </div>

          </div>
      </div>
    </div>
  </div>




<script>
    @if(Auth::user()->hasPermissionWithName("view_role"))
    function load_roles()
    {
        $(".no_role_message").show();
        $(".role_rows").remove();
        var search_key=$("#search_role_input").val();
        var userURL = '/role/load_roles';
        $.ajax({
            url: userURL,
            type: 'GET',
            data:{ key : search_key },
            dataType: 'json',
            success: function(data)
            {
                $(".role_rows").remove();
                for( i = 0 ;  i < data.length ; i++)
                {
                    $(".no_role_message").hide();

                    var role = data[i];

                    var html = "<tr class='role_rows'><th>" + (i+1) +"</th><td>" + role["name"] + "</td><td>"+role["permission_size"]+" permissions</td>";
                    html+="<td>";

                    html+="     <table >";
                    html+="           <tr>";

                    @if(Auth::user()->hasPermissionWithName("assign_role_permission"))
                        html+="                <td><button class='btn btn-sm btn-success' onclick='view_role_permissions("+role["id"]+",\""+role["name"]+"\")'>Show Permissions</button></td>";
                    @else
                        html+="                <td><button class='btn btn-sm btn-success disabled_ele' >Show Permissions</button></td>";
                    @endif


                    @if(Auth::user()->hasPermissionWithName("update_role"))
                        html+="                <td><button class='btn btn-sm btn-primary' onclick='update_role("+role["id"]+",\""+role["name"]+"\")' >Update</button></td>";
                    @else
                        html+="                <td><button class='btn btn-sm btn-primary disabled_ele' >Update</button></td>";
                    @endif
                    @if(Auth::user()->hasPermissionWithName("delete_role"))
                        html+="                <td><button class='btn btn-sm btn-danger' onclick='delete_role("+role["id"]+",\""+role["name"]+"\")' >Delete</button></td>";
                    @else
                        html+="                <td><button class='btn btn-sm btn-danger disabled_ele' >Delete</button></td>";
                    @endif

                    html+="           </tr>";
                    html+="     </table>";

                    html+="</td></tr>";

                    $("#role_table_body").append(html);
                }
            }
        });
    }
    load_roles();
    @endif

    @if(Auth::user()->hasPermissionWithName("assign_role_permission"))
    function view_role_permissions(role_id,role_name)
    {
        $("#view_role_permissions").modal("show");
        $("#load_role_permission_spinner").show();
        $("#display_role_permissions").html("");
        $("#role_name_for_permission").html(role_name);
        $("#role_name_for_permission").attr("role_id",role_id);

        var userURL = '/role/load_role_permissions';
        $.ajax({
            url: userURL,
            data:{role_id:role_id},
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                $("#load_role_permission_spinner").hide();
                if(!data)
                {
                    $("#display_role_permissions").html("<div class='alert alert-danger'>There is no permission for this role!!</div>");
                }
                else
                {
                    var html="<div class='row'>"

                    for(i=0;i<data.length;i++)
                    {
                        html += "<div class='col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4'>";

                        html += "   <div class='row'>";
                        html += "     <div class='col-12 mt-2'  style='font-weight:bolder'>";

                                   html += data[i]["group_name"];

                        html += "     </div>";
                        html += "   </div>";

                        var permission=data[i]["permissions"];

                        for( j = 0 ; j < permission.length ; j++ )
                        {
                            html += "   <div class='row mt-1 mb-1 '>";

                            html += "         <div class='col-2'>";

                            html += "              <input id='role_permission_"+role_id+"_"+permission[j]["id"]+"' onclick='permission_clicked("+role_id+","+permission[j]["id"]+")' type='checkbox' "+(permission[j]["status"]?"checked":"")+">";

                            html += "         </div>";

                            html += "         <div class='col-10'>";

                            html += permission[j]['label'];

                            html += "         </div>";

                            html += "   </div>";
                        }




                        html += "   </div>";
                    }

                    html += "</div>";

                    $("#display_role_permissions").html(html);
                }

            }
        });

    }


    @endif


    function permission_clicked(role_id,permission_id)
    {
        event.preventDefault();
        @if(Auth::user()->hasPermissionWithName("assign_role_permission"))
            $("#load_role_permission_spinner").show();

            var userURL = '/role/assign_deassign_permission';
            $.ajax({
                url: userURL,
                type: 'GET',
                data:{ role_id:role_id,permission_id : permission_id },
                dataType: 'text',
                success: function(data)
                {
                    $("#load_role_permission_spinner").hide();

                    if(data=="yes")
                    {
                        var checkBoxes=$("#role_permission_"+role_id+"_"+permission_id);
                        load_roles();
                        checkBoxes.prop("checked", !checkBoxes.prop("checked"));
                    }

                }
            });
        @else
            alert("You do not have this permission to assigning and de-assigning role permission!!");
        @endif

    }

    @if(Auth::user()->hasPermissionWithName("assign_role_permission"))

        function confirm_assigning_all_permission()
        {
            var userURL = '/role/assign_all_role_permission';
            $.ajax({
                url: userURL,
                type: 'GET',
                dataType: 'text',
                data:{role_id:$("#role_name_for_permission").attr("role_id")},
                success: function(data)
                {
                    if(data=="yes")
                    {
                        view_role_permissions($("#role_name_for_permission").attr("role_id"),$("#role_name_for_permission").html());
                    }
                    else
                    {
                        alert(data);
                    }
                }
            });

        }
        function confirm_removing_all_permission()
        {
            var userURL = '/role/remove_all_role_permission';
            $.ajax({
                url: userURL,
                type: 'GET',
                dataType: 'text',
                data:{role_id:$("#role_name_for_permission").attr("role_id")},
                success: function(data)
                {
                    if(data=="yes")
                    {
                        view_role_permissions($("#role_name_for_permission").attr("role_id"),$("#role_name_for_permission").html());
                    }
                    else
                    {
                        alert(data);
                    }
                }
            });

        }

    @endif


    @if(Auth::user()->hasPermissionWithName("create_new_role"))
        function add_new_role()
        {
            $("#add_new_role_modal").modal("show");
            $("#new_role_name").val("");
        }
    @endif







    @if(Auth::user()->hasPermissionWithName("create_new_role"))

    var form = '#add_new_role_form';
    $(form).on('submit', function(event){
        event.preventDefault();

        var url = $(this).attr('action');

        $.ajax({
            url: url,
            method: 'POST',
            data: new FormData(this),
            dataType: 'text',
            contentType: false,
            cache: false,
            processData: false,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            success:function(data)
            {
                if(data=='yes')
                 {
                    $("#new_role_name").val("");
                    $("#add_new_role_modal").modal("hide");
                    load_roles();
                 }
                 else
                 {
                     alerting(data,"add_new_role_error","danger");
                 }
            },
            error: function(response) {
            }
        });
    });

    @endif



    @if(Auth::user()->hasPermissionWithName("update_role"))

        function update_role(role_id,role_name)
        {
            $("#update_role_modal").modal("show");
            $("#update_role_id").val(role_id);
            $("#update_role_name").val(role_name);
        }

        var form = '#update_role_form';

        $(form).on('submit', function(event)
        {
            event.preventDefault();

            var url = $(this).attr('action');

            $.ajax({
                url: url,
                method: 'POST',
                data: new FormData(this),
                dataType: 'text',
                contentType: false,
                cache: false,
                processData: false,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success:function(data)
                {
                    if(data=='yes')
                    {
                        $("#update_role_name").val("");
                        $("#update_role_modal").modal("hide");
                        load_roles();
                    }
                    else
                    {
                        alerting(data,"update_role_error","danger");
                    }
                },
                error: function(response)
                {

                }
            });
        });

    @endif



    @if(Auth::user()->hasPermissionWithName("delete_role"))
        function delete_role(role_id,role_name)
        {
            $("#delete_role_confirm").attr("role_id","");
            $("#delete_role_modal").modal("show");
            $("#delete_role_name").html(role_name);
            $("#delete_role_confirm").attr("role_id",role_id);
        }
        function confirm_deleting_role()
        {
            var delete_role_id=$("#delete_role_confirm").attr("role_id");
            hide_delete_modal();
            var userURL = '/role/delete_role';
            $.ajax({
                url: userURL,
                type: 'GET',
                dataType: 'text',
                data:{role_id:delete_role_id},
                success: function(data)
                {
                    if(data=="yes")
                    {
                        load_roles();
                    }
                    else
                    {
                        alert(data);
                    }
                }
            });

        }
        function hide_delete_modal()
        {
            $("#delete_role_confirm").attr("role_id","");
            $("#delete_role_name").html("");
            $("#delete_role_modal").modal("hide");
        }
    @endif




</script>
@endsection

