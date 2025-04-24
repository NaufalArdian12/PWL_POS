@empty($penjualan)
<div id="modal-master" class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Kesalahan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <div class="modal-body">
            <div class="alert alert-danger">
                <h5><i class="icon fas fa-ban"></i> Kesalahan!!!</h5>
                Data yang anda cari tidak ditemukan
            </div>
            <a href="{{ url('/penjualan') }}" class="btn btn-warning">Kembali</a>
        </div>
    </div>
</div>
@else
<form action="#" id="form-edit">
    <div id="modal-master" class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Show Data penjualan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Kode penjualan</label>
                    <input value="{{ $penjualan->penjualan_kode }}" type="text" name="penjualan_kode" id="penjualan_kode" class="form-control" disabled>
                    <small id="error-penjualan_kode" class="error-text form-text text-danger"></small>
                </div>
                <div class="form-group">
                    <label>Pembeli</label>
                    <input value="{{ $penjualan->pembeli }}" type="text" name="penjualan_name" id="penjualan_name" class="form-control" disabled>
                    <small id="error-penjualan_name" class="error-text form-text text-danger"></small>
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input value="{{ $penjualan->penjualan_tanggal }}" type="text" name="penjualan_name" id="penjualan_name" class="form-control" disabled>
                    <small id="error-penjualan_name" class="error-text form-text text-danger"></small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-primary">Kembali</button>
            </div>
        </div>
    </div>
</form>
@endempty
