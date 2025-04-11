@empty($barang)
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
            <a href="{{ url('/barang') }}" class="btn btn-warning">Kembali</a>
        </div>
    </div>
</div>
@else
<form action="#" id="form-show">
    <div id="modal-master" class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Detail Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Kategori</label>
                    <select name="kategori_id" id="kategori_id" class="form-control" disabled>
                        <option value="">- Pilih Kategori -</option>
                        @foreach($kategori as $k)
                        <option {{ ($k->kategori_id == $barang->kategori_id)? 'selected' : '' }} value="{{ $k->kategori_id }}">{{ $k->kategori_nama }}</option>
                        @endforeach
                    </select>
                    <small id="error-kategori_id" class="error-text form-text text-danger"></small>
                </div>
                <div class="form-group">
                    <label>Kode Barang</label>
                    <input value="{{ $barang->barang_kode }}" type="text" name="barang_kode" id="barang_kode" class="form-control" disabled>
                    <small id="error-barang_kode" class="error-text form-text text-danger"></small>
                </div>
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input value="{{ $barang->barang_nama }}" type="text" name="barang_nama" id="barang_nama" class="form-control" disabled>
                    <small id="error-barang_nama" class="error-text form-text text-danger"></small>
                </div>
                <div class="form-group">
                    <label>Harga Beli</label>
                    <input value="{{ $barang->harga_beli }}" type="number" name="harga_beli" id="harga_beli" class="form-control" disabled>
                    <small id="error-harga_beli" class="error-text form-text text-danger"></small>
                </div>
                <div class="form-group">
                    <label>Harga Jual</label>
                    <input value="{{ $barang->harga_jual }}" type="number" name="harga_jual" id="harga_jual" class="form-control" disabled>
                    <small id="error-harga_jual" class="error-text form-text text-danger"></small>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn btn-primary">Kembali</button>
            </div>
        </div>
    </div>
</form>
@endempty
