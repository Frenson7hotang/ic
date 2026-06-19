<div class="modal fade" id="modalKaryawan" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pilih Karyawan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <input type="text" id="searchKaryawan" class="form-control mb-3" placeholder="Cari nama karyawan...">
                
                <div id="karyawanList" style="max-height: 300px; overflow-y: auto;">
                        @foreach($profil as $p)
                        <div class="karyawan-wrapper karyawan-item p-2 border-bottom" data-name="{{ strtolower($p->nama_user) }}" style="display: flex; align-items: center;">
                            
                            <input class="checkbox-karyawan" type="checkbox" value="{{ $p->id_user }}" id="check_{{ $p->id_user }}" data-label="{{ $p->nama_user }}" style="width: 20px; height: 20px; margin-right: 15px;">
                            
                            <label for="check_{{ $p->id_profil }}" style="margin: 0; cursor: pointer;">
                                {{ $p->nama_user }} | {{ $p->dept->nama_dept ?? '-' }}
                            </label>
                            
                        </div>
                    @endforeach
                    <div id="noDataMessage" class="p-3 text-center" style="display: none;">Data tidak ditemukan</div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="simpanPilihan()">Selesai</button>
            </div>
        </div>
    </div>
</div>