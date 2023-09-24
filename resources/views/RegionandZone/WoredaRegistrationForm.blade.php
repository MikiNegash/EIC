@extends('common.main')

@section('content')
<div class="container">
      <form id="myForm">
            <div class="row gy-3">
                           <h1>Woreda Registration Form</h1>
                           <div id="successMessage" style="display: none;"></div>
                           <div id="errorMessage" style="display: none;"></div>
                  <div class="col-xl-12"> 
                        <label for="input-noradius" class="form-label">Woreda Name</label> 
                        <input type="text" class="form-control rounded-0"
                        id="woreda_name" placeholder="Enter woreda"> 
                        <div class="error-message" id="woreda_name_error"></div>
                  </div>
                  <input type="hidden" name="user_id" id="created_by" value="{{ Auth::user()->id }}">
                  <div class="input-group mb-3"> 
                     <label class="input-group-text" for="inputGroupSelect01">Select Zone</label>
                     <select class="form-select" id="zone_id">
                             <option value="">Select Zone</option>
                                @foreach ($zones as $zone)
                                    <option value="{{ $zone->id }}">{{ $zone->name }}</option>
                                @endforeach
                     </select>

                        <div class="error-message" id="zone_type_error"></div>
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
            name: $('#woreda_name').val(),
            created_by: $('#created_by').val(),
            zone_id: $('#zone_id option:selected').val()
        };

        $.ajax({
            type: 'POST',
            url: '/woreda/register',
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