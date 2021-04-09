@extends('layout.default')

@section('title', 'Mezzanine Financing')

@push('css')
<link href="{{env('APP_URL')}}/assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
<link href="{{env('APP_URL')}}/assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css"
    rel="stylesheet" />
<link href="{{env('APP_URL')}}/assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css"
    rel="stylesheet" />
<link href="{{env('APP_URL')}}/assets/plugins/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet" />
@endpush

@push('scripts')
<script src="{{env('APP_URL')}}/assets/plugins/highlight.js/highlight.min.js"></script>
<script src="{{env('APP_URL')}}/assets/js/demo/highlightjs.demo.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
<script src="{{env('APP_URL')}}/assets/plugins/bootstrap-table/dist/bootstrap-table.min.js"></script>
<script src="{{env('APP_URL')}}/assets/js/demo/table-plugins.demo.js"></script>
<script src="{{env('APP_URL')}}/assets/js/demo/sidebar-scrollspy.demo.js"></script>
@endpush

@section('content')
<!-- BEGIN #content -->
<div id="content" class="app-content">
    <!-- BEGIN container -->
    <div class="container">
        <!-- BEGIN row -->
        <div class="row justify-content-center">
            <!-- BEGIN col-10 -->
            <div class="col-xl-10">
                <!-- BEGIN row -->
                <div class="row">
                    <!-- BEGIN col-9 -->
                    <div class="col-xl-12">
                        <div class="d-flex bd-highlight mb-3">
                            <div class="me-auto p-2 bd-highlight">
                                <h1 class="page-header">
                                    Mezzanine Financing
                                </h1>
                            </div>

                            <div class="p-2 bd-highlight">
                                <a class="btn btn-primary" href="{{url('banks/new_mezzanine_financing')}}"
                                    role="button">Add
                                    New Entry</a>

                            </div>
                        </div>






                        <hr class="mb-4" />

                        <!-- BEGIN #datatable -->
                        <div id="datatable" class="mb-5">

                            <div class="card">
                                <div class="card-body">
                                    <table id="datatableDefault" class="table text-nowrap w-100 table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name of the Bank</th>
                                                <th>Website of the Bank</th>
                                                <th>Contact Person</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1.</td>
                                                <td>Berliner Sparkasse im Test</td>
                                                <td>www.teststparkasse.de</td>
                                                <td>Heinz Müllerwowitsch</td>
                                                <td>heinz@müllerowtisch.tv</td>
                                                <td>0049800696969</td>
                                                <td>
                                                    <div class="dropdown bank-table-dropdown">
                                                        <a href="#" data-bs-toggle="dropdown" class="text-muted"><i
                                                                class="fa fa-ellipsis-h"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item"><i
                                                                    class="fas fa-lg fa-fw  fa-eye"></i> View</a>
                                                            <a href="#" class="dropdown-item"><i
                                                                    class="far fa-lg fa-fw fa-edit"></i> Edit</a>
                                                            <a href="#" class="dropdown-item text-danger"> <i
                                                                    class="far fa-lg fa-fw fa-trash-alt"></i>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1.</td>
                                                <td>Berliner Sparkasse im Test</td>
                                                <td>www.teststparkasse.de</td>
                                                <td>Heinz Müllerwowitsch</td>
                                                <td>heinz@müllerowtisch.tv</td>
                                                <td>0049800696969</td>
                                                <td>
                                                    <div class="dropdown bank-table-dropdown">
                                                        <a href="#" data-bs-toggle="dropdown" class="text-muted"><i
                                                                class="fa fa-ellipsis-h"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item"><i
                                                                    class="fas fa-lg fa-fw  fa-eye"></i> View</a>
                                                            <a href="#" class="dropdown-item"><i
                                                                    class="far fa-lg fa-fw fa-edit"></i> Edit</a>
                                                            <a href="#" class="dropdown-item text-danger"> <i
                                                                    class="far fa-lg fa-fw fa-trash-alt"></i>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1.</td>
                                                <td>Berliner Sparkasse im Test</td>
                                                <td>www.teststparkasse.de</td>
                                                <td>Heinz Müllerwowitsch</td>
                                                <td>heinz@müllerowtisch.tv</td>
                                                <td>0049800696969</td>
                                                <td>
                                                    <div class="dropdown bank-table-dropdown">
                                                        <a href="#" data-bs-toggle="dropdown" class="text-muted"><i
                                                                class="fa fa-ellipsis-h"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item"><i
                                                                    class="fas fa-lg fa-fw  fa-eye"></i> View</a>
                                                            <a href="#" class="dropdown-item"><i
                                                                    class="far fa-lg fa-fw fa-edit"></i> Edit</a>
                                                            <a href="#" class="dropdown-item text-danger"> <i
                                                                    class="far fa-lg fa-fw fa-trash-alt"></i>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1.</td>
                                                <td>Berliner Sparkasse im Test</td>
                                                <td>www.teststparkasse.de</td>
                                                <td>Heinz Müllerwowitsch</td>
                                                <td>heinz@müllerowtisch.tv</td>
                                                <td>0049800696969</td>
                                                <td>
                                                    <div class="dropdown bank-table-dropdown">
                                                        <a href="#" data-bs-toggle="dropdown" class="text-muted"><i
                                                                class="fa fa-ellipsis-h"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item"><i
                                                                    class="fas fa-lg fa-fw  fa-eye"></i> View</a>
                                                            <a href="#" class="dropdown-item"><i
                                                                    class="far fa-lg fa-fw fa-edit"></i> Edit</a>
                                                            <a href="#" class="dropdown-item text-danger"> <i
                                                                    class="far fa-lg fa-fw fa-trash-alt"></i>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1.</td>
                                                <td>Berliner Sparkasse im Test</td>
                                                <td>www.teststparkasse.de</td>
                                                <td>Heinz Müllerwowitsch</td>
                                                <td>heinz@müllerowtisch.tv</td>
                                                <td>0049800696969</td>
                                                <td>
                                                    <div class="dropdown bank-table-dropdown">
                                                        <a href="#" data-bs-toggle="dropdown" class="text-muted"><i
                                                                class="fa fa-ellipsis-h"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item"><i
                                                                    class="fas fa-lg fa-fw  fa-eye"></i> View</a>
                                                            <a href="#" class="dropdown-item"><i
                                                                    class="far fa-lg fa-fw fa-edit"></i> Edit</a>
                                                            <a href="#" class="dropdown-item text-danger"> <i
                                                                    class="far fa-lg fa-fw fa-trash-alt"></i>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1.</td>
                                                <td>Berliner Sparkasse im Test</td>
                                                <td>www.teststparkasse.de</td>
                                                <td>Heinz Müllerwowitsch</td>
                                                <td>heinz@müllerowtisch.tv</td>
                                                <td>0049800696969</td>
                                                <td>
                                                    <div class="dropdown bank-table-dropdown">
                                                        <a href="#" data-bs-toggle="dropdown" class="text-muted"><i
                                                                class="fa fa-ellipsis-h"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item"><i
                                                                    class="fas fa-lg fa-fw  fa-eye"></i> View</a>
                                                            <a href="#" class="dropdown-item"><i
                                                                    class="far fa-lg fa-fw fa-edit"></i> Edit</a>
                                                            <a href="#" class="dropdown-item text-danger"> <i
                                                                    class="far fa-lg fa-fw fa-trash-alt"></i>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1.</td>
                                                <td>Berliner Sparkasse im Test</td>
                                                <td>www.teststparkasse.de</td>
                                                <td>Heinz Müllerwowitsch</td>
                                                <td>heinz@müllerowtisch.tv</td>
                                                <td>0049800696969</td>
                                                <td>
                                                    <div class="dropdown bank-table-dropdown">
                                                        <a href="#" data-bs-toggle="dropdown" class="text-muted"><i
                                                                class="fa fa-ellipsis-h"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item"><i
                                                                    class="fas fa-lg fa-fw  fa-eye"></i> View</a>
                                                            <a href="#" class="dropdown-item"><i
                                                                    class="far fa-lg fa-fw fa-edit"></i> Edit</a>
                                                            <a href="#" class="dropdown-item text-danger"> <i
                                                                    class="far fa-lg fa-fw fa-trash-alt"></i>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1.</td>
                                                <td>Berliner Sparkasse im Test</td>
                                                <td>www.teststparkasse.de</td>
                                                <td>Heinz Müllerwowitsch</td>
                                                <td>heinz@müllerowtisch.tv</td>
                                                <td>0049800696969</td>
                                                <td>
                                                    <div class="dropdown bank-table-dropdown">
                                                        <a href="#" data-bs-toggle="dropdown" class="text-muted"><i
                                                                class="fa fa-ellipsis-h"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item"><i
                                                                    class="fas fa-lg fa-fw  fa-eye"></i> View</a>
                                                            <a href="#" class="dropdown-item"><i
                                                                    class="far fa-lg fa-fw fa-edit"></i> Edit</a>
                                                            <a href="#" class="dropdown-item text-danger"> <i
                                                                    class="far fa-lg fa-fw fa-trash-alt"></i>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1.</td>
                                                <td>Berliner Sparkasse im Test</td>
                                                <td>www.teststparkasse.de</td>
                                                <td>Heinz Müllerwowitsch</td>
                                                <td>heinz@müllerowtisch.tv</td>
                                                <td>0049800696969</td>
                                                <td>
                                                    <div class="dropdown bank-table-dropdown">
                                                        <a href="#" data-bs-toggle="dropdown" class="text-muted"><i
                                                                class="fa fa-ellipsis-h"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item"><i
                                                                    class="fas fa-lg fa-fw  fa-eye"></i> View</a>
                                                            <a href="#" class="dropdown-item"><i
                                                                    class="far fa-lg fa-fw fa-edit"></i> Edit</a>
                                                            <a href="#" class="dropdown-item text-danger"> <i
                                                                    class="far fa-lg fa-fw fa-trash-alt"></i>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>1.</td>
                                                <td>Berliner Sparkasse im Test</td>
                                                <td>www.teststparkasse.de</td>
                                                <td>Heinz Müllerwowitsch</td>
                                                <td>heinz@müllerowtisch.tv</td>
                                                <td>0049800696969</td>
                                                <td>
                                                    <div class="dropdown bank-table-dropdown">
                                                        <a href="#" data-bs-toggle="dropdown" class="text-muted"><i
                                                                class="fa fa-ellipsis-h"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a href="#" class="dropdown-item"><i
                                                                    class="fas fa-lg fa-fw  fa-eye"></i> View</a>
                                                            <a href="#" class="dropdown-item"><i
                                                                    class="far fa-lg fa-fw fa-edit"></i> Edit</a>
                                                            <a href="#" class="dropdown-item text-danger"> <i
                                                                    class="far fa-lg fa-fw fa-trash-alt"></i>
                                                                Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                        <!-- END #datatable -->


                        <!-- END #bootstrapTable -->
                    </div>
                    <!-- END col-9-->

                </div>
                <!-- END row -->
            </div>
            <!-- END col-10 -->
        </div>
        <!-- END row -->
    </div>
    <!-- END container -->
</div>
<!-- END #content -->
@endsection