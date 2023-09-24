@extends('common.main')

@section('content')
   <div class="container">
      <form id="myForm">
            <div class="row gy-3">
                           <h1>Edit the Region Here</h1>
                           <div id="successMessage" style="display: none;"></div>
                           <div id="errorMessage" style="display: none;"></div>
                  <div class="col-xl-12">
                     <label for="input-noradius" class="form-label">Region Name</label> 
                        <input type="text" class="form-control rounded-0" id="region_name" value="{{ $region->name }}"> 
                        <div class="error-message" id="region_name_error"></div>
                  </div>
                  <div class="col-xl-12"> 
                     <label for="input-rounded" class="form-label">Region Code</label> 
                     <input type="text" class="form-control" id="region_code" value="{{ $region->code }}">
                     <div class="error-message" id="region_code_error"></div> 
                  </div>
                  <input type="hidden" name="user_id" id="created_by" value="{{ Auth::user()->id }}">
                  <div class="input-group mb-3"> 
                     <label class="input-group-text" for="inputGroupSelect01">Select Type</label>
                        <select class="form-select" id="region_type">
                              <option value="Chartered_city" {{ $selectedValue = 'Chartered_city' ? 'selected' : '' }}>Chartered City</option>
                              <option value="Regional_city" {{ $selectedValue = 'Regional_city' ? 'selected' : '' }}>Regional City</option>
                        </select>
                        <div class="error-message" id="region_type_error"></div>
                  </div>
            </div>
         <div class="d-grid gap-2 mb-4"> 
            <button class="btn btn-secondary btn-wave" type="button" id="submitButton">Update</button>
         </div>
     </form>
   </div>

   <script>
$(document).ready(function() {
    $('#submitButton').click(function() {
        $('.error-message').empty();
        var formData = {
            _token: '{{ csrf_token() }}',
            name: $('#region_name').val(),
            code: $('#region_code').val(),
            created_by: $('#created_by').val(),
            type: $('#region_type option:selected').val()
        };
        $.ajax({
            type: 'post', // Use POST method
            url: '/edit/region/{{ $region->id }}', // Pass the region ID in the URL
            data: formData,
            success: function(response) {
                console.log(response);
                window.location.href = '/view/region'
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
