@extends('backoffice.master')

@section('title', 'Downloads')

@section('content')
    <section class="content">
        <div class="container-fluid">

            <!-- Start -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                DOWNLOADS
                            </h2>
                        </div>
                        <div class="body">

                            <div class="dataTables_wrapper form-inline dt-bootstrap">

                                @can('export_data')
                                <div class="dt-buttons">
                                    <a class="dt-button buttons-html5" tabindex="0" href="">
                                        <span>Export to Excel</span>
                                    </a>
                                </div>
                                @endcan

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
                                                <th>E-mail</th>
                                                <th>Phone</th>
                                                <th>Organization</th>
                                                <th>Designation</th>
                                                <th>Document</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>John Doe</td>
                                                <td>mail@example.org</td>
                                                <td>+254 710 00100</td>
                                                <td>Rdfyne</td>
                                                <td>Human Resource Manager</td>
                                                <td>Sample document</td>
                                                <td>April 12th 2020</td>
                                            </tr>
                                        </tbody>
                                    </table>
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