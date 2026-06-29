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
                                <h4 class="card-title">Tambah Data Karyawan</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action ="{{ route('simpan-profil') }}" method="post" enctype="multipart/form-data">
										@csrf
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Nama Karyawan</label>
                                                <input type="text" class="form-control" name="nama_user" placeholder="masukkan nama karyawan.." required>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">NIK</label>
                                                <input type="text" class="form-control" name="nik" placeholder="masukkan nik karyawan.." required>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Tempat Lahir</label>
                                                <input type="text" class="form-control" name="tempat_lahir" placeholder="masukkan tempat lahir karyawan.." required>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label>Tanggal Lahir</label>
                                                <input type="date" class="form-control" name="tanggal_lahir">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Departement</label>
                                                <select id="inputState" name="departement" class="default-select form-control wide">
                                                    <option selected="">Pilih...</option>
                                                    @foreach($dept as $deptt)
                                                    <option value = "{{ $deptt -> id_dept }}">
													{{ $deptt -> nama_dept }}	
													</option>
													@endforeach
                                                </select>
                                            </div>
											<div class="mb-3 col-md-6">
                                                <label>Alamat Email</label>
                                                <input type="text" class="form-control" name="alamat_email" placeholder="masukkan alamat email karyawan.." required>
                                            </div>
                                             <div class="mb-3 col-md-6">
                                                <label class="form-label">Jabatan</label>
                                                <select id="inputState" name="jabatan" class="default-select form-control wide">
                                                    <option selected="">Pilih...</option>
                                                    @foreach($jabatan as $job)
                                                    <option value = "{{ $job -> id_jabatan }}">
													{{ $job -> jabatan }}	
													</option>
													@endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                                <div class="mb-3 col-md-6">
                                                <label>Tanggal Bergabung</label>
                                                <input type="date" class="form-control" name="tanggal_bergabung">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Status Karyawan</label>
                                                <select id="inputState" name="status_karyawan" class="default-select form-control wide">
                                                    <option selected="">Pilih...</option>
													@foreach($status as $stat)
                                                    <option value="{{ $stat -> id_stat }}">
													{{ $stat->status_jabatan }}
												</option>
												@endforeach
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Hak Cuti</label>
                                                <input type="text" class="form-control" name="hak_cuti" placeholder="masukkan hak cuti karyawan.." required>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label">Gambar</label>
                                                <input type="file" class="form-control" name="gambar">
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