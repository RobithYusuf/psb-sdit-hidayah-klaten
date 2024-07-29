@extends('layout.tampilan')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                            <h5><b>LAPORAN DATA PENDAFTARAN CALON SISWA</b></h5>
                        </div>

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
                        <div class="col-sm-6 mb-2 mb-sm-0">
                            <a href="{{ route('unduhpendaftaran') }}" class="btn btn-warning">
                                <i class="fas fa-print"></i> Cetak Laporan
                            </a>
                        </div>

                        <div class="col-sm-6 mb-2 mb-sm-0">
                            <form action="{{ route('pendaftaran') }}" method="get" class="form-inline d-flex justify-content-end mb-3">
                                <div class="input-group input-group-sm">
                                    <select name="filter_program" class="form-control" onchange="this.form.submit()">
                                        <option value="" selected>Status Pendaftaran</option>
                                        <option value="BERHASIL" {{ request('filter_program') == 'BERHASIL' ? 'selected' : '' }}>BERHASIL</option>
                                        <option value="GAGAL" {{ request('filter_program') == 'GAGAL' ? 'selected' : '' }}>GAGAL</option>
                                        <option value="PENDING" {{ request('filter_program') == 'PENDING' ? 'selected' : '' }}>PENDING</option>
                                    </select>
                                    <a href="{{ route('pendaftaran') }}" class="btn btn-primary ml-2">Reset</a>
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
                                    <th class="text-center bg-dark text-white">Nama Casis</th>
                                    <th class="text-center bg-dark text-white">Tempat, Tgl Lahir</th>
                                    <th class="text-center bg-dark text-white">Jenis Kelamin</th>
                                    <th class="text-center bg-dark text-white">Alamat</th>
                                    <th class="text-center bg-dark text-white">No Telpon</th>
                                    <th class="text-center bg-dark text-white">Tanggal Pendaftaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $no => $value)
                                <tr>
                                    <td class="text-center">{{ $no + 1 }}</td>
                                    <td class="text-center">{{ $value->casis->nik }}</td>
                                    <td class="text-center">{{ $value->casis->nama }}</td>
                                    <td class="text-center">{{ $value->casis->tempat_lahir }}, {{ \Carbon\Carbon::parse($value->casis->tanggal_lahir)->format('d-m-Y') }}</td>
                                    <td class="text-center">{{ $value->casis->jenis_kelamin }}</td>
                                    <td class="text-center">{{ $value->casis->alamat }}</td>
                                    <td class="text-center">{{ $value->casis->no_hp }}</td>
                                    <td class="text-center">{{ \Carbon\Carbon::parse($value->tgl_pendaftaran)->format('d-m-Y') }}</td>
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
