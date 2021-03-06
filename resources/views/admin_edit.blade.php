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
                <form action="{{ route('admin.update',['id' => $admin->id]) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="fullname">Fullname</label>
                        <input type="text" name="fullname" class="form-control" placeholder="Fullname" value="{{ $admin->fullname }}">
                        @error('fullname')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username" value="{{ $admin->username }}">
                        @error('username')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Username</label>
                        <input type="password" name="passwd" class="form-control" placeholder="Password" value="{{ $admin->passwd }}">
                        @error('passwd')
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