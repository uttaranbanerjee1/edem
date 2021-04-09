@extends('layout.default')

@section('title', 'Scrum Board')

@push('css')
		<link href="/assets/plugins/tag-it/css/jquery.tagit.css" rel="stylesheet" />
@endpush

@push('scripts')
		<script src="/assets/plugins/jquery-migrate/dist/jquery-migrate.min.js"></script>
		<script src="/assets/plugins/tag-it/js/tag-it.min.js"></script>
		<script src="/assets/js/demo/page-scrum-board.demo.js"></script>
@endpush

@section('content')
    <!-- BEGIN #content -->
		<div id="content" class="app-content">
			<div class="d-flex align-items-center mb-md-3 mb-2">
				<div class="flex-fill">
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="#">PAGES</a></li>
						<li class="breadcrumb-item active">SCRUM BOARD</li>
					</ul>
			
					<h1 class="page-header mb-0">
						Scrum Board
					</h1>
				</div>
				<div class="ms-auto">
					<a href="#modalAddTask" data-bs-toggle="modal" class="btn btn-primary"><i class="fa fa-plus-circle me-1"></i> Add Task</a>
				</div>
			</div>
			
			<div class="mb-md-4 mb-3 d-md-flex">
				<div class="dropdown-toggle">
					<a href="#" data-bs-toggle="dropdown" class="text-dark text-decoration-none"><i class="far fa-folder fa-fw fa-lg text-muted me-1"></i> project/studio</a>
					<div class="dropdown-menu">
						<a href="#" class="dropdown-item"><i class="far fa-folder fa-fw fa-lg text-muted me-1"></i> project/mobile-app-dev</a>
						<a href="#" class="dropdown-item"><i class="far fa-folder fa-fw fa-lg text-muted me-1"></i> project/bootstrap-5</a>
						<a href="#" class="dropdown-item"><i class="far fa-folder fa-fw fa-lg text-muted me-1"></i> project/mvc-version</a>
						<a href="#" class="dropdown-item"><i class="far fa-folder fa-fw fa-lg text-muted me-1"></i> project/ruby-version</a>
					</div>
				</div>
				<div class="ms-md-4 mt-md-0 mt-2"><i class="fa fa-code-branch fa-fw fa-lg me-1 text-muted"></i> 1,392 pull request</div>
				<div class="ms-md-4 mt-md-0 mt-2"><i class="fa fa-users-cog fa-fw fa-lg me-1 text-muted"></i> 52 participant</div>
				<div class="ms-md-4 mt-md-0 mt-2"><i class="far fa-clock fa-fw fa-lg me-1 text-muted"></i> 14 day(s)</div>
			</div>
			
			<!-- BEGIN row -->
			<div class="row">
				<!-- BEGIN col-4 -->
				<div class="col-xl-4 col-lg-6">
					<!-- BEGIN card -->
					<div class="card mb-3">
						<!-- BEGIN card-header -->
						<div class="card-header d-flex align-items-center">
							<span class="flex-grow-1 font-weight-600">To do (5)</span>
							<a href="#" class="text-muted text-decoration-none fs-12px me-3"><i class="fa fa-fw fa-redo"></i></a>
							<a href="#" class="text-muted text-decoration-none fs-12px"><i class="fa fa-fw fa-trash"></i></a>
						</div>
						<!-- END card-header -->
						<!-- BEGIN list-group -->
						<div class="list-group list-group-flush">
							<!-- BEGIN list-group-item -->
							<div class="list-group-item d-flex ps-3">
								<div class="me-3">
									<i class="far fa-question-circle text-muted fa-fw fa-lg"></i> 
								</div>
								<div class="flex-fill">
									<div class="font-weight-600">Enable open search</div>
									<div class="fs-13px text-muted mb-2">#29949 opened yesterday by Terry</div>
									<div>
										<span class="badge bg-primary text-white rounded-sm fs-12px font-weight-500">docs</span>
										<span class="badge bg-success text-white rounded-sm fs-12px font-weight-500">feature</span>
									</div>
									<hr class="mb-15px mt-15px" />
									<div class="d-flex align-items-center mb-2">
										<div class="font-weight-600 me-2">
											Task (2/3)
										</div>
										<div>
											<a href="#" class="text-muted" data-bs-toggle="collapse" data-bs-target="#todoBoard">
												<i class="fa fa-plus-circle"></i>
											</a>
										</div>
										<div class="progress progress-xs width-100 me-2 ms-auto" style="height: 6px;">
											<div class="progress-bar progress-bar-striped" style="width: 66%;"></div>
										</div>
										<div class="fs-12px">66%</div>
									</div>
									<div class="form-group mb-0 pb-1 fs-13px">
										<div class="collapse show" id="todoBoard">
											<div class="form-check mb-2px">
												<input type="checkbox" class="form-check-input" id="customCheck1" checked />
												<label class="form-check-label pt-1px" for="customCheck1">create ui for autocomplete</label>
											</div>
											<div class="form-check mb-2px">
												<input type="checkbox" class="form-check-input" id="customCheck2" checked />
												<label class="form-check-label pt-1px" for="customCheck2">integrate jquery autocomplete with ui</label>
											</div>
											<div class="form-check mb-2px">
												<input type="checkbox" class="form-check-input" id="customCheck3" />
												<label class="form-check-label pt-1px" for="customCheck3">backend search return as json data</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END list-group-item -->
							<!-- BEGIN list-group-item -->
							<a href="#" class="list-group-item list-group-item-action d-flex ps-3">
								<div class="me-3">
									<i class="far fa-question-circle text-muted fa-fw fa-lg"></i> 
								</div>
								<div class="flex-fill">
									<div class="font-weight-500 text-dark">Investigate adding markdownlint</div>
									<div class="fs-13px text-muted mb-2">#29919 opened 9 days ago by xMediaKron</div>
									<div class="mb-1">
										<span class="badge bg-muted text-white rounded-sm fs-12px font-weight-500">build</span>
										<span class="badge bg-indigo text-white rounded-sm fs-12px font-weight-500">v5</span>
									</div>
								</div>
							</a>
							<!-- END list-group-item -->
							<!-- BEGIN list-group-item -->
							<a href="#" class="list-group-item list-group-item-action d-flex ps-3">
								<div class="me-3">
									<i class="far fa-question-circle text-muted fa-fw fa-lg"></i> 
								</div>
								<div class="flex-fill">
									<div class="font-weight-500 text-dark">Add a "Submit a Resource" form</div>
									<div class="mb-2 text-muted fs-13px">#29916 opened 9 days ago by Wasbbok</div>
									<div class="mb-1 d-flex align-items-center">
										<div class="me-2"><span class="badge bg-success text-white rounded-sm fs-12px font-weight-500">enhancement</span></div>
										<div class="widget-user-list">
											<div class="widget-user-list-item width-30 height-30"><div class="widget-user-list-link width-30 height-30"><img src="/assets/img/user/user-1.jpg" alt="" /></div></div>
											<div class="widget-user-list-item width-30 height-30 ms-n2"><div class="widget-user-list-link width-30 height-30"><img src="/assets/img/user/user-2.jpg" alt="" /></div></div>
											<div class="widget-user-list-item width-30 height-30 ms-n2"><div class="widget-user-list-link width-30 height-30"><img src="/assets/img/user/user-3.jpg" alt="" /></div></div>
											<div class="widget-user-list-item width-30 height-30 ms-n2"><div class="widget-user-list-link width-30 height-30"><img src="/assets/img/user/user-4.jpg" alt="" /></div></div>
											<div class="widget-user-list-item width-30 height-30 ms-n2"><div class="widget-user-list-link width-30 height-30"><img src="/assets/img/user/user-5.jpg" alt="" /></div></div>
											<div class="widget-user-list-item width-30 height-30 ms-n2"><div class="widget-user-list-link width-30 height-30 bg-gray-200 text-gray-500 fs-12px font-weight-600">+2</div></div>
										</div>
									</div>
								</div>
							</a>
							<!-- END list-group-item -->
							<!-- BEGIN list-group-item -->
							<a href="#" class="list-group-item list-group-item-action d-flex ps-3">
								<div class="me-3">
									<i class="far fa-question-circle text-muted fa-fw fa-lg"></i> 
								</div>
								<div class="flex-fill">
									<div class="font-weight-500 text-dark">Custom control border color missing on focus</div>
									<div class="mb-2 fs-13px text-muted">#29796 opened 29 days ago by mdo</div>
									<div class="mb-1">
										<span class="badge bg-pink text-white rounded-sm fs-12px font-weight-500">docs</span>
									</div>
								</div>
							</a>
							<!-- END list-group-item -->
							<!-- BEGIN list-group-item -->
							<a href="#" class="list-group-item list-group-item-action d-flex ps-3">
								<div class="me-3 f-s-16">
									<i class="far fa-question-circle text-muted fa-fw fa-lg"></i> 
								</div>
								<div class="flex-fill">
									<div class="font-weight-500 text-dark">New design for corporate page</div>
									<div class="mb-2 fs-13px text-muted">#29919 opened 19 days ago by sean</div>
									<div class="mb-1">
										<span class="badge bg-muted text-white rounded-sm fs-12px font-weight-500">design</span>
										<span class="badge bg-primary text-white rounded-sm fs-12px font-weight-500">v5</span>
									</div>
								</div>
							</a>
							<!-- END list-group-item -->
						</div>
						<!-- END list-group -->
					</div>
					<!-- END card -->
				</div>
				<!-- END col-4 -->
				<!-- BEGIN col-4 -->
				<div class="col-xl-4 col-lg-6">
					<!-- BEGIN card -->
					<div class="card mb-3">
						<!-- BEGIN card-header -->
						<div class="card-header d-flex align-items-center">
							<span class="flex-grow-1 font-weight-600">In Progress (2)</span>
							<a href="#" class="text-muted text-decoration-none fs-12px me-3"><i class="fa fa-fw fa-redo"></i></a>
							<a href="#" class="text-muted text-decoration-none fs-12px"><i class="fa fa-fw fa-trash"></i></a>
						</div>
						<!-- END card-header -->
						<!-- BEGIN list-group -->
						<div class="list-group list-group-flush">
							<!-- BEGIN list-group-item -->
							<div class="list-group-item d-flex ps-3">
								<div class="me-3">
									<i class="fa fa-tools text-muted fa-fw fa-lg"></i> 
								</div>
								<div class="flex-fill">
									<div class="font-weight-600">HTML5 flexbox old browser compatibility</div>
									<div class="fs-13px text-muted mb-2">#29982 handled by Sean</div>
									<div class="mb-1">
										<span class="badge bg-indigo text-white rounded-sm fs-12px font-weight-500">enhancement</span>
									</div>
									<hr class="mt-15px mb-15px" />
									<div class="d-flex align-items-center mb-2">
										<div class="font-weight-600 me-2">
											Task (1/2)
										</div>
										<div>
											<a href="#" class="text-muted" data-bs-toggle="collapse" data-bs-target="#inProgressBoard">
												<i class="fa fa-plus-circle"></i>
											</a>
										</div>
										<div class="progress progress-xs width-100 me-2 ms-auto" style="height: 6px;">
											<div class="progress-bar progress-bar-striped bg-warning" style="width: 50%;"></div>
										</div>
										<div class="fs-12px">50%</div>
									</div>
									<div class="form-group mb-1 fs-13px">
										<div class="collapse show" id="inProgressBoard">
											<div class="form-check mb-2px">
												<input type="checkbox" class="form-check-input" id="customCheck4" checked />
												<label class="form-check-label pt-1px" for="customCheck4">check all browser compatibility for HTML5 flexbox</label>
											</div>
											<div class="form-check mb-2px">
												<input type="checkbox" class="form-check-input" id="customCheck5" />
												<label class="form-check-label pt-1px" for="customCheck5">fallback integration by using other display property</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END list-group-item -->
							<!-- BEGIN list-group-item -->
							<div class="list-group-item d-flex ps-3">
								<div class="me-3 f-s-16">
									<i class="fa fa-bug text-danger fa-fw fa-lg"></i> 
								</div>
								<div class="flex-fill">
									<div class="font-weight-600 text-dark">Mobile app autoclose on iOS</div>
									<div class="fs-13px text-muted mb-2">#29953 handled by Ken</div>
									<div class="mb-1">
										<span class="badge bg-muted text-white rounded-sm fs-12px font-weight-500">issue</span>
										<span class="badge bg-danger text-white rounded-sm fs-12px font-weight-500">bug</span>
									</div>
									<hr class="mt-15px mb-15px" />
									<div class="d-flex align-items-center mb-2">
										<div class="font-weight-600 me-2">
											Task (0/1)
										</div>
										<div>
											<a href="#" class="text-muted" data-bs-toggle="collapse" data-bs-target="#inProgress2Board">
												<i class="fa fa-plus-circle"></i>
											</a>
										</div>
										<div class="progress progress-xs width-100 me-2 ms-auto" style="height: 6px;">
											<div class="progress-bar progress-bar-striped bg-danger" style="width: 5%;"></div>
										</div>
										<div class="fs-12px">0%</div>
									</div>
									<div class="form-group mb-1 fs-13px">
										<div class="collapse show" id="inProgress2Board">
											<div class="form-check mb-2px">
												<input type="checkbox" class="form-check-input" id="customCheck6" />
												<label class="form-check-label pt-1px" for="customCheck6">debug and fix mobile auto close while using GPS issue</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END list-group-item -->
						</div>
						<!-- END list-group -->
					</div>
					<!-- END card -->
				</div>
				<!-- END col-4 -->
				<!-- BEGIN col-4 -->
				<div class="col-xl-4 col-lg-6">
					<!-- BEGIN card -->
					<div class="card mb-3">
						<!-- BEGIN card-header -->
						<div class="card-header d-flex align-items-center">
							<span class="flex-grow-1 font-weight-600">Done (1)</span>
							<a href="#" class="text-muted text-decoration-none fs-12px me-3"><i class="fa fa-fw fa-redo"></i></a>
							<a href="#" class="text-muted text-decoration-none fs-12px"><i class="fa fa-fw fa-trash"></i></a>
						</div>
						<!-- END card-header -->
						<!-- BEGIN list-group -->
						<div class="list-group list-group-flush">
							<!-- BEGIN list-group-item -->
							<div class="list-group-item d-flex ps-3">
								<div class="me-3">
									<i class="far fa-check-circle text-success fa-fw fa-lg"></i> 
								</div>
								<div class="flex-fill">
									<div class="font-weight-600 text-dark">React version missing daterangepicker</div>
									<div class="fs-13px text-muted mb-2">#29930 closed yesterday by Sean</div>
									<div class="mb-1">
										<span class="badge bg-muted text-white rounded-sm fs-12px font-weight-500">build</span>
										<span class="badge bg-success text-white rounded-sm fs-12px font-weight-500">feature</span>
									</div>
									
									<hr class="mt-15px mb-15px" />
									<div class="d-flex align-items-center mb-2">
										<div class="font-weight-600 me-2">
											Task (3/3)
										</div>
										<div>
											<a href="#" class="text-muted" data-bs-toggle="collapse" data-bs-target="#completedBoard">
												<i class="fa fa-plus-circle"></i>
											</a>
										</div>
										<div class="progress progress-xs width-100 me-2 ms-auto" style="height: 6px;">
											<div class="progress-bar progress-bar-striped bg-success" style="width: 100%;"></div>
										</div>
										<div class="fs-12px">100%</div>
									</div>
									<div class="form-group mb-1 fs-13px">
										<div class="collapse show" id="completedBoard">
											<div class="form-check mb-2px">
												<input type="checkbox" class="form-check-input" id="customCheck7" checked />
												<label class="form-check-label pt-1px" for="customCheck7">install react-daterangepicker</label>
											</div>
											<div class="form-check mb-2px">
												<input type="checkbox" class="form-check-input" id="customCheck8" checked />
												<label class="form-check-label pt-1px" for="customCheck8">customize ui with scss</label>
											</div>
											<div class="form-check mb-2px">
												<input type="checkbox" class="form-check-input" id="customCheck9" checked />
												<label class="form-check-label pt-1px" for="customCheck9">backend integration for data filter with daterange input</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END list-group-item -->
						</div>
						<!-- END list-group -->
					</div>
					<!-- END card -->
				</div>
				<!-- END col-4 -->
				<!-- BEGIN col-4 -->
			</div>
			<!-- END row -->
			
			<!-- BEGIN modal -->
			<div class="modal fade" id="modalAddTask">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add Task</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
						</div>
						<div class="modal-body">
							<div class="mb-3">
								<label class="form-label">Title</label>
								<input type="text" class="form-control" placeholder="e.g Feature enhancement" />
							</div>
							<div class="mb-3">
								<label class="form-label">Status</label>
								<select class="form-select">
									<option value="">To Do</option>
									<option value="">In Progress</option>
									<option value="">Done</option>
								</select>
							</div>
							<div class="mb-3">
								<label class="form-label">Tags</label>
								<ul id="jquery-tagit" class="tagit form-control">
									<li>enhancement</li>
								</ul>
							</div>
							<div class="form-group">
								<label>Description</label>
								<textarea class="form-control" rows="10"></textarea>
							</div>
						</div>
						<div class="modal-footer">
							<a href="#" class="btn btn-default" data-bs-dismiss="modal">Cancel</a>
							<button type="button" class="btn btn-primary">Create</button>
						</div>
					</div>
				</div>
			</div>
			<!-- END modal -->
		</div>
		<!-- END #content -->
@endsection