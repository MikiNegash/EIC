

<div class='modal fade' id='alert_success_message_modal' tabindex='-1' aria-labelledby='exampleModalSmLabel' aria-hidden='true'>
    <div class='modal-dialog modal-lg'>
       <div class='modal-content'>
          <div class='modal-header'>
              <h6 class='modal-title' id='exampleModalSmLabel'>Failed or error message</h6>

          </div>
          <div class='modal-body'>

                <div class='alert alert-danger' id='switch_alert_class'>
                    <table style="width:100%">
                        <tr>
                            <td id='alert_danger_message'></td>
                            <td style="width:30px"><button class='btn btn-sm btn-danger' onclick="hide_delete_modal()">NO</button></td>
                        </tr>
                    </table>
                </div>

          </div>
      </div>
    </div>
  </div>

  <script>
  function myalert(message,status)
  {
      if(status=="danger")
      {
         $("#switch_alert_class").removeClass("alert-success");
         $("#switch_alert_class").addClass("alert-danger");
      }
      else
      {
         $("#switch_alert_class").removeClass("alert-danger");
         $("#switch_alert_class").addClass("alert-success");
      }
      $("#alert_success_message_modal").modal("show");
  }

  </script>
