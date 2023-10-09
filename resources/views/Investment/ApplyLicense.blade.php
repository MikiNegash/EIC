
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
    .dataTables_paginate .paginate_button {
        margin: 5px;
        padding: 5px 10px;
        border: 1px solid #ccc;
        background-color: #f0f0f0;
        color: #333;
        cursor: pointer;
        border-radius: 5px;
    }

    .dataTables_paginate .paginate_button.current {
        background-color: #007bff;
        color: #fff;
        border: 1px solid #007bff;
    }

    .dataTables_wrapper .dataTables_filter input[type="search"] {
        /* Add your custom styles here */
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f0f0f0;
        color: #333;
    }

    .dataTables_wrapper .dataTables_filter input[type="search"]:focus {
        border-color: #007bff;
        outline: none;
    }

    .custom-margin-bottom {
        margin-bottom: 20px;
        /* Adjust the value as needed */
    }

    .btn_primary {
        background: rgb(17, 28, 67) !important;
        color: #fff !important;
    }

    .steps {
        display: flex;
        justify-content: space-between;
    }

    .step {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .step-number {
        font-size: 24px;
        font-weight: bold;
    }

    .step-title {
        margin-top: 5px;
    }

    #frm3 {
        display: none;
    }

    #frm2 {
        display: none;
    }

    .tab-style-3 .nav-item .nav-link.loc:after {
        content: "4";
    }

    .tab-style-3 .nav-item .nav-link.ann:after {
        content: "5";
    }

    .tab-style-3 .nav-item .nav-link.rawmat:after {
        content: "6";
    }

    .tab-style-3 .nav-item .nav-link.utt:after {
        content: "7";
    }

    .tab-style-3 .nav-item .nav-link.cost:after {
        content: "8";
    }
</style>
<div class="container" id="generalForm">
    <!--   <button type="button" class="btn btn_primary" data-bs-toggle="modal" data-bs-target="#newCompanyModal">
        <i class="bi bi-plus"></i> New
    </button> -->
    <div class="card " style="margin-top: 10px;">
        <div class="card-header">
            <div class="card-title">
                <h5> <small>Registered Investment</small> </h5>

            </div>

        </div>
        <div class="card-body">

            <div class="table-responsive mt-1 pb-3" style='width:100%'>
                <table id="coms_table" class="table text-nowrap user_table vertical-top">
                    <thead>
                        <tr>

                            <th scope="col">#</th>
                            <th scope="col">Investment Type</th>
                            <th scope="col">Company Name</th>
                            <th scope="col"></th>

                        </tr>
                    </thead>

                </table>
            </div>
        </div>
    </div>
</div>
<!-- <button type="button" class="btn btn-primary mb-sm-0 mb-1" data-bs-toggle="modal" data-bs-target="#exampleModalXl">Company Info</button> -->
<div class="modal fade" id="newCompanyModal" tabindex="-1" aria-labelledby="exampleModalXlLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalXlLabel">Application Form
                </h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="frmApp">
                    @csrf
                    <input type="hidden" name="investID" id="investID" class="form-control col-xl-6">
                    <ul class="nav nav-tabs justify-content-center mb-5 tab-style-3" id="myTab2" role="tablist">
                        <li class="nav-item" role="presentation"> <button class="nav-link home py-1 active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general-tab-pane" type="button" role="tab" aria-controls="general-tab-pane" aria-selected="true">General Info</button> </li>
                        <li class="nav-item" role="presentation"> <button class="nav-link about py-1" id="profile-tab" data-bs-toggle="tab" data-bs-target="#project-tab-pane" type="button" role="tab" aria-controls="project-tab-pane" aria-selected="false" tabindex="-1">Project Action Plans</button> </li>
                        <li class="nav-item" role="presentation"> <button class="nav-link services py-1" id="contact-tab" data-bs-toggle="tab" data-bs-target="#impact-tab-pane" type="button" role="tab" aria-controls="impact-tab-pane" aria-selected="false" tabindex="-1">Impact and Mitigation</button> </li>
                        <li class="nav-item" role="presentation"> <button class="nav-link loc py-1" id="contacts-tab" data-bs-toggle="tab" data-bs-target="#address-tab-pane" type="button" role="tab" aria-controls="address-tab-pane" aria-selected="false" tabindex="-1">Location</button> </li>
                        <li class="nav-item" role="presentation"> <button class="nav-link ann py-1" id="contact-tab" data-bs-toggle="tab" data-bs-target="#annuel-tab-pane" type="button" role="tab" aria-controls="annuel-tab-pane" aria-selected="false" tabindex="-1">Annual Productions</button> </li>
                        <li class="nav-item" role="presentation"> <button class="nav-link rawmat py-1" id="contact-tab" data-bs-toggle="tab" data-bs-target="#raw-tab-pane" type="button" role="tab" aria-controls="raw-tab-pane" aria-selected="false" tabindex="-1">Raw Materials</button> </li>
                        <li class="nav-item" role="presentation"> <button class="nav-link utt py-1" id="contact-tab" data-bs-toggle="tab" data-bs-target="#util-tab-pane" type="button" role="tab" aria-controls="util-tab-pane" aria-selected="false" tabindex="-1">Utililty</button> </li>
                        <li class="nav-item" role="presentation"> <button class="nav-link cost py-1" id="contact-tab" data-bs-toggle="tab" data-bs-target="#cost-tab-pane" type="button" role="tab" aria-controls="cost-tab-pane" aria-selected="false" tabindex="-1">Project Cost</button> </li>
                    </ul>
                    <div class="tab-content" id="myTabContent1">
                        <div class="tab-pane fade text-muted active show" id="general-tab-pane" role="tabpanel" aria-labelledby="general-tab" tabindex="0">
                            <form id="generalFrm" method="POST" action="/investment/parkSubmit">
                                <div class="row gy-4">
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <p class="mb-2 text-muted">Application Type:</p>
                                        <select class="form-select  validate-select" id="appType" name="appType" required>
                                        </select>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <label for="input-label" class="form-label">Is Industrial Park Investment</label>

                                        <div class="form-check">
                                            <input class="form-check-input form-checked-outline" type="radio" value="yes" name="ispark" id="primaryoutlineChecked" checked="">
                                            <label class="form-check-label" for="primaryoutlineChecked">Yes </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input form-checked-outline" type="radio" value="no" name="ispark" id="primaryoutlineChecked" checked="">
                                            <label class="form-check-label" for="primaryoutlineChecked">No </label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <label for="input-label" class="form-label">Activity:</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="activity" name="activity" aria-describedby="btn_showSector" >
                                            <button id='btn_showSector' type="button" class="btn btn_primary btn-wave" data-bs-target="sectorModel"
                                            data-bs-toggle="modal">Select Activity</button>
                                        </div>

                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <label for="input-label" class="form-label">Estimated Number Of Employee:</label>
                                        <input type="number" class="form-control" id="noEmp" name="noEmp">
                                    </div>


                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <p class="mb-2 text-muted">objectives:</p>
                                        <textarea type="text" class="form-control" id="objtxt" name="objtxt" rows="1" style="height: 50px;"></textarea>
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <label for="input-label" class="form-label">Planned capital:</label>
                                        <input type="text" class="form-control" id="input-label">
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <label for="input-label" class="form-label">Equity capital percent:</label>
                                        <input type="text" class="form-control" id="input-label">
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <p class="mb-2 text-muted">Loan capital percent:</p>
                                        <input type="text" class="form-control" id="input">
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">

                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <label for="input-label" class="form-label">is another capital source?:</label>
                                        <input type="checkbox" class="form-control form-check-input ms-2" id="input-label" value checked>
                                    </div>

                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <label for="input-label" class="form-label">Other source:</label>
                                        <input type="text" class="form-control" id="input-label">
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <label for="input-label" class="form-label">Other capital percent:</label>
                                        <input type="text" class="form-control" id="input-label">
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <p class="mb-2 text">Start date:</p>
                                        <input type="text" class="form-control" id="input">
                                    </div>
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                        <label for="input-label" class="form-label">End date:</label>
                                        <input type="text" class="form-control" id="input-label">
                                    </div>

                                </div>
                                <div class="col-xl-3">
                                    <button id='btn_saveGeneralInfo' type="button" class="btn btn-success btn-wave">Submit</button>
                                </div>
                            </form>

                        </div>
                        <div class="tab-pane fade text-muted" id="project-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

                            <div class="table-responsive mt-1 pb-3" style='width:100%'>
                <table id="pro_table" class="table text-nowrap user_table vertical-top">
                    <thead>
                        <tr>

                            <th scope="col">#</th>
                            <th scope="col" >Actions</th>
                            <th scope="col" >plan Date</th>
                            <th scope="col"></th>

                        </tr>
                    </thead>

                </table>
            </div>


                        </div>
                        <div class="tab-pane fade text-muted" id="impact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                            <div class="row gy-8">
                                <div class="col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                    <p class="mb-2 text-muted">Impact:</p>
                                    <textarea type="text" class="form-control" id="impacttxt" name="impacttxt" rows="1" style="height: 88px;"></textarea>
                                </div>
                                <div class="col-xl-7 col-lg-6 col-md-6 col-sm-12">
                                    <p class="mb-2 text-muted">Mitigation:</p>
                                    <textarea type="text" class="form-control" id="mitigationtxt" name="mitigationtxt" rows="1" style="height: 88px;"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade text-muted" id="address-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                            <div class="col-xl-6">
                                <label for="input-rounded2" class="form-label">Region</label>
                                <div class="input-group">
                                    <select class="form-select  validate-select" id="region" name="region">
                                        <option value="">Select a Region</option>
                                        @foreach ($regions as $region)
                                            <option value="{{ $region->id }}">{{ $region->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('region')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label for="input-rounded3" class="form-label">Zone</label>
                                <div class="input-group">
                                    <select class="form-select  validate-select" id="zone" name="zone">
                                        <option value="">Select Zone</option>

                                    </select>
                                    @error('region')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label for="input-rounded2" class="form-label">Woreda</label>
                                <div class="input-group">
                                    <select class="form-select  validate-select" id="woreda" name="woreda">
                                        <option value="">Select Woreda</option>

                                    </select>
                                    @error('region')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label for="input-rounded2" class="form-label">House No:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="houseNo" name="houseNo">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label for="input-rounded2" class="form-label">P.O.Box:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="pobox" name="pobox">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label for="input-rounded2" class="form-label">Telephone:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="pobox" name="pobox">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label for="input-rounded2" class="form-label">FAX:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="fax" name="fax">
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade text-muted" id="annuel-tab-pane" role="tabpanel" aria-labelledby="annuel-tab" tabindex="0">
                            <div class="col-xl-6">
                                <label for="input-rounded2" class="form-label">Item:</label>
                                <div class="input-group">
                                    <select class="form-select  validate-select" id="region" name="region">
                                        <option value="">Select an Item</option>
                                        @foreach ($regions as $region)
                                            <option value="{{ $region->id }}">{{ $region->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('region')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label for="input-rounded2" class="form-label">Measurement:</label>
                                <div class="input-group">
                                    <select class="form-select  validate-select" id="region" name="region">
                                        <option value="">Select a measurement</option>
                                        @foreach ($regions as $region)
                                            <option value="{{ $region->id }}">{{ $region->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('region')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label for="input-rounded2" class="form-label">Quantity:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="quantity" name="quantity">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label for="input-rounded2" class="form-label">Local Share:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="localshare" name="localshare">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label for="input-rounded2" class="form-label">Export Share:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="exportshare" name="exportshare">
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade text-muted" id="raw-tab-pane" role="tabpanel" aria-labelledby="row-tab" tabindex="0">
                            <div class="col-xl-6">
                                <label for="input-rounded2" class="form-label">Item:</label>
                                <div class="input-group">
                                    <select class="form-select  validate-select" id="region" name="region">
                                        <option value="">Select an Item</option>
                                        @foreach ($regions as $region)
                                            <option value="{{ $region->id }}">{{ $region->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('region')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label for="input-rounded2" class="form-label">Measurement:</label>
                                <div class="input-group">
                                    <select class="form-select  validate-select" id="region" name="region">
                                        <option value="">Select a measurement</option>
                                        @foreach ($regions as $region)
                                            <option value="{{ $region->id }}">{{ $region->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('region')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label for="input-rounded2" class="form-label">Quantity:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="quantity" name="quantity">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label for="input-rounded2" class="form-label">Local Share:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="localshare" name="localshare">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label for="input-rounded2" class="form-label">Import Share:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="exportshare" name="exportshare">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade text-muted" id="util-tab-pane" role="tabpanel" aria-labelledby="util-tab" tabindex="0">

                            <div class="col-xl-6">
                                <label for="input-rounded2" class="form-label">Electricity:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="electricity" name="electricity">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label for="input-rounded2" class="form-label">Water:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="water" name="water">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label for="input-rounded2" class="form-label">Land:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="land" name="land">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label for="input-rounded2" class="form-label">Oil and Lubricant:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="oil_and_lubricant" name="oil_and_lubricant">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <label for="input-rounded2" class="form-label">Other Utility:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="other_utility" name="other_utility">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade text-muted" id="cost-tab-pane" role="tabpanel" aria-labelledby="cost-tab" tabindex="0">

                            <div class="row col-xl-12">
                                <div class="col-xl-6">
                                    <label for="input-rounded2" class="form-label">Land cost:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="land_cost" name="land_cost">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <label for="input-rounded2" class="form-label">Constraction Cost:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="constraction_cost" name="constraction_cost">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <label for="input-rounded2" class="form-label">Machinery Cost:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="machinery_cost" name="machinery_cost">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <label for="input-rounded2" class="form-label">Other Cost:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="other_cost" name="other_cost">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <label for="input-rounded2" class="form-label">Initial Cost:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="initial_cost" name="initial_cost">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <label for="input-rounded2" class="form-label">Equity Source:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="equity_source" name="equity_source">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <label for="input-rounded2" class="form-label">Loan Source:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="loan_source" name="loan_source">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <label for="input-rounded2" class="form-label">Other Source:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="other_source" name="other_source">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <label for="input-rounded2" class="form-label">Other Source Name:</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="other_source_name" name="other_source_name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <br/>
                            </div>
                            <div class="col-xl-3">
                                <button id='btn_save' type="button" class="btn btn-success btn-wave">Submit</button>
                            </div>

                        </div>

                        </div>


                    <!--  -->

                </form>


            </div>
        </div>
    </div>
</div>



<div class="modal fade" id="sectorModel"
     aria-labelledby="sectorModel" tabindex="-1" aria-hidden="true"
     style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalToggleLabel2">Select Activity
                </h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle"
                        data-bs-toggle="modal">Back to first</button>
            </div>
        </div>
    </div>
</div>


<script>
    $('#coms_table').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: {
            url: '/investment/loadInvest',
            type: 'get',
            data: {
                _token: '{{ csrf_token() }}',
            },

        },

        columns: [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'investment_type',
                name: 'investment_type'
            },
            {
                data: 'company_name',
                name: 'company_name'
            },
            {
                data: null,
                render: function(data, type, row) {

                    Edit = '<button class="btn btn-sm btn_primary edit-com" data-id="' + row.id + '">View Applications</button>';
                    /* Delete ='<a class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>' */

                    /*   Delete = '<button class="btn btn-sm btn-danger delete-com" data-id="' + row.id + '">Delete</button>'; */

                    return Edit + " ";
                }
            },

        ],
        paging: true, // Enable pagination
        pageLength: 10, // Number of rows per page
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, 'All']
        ], // Dropdown options for rows per page
        pagingType: 'full_numbers', // Style of pagination

    });

    $('#coms_table').on('click', '.edit-com', function() {
        var row = $(this).closest('tr');
        var investID = row.find('td:eq(0)').text();

        $.ajax({

            url: "/investment/checkBranch",
            type: "GET",
            data: {
                _token: '{{ csrf_token() }}',
                investID: investID
            },

            success: function(data) {
                console.log('Success msg')
                console.log(data);
                if (data.length > 0) {

                    $('#appType').append('<option value=""> Select Application Type </option>');
                    $('#appType').append('<option value="Expansion"> Expansion </option>');
                    $('#appType').append('<option value="Reinvestment"> Reinvestment </option>');
                } else {
                    $('#appType').append('<option value="New"> New </option>');
                }

                $('#newCompanyModal').modal('show');
            },
            error: function(data) {
                console.log(data.branch);
            }
        })




    });

    $('#pro_table').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: {
            url: '/investment/loadproject',
            type: 'get',
            data: {
                _token: '{{ csrf_token() }}',
            },

        },

        columns: [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'Actions',
                name: 'Actions'
            },

            {
                data: null,
                render: function(data, type, row) {

                    Edit = '<button class="btn btn-sm btn_primary edit-pro" data-id="' + row.id + '">Add plan</button>';
                    /* Delete ='<a class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="fa fa-trash"></i></a>' */

                    /*   Delete = '<button class="btn btn-sm btn-danger delete-com" data-id="' + row.id + '">Delete</button>'; */

                    return Edit + " ";
                }
            },

        ],
        paging: true, // Enable pagination
        pageLength: 10, // Number of rows per page
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, 'All']
        ], // Dropdown options for rows per page
        pagingType: 'full_numbers', // Style of pagination

    });

    $('#region').on('change', function(e) {

        var region = e.target.value;
        $.ajax({

            url: "/investment/loadzones",
            type: "POST",
            data: {
                _token: '{{ csrf_token() }}',
                region_id: region
            },

            success: function(data) {
                console.log(JSON.stringify(data));
                $('#zone').empty();
                $('#zone').append('<option value="">' + 'select zone' + '</option>');
                $.each(data.zones, function(index, subcategory) {

                    $('#zone').append('<option value="' + subcategory.id + '">' + subcategory.name + '</option>');
                })
            },
            error: function(data) {
                console.log(data);
            }
        })
    });

    $('#zone').on('change', function(e) {

        var zone = e.target.value;
        $.ajax({

            url: "/investment/loadworeda",
            type: "POST",
            data: {
                _token: '{{ csrf_token() }}',
                zone_id: zone
            },

            success: function(data) {
                console.log(JSON.stringify(data));
                $('#woreda').empty();
                $('#woreda').append('<option value="">' + 'select woreda' + '</option>');
                $.each(data.woredas, function(index, woreda) {

                    $('#woreda').append('<option value="' + woreda.id + '">' + woreda.name + '</option>');
                })
            },
            error: function(data) {
                console.log(data);
            }
        })
    });

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

    $('#btn_showSector').on('click', function(e) {

        console.log('show btn is clicked');

        $('#sectorModel').modal('show');
        $('#newCompanyModal').modal('show');
       // ('#sectorModel').show();

        /*  console.log('FormData: ' + formData.name + " parentId: " + formData.parent_id + " type: " + formData.type);
        /* $.ajax({
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
         })*/
    });

    $('.sector-tree').click(function(e) {
        var id = $(this).attr('id');
        const myArray = id.split("**");
        $('#activity').val(myArray[1]);
        $('#newCompanyModal').modal('show');
        $('#sectorModel').modal('hide');

        //$('#selectSector_id').val(myArray[0]);
    });
</script>

@endsection
