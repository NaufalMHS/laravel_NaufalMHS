@extends('admin.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Edit Pasien</h4>
    <div class="card">
        <h5 class="card-header">Form Edit Pasien</h5>
        <form action="{{ route('pasiens.update', $pasien) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="mb-3">
                    <label for="nama_pasien" class="form-label">Nama Pasien</label>
                    <input type="text" class="form-control" name="nama_pasien" value="{{ $pasien->nama_pasien }}" required>
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" name="alamat" value="{{ $pasien->alamat }}" required>
                </div>
                <div class="mb-3">
                    <label for="no_telpon" class="form-label">No Telepon</label>
                    <input type="text" class="form-control" name="no_telpon" value="{{ $pasien->no_telpon }}" required>
                </div>
                <div class="mb-3">
                    <label for="rumah_sakit_id" class="form-label">Rumah Sakit</label>
                    <select name="rumah_sakit_id" class="form-select" required>
                        @foreach($rumahSakits as $rs)
                            <option value="{{ $rs->id }}" {{ $pasien->rumah_sakit_id == $rs->id ? 'selected' : '' }}>{{ $rs->nama_rumah_sakit }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="card-body">
                <button class="btn btn-primary" type="submit">Simpan</button>
                <a href="{{ route('pasiens.index') }}" class="btn btn-warning">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
