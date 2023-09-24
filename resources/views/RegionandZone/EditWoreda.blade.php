@extends('common.main')

@section('content')
   <div class="container">
      <form id="myForm">
            <div class="row gy-3">
                           <h1>Edit the Woreda Here</h1>
                           <div id="successMessage" style="display: none;"></div>
                           <div id="errorMessage" style="display: none;"></div>
                  <div class="col-xl-12">
                     <label for="input-noradius" class="form-label">Woreda Name</label> 
                        <input type="text" class="form-control rounded-0" id="woreda_name" value="{{ $woreda->name }}"> 
                        <div class="error-message" id="region_name_error"></div>
                  </div>
                  <input type="hidden" name="user_id" id="created_by" value="{{ Auth::user()->id }}">
                  <div class="input-group mb-3"> 
                  <label class="input-group-text" for="inputGroupSelect01">Change Zone</label>
                    <select class="form-select" id="selected_zone">
                    <option value="{{ $woreda->zone_id }}" selected>{{ $woreda->zone->name }}</option>
                    @foreach ($zones as $zone)
                        @if($zone->id == $woreda->zone_id) 
                               @continue
                        @endif
                        <option value="{{ $zone->id }}">{{ $zone->name }}</option>
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
            name: $('#woreda_name').val(),
            created_by: $('#created_by').val(),
            zone_id: $('#selected_zone option:selected').val()
        };
        $.ajax({
            type: 'post', // Use POST method
            url: '/edit/woreda/{{ $woreda->id }}', // Pass the region ID in the URL
            data: formData,
            success: function(response) {
                console.log(response);
                window.location.href = '/view/woreda'
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
