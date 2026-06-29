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
						<li class="breadcrumb-item"><a href="javascript:void(0)">Data SPPD</a></li>
					</ol>
                </div>
                <!-- row -->


                <div class="row">
					<div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">SPPD Datatable</h4>
								<a href="{{ route('tambah-sppd') }}" class="btn btn-primary">
									<i class="fa fa-plus"></i> Tambah SPPD
								</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example3" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Asal</th>
                                                <th>Tujuan</th>
                                                <th>Keperluan</th>
                                                <th>Keterangan</th>
                                                <th>Tanggal Berangkat</th>
												<th>Tanggal Pulang</th>
                                                <th>Nama Karyawan</th>
                                                <th>Driver</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											@foreach ($luar as $key => $kota)
                                            <tr>
												<td><a href="javascript:void(0);"><strong>{{ $key + 1 }}</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>{{$kota -> start -> nama_rute ?? '-'}}</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>{{$kota -> finish -> nama_rute ?? '-'}}</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>{{$kota -> keperluan}}</strong></a></td>
												<td><a href="javascript:void(0);"><strong>{{$kota -> keterangan}}</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>{{$kota -> tanggal_berangkat}}</strong></a></td>
                                                <td><a href="javascript:void(0);"><strong>{{$kota -> tanggal_pulang}}</strong></a></td>
												<td><a href="javascript:void(0);"><strong>{{ $kota->listNama->implode(', ') }}</strong></a></td>
                                                <td>
                                                    <a href="javascript:void(0);">
                                                        <strong>
                                                            {{ $kota->status == 0 ? 'Menunggu Konfirmasi HRD' : ($kota->driver) }}
                                                        </strong>
                                                    </a>
                                                </td>
												<td>
                                                    <a href="javascript:void(0);">
                                                        <strong>
                                                            @if($kota->status == 0)
                                                                <span class="text-warning">Menunggu Approval HRD</span>
                                                            @elseif($kota->status == 1)
                                                                <span class="text-success">Telah Acc HRD, Menunggu Approval Direktur Operasional</span>
                                                            @elseif($kota->status == 2)
                                                                <span class="text-success">Sudah Di Acc DirOps, Menunggu Pencairan Dana</span>
                                                            @elseif($kota->status == 3)
                                                                <span class="text-info">Dana Telah di cairkan</span>
                                                            @else
                                                                <span class="text-danger">Pengajuan Di tolak</span>
                                                            @endif
                                                        </strong>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="d-flex">

														<!-- Tombol Edit -->
														<a href="{{ route('edit-sppd', ['id_perjalanan' => $kota->id_perjalanan]) }}" 
														class="btn btn-primary shadow btn-xs sharp me-1">
															<i class="fas fa-pencil-alt"></i>
														</a>

														<!-- Tombol Hapus -->
														<form action="{{ route('hapus-sppd', ['id_perjalanan' => $kota->id_perjalanan]) }}" 
															method="POST" 
															style="display:inline;">
															
															@csrf
															@method('DELETE')

															<button type="submit" 
																	class="btn btn-danger shadow btn-xs sharp"
																	onclick="return confirm('Yakin ingin menghapus keberangkatan {{ $kota->tanggal_berangkat }}?')">
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