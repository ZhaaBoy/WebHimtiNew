@extends('dashboard.kerangka')
@section('tittle', 'HIMTI - UMT | Pendaftar Lomba Web Design')
@section('webdesign', 'active')
@section('content')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-2">
                    <h2 class="text-center">Detail Lomba Web Design <br> {{ $wd->nama_team }}</h2>
                    <hr>
                    <a href="{{ route('wd.index') }}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm text-center">
                        <thead>
                            <tr>
                                <th>Nama Team</th>
                                <th>ketua Team</th>
                                <th>Nama Sekolah</th>
                                <th>Email</th>
                                <th>Anggota 1</th>
                                <th>Anggota 2</th>
                                <th>Anggota 3</th>>
                                <th>No Telpon</th>
                                <th>Bukti Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $wd->nama_team }}</td>
                                <td>{{ $wd->ketua_team }}</td>
                                    <td>{{ $wd->nama_sklh }}</td>
                                    <td>{{ $wd->email }}</td>
                                    <td>{{ $wd->team_1 }}</td>
                                    <td>{{ $wd->team_2 }}</td>
                                    <td>{{ $wd->team_3 }}</td>
                                    <td>{{ $wd->nomor_telpon }}</td>
                                    <td>
                                        <img src="{{ Storage::url($wd ->pembayaran) }}" alt="gambar" width="150px"
                                            class="tumbnail img-fluid">
                                    </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
