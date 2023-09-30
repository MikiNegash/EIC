@extends('common.main')

@section('content')

<style>
    .tree,
    .tree ul {
        margin: 0;
        padding: 0;
        list-style: none
    }

    .tree ul {
        margin-left: 1em;
        position: relative
    }

    .tree ul ul {
        margin-left: .5em
    }

    .tree ul:before {
        content: "";
        display: block;
        width: 0;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        border-left: 1px solid
    }

    .tree li {
        margin: 0;
        padding: 0 1em;
        line-height: 2em;
        color: #369;
        font-weight: 700;
        position: relative
    }

    .tree ul li:before {
        content: "";
        display: block;
        width: 10px;
        height: 0;
        border-top: 1px solid;
        margin-top: -1px;
        position: absolute;
        top: 1em;
        left: 0
    }

    .tree ul li:last-child:before {
        background: #fff;
        height: auto;
        top: 1em;
        bottom: 0
    }

    .indicator {
        margin-right: 5px;
    }

    .tree li a {
        text-decoration: none;
        color: #369;
    }

    .tree li button,
    .tree li button:active,
    .tree li button:focus {
        text-decoration: none;
        color: #369;
        border: none;
        background: transparent;
        margin: 0px 0px 0px 0px;
        padding: 0px 0px 0px 0px;
        outline: 0;
    }

    .btn_primary {
        background: rgb(17, 28, 67) !important;
        color: #fff !important;
    }
</style>
<div class="container" id="generalForm">
    <!--     <button type="button" class="btn btn_primary" data-bs-toggle="modal" data-bs-target="#messageModal">
        <i class="bi bi-plus"></i> New
    </button> -->
    <div class="card " style="margin-top: 10px;">
        <div class="card-header">
            <div class="card-title">
                <h5> <small>Investment Sector</small> </h5>

            </div>

        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h5>Sector List</h5>
                    <ul id="tree1">
                        @foreach($sectors as $sector)
                        <li class="bi bi-plus">
                            <span id='{{$sector->id}}**{{$sector->name}}' class="sector-tree">{{ $sector->name }}</span>
                            @if(count($sector->childs))
                            @include('Investment.manageChild',['childs' => $sector->childs])
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5>Add New Sector</h5>


                    <form action="{{ route('invest.sector') }}" method="POST" id='frm'>
                        @csrf


                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif
                        <input type="hidden" class="form-control col-xl-6" id="selectSector_id" name="selectSector_id" >
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            <label for="input-rounded1" class="form-label">Parent Sector</label>
                            <input type="text" class="form-control col-xl-6" id="selectSector" name="selectSector" placeholder="please select Sector from Sector List">
                            <span class="text-danger">{{ $errors->first('selectSector') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            <label for="input-rounded1" class="form-label">Name</label>
                            <input type="text" class="form-control col-xl-6" id="name" name="name" placeholder="please enter name">

                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            <label for="input-rounded1" class="form-label">Type</label>
                            <input type="text" class="form-control col-xl-6" id="type" name="type" placeholder="please enter name">

                            <span class="text-danger">{{ $errors->first('type') }}</span>
                        </div>
                        <br />
                        <div class="form-group">
                            <button class="btn btn_primary bi bi-plus" id="btn_add" name="btn_add">Add</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    $.fn.extend({
        treed: function(o) {

            var openedClass = 'bi bi-dash';
            var closedClass = 'bi bi-plus';

            if (typeof o != 'undefined') {
                if (typeof o.openedClass != 'undefined') {
                    openedClass = o.openedClass;
                }
                if (typeof o.closedClass != 'undefined') {
                    closedClass = o.closedClass;
                }
            };

            /* initialize each of the top levels */
            var tree = $(this);
            tree.addClass("tree");
            tree.find('li').has("ul").each(function() {
                var branch = $(this);
                branch.prepend("");
                branch.addClass('branch');
                branch.on('click', function(e) {
                    if (this == e.target) {
                        var icon = $(this).children('i:first');
                        icon.toggleClass(openedClass + " " + closedClass);
                        $(this).children().children().toggle();
                    }
                })
                branch.children().children().toggle();
            });
            /* fire event from the dynamically added icon */
            tree.find('.branch .indicator').each(function() {
                $(this).on('click', function() {
                    $(this).closest('li').click();
                });
            });
            /* fire event to open branch if the li contains an anchor instead of text */
            tree.find('.branch>a').each(function() {
                $(this).on('click', function(e) {
                    $(this).closest('li').click();
                    e.preventDefault();
                });
            });
            /* fire event to open branch if the li contains a button instead of text */
            tree.find('.branch>button').each(function() {
                $(this).on('click', function(e) {
                    $(this).closest('li').click();
                    e.preventDefault();
                });
            });
        }
    });
    /* Initialization of treeviews */
    $('#tree1').treed();

    $('.sector-tree').click(function(e) {
        var id = $(this).attr('id');
        const myArray = id.split("**");
        $('#selectSector').val(myArray[1]);
        $('#selectSector_id').val(myArray[0]);
        
        // alert($(this).attr('id'));


    });

    $('#btn_add').on('click', function(e) {

        console.log('add btn is clicked')
        var formData = {
            _token: '{{ csrf_token() }}',
            name: $('#name').val(),
            parent_id: $('#selectSector_id').val(),
            type: $('#type').val(),
            parent_name: $('#selectSector').val(),
        };
        console.log('FormData: ' + formData.name + " parentId: " + formData.parent_id + " type: " + formData.type);
        $.ajax({
            url: "/investment/addSector",
            type: "POST",
            data: formData,
            beforeSend:function(data){
                console.log(JSON.stringify(data));
            },
            success: function(data) {
                console.log(JSON.stringify(data));
                // $('#woreda').empty();
                //$('#frm')[0].reset();
            

            },
            error: function(data) {
                console.log(data);
                showErrorMessage('Something occured please try again or contact administrator');
            }
        })
    });
</script>





@endsection