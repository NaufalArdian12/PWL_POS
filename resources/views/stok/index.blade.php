@extends('layouts.template')
@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools">
            <a class="btn btn-sm btn-primary mt-1" href="{{ url('stok/create') }}">Tambah</a>
            <button onclick="modalAction('{{ url('/stok/create_ajax') }}')" class="btn btn-sm btn-success mt-1">Tambah Ajax</button>
        </div>
    </div>
    <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <table class="table table-bordered table-striped table-hover table-sm" id="table_stok">
            <thead>
                <tr>
                    <th>No</th> <!-- Changed from "Stok id" to match DT_RowIndex -->
                    <th>ID Stok</th>
                    <th>ID Barang</th>
                    <th>ID User</th>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" data-width="75%" aria-hidden="true"></div>
@endsection

@push('js')
<script>
    function modalAction(url = '') {
        $('#myModal').load(url, function() {
            $('#myModal').modal('show');
        });
    }

    $(document).ready(function() {
        $('#table_stok').DataTable({
            serverSide: true,
            processing: true,
            ajax: {
                url: "{{ url('stok/list') }}",
                type: "POST",
                dataType: "json",
            },
            columns: [
                {
                    data: "DT_RowIndex",
                    name: "DT_RowIndex",
                    className: "text-center",
                    orderable: false,
                    searchable: false
                },
                {
                    data: "stok_id",
                    name: "stok_id",
                    className: "",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "barang_id",
                    name: "barang_id",
                    className: "",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "user_id",
                    name: "user_id",
                    className: "",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "stok_tanggal",
                    name: "stok_tanggal",
                    className: "",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "stok_jumlah",
                    name: "stok_jumlah",
                    className: "",
                    orderable: true,
                    searchable: true
                },
                {
                    data: "aksi",
                    name: "aksi",
                    className: "text-center",
                    orderable: false,
                    searchable: false
                }
            ],
            order: [[1, 'asc']], // Default sorting by stok_id
            lengthMenu: [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
        });
    });
</script>
@endpush
