@extends('common.main')

@section('content')


<style>
 .disabled_ele{
    opacity:0.3;
    cursor: not-allowed;
    pointer-events: none;
 }
 .deletex{
     text-align:center;
     border:1px solid gray;
     padding:0px;
     padding-left:3px;
     padding-right:3px;
     padding-bottom:0px;
     border-radius:3px;
     cursor:pointer;
     color:red;
     border-color: red;
 }
 .deletex:hover{
    opacity:0.5
 }
 .btn-block{
    width:100%
 }
 .vertical-top>tbody>tr>td{
    vertical-align:top;
 }

</style>



<script>



const clearHistoryBtn = `
    <span>All records will be removed</span>
    <button type="button" class="confirm-clear-history btn btn-sm btn-danger" onclick="alert('event raised from yes button');">Yes</button>
    <button type="button" class="btn btn-sm btn-link" onclick="alert('event raised from no button');">No</button>
`;

</script>



<div class="card custom-card mt-1">
    <div class="card-header justify-content-between">
        <div class="card-title text-center pl-4"> User Management</div>
        <div class="prism-toggle">
            <button class="btn btn-sm btn-primary-light" onclick="add_user_method()">NEW USER</i></button>
        </div>
    </div>
    <div class="card-body pl-3">


        <div class="table-responsive mt-1 pb-3" style='width:100%'>
            <table  class="table text-nowrap user_table vertical-top">
                <thead>
                    <tr>

                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Roles</th>
                        <th scope="col">Permission</th>
                        <th scope="col">Last Login</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>

                    </tr>
                </thead>

            </table>
        </div>


    </div>
</div>




<div class='modal fade' id='add_new_user_modal' tabindex='-1' aria-labelledby='exampleModalSmLabel' aria-hidden='true'>
    <div class='modal-dialog modal-lg'>
       <div class='modal-content'>
          <div class='modal-header'>
              <h6 class='modal-title' id='exampleModalSmLabel'>Adding New User </h6>
              <button type='button' class='btn-close' data-bs-dismiss='modal'
                      aria-label='Close'></button>
          </div>
          <div class='modal-body'>
              <form id='add_new_user_form' action='/user/add_new_user'>
                  <div class="col-xl-12">

                      <label style="font-weight:bolder" class="mb-2">Name *</label><br/>
                      <input type="text" id='new_user_name' name='user_name' class="form-control" placeholder="Enter user name ....."><br/>
                      <label style="font-weight:bolder" class="mb-2">Email *</label><br/>
                      <input type="text" id='new_user_email' name='email' class="form-control" placeholder="Enter user email ....."><br/>

                 </div>

                  <input class='btn btn-primary' type='submit'value='Register'><br/>
                  <div id="new_user_registration_error">

                  </div>
                  <br/>
              </form>
          </div>
      </div>
    </div>
  </div>








<div class='modal fade' id='assign_new_role_modal' tabindex='-1' aria-labelledby='exampleModalSmLabel' aria-hidden='true'>
    <div class='modal-dialog modal-lg'>
       <div class='modal-content'>
          <div class='modal-header'>
              <h6 class='modal-title' id='exampleModalSmLabel'>Assign Role For User</h6>
              <button type='button' class='btn-close' data-bs-dismiss='modal'
                      aria-label='Close'></button>
          </div>
          <div class='modal-body'>
              <form id='assign_user_role_form' action='/user/assign_user_role'>
                  <div class="col-xl-12">

                        <input name='user_id' id='assign_role_user_id' value='' hidden>
                        <label style="font-weight:bolder" class="mb-2 mt-2">User name</label><br/>
                        <input  value='' id='assign_role_user_name' class="form-control form-control-sm" readonly disabled>

                        <label style="font-weight:bolder" class="mb-2 mt-2">User email</label><br/>
                        <input  value='' id='assign_role_user_email' class="form-control form-control-sm" readonly disabled>

                        <label style="font-weight:bolder" class="mb-2 mt-2">Select Role*</label><br/>
                        <select class="form-control form-control-sm" name='role_id' id='assign_user_role_role_id'>

                        </select><br/>

                 </div>

                  <input class='btn btn-primary' type='submit'value='Assign'><br/>
                  <div id="assign_user_role_error">

                  </div>
                  <br/>
              </form>
          </div>
      </div>
    </div>
  </div>




<style>


.circle-img {
  width: 30px;
  height: 30px;
  overflow: hidden;
}

.circle-img img {
  height: 100%;
  transform: translateX(-50%);
  margin-left: 0%;
}
.paginate_button{
    padding:5px;
    padding-left:7px;
    padding-right:7px;
    border:1px solid lightgray;
    cursor:pointer;
    margin-bottom:15px
}
</style>




<div class='modal fade ' id='remove_user_role_modal' tabindex='-1' aria-labelledby='exampleModalSmLabel' aria-hidden='true'>
    <div class='modal-dialog modal-dialog-centered modal-lg'>
       <div class='modal-content' style='border:5px solid gray'>
          <div class='modal-header'>
              <h6 class='modal-title' id='exampleModalSmLabel'>Remove User Role </h6>
              <button type='button' class='btn-close' data-bs-dismiss='modal'
                      aria-label='Close'></button>
          </div>
          <div class='modal-body'>

                <div class='alert alert-danger'>
                    <table style="width:100%;font-size:16px">
                        <tr>
                            <td>Do you want to remove a role "<span id='remove_user_role_role_name' style='color:brown;font-weight:bolder'></span>" for user "<span id='remove_user_role_user_name' style='color:brown;font-weight:bolder'></span>"? <br/>
                            </td>
                            <td style="width:60px;vertical-align:top" class='pr-3'><button role_id="" user_id="" id='remove_user_role_confirm' onclick='$("#remove_user_role_modal").modal("hide");confirm_removing_user_role()' class='btn btn-sm btn-primary'>YES</button></td>
                            <td style="width:40px;vertical-align:top"><button class='btn btn-sm btn-danger' onclick="$('#remove_user_role_modal').modal('hide')">NO</button></td>
                        </tr>
                    </table>
                </div>

          </div>
      </div>
    </div>
  </div>




<div class="modal fade" id="view_user_permissions_modal" tabindex="-1"
  aria-labelledby="exampleModalSmLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
      <div class="modal-content">
          <div class="modal-header">
              <h6 class="modal-title" id="exampleModalSmLabel">User permissions </h6>
              <button type="button" class="btn-close" data-bs-dismiss="modal"
                  aria-label="Close"></button>
          </div>
          <div class="modal-body">

                  <div class="spinner-border spinner" style='position: absolute;' id='load_user_permission_spinner' role="status"> <span class="visually-hidden">Loading...</span> </div>

              <div style="width:100%;background-color:whitesmoke;border:1px solid gray;border-radius:5px" class='p-2'>
                  <table style="width:100%">

                          <tr>
                              <td>
                                  <table style='width:100%'>
                                        <tr>
                                            <td style="width:60px">
                                                <span style='font-size:16px'><span style='font-weight:bolder'>User_name</span>
                                            </td>
                                            <td style="width:10px;text-align:center">
                                                :
                                            </td>
                                            <td>
                                                <span id='user_name_for_permission' user_id=""></span>
                                            </td>
                                        </tr>
                                  </table>
                              </td>

                              @if(Auth::user()->hasPermissionWithName("assign_user_permission"))
                                  <td style="width:100px">
                                      <button class='btn btn-sm btn-primary' onclick="$('#assign_all_permission_modal').modal('show');$('#assign_all_permission_user_name').html($('#user_name_for_permission').html())">Assign all</button>
                                  </td>
                                  <td style="width:100px">
                                      <button class='btn  btn-sm btn-danger' onclick="$('#remove_all_permission_modal').modal('show')">Remove all</button>
                                  </td>
                             @endif

                          </tr>

                  </table>

              </div>

              <div id='display_user_permissions'>

              </div>
          </div>
      </div>
  </div>
</div>






<div class='modal fade ' id='assign_all_permission_modal' tabindex='-1' aria-labelledby='exampleModalSmLabel' aria-hidden='true'>
    <div class='modal-dialog modal-dialog-centered modal-lg'>
       <div class='modal-content' style='border:5px solid gray'>
          <div class='modal-header'>
              <h6 class='modal-title' id='exampleModalSmLabel'>Assign all permission for user </h6>
              <button type='button' class='btn-close' data-bs-dismiss='modal'
                      aria-label='Close'></button>
          </div>
          <div class='modal-body'>

                <div class='alert alert-success'>
                    <table style="width:100%;font-size:16px">
                        <tr>
                            <td>Do you want to assign all the permission for the user of "<span id='assign_all_permission_user_name' style='color:brown;font-weight:bolder'></span>"? <br/>
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
              <h6 class='modal-title' id='exampleModalSmLabel'>Remove all permission for user </h6>
              <button type='button' class='btn-close' data-bs-dismiss='modal'
                      aria-label='Close'></button>
          </div>
          <div class='modal-body'>

                <div class='alert alert-danger'>
                    <table style="width:100%;font-size:16px">
                        <tr>
                            <td>Do you want to remove all the permission for the user of "<span id='remove_all_permission_user_name' style='color:brown;font-weight:bolder'></span>"? <br/>
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




  <div class='modal fade ' id='enable_user_modal' tabindex='-1' aria-labelledby='exampleModalSmLabel' aria-hidden='true'>
    <div class='modal-dialog modal-dialog-centered modal-lg'>
       <div class='modal-content' style='border:5px solid gray'>
          <div class='modal-header'>
              <h6 class='modal-title' id='exampleModalSmLabel'>Enable User Status</h6>
              <button type='button' class='btn-close' data-bs-dismiss='modal'
                      aria-label='Close'></button>
          </div>
          <div class='modal-body'>

                <div class='alert alert-green'>
                    <table style="width:100%;font-size:16px">
                        <tr>
                            <td>Do you want to switch a user "<span id='enable_user_user_name' style='color:brown;font-weight:bolder'></span>" from disabled to enabled? <br/>
                            </td>
                            <td style="width:60px;vertical-align:top" user_id="" class='pr-3'><button id='enable_disable_user_confirm' onclick='$("#enable_user_modal").modal("hide");confirm_enable_disable_user()' class='btn btn-sm btn-primary enable_disable_user_confirm'>YES</button></td>
                            <td style="width:40px;vertical-align:top"><button class='btn btn-sm btn-danger' onclick="$('#enable_user_modal').modal('hide')">NO</button></td>
                        </tr>
                    </table>
                </div>

          </div>
      </div>
    </div>
  </div>



  <div class='modal fade ' id='disable_user_modal' tabindex='-1' aria-labelledby='exampleModalSmLabel' aria-hidden='true'>
    <div class='modal-dialog modal-dialog-centered modal-lg'>
       <div class='modal-content' style='border:5px solid gray'>
          <div class='modal-header'>
              <h6 class='modal-title' id='exampleModalSmLabel'>Disable User Status</h6>
              <button type='button' class='btn-close' data-bs-dismiss='modal'
                      aria-label='Close'></button>
          </div>
          <div class='modal-body'>

                <div class='alert alert-green'>
                    <table style="width:100%;font-size:16px">
                        <tr>
                            <td>Do you want to switch a user "<span id='disable_user_user_name' style='color:brown;font-weight:bolder'></span>" from enabled to disabled? <br/>
                            </td>
                            <td style="width:60px;vertical-align:top" class='pr-3'><button id='enable_disable_user_confirm' onclick='$("#disable_user_modal").modal("hide");confirm_enable_disable_user()' user_id="" class='btn btn-sm btn-primary enable_disable_user_confirm'>YES</button></td>
                            <td style="width:40px;vertical-align:top"><button class='btn btn-sm btn-danger' onclick="$('#disable_user_modal').modal('hide')">NO</button></td>
                        </tr>
                    </table>
                </div>

          </div>
      </div>
    </div>
  </div>




  <div class='modal fade' id='update_user_modal' tabindex='-1' aria-labelledby='exampleModalSmLabel' aria-hidden='true'>
    <div class='modal-dialog modal-lg'>
       <div class='modal-content'>
          <div class='modal-header'>
              <h6 class='modal-title' id='exampleModalSmLabel'>Update User </h6>
              <button type='button' class='btn-close' data-bs-dismiss='modal'
                      aria-label='Close'></button>
          </div>
          <div class='modal-body'>
              <form id='update_user_form' action='/user/update_user'>
                  <div class="col-xl-12">

                      <input   id='update_user_id' name='user_id' value='' hidden>
                      <label style="font-weight:bolder" class="mb-2">Name *</label><br/>
                      <input type="text" id='update_user_name' name='user_name' class="form-control" placeholder="Enter user name ....."><br/>
                      <label style="font-weight:bolder" class="mb-2">Email *</label><br/>
                      <input type="text" id='update_user_email' name='email' class="form-control" placeholder="Enter user email ....."><br/>

                 </div>

                  <input class='btn btn-primary' type='submit'value='Update'><br/>
                  <div id="user_update_error">

                  </div>
                  <br/>
              </form>
          </div>
      </div>
    </div>
  </div>




  <div class='modal fade ' id='delete_user_modal' tabindex='-1' aria-labelledby='exampleModalSmLabel' aria-hidden='true'>
    <div class='modal-dialog modal-dialog-centered modal-lg'>
       <div class='modal-content' style='border:5px solid gray'>
          <div class='modal-header'>
              <h6 class='modal-title' id='exampleModalSmLabel'>Delete User</h6>
              <button type='button' class='btn-close' data-bs-dismiss='modal'
                      aria-label='Close'></button>
          </div>
          <div class='modal-body'>

                <div class='alert alert-danger'>
                    <table style="width:100%;font-size:16px">
                        <tr>
                            <td>Do you want to delete a user "<span id='delete_user_user_name' style='color:brown;font-weight:bolder'></span>"? <br/></td>
                            <td style="width:60px;vertical-align:top" class='pr-3'><button id='delete_user_confirm' onclick='$("#delete_user_modal").modal("hide");confirm_delete_user()' user_id="" class='btn btn-sm btn-primary'>YES</button></td>
                            <td style="width:40px;vertical-align:top"><button class='btn btn-sm btn-danger' onclick="$('#delete_user_modal').modal('hide')">NO</button></td>
                        </tr>
                    </table>
                </div>

          </div>
      </div>
    </div>
  </div>




<script>

function enable_user(id,name)
{
    $("#enable_user_modal").modal("show");
    $("#enable_user_user_name").html(name);
    $(".enable_disable_user_confirm").attr('user_id',id);
}
function disable_user(id,name)
{
    $("#disable_user_modal").modal("show");
    $("#disable_user_user_name").html(name);
    $(".enable_disable_user_confirm").attr('user_id',id);
}

function confirm_enable_disable_user()
{
    var userURL = '/user/enable_disable_user';
    $.ajax({
        url: userURL,
        type: 'GET',
        dataType: 'text',
        data:{user_id:$(".enable_disable_user_confirm").attr("user_id")},
        success: function(data)
        {
            if(data=="yes")
            {
                refresh_datatable();
            }
            else
            {
                alert(data);
            }
        }
    });
}

function view_user_permission(user_id,user_name)
{
    $("#view_user_permissions_modal").modal("show");

    $("#load_user_permission_spinner").show();
    $("#display_user_permissions").html("");
    $("#user_name_for_permission").html(user_name);
    $("#user_name_for_permission").attr("user_id",user_id);
    load_user_permissions(user_id);
}

function load_user_permissions(user_id)
{
    $("#load_user_permission_spinner").show();
    var userURL = '/user/load_user_permissions';
    $.ajax({
        url: userURL,
        data:{user_id:user_id},
        type: 'GET',
        dataType: 'json',
        success: function(data) {
            $("#load_user_permission_spinner").hide();
            if(!data)
            {
                $("#display_user_permissions").html("<div class='alert alert-danger'>There is no permission for this user!!</div>");
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

                        html += "              <input id='user_permission_"+user_id+"_"+permission[j]["id"]+"' onclick='permission_clicked("+user_id+","+permission[j]["id"]+")' type='checkbox' "+(permission[j]["status"]?"checked":"")+">";

                        html += "         </div>";

                        html += "         <div class='col-10'>";

                        html += permission[j]['label'];

                        html += "         </div>";

                        html += "   </div>";
                    }

                    html += "   </div>";

                }

                html += "</div>";

                $("#display_user_permissions").html(html);
            }

        }
    });
}



function confirm_assigning_all_permission()
{
    var userURL = '/user/assign_all_user_permission';
    $.ajax({
        url: userURL,
        type: 'GET',
        dataType: 'text',
        data:{user_id:$("#user_name_for_permission").attr("user_id")},
        success: function(data)
        {
            if(data=="yes")
            {
                load_user_permissions($("#user_name_for_permission").attr("user_id"));
                refresh_datatable();
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
    var userURL = '/user/remove_all_user_permission';
    $.ajax({
        url: userURL,
        type: 'GET',
        dataType: 'text',
        data:{user_id:$("#user_name_for_permission").attr("user_id")},
        success: function(data)
        {
            if(data=="yes")
            {
                load_user_permissions($("#user_name_for_permission").attr("user_id"));
                refresh_datatable();
            }
            else
            {
                alert(data);
            }
        }
    });

}



function permission_clicked(user_id,permission_id)
{
    event.preventDefault();
    @if(Auth::user()->hasPermissionWithName("assign_user_permission"))
        $("#load_user_permission_spinner").show();

        var userURL = '/user/assign_deassign_user_permission';
        $.ajax({
            url: userURL,
            type: 'GET',
            data:{ user_id:user_id,permission_id : permission_id },
            dataType: 'text',
            success: function(data)
            {
                $("#load_user_permission_spinner").hide();

                if(data=="yes")
                {
                    var checkBoxes=$("#user_permission_"+user_id+"_"+permission_id);
                    refresh_datatable();
                    checkBoxes.prop("checked", !checkBoxes.prop("checked"));
                }
                else
                {
                    alert(data);
                }
            }
        });
    @else
        alert("You do not have this permission to assigning and de-assigning role permission!!");
    @endif

}


function remove_usert_role(user_id,role_id,user_name,role_name)
{
    $('#remove_user_role_role_name').html(role_name);
    $('#remove_user_role_user_name').html(user_name);
    $('#remove_user_role_confirm').attr("user_id",user_id);
    $('#remove_user_role_confirm').attr("role_id",role_id);

    $('#remove_user_role_modal').modal("show");

}
function confirm_removing_user_role()
{
    var userURL = '/user/remove_user_role';
    $.ajax({
        url: userURL,
        type: 'GET',
        dataType: 'text',
        data:{user_id:$('#remove_user_role_confirm').attr("user_id"),role_id:$('#remove_user_role_confirm').attr("role_id")},
        success: function(data)
        {
           if(data=='yes')
           {
                refresh_datatable();
           }
           else
           {
                alert(data);
           }
        }
    });
}
function assign_user_role(user_id,name,email)
{
    $('#assign_user_role_form').trigger("reset");
    $("#assign_new_role_modal").modal("show");

    $("#assign_role_user_id").val(user_id);
    $("#assign_role_user_name").val(name);
    $("#assign_role_user_email").val(email);
    reload_un_assigned_user_role(user_id);
}
function reload_un_assigned_user_role(user_id)
{
    $("#assign_user_role_role_id").html("<option value='0'>--select role--</option>");
    var userURL = '/user/unassigned_role';
    $.ajax({
        url: userURL,
        type: 'GET',
        dataType: 'json',
        data:{user_id:user_id},
        success: function(data)
        {
            for(i=0;i<data.length;i++)
            {
                if(data[i]["status"]==0)
                {
                    $("#assign_user_role_role_id").append("<option value='"+data[i]["id"]+"'>"+data[i]["name"]+"</option>");
                }
            }
        }
    });
}


$("#assign_user_role_form").on('submit', function(event){
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
                    reload_un_assigned_user_role($("#assign_role_user_id").val());
                    refresh_datatable();
                 }
                 else
                 {
                     alerting(data,"assign_user_role_error","danger");
                 }
            },
            error: function(response)
            {
            }
        });
    });


function view_user_action(id)
{
    $(".hide_action").hide();
    $(".view_action").show();
    $(".hide_action_"+id).show();
    $(".view_action_"+id).hide();

    $(".user_action").hide();
    $(".user_action_"+id).show();
}
function hide_user_action(id)
{
    $(".hide_action").hide();
    $(".view_action").show();
    $(".user_action").hide();
}


function add_user_method()
{
    $('#add_new_user_form').trigger("reset");
    $('#add_new_user_modal').modal("show");
}



$("#add_new_user_form").on('submit', function(event){
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
                $('#add_new_user_form').trigger("reset");
                $("#add_new_user_modal").modal("hide");
                refresh_datatable();
                }
                else
                {
                    alerting(data,"new_user_registration_error","danger");
                }
        },
        error: function(response)
        {
        }
    });
});



$(function () {
        var table = $('.user_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "/user/load_users"
        },
        columns: [

                {data: 'DT_RowIndex', name: 'DT_RowIndex',orderable: false,searchable: false},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'roles', name: 'roles'},
                {data: 'permissions', name: 'permissions'},
                {data: 'last_login', name: 'last_login'},
                {data: 'user_status', name: 'user_status'},

                {data: 'action', name: 'action',orderable: false,searchable: false},

            ]
        });
        //$(".dataTables_filter").remove();
        //$(".dataTables_length").remove();
        dataTableSearch = $('.user_table').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
        $('#dataTableSearch').keyup(function(){
            dataTableSearch.search($(this).val()).draw() ;
        })
        $('#dataTableSize').change(function(){
            dataTableSearch.page.len($(this).val()).draw() ;
        })

        dataTableSearch.page.len(5).draw() ;
});

function refresh_current_datatable_page()
{
    dataTableSearch.ajax.reload( null, false )
}


function refresh_datatable()
{
    dataTableSearch.draw() ;
}



$("#update_user_form").on('submit', function(event){
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
                $('#update_user_form').trigger("reset");
                $("#update_user_modal").modal("hide");
                refresh_current_datatable_page();
            }
            else
            {
                alerting(data,"user_update_error","danger");
            }
        },
        error: function(response)
        {
        }
    });
});


function update_user (id,name,email)
{
    $("#update_user_modal").modal("show");
    $("#update_user_name").val(name);
    $("#update_user_email").val(email);
    $("#update_user_id").val(id);
}

function delete_user(user_id,user_name)
{
    $("#delete_user_modal").modal("show");
    $("#delete_user_confirm").attr("user_id",user_id);
    $("#delete_user_user_name").html(user_name);
}
function confirm_delete_user()
{
    var userURL = '/user/delete_user';
    $.ajax({
        url: userURL,
        type: 'GET',
        dataType: 'text',
        data:{user_id:$("#delete_user_confirm").attr("user_id")},
        success: function(data)
        {
            if(data=="yes")
            {
                refresh_datatable();
            }
            else
            {
                alert(data);
            }
        }
    });
}
</script>
@endsection
