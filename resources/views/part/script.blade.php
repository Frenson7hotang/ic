<!-- Required vendors -->
    <script src="{{ asset('load/vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('vendor/chart.js/Chart.bundle.min.js') }}"></script>
	<script src="{{ asset('vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>
	
	<!-- Apex Chart -->
	<script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script>
	<script src="{{ asset('vendor/nouislider/nouislider.min.js') }}"></script>
	<script src="{{ asset('vendor/wnumb/wNumb.js') }}"></script>
	
	<!-- Dashboard 1 -->
	<script src="{{ asset('load/js/dashboard/dashboard-1.js') }}"></script>

    <script src="{{ asset('load/js/custom.min.js') }}"></script>
	<script src="{{ asset('load/js/dlabnav-init.js') }}"></script>
	<script src="{{ asset('load/js/demo.js') }}"></script>
    <script src="{{ asset('load/js/styleSwitcher.js') }}"></script>

	<!-- Datatable -->
    <script src="{{ asset('load/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('load/js/plugins-init/datatables.init.js') }}"></script>

	<script src="{{ asset('load/vendor/jquery-nice-select/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('js/custom.min.js') }}"></script>
	<script src="{{ asset('js/dlabnav-init.js') }}"></script>
	<script src="{{ asset('js/demo.js') }}"></script>
    <script src="{{ asset('js/styleSwitcher.js') }}"></script>

	<script>
    // Taruh script search dan simpanPilihan di sini
    document.getElementById('searchKaryawan').addEventListener('keyup', function() { ... });
    function simpanPilihan() { ... }
	</script>

	<script>
		// 1. Logika Pencarian
		document.getElementById('searchKaryawan').addEventListener('input', function() {
			let filter = this.value.toLowerCase().trim();
			let items = document.querySelectorAll('.karyawan-item');
			let noData = document.getElementById('noDataMessage');
			let adaHasil = false;

			items.forEach(item => {
				let name = item.getAttribute('data-name');
				if (name.indexOf(filter) > -1) {
					item.style.display = "";
					adaHasil = true;
				} else {
					item.style.display = "none";
				}
			});
			noData.style.display = adaHasil ? "none" : "block";
		});

		// 2. Logika Simpan
		function simpanPilihan() {
			let checkedBoxes = document.querySelectorAll('#karyawanList input:checked');
			let names = [];
			let hiddenContainer = document.getElementById('hidden_inputs');
			
			hiddenContainer.innerHTML = ''; 

			checkedBoxes.forEach(cb => {
				names.push(cb.getAttribute('data-label'));
				
				// Membuat input hidden secara dinamis untuk dikirim ke Controller
				let input = document.createElement('input');
				input.type = 'hidden';
				input.name = 'nama_karyawan[]'; 
				input.value = cb.value;
				hiddenContainer.appendChild(input);
			});

			document.getElementById('display_karyawan').value = names.join(', ');
			
			// Menutup modal menggunakan Bootstrap 5
			let modalEl = document.getElementById('modalKaryawan');
			let modal = bootstrap.Modal.getInstance(modalEl);
			modal.hide();
		}
	</script>
		