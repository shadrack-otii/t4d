@extends('backoffice.master')

@section('title', 'Certification Reviews')

@section('content')
    <section class="content">
        <div class="container-fluid">

            <!-- Start -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                CERTIFICATION REVIEWS
                            </h2>
                        </div>
                        <div class="body">

                            <div class="dataTables_wrapper form-inline dt-bootstrap">
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
                                                <th>Customer</th>
                                                <th>Rating</th>
                                                <th>Certification</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($reviews as $review)
                                                <tr>
                                                    <td>{{ $review->id }}</td>
                                                    <td>{{ $review->customer->name }}</td>
                                                    <td>{{ $review->rating }}</td>
                                                    <td>
                                                        {{ $review->booking->courseBundle->name }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('backoffice.review.certification.show', $review) }}" class="btn btn-sm btn-success">View</a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center">
                                                        No reviews available
                                                    </td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>

                                {{ $reviews->links('backoffice.partials.pagination') }}

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# -->
            
        </div>
    </section>
@endsection