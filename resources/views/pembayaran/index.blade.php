@extends('layout.tampilan')

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
                            <h1><b>DATA PEMBAYARAN CALON SISWA</b></h1>
                        </div>
                        <div class="col-sm-6 mb-2 mb-sm-0 text-right">
                            <form action="/data/pembayaran" method="get" class="form-inline d-flex justify-content-end">
                                <div class="input-group input-group-sm">
                                    <input type="text" name="search" class="form-control" placeholder="Cari Pembayaran" value="{{ $search ?? '' }}">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover text-center">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Casis</th>
                                    <th scope="col">Jumlah Tagihan</th>
                                    <th scope="col">Tanggal Pembayaran</th>
                                    <th scope="col">Bukti Pembayaran</th>
                                    <th scope="col">Status Pembayaran</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $no => $value)
                                <tr>
                                    <td>{{ $no + 1 }}</td>
                                    <td>{{ $value->casis->nama }}</td>
                                    <td>Rp. {{ number_format($value->jumlah_pembayaran, 0, ',', '.') }}</td>
                                    <td>{{ \Carbon\Carbon::parse($value->tgl_pembayaran)->format('d/m/Y') }}</td>
                                    <td>
                                        @if($value->bukti_pembayaran)
                                        @php
                                        $file_name = $value->bukti_pembayaran;
                                        $file_path = asset('storage/pembayaran/' . $file_name);
                                        $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
                                        @endphp
                                        <a href="{{ $file_path }}" target="_blank" class="mr-2" title="{{ $file_name }}">
                                            @if(in_array($file_extension, ['pdf']))
                                            <img src="{{ asset('template/dist/img/pdf.png') }}" alt="PDF Icon" style="width: 40px; height: 40px;">
                                            @elseif(in_array($file_extension, ['jpg', 'jpeg', 'png', 'gif']))
                                            <img src="{{ $file_path }}" alt="Bukti Pembayaran" style="width: 40px; height: 40px; object-fit: cover;">
                                            @else
                                            <img src="{{ asset('template/dist/img/file.png') }}" alt="File Icon" style="width: 40px; height: 40px;">
                                            @endif
                                        </a>
                                        @else
                                        <span class="text-muted">Tidak Ada Bukti</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($value->status_pembayaran === 'Lunas')
                                        <a href="/pembayaran/tagihan/{{ $value->id_pembayaran }}"><i class="fas fa-check-circle text-success"></i></a> Lunas
                                        @else
                                        <a href="/pembayaran/tagihan/{{ $value->id_pembayaran }}"><i class="fas fa-times-circle text-danger"></i></a> Belum Lunas
                                        @endif
                                    </td>
                                    <td>
                                        <!-- Example of delete form, adjust action and method as per your application logic -->
                                        <form action="{{ route('delete', $value->id_pembayaran) }}" method="post" style="display: inline;">
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