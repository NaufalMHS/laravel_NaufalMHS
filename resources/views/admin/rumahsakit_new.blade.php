@extends('admin.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">/ <a href="/admin-area/kategori-galeri" class="a-breadcrumbs">Data
                Rumah Sakit</a> / </span>Baru</h4>
    <div class="card">
        <h5 class="card-header">
            Tambah Rumah Sakit Baru
        </h5>
        <form action="{{ route('rumah-sakits.store') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="mb-3 row">
                            <label class="col-md-3 col-form-label">Nama Rumah Sakit</label>
                            <div class="col-md-9">
                                <input class="form-control" type="text" name="nama_rumah_sakit" required
                                    value="{{ old('nama_rumah_sakit') }}" />
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
                                <input class="form-control" type="text" name="alamat" required
                                    value="{{ old('alamat') }}" />
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
                                <input class="form-control" type="email" name="email" required
                                    value="{{ old('email') }}" />
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
                                <input class="form-control" type="text" name="telepon" required
                                    value="{{ old('telepon') }}" />
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
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="mb-3">
                            <div class="text-start">
                            <a class="btn btn-warning" href="/admin-area/rumah-sakits">
                                <span class="align-middle">Kembali</span>
                            </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="text-end">
                        <button class="btn btn-primary" type="submit">
                                    <span class="align-middle">Simpan</span>
                                </button>   
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
