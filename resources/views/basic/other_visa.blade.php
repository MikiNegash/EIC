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
        <div class="card-title text-center pl-4"> Other Visa Management</div>
    </div>
    <div class="card-body pl-3">


        @if(Auth::user()->hasPermissionWithName("register_other_visa"))
            <div class="prism-toggle "> <button class="btn btn-primary-light" onclick='register_other_visa()' >New Other Visa</button> </div>
        @endif



        <div class="table-responsive mt-3">
            <table class="table text-nowrap">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Visa Type</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody id='other_visa_table_body'>

                    @foreach($other_visas as $visa)

                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $visa->type }}</td>
                            <td>
                                @if(Auth::user()->hasPermissionWithName("update_other_visa"))
                                    <button class="btn btn-primary" onclick='update_other_visa({{ $visa->id }},"{{ $visa->type }}")'>
                                        Update
                                    </button>
                                @else
                                    <button class="btn btn-primary disabled_ele">
                                        Update
                                    </button>
                                @endif
                            </td>
                            <td>
                                @if(Auth::user()->hasPermissionWithName("delete_other_visa"))
                                    <button class="btn btn-danger" onclick='delete_other_visa({{ $visa->id }},"{{ $visa->type }}")'>
                                        delete
                                    </button>
                                @else
                                    <button class="btn btn-danger disabled_ele">
                                        delete
                                    </button>
                                @endif
                            </td>
                        </tr>

                    @endforeach


                    @if($other_visas->count()==0)

                        <tr class='no_other_visa_message'>
                            <th colspan='4' style='color:red'>There is no other visa created yet!!</th>
                        </tr>

                    @endif


                </tbody>
            </table>
        </div>



        </div>

</div>


<div class='modal fade' id='register_other_visa_modal' tabindex='-1' aria-labelledby='exampleModalSmLabel' aria-hidden='true'>
  <div class='modal-dialog modal-lg'>
     <div class='modal-content'>
        <div class='modal-header'>
            <h6 class='modal-title' id='exampleModalSmLabel'>Register New Visa Type</h6>
            <button type='button' class='btn-close' data-bs-dismiss='modal'
                    aria-label='Close'>
            </button>
        </div>
        <div class='modal-body'>
            <form id='register_other_visa_form' action='/other_visa/register_other_visa'>
                <div class="col-xl-12">
                    <label style="font-weight:bolder" class="mb-2">Visa Type *</label><br/><br/>
                    <input type="text" id='new_other_visa_type' name='type' class="form-control" placeholder="Enter visa type .....">
                </div>
                <br/>
                <input class='btn btn-primary' type='submit'value='Add'>
                <div id='register_other_visa_error'></div>
                <br/>
            </form>
        </div>
    </div>
  </div>
</div>




<div class='modal fade' id='update_other_visa_modal' tabindex='-1' aria-labelledby='exampleModalSmLabel' aria-hidden='true'>
    <div class='modal-dialog modal-lg'>
       <div class='modal-content'>
          <div class='modal-header'>
              <h6 class='modal-title' id='exampleModalSmLabel'>Update Other Visa </h6>
              <button type='button' class='btn-close' data-bs-dismiss='modal'
                      aria-label='Close'></button>
          </div>
          <div class='modal-body'>
              <form id='update_other_visa_form' action='/other_visa/update_other_visa'>
                  <input  id='update_other_visa_id' name='other_visa_id' value="" hidden>
                  <div class="col-xl-12">
                        <label style="font-weight:bolder" class="mb-2">Visa Type*</label><br/>
                        <input type="text" id='update_visa_type' name='type' class="form-control" placeholder="Enter visa type .....">
                  </div>
                  <br/>
                        <input class='btn btn-primary' type='submit' value='Update'>
                        <div id='update_other_visa_error'></div>
                  <br/>
              </form>
          </div>
      </div>
    </div>
  </div>



<div class='modal fade' id='delete_other_visa_modal' tabindex='-1' aria-labelledby='exampleModalSmLabel' aria-hidden='true'>
    <div class='modal-dialog modal-lg'>
       <div class='modal-content'>
          <div class='modal-header'>
              <h6 class='modal-title' id='exampleModalSmLabel'>Delete Other Visa</h6>
              <button type='button' class='btn-close' data-bs-dismiss='modal'
                      aria-label='Close'></button>
          </div>
          <div class='modal-body'>

                <div class='alert alert-danger'>
                    <table style="width:100%;font-size:16px">
                        <tr>
                            <td>Do you want to delete other visa with a name of "<span id='delete_other_visa_type' style='color:brown;font-weight:bolder'></span>"? <br/>
                            </td>
                            <td style="width:60px;vertical-align:top" class='pr-3'><button id='delete_other_visa_confirm' visa_id="" onclick='confirm_deleting_other_visa()' class='btn btn-sm btn-primary'>YES</button></td>
                            <td style="width:40px;vertical-align:top"><button class='btn btn-sm btn-danger' onclick="hide_delete_modal()">NO</button></td>
                        </tr>
                    </table>
                </div>

          </div>
      </div>
    </div>
  </div>





<script>



    @if(Auth::user()->hasPermissionWithName("register_other_visa"))
        function register_other_visa()
        {
            $("#register_other_visa_modal").modal("show");
            $("#new_other_visa_type").val("");
        }
    @endif







    @if(Auth::user()->hasPermissionWithName("register_other_visa"))

    var form = '#register_other_visa_form';
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
                    $("#new_other_visa_type").val("");
                    $("#register_other_visa_modal").modal("hide");
                    location.reload();
                 }
                 else
                 {
                     alerting(data,"register_other_visa_error","danger");
                 }
            },
            error: function(response)
            {
                alert("failed");
            }
        });
    });

    @endif



    @if(Auth::user()->hasPermissionWithName("update_other_visa"))

        function update_other_visa(visa_id,visa_name)
        {
            $("#update_other_visa_modal").modal("show");
            $("#update_other_visa_id").val(visa_id);
            $("#update_visa_type").val(visa_name);
        }

        var form = '#update_other_visa_form';

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
                        $("#update_visa_type").val("");
                        $("#update_other_visa_modal").modal("hide");
                        location.reload();
                    }
                    else
                    {
                        alerting(data,"update_other_visa_error","danger");
                    }
                },
                error: function(response)
                {
                    alert("failed");
                }
            });
        });

    @endif



    @if(Auth::user()->hasPermissionWithName("delete_other_visa"))
        function delete_other_visa(visa_id,visa_type)
        {
            $("#delete_other_visa_confirm").attr("visa_id","");
            $("#delete_other_visa_modal").modal("show");
            $("#delete_other_visa_type").html(visa_type);
            $("#delete_other_visa_confirm").attr("visa_id",visa_id);
        }
        function confirm_deleting_other_visa()
        {
            var delete_other_visa_id=$("#delete_other_visa_confirm").attr("visa_id");
            hide_delete_modal();
            var userURL = '/other_visa/delete_other_visa';
            $.ajax({
                url: userURL,
                type: 'GET',
                dataType: 'text',
                data:{visa_id:delete_other_visa_id},
                success: function(data)
                {
                    if(data=="yes")
                    {
                        location.reload();
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
            $("#delete_other_visa_confirm").attr("visa_id","");
            $("#delete_other_visa_name").html("");
            $("#delete_other_visa_modal").modal("hide");
        }
    @endif




</script>
@endsection

