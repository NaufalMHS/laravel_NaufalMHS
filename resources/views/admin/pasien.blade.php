@extends('admin.layout.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Data Pasien</h4>
    <div class="card">
        <h5 class="card-header">
            Daftar Pasien
        </h5>
        <div class="card-body">
            <div class="row justify-content-between mb-3">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="rumahSakitFilter">Filter Rumah Sakit:</label>
                        <select id="rumahSakitFilter" class="form-select">
                            <option value="">Semua</option>
                            @foreach($rumahSakits as $rs)
                                <option value="{{ $rs->id }}">{{ $rs->nama_rumah_sakit }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6 text-end">
                    <a href="{{ route('pasiens.create') }}" class="btn btn-primary">Tambah Pasien</a>
                </div>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Pasien</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Rumah Sakit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="pasienTable">
                    @foreach($pasiens as $pasien)
                        <tr data-id="{{ $pasien->id }}">
                            <td>{{ $pasien->id }}</td>
                            <td>{{ $pasien->nama_pasien }}</td>
                            <td>{{ $pasien->alamat }}</td>
                            <td>{{ $pasien->no_telpon }}</td>
                            <td>{{ $pasien->rumahSakit->nama_rumah_sakit }}</td>
                            <td>
                                <a href="{{ route('pasiens.edit', $pasien) }}" class="btn btn-warning btn-sm">Edit</a>
                                <button class="btn btn-danger btn-sm delete-btn">Hapus</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    document.getElementById('rumahSakitFilter').addEventListener('change', function() {
        let filterValue = this.value;
        let rows = document.querySelectorAll('#pasienTable tr');

        rows.forEach(row => {
            if (filterValue === "" || row.dataset.id === filterValue) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    });

    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function() {
            let row = this.closest('tr');
            let pasienId = row.dataset.id;

            if (confirm('Apakah Anda yakin ingin menghapus pasien ini?')) {
                fetch(`/admin-area/pasiens/${pasienId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        'Accept': 'application/json'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        row.remove();
                        alert(data.success);
                    } else {
                        alert('Terjadi kesalahan saat menghapus pasien.');
                    }
                });
            }
        });
    });
</script>
@endsection
