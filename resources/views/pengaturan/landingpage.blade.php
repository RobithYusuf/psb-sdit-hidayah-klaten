@extends('layout.tampilan')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h3 class="card-title">Halaman untuk Foto Informasi Pendaftaran</h3>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Sukses!</strong> {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Gagal!</strong> {{ session('error') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-primary text-white">
                                        <h5 class="card-title mb-0">Unggah Foto Baru</h5>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ route('photo.upload') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="photo">Unggah Foto Baru:</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="photo" name="photo" required>
                                                    <label class="custom-file-label" for="photo">Pilih file Baru</label>
                                                </div>
                                                <small class="form-text text-muted">Format foto yang diizinkan: JPEG, PNG, JPG, GIF, SVG. Ukuran maksimum: 3MB.</small>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Unggah</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header bg-success text-white">
                                        <h5 class="card-title mb-0">Foto Terkini</h5>
                                    </div>
                                    <div class="card-body">
                                        @if($latestPhoto)
                                            <div class="card">
                                                <img src="{{ asset('storage/foto/' . $latestPhoto->foto) }}" class="card-img-top" alt="Foto Terkini">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $latestPhoto->foto }}</h5>
                                                    <p class="card-text">Status: <span class="badge badge-{{ $latestPhoto->status == 'Mulai' ? 'success' : 'secondary' }}">{{ $latestPhoto->status }}</span></p>
                                                    <a href="{{ asset('storage/foto/' . $latestPhoto->foto) }}" class="btn btn-primary" target="_blank">Lihat Foto</a>
                                                </div>
                                            </div>
                                        @else
                                            <div class="alert alert-info" role="alert">
                                                Belum ada foto yang diunggah.
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
