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
                                Form Element 
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
						<li class="breadcrumb-item active"><a href="javascript:void(0)">Form</a></li>
						<li class="breadcrumb-item"><a href="javascript:void(0)">Element</a></li>
					</ol>
                </div>
                <!-- row -->
                <div class="row">
					<div class="col-xl-auto col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Tambah Data SPPD</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action ="{{ route('simpan-profil') }}" method="post">
										@csrf
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Asal</label>
                                                <select id="inputState" name="departement" class="default-select form-control wide">
                                                    <option selected="">Pilih...</option>
                                                    @foreach($rute as $rutee)
                                                    <option value = "{{ $rutee -> id_rute }}">
													{{ $rutee -> nama_rute }}	
													</option>
													@endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Tujuan</label>
                                                <select id="inputState" name="departement" class="default-select form-control wide">
                                                    <option selected="">Pilih...</option>
                                                    @foreach($rute as $rutee)
                                                    <option value = "{{ $rutee -> id_rute }}">
													{{ $rutee -> nama_rute }}	
													</option>
													@endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Keperluan</label>
                                                <input type="text" class="form-control" name="keperluan" placeholder="masukkan keperluan.." required>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label>Keterangan</label>
                                                <input type="text" class="form-control" name="keterangan" placeholder="masukkan keterangan.." required>
                                            </div>
											<div class="mb-3 col-md-6">
                                                <label>Tanggal Berangkat</label>
                                                <input type="date" class="form-control" name="tanggal_berangkat">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label>Tanggal Pulang</label>
                                                <input type="date" class="form-control" name="tanggal_pulang">
                                            </div>
                                           <div class="mb-3 col-md-6">
                                            <label class="form-label">Nama Karyawan</label>
                                            <div class="input-group">
                                                <input type="text" id="display_karyawan" class="form-control" placeholder="Belum ada yang dipilih" readonly data-bs-toggle="modal" data-bs-target="#modalKaryawan" style="cursor: pointer;">
                                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalKaryawan">Pilih</button>
                                            </div>
                                            <div id="hidden_inputs"></div>
                                        </div>
                                        @include('modal-sppd')
                                    </div>
                                </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
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