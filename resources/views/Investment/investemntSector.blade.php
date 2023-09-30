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
    <button type="button" class="btn btn_primary" data-bs-toggle="modal" data-bs-target="#messageModal">
        <i class="bi bi-plus"></i> New
    </button>
    <!--  <link href="path/to/jquery.treetable.css" rel="stylesheet" type="text/css" />
    <script src="path/to/jquery.treetable.js"></script>
    <table id="category_table">
        @foreach($sectors as $sector)
        <tr data-tt-id="{{$sector->id}}" {{$sector->parent_id ? "data-tt-parent-id={$sector->parent_id}" : ""}}>
            <td>
                @if ($sector->childs->isEmpty())
                <input type="radio" id="category_id" name="category_id" value="{{$sector->id}}">
                @endif
                {{ $sector->name }}
            </td>
        </tr>
        @endforeach
    </table>

    <script>
        $("#category_table").treetable({
            expandable: true
        });
    </script> -->
    <div class="card " style="margin-top: 10px;">
        <div class="card-header">
            <div class="card-title">
                <h5> <small>Investment Sector</small> </h5>

            </div>

        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h3>Sector List</h3>
                    <ul id="tree1">
                        @foreach($sectors as $sector)
                        <li>
                            {{ $sector->name }}
                            @if(count($sector->childs))
                            @include('Investment.manageChild',['childs' => $sector->childs])
                            @endif
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-6">
                    <h3>Add New Sector</h3>


                    <form action="{{ route('invest.sector') }}" method="POST">
                        @csrf


                        @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif


                        <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                            <label for="input-rounded1" class="form-label">Name</label>
                            <input type="text" class="form-control col-xl-6" id="name" name="name" placeholder="please enter name">

                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>


                        <div class="form-group {{ $errors->has('id') ? 'has-error' : '' }}">
                            <label for="input-rounded1" class="form-label">Sector</label>
                            <select class="form-select  validate-select" id="sec" name="sec">
                                <option value="">Select a Sector</option>
                                @foreach ($allSectors as $sec)
                                <option>{{ $sec }}</option>
                                @endforeach
                            </select>

                            <span class="text-danger">{{ $errors->first('id') }}</span>
                        </div>


                        <div class="form-group">
                            <button class="btn btn-success">Add New</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- <script>
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
</script>

 -->



@endsection