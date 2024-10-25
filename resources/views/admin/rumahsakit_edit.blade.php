@extends('admin.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"> <a href="/admin-area/rumah-sakits" class="a-breadcrumbs">Data Rumah Sakit</a> / </span>Edit</h4>
    <div class="card">
        <h5 class="card-header">
            Edit Rumah Sakit
        </h5>
        <form action="{{ route('rumah-sakits.update', $rumahSakit->id) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label">ID Rumah Sakit</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="id" required readonly value="{{ $rumahSakit->id }}"/>
                                @error('id')
                                <div id="defaultFormControlHelp" class="form-text">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label">Nama Rumah Sakit</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="nama_rumah_sakit" required value="{{ old('nama_rumah_sakit', $rumahSakit->nama_rumah_sakit) }}"/>
                                @error('nama_rumah_sakit')
                                <div id="defaultFormControlHelp" class="form-text">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label">Alamat</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="alamat" required value="{{ old('alamat', $rumahSakit->alamat) }}"/>
                                @error('alamat')
                                <div id="defaultFormControlHelp" class="form-text">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-9">
                                <input class="form-control" type="email" name="email" required value="{{ old('email', $rumahSakit->email) }}"/>
                                @error('email')
                                <div id="defaultFormControlHelp" class="form-text">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label">Telepon</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="telepon" required value="{{ old('telepon', $rumahSakit->telepon) }}"/>
                                @error('telepon')
                                <div id="defaultFormControlHelp" class="form-text">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="mb-3">
                            <div class="text-start">
                                <button class="btn btn-primary" type="submit">
                                    <span class="align-middle">Simpan</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="text-end">
                            <a class="btn btn-warning" href="/admin-area/rumah-sakits">
                                <span class="align-middle">Kembali</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
