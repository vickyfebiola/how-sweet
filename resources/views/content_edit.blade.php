@extends('template.baseAdmin')
@section('content')
    <!-- Begin Page Content -->
    <div>

      <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Data</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('content.update',['id' => $content->id]) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" class="form-control" placeholder="Judul" value="{{ $content->judul }}">
                        @error('judul')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" class="form-control-file" placeholder="Gambar" value="{{ $content->gambar }}">
                        @error('gambar')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                        <img src="/../{{ $content->gambar }}" style="height: 400px;">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea type="deskripsi" name="deskripsi" class="form-control" placeholder="Deskripsi" style="width: 100%; height: 400px;">{{ $content->deskripsi }}</textarea>
                        @error('deskripsi')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-info">Edit</button>
                </form>
            </div>
        </div>

    </div>
@endsection