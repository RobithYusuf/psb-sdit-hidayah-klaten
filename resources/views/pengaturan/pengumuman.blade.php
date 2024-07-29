@extends('layout.tampilan')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-sm-6 mb-2 mb-sm-0">
                            <h1><b>DATA NILAI CALON SISWA</b></h1>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="/beranda/update-status-seleksi" method="post">
                        @csrf
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead>
                                    <tr>
                                        <th class="text-center bg-dark text-white" scope="col">
                                            <input type="checkbox" id="select-all">
                                        </th>
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
                                        <th class="text-center bg-dark text-white" scope="col">Status Pengumuman</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $no => $value)
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="seleksi_ids[]" value="{{ $value->id_seleksi }}" {{ $value->status_seleksi == 'Berhasil' ? 'checked' : '' }}>
                                        </td>
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
                                        <td style="color: {{ $value->status_seleksi == 'Berhasil' ? 'green' : 'red' }}">
                                            <strong>{{ $value->status_seleksi == 'Berhasil' ? 'BERHASIL' : 'PENDING' }}</strong>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Update Status Seleksi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('select-all').addEventListener('change', function() {
    var checkboxes = document.getElementsByName('seleksi_ids[]');
    for (var checkbox of checkboxes) {
        checkbox.checked = this.checked;
    }
});
</script>
@endsection