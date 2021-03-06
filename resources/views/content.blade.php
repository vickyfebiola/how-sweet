@extends('template.baseAdmin')
@section('content')
    <!-- Begin Page Content -->
    <div>

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Table Contents</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tabel Admin</h6>
            </div>
            <div class="card-body">
                <a href="{{ route('content.create') }}" class="btn btn-primary mb-3">Tambah</a>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Gambar</th>
                                <th>Deskripsi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
    $('#dataTable').DataTable({
        // menampilkan data
        processing: true,
        serverSide: true,
        ajax: "{{ route('content.data') }}",
        columns: [
            {
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
            },
            {
                data: 'judul',
                name: 'judul',
            },
            {
                data: 'gambar',
                name: 'gambar',
                render: function (data) {
                           return '<img src="/../' +data+ '" width=100%/>';
                       },
            },
            {
                data: 'deskripsi',
                name: 'deskripsi',
            },
            {
                data: 'action',
                name: 'action',
            },
        ]
    });
</script>
@endsection