show.blade.php                                                                                      000664  001750  001750  00000066266 14621377273 015025  0                                                                                                    ustar 00hillary                         hillary                         000000  000000                                                                                                                                                                         @extends('front.master')
{{-- schema markup --}}

@section('content')

<div class="main-body">
    <!-- page breadcrumbs -->
    <div class="breadcrumbs">
        <span>
            <a href="{{ route('home') }}" class="fa fa-home"></a>
        </span>
        <span class="bc-sep"></span>
        <span>
            <a href="{{ route('course.category.index') }}">
                All Categories
            </a>
        </span>
        <span class="bc-sep"></span>
        <span>
            <a href="{{ route('course.category.subcategory.index', $course->category) }}">
                {{ $course->category->name }}
            </a>
        </span>
        <span class="bc-sep"></span>
        <span>
            <a href="{{ route('course.category.subcategory.show', [
        'category' => $course->category,
        'subcategory' => $course->subcategory,
        ]) }}">
                {{ $course->subcategory->name }}
            </a>
        </span>
        <span class="bc-sep"></span>
        @if ($course->topic) 
            <span>
                <a href="{{ route('course.topic.show', $course->topic->slug) }}">
                    {{ $course->topic->name }}
                </a>
            </span>
            <span class="bc-sep"></span>
        @endif
        <span class="bc-current-page">{{ $course->name }}</span>
    </div>
    <!-- END page breadcrumbs -->

    @include('front/partials/alert')

    <div class="container">
        <div class="ip-tagline">
            <br>
            <h3>{{ ucfirst($course->name) }}</h3>
            <hr class="ip-inner-header"/>
        </div>
        <div class="row">  
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="btn bc-btn btn-primary" href="#enroll">
                        Enroll Now
                    </a>
                    {{-- <a class="nav-link" id="enroll" href="#enroll" data-toggle="tab">Enroll</a> --}}
                    {{-- <a class="nav-link" id="enroll-tab" data-toggle="tab" href="#enroll" aria-controls="enroll" aria-selected="false">Enroll Now</a> --}}
                </li>&nbsp; &#160;
                <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Course Description</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Course Objectives</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Course Outline</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active ip-course-desc" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <p>{!! $course->description !!}</p>
                    <h6><label>COURSE LEVEL: {{ $course->level }}</label></h6>
                </div>
                <div class="tab-pane fade ip-course-desc" id="profile" role="tabpanel" aria-labelledby="profile-tab"><p>{!! $course->outline !!}</p></div>
                <div class="tab-pane fade ip-course-desc" id="contact" role="tabpanel" aria-labelledby="contact-tab"><p>{!! $course->module !!}</p></div>
                {{-- <div class="tab-pane fade ip-course-desc" id="enroll" role="tabpanel" aria-labelledby="enroll-tab"><p>{!! $course->module !!}</p></div> --}}
            </div>
        </div>
    
        <div class="container" id="enroll">
            <div class="ip-inner-header text-center">
                <h3>Enroll for this Course</h3>
                <p>We are proud to offer this course in a variety of training formats to suit your needs.</p>
                @include('front.partials.learning-modes')

            </div>
        </div>

        <div class="container-fluid">
            <h4 class="text-center">Benefits of Taking a Course at IRES</h4>
            <div class="row">
                <div class="col-sm-4">
                    <div class="lead-brief-c">
                        <span class="fa fa-2x">
                            <img class="img-side" src="{{ asset('images/learn.png') }}">
                        </span>
                        <h5>LEARN</h5>
                        <p>Our courses are carefully curated to keep you abreast of latest industry trends, technological advancements, and best practices. We employ a variety of teaching methodologies, including hands-on workshops, case studies, and interactive sessions, all aimed at fostering an engaging and effective learning environment. Our expert instructors bring a wealth of knowledge and real-world experience, providing our clients with insights that can be immediately applied in their professional lives.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="lead-brief-c">
                        <span class="fa fa-2x">
                            <img class="img-side" src="{{ asset('images/network.png') }}">
                        </span>
                        <h5>NETWORK</h5>
                        <p>Our courses serve as a vibrant platform for professionals to connect and engage with a diverse community of peers, industry leaders, and experts. By participating in our programs, you gain access to an invaluable network that spans across various sectors and geographical boundaries. This networking aspect is not just about forming professional relationships; it's about creating a supportive ecosystem where ideas, opportunities, and collaborations can flourish. </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="lead-brief-c">
                        <span class="fa fa-2x">
                            <img class="img-side" src="{{ asset('images/grow.png') }}">
                        </span>
                        <h5>GROW</h5>
                        <p>Our courses are designed to challenge and inspire professionals to step out of their comfort zones and explore new horizons. Through a combination of theoretical knowledge and practical application, our programs help professionals refine their existing skills and acquire new ones, making them more versatile and competitive.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <h4 class="text-center">FAQs & Course Administration Details:</h4>
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne" style="background-color: #1EA19D;">
                        <h5 class="mb-0">
                            <button style="color: #ffffff;" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            TAILOR-MADE COURSES
                            </button>
                        </h5>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            This training can also be customized to suit the needs of your institution upon request. You can have it delivered in our IRES Training Centre or at a convenient location.
                        For further inquiries, please contact us on Phone: <b>+254 715 077 817</b> or Email: <b>outreach@indepthresearch.org</b>.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo" style="background-color: #a11e22;">
                        <h5 class="mb-0">
                            <button style="color: #ffffff;" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            COURSE METHODOLOGY
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            The instructor led trainings are delivered using a blended learning approach and comprise of presentations, guided sessions of practical exercise, web-based tutorials and group work. Our facilitators are seasoned industry experts with years of experience, working as professional and trainers in these fields.
                        All facilitation and course materials will be offered in English. The participants should be reasonably proficient in English.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree" style="background-color: #1EA19D;">
                        <h5 class="mb-0">
                            <button style="color: #ffffff;" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            COURSE ACCREDITATION
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Upon successful completion of this training, participants will be issued with an Indepth Research Institute (IRES) certificate certified by the National Industrial Training Authority (NITA).                        
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour" style="background-color: #a11e22;">
                        <h5 class="mb-0">
                            <button style="color: #ffffff;" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            PAYMENT DETAILS
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            Payment should be transferred to IRES account through bank on or before start of the course.
                        Send proof of payment to <b>outreach@indepthresearch.org</b>.                        
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFive" style="background-color: #1EA19D;">
                        <h5 class="mb-0">
                            <button style="color: #ffffff;" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            ACCOMODATION & PICKUP
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="card-body">
                            Accommodation and airport pickup are arranged upon request. For reservations contact the Training Officer.
                        Email: <b>outreach@indepthresearch.org</b>
                        Phone: <b>+254 715 077 817</b>.                        
                        </div>
                    </div>
                </div>
            </div>

            <!-- social share -->
            <div class="c-desc-social">
                <p>Share this course:<br/></p>
                <a class="fb" href="http://www.facebook.com/sharer.php?u={{ route('course.show', $course) }}" target="_blank" title="Share on Facebook"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                <a class="tw" href="https://twitter.com/share?url={{ route('course.show', $course) }}" target="_blank" title="Share on Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a class="in" href="http://www.linkedin.com/shareArticle?mini=true&amp;url={{ route('course.show', $course) }}" target="_blank" title="Share on LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                <a class="wa" href="https://wa.me/?text={{ route('course.show', $course) }}" target="_blank" title="Share on WhatsApp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
            </div>
            <div class="col-lg-12 text-center">
                <a class="btn bc-btn btn-primary" style="padding: 15px 30px; margin-bottom: 5px; border-radius: 15px;" href="#enroll">
                    Enroll Now
                </a>
            </div>
            <!-- END (social) share -->
        </div>
        {{-- <div class="col-lg-12 text-center">
                <a class="btn bc-btn btn-primary" style="padding: 15px 30px; border-radius: 15px;" href="#" data-toggle="modal" data-target="#submitEnquiry">
                    Enroll Now
                </a>
            </div> --}}
        {{-- <div class="col-lg-12">
            <div class="sticky-top" style="padding-top: 50px">
                <h5 class="text-center">Frequently Asked Questions</h5>
                <div class="accordion shadow p-2 bg-light rounded" id="FAQ">
                    @forelse($faqs as $faq)
                        @php $faq_id = substr(str_replace(' ', '', $faq->title), 0, 12); @endphp
                        <h2 class="accordion-header" id="headingOne">
                            <button class="btn btn-sm text-danger" data-toggle="collapse" data-target="#F{{$faq_id}}" aria-expanded="true" aria-controls="F{{$faq_id}}" id="{{$faq_id}}">
                                {{$faq->title}}</a> <span class="has-child fa fa-chevron-down"></span>
                            </button>
                        </h2>

                        <div id="F{{$faq_id}}" class="collapse hide" aria-labelledby="{{$faq_id}}" data-parent="#FAQ">
                            <div class="faq-desc">
                                {!! $faq->description !!}
                            </div>
                        </div>
                    @empty
                        <p>No FAQs added</p>
                    @endforelse
                </div>
            </div>
        </div> --}}

        <!-- other applicants section -->
        <div class="container">
        @php
            $course_bookings = App\CourseBooking::whereCourseId($course->id)->when(Auth::check() and Gate::check('customer'), function ($query) {
                $query->whereHas('customer', function ($query) {
                    $query->where('id', '<>', App\Customer::whereUserId( Auth::id() )
                    ->first()->id);
                });
            })->with('customer')->inRandomOrder()->take(5)->get();
        @endphp

        @if ( $course_bookings->count() > 0 )
            <div class="c-desc-applicants c-desc-extra" id="">
                <div class="ip-inner-header">
                    <h4>Who else has taken this course?</h4>
                    <hr/>
                </div>
                <!-- table -->
                <div>
                    <table class="table table-sm table-responsive table-striped ires-table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Job Title</th>
                                <th scope="col">Organisation</th>
                                <th scope="col">Country</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($course_bookings as $course_booking)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>{{ ucfirst($course_booking->customer->designation ?? '') }}</td>
                                <td>{{ @$course_booking->customer->company->name ?? '' }}</td>
                                <td>{{ ucfirst($course_booking->customer->country ?? '') }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
        </div>
        <!-- END other applicants section -->

        <!-- course description -->
        {{-- <div class="ip-course-desc">
            <div class="ip-course-desc"> --}}
                {{-- <div class="">
                    {!! $course->description !!}
                </div>--}}
                {{-- <div>
                    <h6>COURSE LEVEL: <label>{{ $course->level }}</label></h6>
                </div>   --}}

                <!-- course schedule -->
                {{-- <div>
                    @include('front.partials.learning-modes')
                </div> --}}
                <!-- END course dates -->

                {{-- <hr class="bg-danger">

                <div>
                    {!! $course->outline !!}
                </div>

                <hr class="bg-danger">

                <div>
                    {!! $course->module !!}
                </div>

                <hr class="bg-danger">

                <div>
                    <h6>Course Administration Details:</h6>
                    {!! $course->adminstration_details !!}
                </div>
                
                <hr class="bg-danger">

                <div>
                    <h6>DOWNLOADABLE DOCUMENTS:</h6>
                    <table class="table table-sm table-responsive table-striped ires-table tb-download">
                        @if($course->documents->count() > 0)
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                        @endif
                        <tbody>
                        @forelse ($course->documents as $document)
                            <tr>
                                <td>{{ $document->id }}</td>
                                <td>{{ $document->name }}</td>
                                <td>
                                    <a class="td-reg-btn" href="#" data-toggle="modal" data-target="#popDownload" onclick="document.getElementById('document_id').value={{ $document->id }}">
                                        Download
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3">
                                    No documents uploaded
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <div>
                    <ul>
                        @foreach ($course->trainers as $trainer)
                            <li>
                                <b>{{ $trainer->name }}</b>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <hr/> --}}
            <!-- (social) share --><!-- direct share -->

                <!-- download modal -->
                {{-- <div class="modal fade" id="popDownload" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <form action="{{ route('course.document.download') }}" method="POST" class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Complete form to download</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                @csrf

                                <input type="hidden" name="course_id" value="{{ $course->id }}">

                                <input type="hidden" name="document_id" id="document_id">

                                <div class="form-group">
                                    <small class="form-text text-muted">Full Name</small>
                                    <input type="text" class="form-control" placeholder="Full Name" name="name" value="{{ old('name', @$course->name) }}" required>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <small class="form-text text-muted">Phone Number</small>
                                        <input type="tel" class="form-control" placeholder="Phone Number" name="phone" value="{{ old('phone', @$customer->phone) }}" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <small class="form-text text-muted">Email Address</small>
                                        <input type="email" class="form-control" placeholder="Email Address" name="email" value="{{ old('email', @$customer->account->email) }}" required>
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <small class="form-text text-muted">Organization</small>
                                        <input type="text" class="form-control" placeholder="organization" name="organization" value="{{ old('organization', @$customer->company->name) }}" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <small class="form-text text-muted">Designation</small>
                                        <input type="text" class="form-control" placeholder="Designation" name="designation" value="{{ old('designation', @$customer->designation) }}" required>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Download</button>
                            </div>
                        </form>
                    </div>
                </div> --}}

                <!-- referral modal -->
                {{-- <div class="modal fade" id="referFriend" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <form action="{{ route('course.referral', $course) }}" method="POST" class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" >Send to Colleague</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                @csrf

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <small class="form-text text-muted">Full Name</small>
                                        <input type="text" class="form-control" placeholder="Full Name" name="name" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <small class="form-text text-muted">Email Address</small>
                                        <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <small class="form-text text-muted">Your message</small>
                                    <textarea class="form-control" id="courseEnquiry" rows="3" name="message" required></textarea>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div> --}}

            {{-- </div>
           
        </div> --}}

        <!-- Related Courses Section -->
        {{--  <div class="row">
            <br>
            <div class="ip-inner-header">
                <h4>We thought you might be interested</h4>
                <hr/>
            </div>
            <div class="row">
                @foreach ($course->subcategory->category->courses()->where('courses.id', '<>', $course->id)->inRandomOrder()->take(4)->get() as $other_course)
                    <div class="col-sm-3 ip-sub-col">
                        <div class="ip-sub-img-new">
                            <a href="{{ route('course.show', $other_course) }}">
                                <img src="{{ asset('storage/'.$other_course->cover) }}">
                            </a>
                            <p>
                                <a href="{{ route('course.show', $other_course) }}">
                                    {{ $other_course->name }}
                                </a>
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> --}}
        <!-- End Related Courses Section -->
    </div>

</div>

{{-- schema markup --}}
@component('schema')
    "@type" : "Course",
    "title" : $course->name,
    "image" : $course->cover,
    "description" : $course->description,
    "provider": {
        "@type": "Organization",
        "name": "Indepth Research Institute - IRES",
        "sameAs": "https://www.indepthresearch.org/"
      }
    
@endcomponent
{{-- end of schema --}}
@endsection
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          