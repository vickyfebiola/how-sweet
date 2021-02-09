@extends('template.baseAdmin')
@section('content')
    <!-- Begin Page Content -->
    <div>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Create Data</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('content.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" class="form-control" placeholder="Judul" value="{{ old('judul') }}">
                        @error('judul')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" class="form-control-file" placeholder="Gambar" value="{{ old('gambar') }}">
                        @error('gambar')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea type="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi" style="width: 100%; height: 400px;">{{ old('deskripsi') }}</textarea>
                        @error('deskripsi')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>
            </div>
        </div>

    </div>
@endsection