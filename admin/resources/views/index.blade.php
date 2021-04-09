@extends('layout.default')

@section('title', 'Dashboard')

@push('scripts')
<script src="assets/plugins/apexcharts/dist/apexcharts.min.js"></script>
<script src="assets/js/demo/dashboard.demo.js"></script>
@endpush

@section('content')
<!-- BEGIN #content -->
<div id="content" class="app-content">
    <h1 class="page-header mb-3">
        Hi, Sven. <small>here's what's happening with your site today.</small>
    </h1>

    <!-- BEGIN row -->
    <div class="row">

        <div class="card">
            <div class="card-body">
                Admin panel
            </div>
        </div>

    </div>
    <!-- END row -->




    <!-- END row -->
</div>
<!-- END #content -->
@endsection