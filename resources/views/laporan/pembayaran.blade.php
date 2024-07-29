@extends('layout.tampilan')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <div class="row justify-content-between align-items-center">
                        <!-- Kolom Tambah Data -->
                        <div class="col-sm-6 mb-2 mb-sm-0">
                            <h5><b>LAPORAN DATA PENDAFTARAN CALON SISWA</b></h5>
                        </div>

                        <!-- Kolom Pencarian -->
                        <div class="col-sm-6">
                            <form action="{{ route('pendaftaran') }}" method="get" class="form-inline d-flex justify-content-end">
                                <div class="input-group input-group-sm mr-2">
                                    <input type="date" name="start_date" id="start_date" class="form-control" placeholder="Tanggal Mulai" value="{{ request('start_date') }}">
                                </div>
                                <div class="input-group input-group-sm mr-2">
                                    <input type="date" name="end_date" id="end_date" class="form-control" placeholder="Tanggal Selesai" value="{{ request('end_date') }}">
                                </div>
                                <button type="submit" class="btn btn-info">
                                    <i class="fa fa-search"></i> Cari
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card-header">
                    <div class="row justify-content-between align-items-center">
                        <!-- Kolom Tambah Data -->
                        <div class="col-sm-6 mb-2 mb-sm-0">
                            <a href="{{ route('unduhpembayaran') }}" class="btn btn-warning">
                                <i class="fas fa-print"></i> Cetak Laporan
                            </a>
                        </div>

                        <!-- Kolom Filter -->
                        <div class="col-sm-6 mb-2 mb-sm-0">
                            <form action="{{ route('pembayaran') }}" method="get" class="form-inline d-flex justify-content-end mb-3">
                                <div class="input-group input-group-sm">
                                    <select name="filter_program" class="form-control" onchange="this.form.submit()">
                                        <option value="" selected>Status Pembayaran</option>
                                        <option value="LUNAS" {{ request('filter_program') == 'LUNAS' ? 'selected' : '' }}>LUNAS</option>
                                        <option value="GAGAL" {{ request('filter_program') == 'GAGAL' ? 'selected' : '' }}>GAGAL</option>
                                        <option value="PENDING" {{ request('filter_program') == 'PENDING' ? 'selected' : '' }}>PENDING</option>
                                    </select>
                                    <a href="{{ route('pembayaran') }}" class="btn btn-primary ml-2">Reset</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center bg-dark text-white">No</th>
                                    <th class="text-center bg-dark text-white">Nik</th>
                                    <th class="text-center bg-dark text-white">Nama Lengkap</th>
                                    <th class="text-center bg-dark text-white">Nama Orang Tua</th>
                                    <th class="text-center bg-dark text-white">Tanggal</th>
                                    <th class="text-center bg-dark text-white">Nominal</th>
                                    <th class="text-center bg-dark text-white">Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($data as $no => $value)
                                <tr>
                                    <td class="text-center">{{ $no + 1 }}</td>
                                    <td class="text-center">{{ $value->casis->nik }}</td>
                                    <td class="text-center">{{ $value->casis->nama }}</td>
                                    <td class="text-center">{{ $value->casis->nama_ortu }}</td>
                                    <td class="text-center">{{ \Carbon\Carbon::parse($value->tgl_pembayaran)->format('d-m-Y') }}</td>
                                    <td class="text-center">Rp. {{ number_format($value->jumlah_pembayaran, 0, ',', '.') }}</td>
                                    <td class="text-center"><b>{{ $value->status_pembayaran }}</b></td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center">Tidak ada data pembayaran yang ditemukan.</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection