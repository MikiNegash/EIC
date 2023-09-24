alert_id=1;
function alerting(message,id,status)
{
    $("#"+id).append("<div style='display:none' class='mt-2 alert alert-"+status+" alerting-"+alert_id+"' ><table style='width:100%'><tr> <td> "+message+" </td> <td style='width:20px'><span style='padding:0px;padding-left:5px;padding-right:5px;padding-bottom:1px;border-radius:15px;text-align:center;border:1px solid red;cursor:pointer'  onclick=\"$('.alerting-"+alert_id+"').slideUp(500)\"  >x<span></td></tr></div>");
    $('.alerting-'+alert_id).slideDown(500);
    setTimeout(hidealert,5000,alert_id);
    alert_id++;
}
function hidealert(id)
{
    $('.alerting-'+id).slideUp(500);
}
