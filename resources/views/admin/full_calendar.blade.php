@include('layout.link')

<body>

    @include('layout.switcher')

    @include('layout.header')


    @include('layout.sidebar')



        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <h1 class="page-title fw-semibold fs-18 mb-0">Full Calendar</h1>
                    <div class="ms-md-1 ms-0">
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Apps</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Full Calendar</li>
                            </ol>
                        </nav>
                    </div>
                </div> <!-- Page Header Close -->
                <!-- Start::row-1 -->
                <div class="row">
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="card-header d-grid"> <button class="btn btn-primary-light btn-wave"><i
                                        class="ri-add-line align-middle me-1 fw-semibold d-inline-block"></i>Create New
                                    Event</button> </div>
                            <div class="card-body p-0">
                                <div id="external-events" class="border-bottom p-3">
                                    <div
                                        class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-primary border border-primary">
                                        <div class="fc-event-main">Calendar Events</div>
                                    </div>
                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-secondary border border-secondary"
                                        data-class="bg-secondary">
                                        <div class="fc-event-main">Birthday EVents</div>
                                    </div>
                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-success border border-success"
                                        data-class="bg-success">
                                        <div class="fc-event-main">Holiday Calendar</div>
                                    </div>
                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-info border border-info"
                                        data-class="bg-info">
                                        <div class="fc-event-main">Office Events</div>
                                    </div>
                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-warning border border-warning"
                                        data-class="bg-warning">
                                        <div class="fc-event-main">Other Events</div>
                                    </div>
                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-danger border border-danger"
                                        data-class="bg-danger">
                                        <div class="fc-event-main">Festival Events</div>
                                    </div>
                                    <div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event bg-teal border border-teal"
                                        data-class="bg-danger">
                                        <div class="fc-event-main">Timeline Events</div>
                                    </div>
                                </div>
                                <div class="p-3 border-bottom">
                                    <div class="d-flex align-items-center mb-4 justify-content-between">
                                        <h6 class="fw-semibold"> Activity : </h6> <button
                                            class="btn btn-primary-light btn-sm btn-wave">View All</button>
                                    </div>
                                    <ul class="list-unstyled mb-0 fullcalendar-events-activity"
                                        id="full-calendar-activity">
                                        <li>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                <p class="mb-1 fw-semibold"> Monday, Jan 1,2023 </p><span
                                                    class="badge bg-light text-default mb-1">12:00PM - 1:00PM</span>
                                            </div>
                                            <p class="mb-0 text-muted fs-12"> Meeting with a client about new project
                                                requirement. </p>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                <p class="mb-1 fw-semibold"> Thursday, Dec 29,2022 </p><span
                                                    class="badge bg-success mb-1">Completed</span>
                                            </div>
                                            <p class="mb-0 text-muted fs-12"> Birthday party of niha suka </p>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                <p class="mb-1 fw-semibold"> Wednesday, Jan 3,2023 </p><span
                                                    class="badge bg-warning-transparent mb-1">Reminder</span>
                                            </div>
                                            <p class="mb-0 text-muted fs-12"> WOrk taget for new project is completing
                                            </p>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                <p class="mb-1 fw-semibold"> Friday, Jan 20,2023 </p><span
                                                    class="badge bg-light text-default mb-1">06:00PM - 09:00PM</span>
                                            </div>
                                            <p class="mb-0 text-muted fs-12"> Watch new movie with family </p>
                                        </li>
                                        <li>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                <p class="mb-1 fw-semibold"> Saturday, Jan 07,2023 </p><span
                                                    class="badge bg-danger-transparent mb-1">Due Date</span>
                                            </div>
                                            <p class="mb-0 text-muted fs-12"> Last day to pay the electricity bill and
                                                water bill.need to check the bank details. </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="p-3"> <img
                                        src="https://spruko.com/demo/ynex/dist/assets/images/media/media-83.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="card custom-card">
                            <div class="card-header">
                                <div class="card-title">Full Calendar</div>
                            </div>
                            <div class="card-body">
                                <div id='calendar2'></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::row-1 -->
            </div>
        </div> <!-- End::app-content -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="input-group"> <a href="javascript:void(0);" class="input-group-text"
                                id="Search-Grid"><i class="fe fe-search header-link-icon fs-18"></i></a> <input
                                type="search" class="form-control border-0 px-2" placeholder="Search"
                                aria-label="Username"> <a href="javascript:void(0);" class="input-group-text"
                                id="voice-search"><i class="fe fe-mic header-link-icon"></i></a> <a
                                href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown"
                                aria-expanded="false"> <i class="fe fe-more-vertical"></i> </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="mt-4">
                            <p class="font-weight-semibold text-muted mb-2">Are You Looking For...</p><span
                                class="search-tags"><i class="fe fe-user me-2"></i>People<a href="javascript:void(0)"
                                    class="tag-addon"><i class="fe fe-x"></i></a></span> <span class="search-tags"><i
                                    class="fe fe-file-text me-2"></i>Pages<a href="javascript:void(0)"
                                    class="tag-addon"><i class="fe fe-x"></i></a></span> <span class="search-tags"><i
                                    class="fe fe-align-left me-2"></i>Articles<a href="javascript:void(0)"
                                    class="tag-addon"><i class="fe fe-x"></i></a></span> <span class="search-tags"><i
                                    class="fe fe-server me-2"></i>Tags<a href="javascript:void(0)" class="tag-addon"><i
                                        class="fe fe-x"></i></a></span>
                        </div>
                        <div class="my-4">
                            <p class="font-weight-semibold text-muted mb-2">Recent Search :</p>
                            <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert"> <a
                                    href="notifications.html"><span>Notifications</span></a> <a class="ms-auto lh-1"
                                    href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i
                                        class="fe fe-x text-muted"></i></a> </div>
                            <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert"> <a
                                    href="alerts.html"><span>Alerts</span></a> <a class="ms-auto lh-1"
                                    href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i
                                        class="fe fe-x text-muted"></i></a> </div>
                            <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert"> <a
                                    href="mail.html"><span>Mail</span></a> <a class="ms-auto lh-1"
                                    href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i
                                        class="fe fe-x text-muted"></i></a> </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group ms-auto"> <button class="btn btn-sm btn-primary-light">Search</button>
                            <button class="btn btn-sm btn-primary">Clear Recents</button> </div>
                    </div>
                </div>
            </div>
        </div> 
        
              
        
        @include('layout.footer')