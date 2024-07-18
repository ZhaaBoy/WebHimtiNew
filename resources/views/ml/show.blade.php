@extends('dashboard.kerangka')
@section('tittle', 'HIMTI - UMT | Pendaftar Lomba Mobbbile Legend')
@section('', 'activmle')
@section('content')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-2">
                    <h2 class="text-center">Detail Lomba Mobile Legend <br> {{ $ml->nama_team }}</h2>
                    <hr>
                    <a href="{{ route('ml.index') }}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm text-center">
                        <thead>
                            <tr>
                                <th>Nama Pendaftar</th>
                                <th>Nama Team</th>
                                <th>Nama Leader</th>
                                <th>Email</th>
                                <th>Anggota 1</th>
                                <th>Anggota 2</th>
                                <th>Anggota 3</th>
                                <th>Anggota 4</th>
                                <th>Anggota 5</th>
                                <th>Cadangan 1</th>
                                <th>Cadangan 2</th>
                                <th>No Telpon</th>
                                <th>Bukti Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $ml->nama_pendaftar }}</td>
                                    <td>{{ $ml->nama_team }}</td>
                                    <td>{{ $ml->nama_leader }}</td>
                                    <td>{{ $ml->email }}</td>
                                    <td>{{ $ml->team_1 }}</td>
                                    <td>{{ $ml->team_2 }}</td>
                                    <td>{{ $ml->team_3 }}</td>
                                    <td>{{ $ml->team_4 }}</td>
                                    <td>{{ $ml->team_5 }}</td>
                                    <td>{{ $ml->cadangan_1 }}</td>
                                    <td>{{ $ml->cadangan_2 }}</td>
                                    <td>{{ $ml->nomor_telpon }}</td>
                                    <td>
                                        <img src="{{ Storage::url($ml->pembayaran) }}" alt="gambar" width="150px"
                                            class="tumbnail img-fluid">
                                    </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
