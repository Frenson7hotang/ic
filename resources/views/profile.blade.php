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
            Chat box start
        ***********************************-->
		<!--**********************************
            Chat box End
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
                                <h4 class="card-title">Profile Datatable</h4>
								<a href="{{ route('tambah-profil') }}" class="btn btn-primary">
									<i class="fa fa-plus"></i> Tambah Profil
								</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Nama</th>
                                                <th>NIK</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Departement</th>
												<th>Alamat Email</th>
                                                <th>Jabatan</th>
                                                <th>Tanggal Bergabung</th>
                                                <th>Status Karyawan</th>
                                                <th>Hak Cuti</th>
                                                <th>Gambar</th>`
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											@foreach ($profil as $key => $profils)
                                            <tr>
												<td><a href="javascript:void(0);"><strong>{{ $key + 1 }}</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>{{$profils -> nama_user}}</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>{{$profils -> nik}}</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>{{$profils -> tempat_lahir}}</strong></a></td>
												<td><a href="javascript:void(0);"><strong>{{$profils -> tanggal_lahir}}</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>{{$profils -> dept->nama_dept ?? '-'}}</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>{{$profils -> alamat_email}}</strong></a></td>
												<td><a href="javascript:void(0);"><strong>{{$profils -> jab->jabatan ?? '-'}}</strong></a></td>
												<td><a href="javascript:void(0);"><strong>{{$profils -> tanggal_bergabung}}</strong></a></td>
												<td><a href="javascript:void(0);"><strong>{{$profils -> stat->status_jabatan ?? '-'}}</strong></a></td>
												<td><a href="javascript:void(0);"><strong>{{$profils -> hak_cuti}}</strong></a></td>
												<td><img class="rounded-circle" width="75" height="75" src="{{ Storage::url($profils->gambar) }}" alt=""></td>
                                                <td>
													<div class="d-flex">

														<!-- Tombol Edit -->
														<a href="{{ route('edit-profil', ['id_user' => $profils->id_user]) }}" 
														class="btn btn-primary shadow btn-xs sharp me-1">
															<i class="fas fa-pencil-alt"></i>
														</a>

														<!-- Tombol Hapus -->
														<form action="{{ route('hapus-profil', ['id_user' => $profils->id_user]) }}" 
															method="POST" 
															style="display:inline;">
															
															@csrf
															@method('DELETE')

															<button type="submit" 
																	class="btn btn-danger shadow btn-xs sharp"
																	onclick="return confirm('Yakin ingin menghapus data {{ $profils->nama_user }}?')">
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