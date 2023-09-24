@extends('common.main')

@section('content')
   <div class="container">
      <form id="myForm">
            <div class="row gy-3">
                           <h1>Edit Zone Here</h1>
                           <div id="successMessage" style="display: none;"></div>
                           <div id="errorMessage" style="display: none;"></div>
                  <div class="col-xl-12">
                     <label for="input-noradius" class="form-label">Zone Name</label> 
                        <input type="text" class="form-control rounded-0" id="zone_name" value="{{ $zone->name }}"> 
                        <div class="error-message" id="zone_name_error"></div>
                  </div>
                  <input type="hidden" name="user_id" id="created_by" value="{{ Auth::user()->id }}">
                  <div class="input-group mb-3"> 
                  <label class="input-group-text" for="inputGroupSelect01">Change Region</label>
                <select class="form-select" id="selected_region">
                <option value="{{ $zone->region_id }}" selected>{{ $zone->region->name }}</option>
                    @foreach ($regions as $region)
                        @if($region->id == $zone->region_id) 
                               @continue
                        @endif
                        <option value="{{ $region->id }}">{{ $region->name }}</option>
                    @endforeach
                </select>
                        <div class="error-message" id="zone_type_error"></div>
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
            name: $('#zone_name').val(),
            created_by: $('#created_by').val(),
            region_id: $('#selected_region option:selected').val()
        };
        $.ajax({
            type: 'post', // Use POST method
            url: '/edit/zone/{{$zone->id}}', // Pass the zone ID in the URL
            data: formData,
            success: function(response) {
                console.log(response);
                window.location.href = '/view/zone'
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
