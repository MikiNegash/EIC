@extends('common.main')

@section('content')


<div class="card custom-card mt-1">
    <div class="card-header justify-content-between">
        <div class="card-title text-center pl-4"> Letter Types</div>
        =
    </div>
    <div class="card-body pl-3 pb-3">


        <div class="table-responsive mt-1 mb-3 pb-3" style='width:100%'>
            <table  class="table text-nowrap letter_type_table vertical-top">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Letter code</th>
                        <th scope="col">Description</th>
                        <th scope="col">Type</th>
                        <th scope="col">WithWhom</th>
                        <th scope="col">Written TO</th>
                        <th scope="col">View Template</th>
                        <th></th>
                    </tr>
                </thead>

            </table>
        </div>


    </div>
</div>
<style>
     .paginate_button
     {
        padding:5px;
        padding-left:7px;
        padding-right:7px;
        border:1px solid lightgray;
        cursor:pointer;
        margin-bottom:15px
     }
     .ck-editor__editable_inline
     {
        min-height: 200px;
     }
</style>


<div class='modal fade' id='add_template_code_template' tabindex='-1' aria-labelledby='exampleModalSmLabel' aria-hidden='true'>
  <div class='modal-dialog modal-xl'>
     <div class='modal-content'>
       <div class='modal-header'>
           <h6 class='modal-title' id='exampleModalSmLabel'>Add New Template </h6>
           <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
       </div>
       <div class='modal-body'>
            <form id='add_letter_template'>

                    <input name='letter_code_id' value="" id='add_template_letter_code_id' hidden>

                    <strong>Letter Code</strong><br/>

                    <input placeholder='letter code .....' id="add_template_letter_code" class="form-control form-control-sm mt-2 mb-2" disabled>

                    <strong>Letter Description</strong><br/>
                    <input placeholder='letter description .....' id="add_template_letter_description" class="form-control form-control-sm mt-2 mb-2" disabled>

                    <strong>Letter Subject </strong><br/>
                    <textarea name='subject' class="form-control form-control-sm mt-2 mb-2" placeholder="enter subject for letter...."></textarea>

                    <strong>Letter body </strong><br/><br/>
                    <textarea name="content" id="template_textarea" style='display:none'>
                    </textarea>

                    <div id='quill_editor'></div><br/>


                    <strong>Letter Closure</strong><br/>
                    <input placeholder='Enter closure word .....(ex With regards!!)'  class="form-control form-control-sm mt-2 mb-2" name="closure">




                    <table class="mt-3 mb-2">

                        <tr>
                            <td>
                                <a class="btn btn-info" onclick="preview_letter()">preview</a>
                            </td>
                            <td style='padding-left:15px'>
                                <input type='submit' class="btn btn-primary ml-2" value="add template">
                            </td>
                        </tr>

                    </table>

                    <div style="width:100%;border:10px solid lightgray;border-radius:10px" class='table-responsive' id='pdf_previewer'>
                    </div>
            </form>
        </div>
     </div>
   </div>
</div>

<div id='add_paragraph_template' style="display:none">
     <div class='pt-2 body_part' id='paragraph_x' style='width:100%'>
        <input name='body_part_x' value='paragraph' hidden>
        <textarea name='paragraph_x'  class="form-control form-control-sm" style='width:100%' placeholder="write some content here.."></textarea>
     </div>
</div>

<script>

let editor;

ClassicEditor
    .create( document.querySelector( '#quill_editor' ))
    .then( newEditor =>
    {
        editor = newEditor;
    })
    .catch( error =>
    {
        console.error( error );
    });




var append_index=2;


function add_letter_code_template(code,id)
{
    $("#add_template_letter_code_id").val("");
    $("#add_template_code_template").modal("show");
    $("#add_template_letter_code").val(code);
    $("#add_template_letter_description").val($("#letter_code_"+id).html());
    $("#add_template_letter_code_id").val(id);
}

function add_template_paragraph()
{
    $html=$("#add_paragraph_template").html().
                replace('name="paragraph_x"', 'name="paragraph_'+append_index+'"').
                replace("body_part_x", "body_part_"+append_index);
    $("#appending_body_block").append("<table id='body_part_"+append_index+"' style='width:100%'><tr><td>"+$html+"</td><td style='width:20px;text-align:center'><span style='font-weight:bolder;cursor:pointer;font-size:18px;color:red' onclick='$(\"#body_part_"+append_index+"\").remove()'>x</span></td></tr></table>");

    append_index++;
}

function add_template_table()
{
    $row_num=$("#row_selector").val();
    $col_num=$("#column_selector").val();

    if($row_num==0||$col_num==0)
    {
        alert("Both column and row must be greater than zero(0)!!");
        return;
    }
    $html="<input name='table_row_size_"+append_index+"' value='"+$row_num+"' hidden>";
    $html+="<input name='table_column_size_"+append_index+"' value='"+$col_num+"' hidden>";
    $html+="<input name='body_part_"+append_index+"' value='table' hidden><table style='width:100%'>";
    for( i = 0 ; i < $row_num ; i++ )
    {
        $html+="<tr>";

        for( j=0 ; j < $col_num ; j++ )
        {
            $html+="<td><input style='width:100%' name='input_"+append_index+"_"+i+"_"+j+"' placeholder='enter s/thing...'></td>";
        }

        $html+="</tr>";
    }

    $html+="</table>";

    $("#appending_body_block").append("<table class='mt-2 body_part' id='body_part_"+append_index+"' style='width:100%'><tr><td>"+$html+"</td><td style='width:20px;text-align:center'><span style='font-weight:bolder;cursor:pointer;font-size:18px;color:red' onclick='$(\"#body_part_"+append_index+"\").remove()'>x</span></td></tr></table>");

    append_index++;

}

function delete_added_table(id)
{
    $("#added_table_"+id).remove();
}

function add_template_table_row(id)
{
    $row_num=parseInt($('#added_table_'+id).attr("row_index"))+1;
    $('#added_table_'+id).attr("row_index",$row_num);

    $row_id="table_row_"+id+"_"+$row_num;

    $html="<tr id='"+$row_id+"'>"+$("#first_row_"+id).html()+"</tr>";

    $html=$html.replace("display:none","");

    $html=$html.replace('delete_table_row=""',"onclick='delete_table_row("+id+","+$row_num+");'");


    $('#added_table_'+id+' #add_row_row_'+id).before($html);

}

function delete_table_row(table_id,row_id)
{
    $("#table_row_"+table_id+"_"+row_id).remove();
}

function add_table_column(id)
{
    $column_num=parseInt($('#added_table_'+id).attr("column_index"))+1;

    $('#added_table_'+id).attr("column_index",$row_num);
}

$(function () {
        var table = $('.letter_type_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: "/letter/load_letter_type"
        },
        columns: [

                {data: 'DT_RowIndex', name: 'DT_RowIndex',orderable: false,searchable: false},
                {data: 'code', name: 'code'},
                {data: 'description', name: 'email'},
                {data: 'letter_type', name: 'letter_type'},
                {data: 'with_whom', name: 'with_whom'},
                {data: 'templates', name: 'templates'},
                {data: 'add_template', name: 'add_template'}

            ]
        });
        //$(".dataTables_filter").remove();
        //$(".dataTables_length").remove();
        dataTableSearch = $('.letter_type_table').DataTable();   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
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








function preview_letter()
{
    $("#pdf_previewer").html("");

    var url = "/letter/view_new_template_preview";
    $("#template_textarea").val(editor.getData());


    $.ajax({
        url: url,
        method: 'POST',
        data: new FormData($("#add_letter_template")[0]),
        dataType: 'text',
        contentType: false,
        cache: false,
        processData: false,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        success:function(data)
        {
            var arrrayBuffer = base64ToArrayBuffer(data); //data is the base64 encoded string
            function base64ToArrayBuffer(base64) {
                var binaryString = window.atob(base64);
                var binaryLen = binaryString.length;
                var bytes = new Uint8Array(binaryLen);
                for (var i = 0; i < binaryLen; i++) {
                    var ascii = binaryString.charCodeAt(i);
                    bytes[i] = ascii;
                }
                return bytes;
            }
            var blob = new Blob([arrrayBuffer], {type: "application/pdf"});
            var link = window.URL.createObjectURL(blob);

            view_letter(link);

        },
        error: function(response)
        {
            alert("failed");
        }
    });

}

function view_letter(url)
{

    // Loaded via <script> tag, create shortcut to access PDF.js exports.
    var pdfjsLib = window['pdfjs-dist/build/pdf'];

    // The workerSrc property shall be specified.
    pdfjsLib.GlobalWorkerOptions.workerSrc = '/assets/js/pdf.worker.js';

    var currPage = 1; //Pages are 1-based not 0-based
    var numPages = 0;
    var thePDF = null;

    //This is where you start
    pdfjsLib.getDocument(url).promise.then(function(pdf) {

            //Set PDFJS global object (so we can easily access in our page functions
            thePDF = pdf;

            //How many pages it has
            numPages = pdf.numPages;

            //Start with first page
            pdf.getPage( 1 ).then( handlePages );
    });

}
function handlePages(page)
{
    //This gives us the page's dimensions at full scale
    var viewport = page.getViewport( {scale: 1.5} );

    //We'll create a canvas for each page to draw it on
    var canvas = document.createElement( "canvas" );
    canvas.style.display = "block";
    var context = canvas.getContext('2d');

    canvas.height = viewport.height;
    canvas.width = viewport.width;

    //Draw it on the canvas
    page.render({canvasContext: context, viewport: viewport});

    //Add it to the web page
    $("#pdf_previewer").append( canvas );

    var line = document.createElement("hr");
    document.body.appendChild( line );

    //Move to next page
    currPage++;
    if ( thePDF !== null && currPage <= numPages )
    {
        thePDF.getPage( currPage ).then( handlePages );
    }
}


$("#add_letter_template").on('submit', function(event){
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


</script>
@endsection
