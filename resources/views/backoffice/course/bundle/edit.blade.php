@extends('backoffice.master')

@section('title', 'Edit Course Bundle')

@section('content')
    <section class="content">
        <div class="container-fluid">

            <!-- Start -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header clearfix">
                            <h2 class="pull-left">
                                EDIT COURSE BUNDLE
                            </h2>

                            <a class="pull-right" style="cursor: pointer;" onclick="'{{ url()->previous() }}' == '{{ url()->current() }}' ? window.location.assign( `{{ route('backoffice.home') }}` ) : window.history.back()">
                                <i class="material-icons" style="font-size: 11px;">
                                    arrow_back
                                </i>
                                Go back
                            </a>
                        </div>

                        @include('backoffice/partials/alerts/response_message')

                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <form action="{{ route('backoffice.course.bundle.update', $bundle) }}" method="post" id="course-bundle-form" enctype="multipart/form-data">

                                        @csrf
                                        @method('PUT')

                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name', $bundle->name) }}">
                                            </div>

                                            @include('backoffice.partials.alerts.form_error', ['field' => 'name'])
                                        </div>

                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" name="code" class="form-control" placeholder="Course Code" value="{{ old('code', $bundle->code) }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="checkbox" id="featured" name="featured" class="filled-in chk-col-red"
                                            @if ( old('featured', $bundle->featured) )
                                                checked
                                            @endif>

                                            <label for="featured">
                                                Mark as featured
                                            </label>
                                        </div>

                                        <div class="form-group">
                                            <label for="category_id">Category</label>

                                            <div class="form-line">
                                                <select id="category_id" name="category_id" class="form-control" v-model="selectedCategory">
                                                    <option v-for="(category, index) in categories" :key="category-index" :value="category.id">
                                                        @{{ category.name }}
                                                    </option>
                                                </select>
                                            </div>

                                            @include('backoffice.partials.alerts.form_error', ['field' => 'category_id'])
                                        </div>

                                        <div class="form-group">
                                            <label for="subcategory_id">Subcategory</label>

                                            <div class="form-line">
                                                <select id="subcategory_id" name="subcategory_id" class="form-control" v-model="selectedSubcategory">
                                                    <option v-for="(subcategory, index) in subcategories" :key="subcategory-index" :value="subcategory.id">
                                                        @{{ subcategory.name }}
                                                    </option>
                                                </select>
                                            </div>

                                            @include('backoffice.partials.alerts.form_error', ['field' => 'subcategory_id'])
                                        </div>

                                        <div class="form-group">
                                            <label for="topic_id">
                                                Topic
                                            </label>

                                            <div class="form-line">
                                                <select id="topic_id" name="topic_id" class="form-control" v-model="selectedTopic">
                                                    <option v-for="(topic, index) in topics" :key="index" :value="topic.id">
                                                        @{{ topic.name }}
                                                    </option>
                                                </select>
                                            </div>

                                            @include('backoffice.partials.alerts.form_error', ['field' => 'topic_id'])
                                        </div>

                                        <div class="form-group">
                                            <label for="trainers">
                                                Trainer
                                            </label>

                                            <div class="form-line">
                                                <select id="trainers" name="trainers[]" class="form-control show-tick" multiple>
                                                    @foreach (App\Staff::whereHas('account', function ($query) {

                                                        return $query->where('role', 'trainer');

                                                    })->get() as $staff)

                                                        <option value="{{ $staff->id }}"
                                                        @if ( in_array($staff->id, old('trainers', $bundle->trainers ? $bundle->trainers->modelKeys() : [])) )
                                                            selected
                                                        @endif>{{ $staff->name }}</option>

                                                    @endforeach
                                                </select>
                                            </div>

                                            @include('backoffice.partials.alerts.form_error', ['field' => 'trainers'])
                                        </div>

                                        <div class="form-group">
                                            <label for="software">
                                                Recommended Software
                                            </label>

                                            <div class="form-line">
                                                <select id="software" name="software[]" class="form-control show-tick" multiple>
                                                    @foreach (App\Software::all() as $software)

                                                        <option value="{{ $software->id }}"
                                                        @if ( in_array($software->id, old('software', $bundle->software ? $bundle->software->modelKeys() : [])) )
                                                            selected
                                                        @endif>{{ $software->name }}</option>

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="tours">
                                                Recommended Tours
                                            </label>

                                            <div class="form-line">
                                                <select id="tours" name="tours[]" class="form-control show-tick" multiple>
                                                    @foreach (App\Tour::all() as $tour)

                                                        <option value="{{ $tour->id }}"
                                                        @if ( in_array($tour->id, old('tours', $bundle->tours ? $bundle->tours->modelKeys() : [])) )
                                                            selected
                                                        @endif>{{ $tour->name }}</option>

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="event_types">
                                                Select Event Types
                                            </label>

                                            @include('backoffice.partials.alerts.form_error', ['field' => 'event_types'])

                                            <div class="form-group">

                                                @foreach ([
                                                    'Face to Face' => 'physical',
                                                    'Virtual' => 'virtual',
                                                    'E-learning' => 'elearning',

                                                ] as $key => $event)

                                                    <div>
                                                        <input type="checkbox" name="event_types[]" id="{{ $event }}" value="{{ $event }}" class="filled-in chk-col-red"
                                                        @if ( in_array($event, old('event_types', $bundle->event_types)) )
                                                            checked
                                                        @endif>

                                                        <label for="{{ $event }}">
                                                            {{ $key }}
                                                        </label>
                                                    </div>

                                                @endforeach

                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="cover">
                                                Cover Image
                                            </label>

                                            <div class="form-line">
                                                <input type="file" id="cover" class="form-control" name="cover">
                                            </div>

                                            @include('backoffice.partials.alerts.form_error', ['field' => 'cover'])
                                        </div>

                                        <div class="form-group">
                                            <label for="courses">
                                                Select Courses
                                            </label>

                                            <div class="form-line">
                                                <select id="courses" name="courses[]" class="form-control show-tick" multiple>
                                                    @foreach (App\Course::all() as $course)

                                                        <option value="{{ $course->id }}"
                                                        @if ( in_array($course->id, old('courses', $bundle->courses ? $bundle->courses->modelKeys() : [])) )
                                                            selected
                                                        @endif>

                                                            {{ $course->name }}

                                                        </option>

                                                    @endforeach
                                                </select>
                                            </div>

                                            @include('backoffice.partials.alerts.form_error', ['field' => 'courses'])
                                        </div>

                                        <!-- Description -->

                                        <label>Description:</label>

                                        <div class="">
                                            <textarea name="description" class="ckeditor">{{ old('description', $bundle->description) }}</textarea>
                                        </div>
                                        <!-- End -->

                                        <h4>Course Objectives</h4>

                                        <div class="">
                                            <textarea name="outline" class="ckeditor">{{ old('outline', $bundle->outline) }}</textarea>
                                        </div>

                                        <h4>Module</h4>

                                        <div class="">
                                            <textarea name="module" class="ckeditor">{{ old('module', $bundle->module) }}</textarea>
                                        </div>

                                        <h4>Course Administration Details</h4>

                                        <div class="">
                                            <textarea name="adminstration_details" class="ckeditor">{{ old('adminstration_details', $course->adminstration_details) }}</textarea>
                                        </div>

                                        <hr/>

                                        <div>
                                            <button type="submit" class="btn btn-success">
                                                UPDATE
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <h2>
                                SCHEDULE COURSE
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Count</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ( in_array('physical', $bundle->event_types) )
                                            <tr>
                                                <td>Face to Face schedule</td>
                                                <td>{{ $bundle->physical_bundles_count }}</td>
                                                <td>
                                                    <a href="{{ route('backoffice.course.bundle.physical.index', $bundle->id) }}" class="btn btn-sm btn-success">
                                                        View
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif

                                        @if ( in_array('virtual', $bundle->event_types) )
                                            <tr>
                                                <td>Virtual schedule</td>
                                                <td>{{ $bundle->virtual_bundles_count }}</td>
                                                <td>
                                                    <a href="{{ route('backoffice.course.bundle.virtual.index', $bundle) }}" class="btn btn-sm btn-success">
                                                        View
                                                    </a>
                                                </td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>

                                @if ( in_array('elearning', $bundle->event_types) )

                                    <form action="{{ route('backoffice.course.bundle.elearning.store', $bundle) }}" method="POST" class="dates">

                                        @csrf

                                        <div class="form-group">
                                            <label for="website">
                                                E-learning Website
                                            </label>

                                            <div class="form-line">
                                                <input type="text" name="website" id="website" class="form-control" placeholder="Website Link" value="{{ old('website', @$bundle->elearningBundle->website) }}">
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-secondary">
                                            SAVE
                                        </button>
                                    </form>

                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="header">
                            <h2>
                                ATTACH DOCUMENTS
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Count</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Documents</td>
                                            <td>{{ $bundle->documents_count }}</td>
                                            <td>
                                                <a href="{{ route('backoffice.course.bundle.document.index', $bundle) }}" class="btn btn-sm btn-success">
                                                    View
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- #END#  -->

        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('backoffice/assets/js/vue-2.6.11.js') }}"></script>

    <script>
        new Vue({

            el: '#course-bundle-form',

            data: () => ({
                categories: @json( App\Category::course()->with('subcategories.topics')->get() ),
                selectedCategory: @json( old('category_id', $bundle->category_id) ),
                selectedSubcategory: @json( old('subcategory_id', $bundle->subcategory_id) ),
                selectedTopic: @json( old('topic_id', $bundle->topic_id) ),
            }),

            created() {

                this.selectedCategory = Array.isArray(this.categories) && this.categories.length ? this.selectedCategory || this.categories[0].id : undefined;

                if ( this.selectedSubcategory == null ) {

                    let subcategory = this.selectedCategory ? this.categories.find(category => category.id == this.selectedCategory).subcategories[0] : undefined;

                    this.selectedSubcategory = subcategory ? subcategory.id : undefined;
                }
            },

            computed: {

                subcategories() {

                    return this.selectedCategory ? this.categories.find(category => category.id == this.selectedCategory).subcategories : [];
                },

                topics() {

                    if (this.subcategories.length == 0)

                        return [];

                    let subcategory = this.subcategories.find(subcategory => subcategory.id == this.selectedSubcategory);

                    return subcategory ? subcategory.topics : [];
                },
            }
        });
    </script>
@endpush
