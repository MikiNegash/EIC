@extends('common.main')

@section('content')
<div class="container">
      <form id="myForm">
            <div class="row gy-3">
                           <h1>Zone Registration Form</h1>
                           <div id="successMessage" style="display: none;"></div>
                           <div id="errorMessage" style="display: none;"></div>
                  <div class="col-xl-12"> 
                        <label for="input-noradius" class="form-label">Zone Name</label> 
                        <input type="text" class="form-control rounded-0"
                        id="zone_name" placeholder="Enter Zone"> 
                        <div class="error-message" id="name_error"></div>
                  </div>
                  <input type="hidden" name="user_id" id="created_by" value="{{ Auth::user()->id }}">
                  <div class="input-group mb-3"> 
                     <label class="input-group-text" for="inputGroupSelect01">Select Region</label>
                     <select class="form-select" id="region_id">
                             <option value="">Select Region</option>
                                @foreach ($regions as $region)
                                    <option value="{{ $region->id }}">{{ $region->name }}</option>
                                @endforeach
                     </select>
                        <div class="error-message" id="region_id_error"></div>
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
        $('.error-message').empty();
        var formData = {
            _token: '{{ csrf_token() }}',
            name: $('#zone_name').val(),
            created_by: $('#created_by').val(),
            region_id: $('#region_id option:selected').val()
        };

        $.ajax({
            type: 'POST',
            url: '/zone/register',
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
            var errorMessageElement = $('#errorMessage');
            if (errorMessageElement.length) {
                var errorMessages = Object.values(errors).join(' ');
                errorMessageElement.text(errorMessages).show();
            }
            $('#successMessage').hide();
        }
        });
    });
});

</script>

@endsection