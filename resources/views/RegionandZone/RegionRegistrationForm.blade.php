@extends('common.main')

@section('content')
   <div class="container">
      <form id="myForm">
            <div class="row gy-3">
                           <h1>Region Registration Form</h1>
                           <div id="successMessage" style="display: none;"></div>
                           <div id="errorMessage" style="display: none;"></div>
                  <div class="col-xl-12"> <label for="input-noradius" class="form-label">Region Name
                        </label> <input type="text" class="form-control rounded-0"
                        id="region_name" placeholder="Enter Region"> 
                        <div class="error-message" id="region_name_error"></div>
                  </div>
                  <div class="col-xl-12"> 
                     <label for="input-rounded" class="form-label">Region Code</label> 
                     <input type="text" class="form-control" id="region_code" placeholder="Enter Region Code">
                     <div class="error-message" id="region_code_error"></div> 
                  </div>
                  <input type="hidden" name="user_id" id="created_by" value="{{ Auth::user()->id }}">
                  <div class="input-group mb-3"> 
                     <label class="input-group-text" for="inputGroupSelect01">Select Type</label>
                        <select class="form-select" id="region_type">
                              <option selected>Choose </option>
                              <option value="Chartered_city">Chartered City</option>
                              <option value="Regional_city">Regional City</option>
                        </select>
                        <div class="error-message" id="region_type_error"></div>
                  </div>
            </div>
         <div class="d-grid gap-2 mb-4"> 
            <button class="btn btn-secondary btn-wave" type="button" id="submitButton">Register</button>
         </div>
     </form>
   </div>

     <script>
$(document).ready(function() {
    $('#submitButton').click(function() {
        // Reset previous error messages
        $('.error-message').empty();

        var formData = {
            _token: '{{ csrf_token() }}',
            name: $('#region_name').val(),
            code: $('#region_code').val(),
            created_by: $('#created_by').val(),
            type: $('#region_type option:selected').val()
        };

        $.ajax({
            type: 'POST',
            url: '/region/register',
            data: formData,
            success: function(response) {
                console.log(response);
                $('#successMessage').text(response.message).show();
                $('#errorMessage').hide();
                $('#myForm')[0].reset();
                $('.error-message').empty();
            },
            error: function(xhr, status, error) {
                var errors = xhr.responseJSON && xhr.responseJSON.errors ? xhr.responseJSON.errors : {};
                console.log(errors);
                $.each(errors, function(key, value) {
                    $('#' + key + '_error').text(value[0]);
                });
                $('#successMessage').hide();
            }
        });
    });
});
</script>


@endsection