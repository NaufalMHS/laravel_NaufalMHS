@extends('admin.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Data Rumah Sakit</span></h4>
    <div class="card">
        <h5 class="card-header">
            <div class="row justify-content-between mb-4">
                <div class="col-md-6">
                    Data Rumah Sakit
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{ route('rumah-sakits.create') }}" class="btn btn-primary">Data Baru</a>
                </div>
            </div>
        </h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-hover">
                <thead>
                    <tr class="text-nowrap">
                        <th>#</th>
                        <th>Nama Rumah Sakit</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($rumahSakits->isEmpty())
                    <tr>
                        <td colspan="6" class="text-center">Tidak Ada Data!</td>
                    </tr>
                    @else
                    @foreach ($rumahSakits as $data)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $data->nama_rumah_sakit }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->telepon }}</td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="{{ route('rumah-sakits.edit', $data->id) }}">
                                <span class="align-middle">Edit</span>
                            </a>
                            <form action="{{ route('rumah-sakits.destroy', $data->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Hapus data {{ $data->nama_rumah_sakit }}?')" class="btn btn-danger btn-sm">
                                    <i class="align-middle" data-feather="trash-2"></i>
                                    <span class="align-middle">Hapus</span>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
