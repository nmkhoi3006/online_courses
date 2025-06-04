<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">
        <div class="col-sm-8">
            <div class="ibox">
                <div class="ibox-content">
                    <div class="input-group">
                        <input type="text" placeholder="Search Students" class="input form-control">
                        <span class="input-group-btn">
                                <button type="button" class="btn btn btn-primary"> <i class="fa fa-search"></i> Search</button>
                        </span>
                    </div>
                    <div class="clients-list">
                    <ul class="nav nav-tabs">
                        <span class="pull-right small text-muted">1406 Elements</span>
                        <li class="active"><a data-toggle="tab" href="#tab-1"><i class="fa fa-user"></i> Students</a></li>
                        <li class=""><a data-toggle="tab" href="#tab-2"><i class="fa fa-briefcase"></i> Courses</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="full-height-scroll">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                            @foreach ($adminResources['buyersByCourse'] as $courseId => $buyers)
                                                @foreach ($buyers as $buyer)
                                                    <tr>
                                                        @php
                                                            $user = \App\Models\User::find($buyer['id']);
                                                            $num_courses = $user->purchasedCourses()->count();
                                                        @endphp
                                                        <td class="client-avatar"><img alt="image" src="img/a2.jpg"> </td>
                                                        <td><a data-toggle="tab" href="#buyer-1" class="client-link">{{ $buyer->name }}</a></td>
                                                        <td class="contact-type"><i class="fa fa-envelope"></i> </i></td>
                                                        
                                                        <td> {{ $buyer->email }}</td>
                                                        <td class="client-status"><span class="label label-primary">Active</span></td>
                                                    </tr>
                                                @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane">
                            <div class="full-height-scroll">
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <tbody>
                                        @foreach ($adminResources['courses'] as $course)
                                        <tr>
                                            <td><a data-toggle="tab" href="#course-{{ $course->id }}" class="client-link">{{ $course->title }}</a></td>
                                            <td>{{ $course->category }}</td>
                                            <td><i class="fa fa-dollar-sign"></i> {{ $course->price }}</td>
                                            <td class="client-status"><span class="label label-primary">Active</span></td>
                                        </tr>
                                        @endforeach
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="ibox ">

                <div class="ibox-content">
                    <div class="tab-content">
                        @foreach ($adminResources['courses'] as $course)
                            <div id="course-{{ $course->id }}" class="tab-pane active">
                                <div class="row m-b-lg">
                                    <div class="col-lg-4 text-center">
                                        <h2>{{ $course->title }}</h2>

                                        <div class="m-b-sm">
                                            <img alt="image" class="img-circle" src="img/a2.jpg"
                                                    style="width: 62px">
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <strong>
                                            Description
                                        </strong>

                                        <p>
                                            {{ $course->description }}
                                        </p>
                                        <button type="button" class="btn btn-primary btn-sm btn-block"><i
                                                class=""></i> Course Details
                                        </button>
                                    </div>
                                </div>
                                <div class="client-detail">
                                <div class="full-height-scroll">

                                    <strong>Statistic</strong>
                                    {{-- Ngày đăng ký tài khoản --}}

                                    <ul class="list-group clear-list">
                                        <li class="list-group-item fist-item">
                                            @php
                                                $totalStudents = \App\Models\Course::find($course->id)->buyers()->count();
                                            @endphp
                                            <span class="pull-right"> {{ $totalStudents }} Students </span>
                                            Total Students
                                        </li>
                                        <li class="list-group-item">
                                            @php
                                                $totalRevenue = $totalStudents * $course->price;
                                                $totalRevenue = number_format($totalRevenue, 2);
                                            @endphp
                                            <span class="pull-right"> {{ $totalRevenue }} </span>
                                            Total revenue
                                        </li>
                                        <li class="list-group-item">
                                            @php
                                                $courses = \App\Models\Course::avgRating()->get();
                                                $averageRating = $courses->find($course->id)->reviews_avg_rating;
                                                $averageRating = number_format($averageRating, 1);
                                            @endphp
                                            <span class="pull-right"> {{ $averageRating }} Stars</span>
                                            Average rating
                                        </li>
                                        <li class="list-group-item">
                                            <span class="pull-right"> 11:06 pm </span>
                                            Total reviews
                                        </li>
                                    </ul>
                                    <strong>Notes</strong>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua.
                                    </p>
                                    <hr/>
                                </div>
                                </div>
                            </div>
                        @endforeach
                        
                        
                        
                        <div id="buyer-1" class="tab-pane">
                            <div class="m-b-lg">
                                    <h2>Tellus Institute</h2>

                                    <p>
                                        Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero,written in 45 BC. This book is a treatise on.
                                    </p>
                                    <div>
                                        <small>Active project completion with: 48%</small>
                                        <div class="progress progress-mini">
                                            <div style="width: 48%;" class="progress-bar"></div>
                                        </div>
                                    </div>
                            </div>
                            <div class="client-detail">
                                <div class="full-height-scroll">

                                    <strong>Last activity</strong>

                                    <ul class="list-group clear-list">
                                        <li class="list-group-item fist-item">
                                            <span class="pull-right"> <span class="label label-primary">NEW</span> </span>
                                            The point of using
                                        </li>
                                        <li class="list-group-item">
                                            <span class="pull-right"> <span class="label label-warning">WAITING</span></span>
                                            Lorem Ipsum is that it has
                                        </li>
                                        <li class="list-group-item">
                                            <span class="pull-right"> <span class="label label-danger">BLOCKED</span> </span>
                                            If you are going
                                        </li>
                                    </ul>
                                    <strong>Notes</strong>
                                    <p>
                                        Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.
                                    </p>
                                    <hr/>
                                    <strong>Timeline activity</strong>
                                    <div id="vertical-timeline" class="vertical-container dark-timeline">
                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon gray-bg">
                                                <i class="fa fa-coffee"></i>
                                            </div>
                                            <div class="vertical-timeline-content">
                                                <p>Conference on the sales results for the previous year.
                                                </p>
                                                <span class="vertical-date small text-muted"> 2:10 pm - 12.06.2014 </span>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon gray-bg">
                                                <i class="fa fa-briefcase"></i>
                                            </div>
                                            <div class="vertical-timeline-content">
                                                <p>Many desktop publishing packages and web page editors now use Lorem.
                                                </p>
                                                <span class="vertical-date small text-muted"> 4:20 pm - 10.05.2014 </span>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon gray-bg">
                                                <i class="fa fa-bolt"></i>
                                            </div>
                                            <div class="vertical-timeline-content">
                                                <p>There are many variations of passages of Lorem Ipsum available.
                                                </p>
                                                <span class="vertical-date small text-muted"> 06:10 pm - 11.03.2014 </span>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon navy-bg">
                                                <i class="fa fa-warning"></i>
                                            </div>
                                            <div class="vertical-timeline-content">
                                                <p>The generated Lorem Ipsum is therefore.
                                                </p>
                                                <span class="vertical-date small text-muted"> 02:50 pm - 03.10.2014 </span>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon gray-bg">
                                                <i class="fa fa-coffee"></i>
                                            </div>
                                            <div class="vertical-timeline-content">
                                                <p>Conference on the sales results for the previous year.
                                                </p>
                                                <span class="vertical-date small text-muted"> 2:10 pm - 12.06.2014 </span>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-block">
                                            <div class="vertical-timeline-icon gray-bg">
                                                <i class="fa fa-briefcase"></i>
                                            </div>
                                            <div class="vertical-timeline-content">
                                                <p>Many desktop publishing packages and web page editors now use Lorem.
                                                </p>
                                                <span class="vertical-date small text-muted"> 4:20 pm - 10.05.2014 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>