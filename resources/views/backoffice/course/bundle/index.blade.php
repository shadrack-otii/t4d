@extends('backoffice.master')

@section('title', "Courses Bundles")

@section('content')
    <section class="content">
        <div class="container-fluid">

            <!-- Start -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                COURSE BUNDLES
                            </h2>
                        </div>

                        <div class="body">
                            <div class="dataTables_wrapper form-inline dt-bootstrap">
                                <div class="dt-buttons">
                                    <a class="dt-button buttons-html5" tabindex="0" href="{{ route('backoffice.course.bundle.create') }}">
                                        <span>Add Course Bundle</span>
                                    </a>
                                    
                                    @can('export_data')
                                    <a class="dt-button buttons-html5" tabindex="0" href="{{ route('backoffice.course.bundle.export') }}" target="_blank">
                                        <span>Export to Excel</span>
                                    </a>
                                    @endcan
                                </div>

                                <div class="dataTables_filter">
                                    <form action="{{ url()->current() }}" method="GET">
                                        <label>
                                            Search:
                                            <input name="search" type="search" class="form-control input-sm" value="{{ request()->query('search') }}">
                                        </label>
                                    </form>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Mode of Learning</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @forelse ($bundles as $bundle)
                                                <tr>
                                                    <td>{{ $bundle->id }}</td>
                                                    <td>{{ $bundle->name }}</td>
                                                    <td>
                                                        {{ collect($bundle->event_types)->map( function ($type) {

                                                            switch ($type) {

                                                                case 'physical':
                                                                    $title = 'Face to Face';
                                                                    break;

                                                                case 'virtual':
                                                                    $title = 'Virtual';
                                                                    break;

                                                                case 'elearning':
                                                                    $title = 'E-learning';
                                                                    break;
                                                                
                                                                default:
                                                                    $title = '';
                                                                    break;
                                                            }

                                                            return $title;

                                                        })->join(', ', ' and ') }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('backoffice.course.bundle.edit', $bundle) }}" class="btn btn-sm btn-secondary">Edit</a>

                                                        &nbsp;

                                                        @can('delete_course')
                                                        <form class="form-action" action="{{ route('backoffice.course.bundle.destroy', $bundle) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button onclick="return confirm('Are you sure to delete certification') ? true : false" type="submit" class="btn btn-sm btn-danger">
                                                                Delete
                                                            </button>
                                                        </form>
                                                        @endcan
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="3" class="text-center">
                                                        No courses available
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>

                                    {{ $bundles->links('backoffice.partials.pagination') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# -->
            
        </div>
    </section>
@endsection