@extends('layout.tampilanpanitia')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                <strong>Success!</strong> {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @elseif (session('error'))
            <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                <strong>Error!</strong> {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                            <h1><b>DATA NILAI CALON SISWA</b></h1>
                        </div>
                        <form action="/panitia/form nilai" method="get" class="form-inline d-flex justify-content-end">
                            <div class="input-group input-group-sm">
                                <input type="text" name="search" class="form-control" placeholder="Cari Nama Calon Siswa" value="{{ request('search') }}">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th class="text-center bg-dark text-white" scope="col">No</th>
                                    <th class="text-center bg-dark text-white" scope="col">Nama Lengkap</th>
                                    <th class="text-center bg-dark text-white" scope="col">Baca</th>
                                    <th class="text-center bg-dark text-white" scope="col">Tulis</th>
                                    <th class="text-center bg-dark text-white" scope="col">Hitung</th>
                                    <th class="text-center bg-dark text-white" scope="col">Ngaji</th>
                                    <th class="text-center bg-dark text-white" scope="col">Wawancara</th>
                                    <th class="text-center bg-dark text-white" scope="col">Total Nilai</th>
                                    <th class="text-center bg-dark text-white" scope="col">Rata-Rata</th>
                                    <th class="text-center bg-dark text-white" scope="col">Hasil</th>
                                    <th class="text-center bg-dark text-white" scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $no => $value)
                                <tr>
                                    <td>{{ $no + 1 }}</td>
                                    <td>{{ $value->nama }}</td>
                                    <td>{{ $value->nilai_baca ?? '- - -' }}</td>
                                    <td>{{ $value->nilai_tulis ?? '- - -' }}</td>
                                    <td>{{ $value->nilai_hitung ?? '- - -' }}</td>
                                    <td>{{ $value->nilai_ngaji ?? '- - -' }}</td>
                                    <td>{{ $value->nilai_wawancara ?? '- - -' }}</td>
                                    <td>{{ $value->total_nilai ?? '- - -' }}</td>
                                    <td>{{ $value->nilai_akhir ?? '- - -' }}</td>
                                    <td style="color: {{ $value->hasil_seleksi == 'Lolos' ? 'green' : 'red' }}">
                                        <strong>{{ $value->hasil_seleksi == 'Lolos' ? 'LULUS' : 'TIDAK LULUS' }}</strong>
                                    </td>
                                    <td>
                                        <!-- Tombol Edit -->
                                        <a href="{{ route('input', ['id' => $value->id_casis]) }}" class="btn btn-sm btn-info" title="Tambah">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                        <!-- Tombol Hapus -->
                                        <form action="{{ route('hapus', ['id' => $value->id_casis]) }}" method="post" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" title="Hapus" onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection