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

    <div class="card " style="margin-top: 10px;">
        <div class="card-header">
            <div class="card-title">
                <h5> <small>Mou template </small> </h5>

            </div>

        </div>
        <div class="card-body">
            <div class="row">

                <div class="col-md-6">
                    <h5>Select template tag</h5>

                    <form >
                        @csrf
                        <div class="form-group {{ $errors->has('id') ? 'has-error' : '' }}">
                            <label for="input-rounded1" class="form-label">Sector</label>
                            <select class="form-select  validate-select" id="sec" name="sec">
                                <option value="">Select a tag</option>
                                @foreach ($allTags as $tag)
                                <option value="{{$tag->id}}">{{ $tag->title }}</option>
                                @endforeach
                            </select>

                            <span class="text-danger">{{ $errors->first('id') }}</span>
                        </div>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-success" type="button" id="pdfButton" data-url="{{ route('generate.pdf') }}">Generate MOU</button>
                        </div>
                        <br>
                        <div class="modal-body">
                            <iframe id="pdfIframe" width="400px" height="300px" style="width: 100%; height: 500px;"></iframe>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


<script>
    document.getElementById('pdfButton').addEventListener('click', function() {
        var url = this.getAttribute('data-url');
        var iframe = document.getElementById('pdfIframe');
        iframe.src = url;
     
    });
</script>




@endsection