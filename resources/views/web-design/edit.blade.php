@extends('dashboard.kerangka')
@section('tittle', 'HIMTI-UMT | Dashboard | Web Design Update')
@section('webdesign', 'active')
@section('content')
    @include('sweetalert::alert')
    <div class="container mt-5 section-body">
        <h1 class="text-center text-bold text-dark col-md-12">Update Kelompok Belajar</h1>
        <div class="row border card-body py-4">
            <div class="col-md-12">
                <form action="{{ route('wd.update', $wd->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="nama_team">Nama Team</label>
                        <input type="text" name="nama_team" id="nama_team"
                            class="form-control @error('nama_team') is invalid @enderror" value="{{ old('nama_team') ?? $wd->nama_team }}"
                            required>
                        @error('nama_team')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="ketua_team">Ketua Team</label>
                        <input type="text" name="ketua_team" id="ketua_team"
                            class="form-control @error('ketua_team') is invalid @enderror" value="{{ old('ketua_team')?? $wd->ketua_team }}"
                            required>
                        @error('ketua_team')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="team_1">Anggota 1</label>
                        <input type="text" name="team_1" id="team_1"
                            class="form-control @error('team_1') is invalid @enderror" value="{{ old('team_1')?? $wd->team_1 }}" required>
                        @error('team_1')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="team_2">Anggota 2</label>
                        <input type="text" name="team_2" id="team_2"
                            class="form-control @error('team_2') is invalid @enderror" value="{{ old('team_2')?? $wd->team_2 }}"
                            required>
                        @error('team_2')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="team_3">Anggota 3</label>
                        <input type="text" name="team_3" id="team_3"
                            class="form-control @error('team_3') is invalid @enderror" value="{{ old('team_3')?? $wd->team_3 }}"
                            required>
                        @error('team_3')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nama_sklh">Nama Sekolah</label>
                        <input type="text" name="nama_sklh" id="nama_sklh"
                            class="form-control @error('nama_sklh') is invalid @enderror"
                            value="{{ old('nama_sklh') ?? $wd->nama_sklh}}" required>
                        @error('nama_sklh')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email"
                            class="form-control @error('email') is invalid @enderror" value="{{ old('email')?? $wd->email }}" required>
                        @error('email')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="nomor_telpon">Nomor Telpon</label>
                        <input type="number" name="nomor_telpon" id="nomor_telpon"
                            class="form-control @error('nomor_telpon') is invalid @enderror"
                            value="{{ old('nomor_telpon') ?? $wd->nomor_telpon}}" required>
                        @error('nomor_telpon')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="project">Bukti Pembayaran</label>
                        <img src="{{ Storage::url($wd->pembayaran) }}" alt="gambar" width="50px"
                        class="tumbnail img-fluid">
                        <input type="file" name="pembayaran" id="pembayaran" class="form-control @error('pembayaran') is invalid @enderror">
                                @error('pembayaran')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <br>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary my-4">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
