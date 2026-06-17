<!DOCTYPE html>
<html lang="en">

@include('part.head')
<body>


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
       @include('part.nav')
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="dashboard_bar">
                                Datatable 
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
							<li class="nav-item">
								<div class="input-group search-area">
									<input type="text" class="form-control" placeholder="Search here...">
									<span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
								</div>
							</li>
                        </ul>
                    </div>
				</nav>
			</div>
		</div>
                    
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @include('part.side')
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
				
				<div class="row page-titles">
					<ol class="breadcrumb">
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Data Profil</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Departement Datatable</h4>
								<a href="{{ route('tambah-dept') }}" class="btn btn-primary">
									<i class="fa fa-plus"></i> Tambah Profil
								</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Nama Departement</th>
                                                <th>Jumlah Staff</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											@foreach ($dept as $key => $depart)
                                            <tr>
												<td><a href="javascript:void(0);"><strong>{{ $key + 1 }}</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>{{$depart -> nama_dept}}</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>{{$depart -> profil_count}}</strong></a></td>
                                                <td>
													<div class="d-flex">

														<!-- Tombol Edit -->
														<a href="{{ route('edit-dept', ['id_dept' => $depart->id_dept]) }}" 
														class="btn btn-primary shadow btn-xs sharp me-1">
															<i class="fas fa-pencil-alt"></i>
														</a>

														<!-- Tombol Hapus -->
														<form action="{{ route('hapus-dept', ['id_dept' => $depart->id_dept]) }}" 
															method="POST" 
															style="display:inline;">
															
															@csrf
															@method('DELETE')

															<button type="submit" 
																	class="btn btn-danger shadow btn-xs sharp"
																	onclick="return confirm('Yakin ingin menghapus data {{ $depart->nama_dept }}?')">
																<i class="fa fa-trash"></i>
															</button>

														</form>

													</div>
												</td>
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
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
       @include('part.foot')
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    @include('part.script')
</body>
</html>