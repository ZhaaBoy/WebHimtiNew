@extends('dashboard.kerangka')
@section('tittle', 'HIMTI-UMT | Dashboard | Web Design Update')
@section('webdesign', 'active')
@section('content')
    @include('sweetalert::alert')
    <div class="container mt-5 section-body">
        <h1 class="text-center text-bold text-dark col-md-12">Update Kelompok Belajar</h1>
        <div class="row border card-body py-4">
            <div class="col-md-12">
                <form action="{{ route('ml.update', $ml->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="nama_pendaftar">Nama Pendaftar</label>
                        <input type="text" name="nama_pendaftar" id="nama_pendaftar"
                            class="form-control @error('nama_pendaftar') is invalid @enderror"
                            value="{{ old('nama_pendaftar') ?? $ml->nama_pendaftar }}" required>
                        @error('nama_pendaftar')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email"
                            class="form-control @error('email') is invalid @enderror" value="{{ old('email') ?? $ml->email}}" required>
                        @error('email')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_team">Nama Team</label>
                        <input type="text" name="nama_team" id="nama_team"
                            class="form-control @error('nama_team') is invalid @enderror" value="{{ old('nama_team') ?? $ml->nama_team }}"
                            required>
                        @error('nama_team')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_leader">Nama Leader</label>
                        <input type="text" name="nama_leader" id="nama_leader"
                            class="form-control @error('nama_leader') is invalid @enderror" value="{{ old('nama_leader') ?? $ml->nama_leader}}"
                            required>
                        @error('nama_leader')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="team_1">Team_1</label>
                        <input type="text" name="team_1" id="team_1"
                            class="form-control @error('team_1') is invalid @enderror" value="{{ old('team_1') ?? $ml->team_1}}" required>
                        @error('team_1')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="team_2">Team_2</label>
                        <input type="text" name="team_2" id="team_2"
                            class="form-control @error('team_2') is invalid @enderror" value="{{ old('team_2') ?? $ml->team_2}}" required>
                            required>
                        @error('team_2')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="team_3">Team_3</label>
                        <input type="text" name="team_3" id="team_3"
                            class="form-control @error('team_3') is invalid @enderror" value="{{ old('team_3') ?? $ml->team_3}}"
                            required>
                        @error('team_3')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="team_4">Team_4</label>
                        <input type="text" name="team_4" id="team_4"
                            class="form-control @error('team_4') is invalid @enderror" value="{{ old('team_4') ?? $ml->team_4}}"
                            required>
                        @error('team_4')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="team_5">Team_5</label>
                        <input type="text" name="team_5" id="team_5"
                            class="form-control @error('team_5') is invalid @enderror" value="{{ old('team_5') ?? $ml->team_5}}"
                            required>
                        @error('team_5')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cadangan_1">cadangan_1</label>
                        <input type="text" name="cadangan_1" id="cadangan_1"
                            class="form-control @error('cadangan_1') is invalid @enderror" value="{{ old('cadangan_1') ?? $ml->cadangan_1}}"
                            required>
                        @error('cadangan_1')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cadangan_2">cadangan_2</label>
                        <input type="text" name="cadangan_2" id="cadangan_2"
                            class="form-control @error('cadangan_2') is invalid @enderror" value="{{ old('cadangan_2') ?? $ml->cadangan_2}}"
                            required>
                        @error('cadangan_2')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nomor_telpon">Nomor Telpon</label>
                        <input type="number" name="nomor_telpon" id="nomor_telpon"
                            class="form-control @error('nomor_telpon') is invalid @enderror"
                            value="{{ old('nomor_telpon') ?? $ml->nomor_telpon}}" required>
                        @error('nomor_telpon')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="pembayaran">Bukti Pembayaran</label>
                        <img src="{{ Storage::url($ml->pembayaran) }}" alt="gambar" width="50px"
                        class="tumbnail img-fluid">
                        <input type="file" name="pembayaran" id="pembayaran" class="form-control @error('pembayaran') is invalid @enderror"
                            value="{{ old('pembayaran') }}">
                                @error('pembayaran')
                            <div class="alert alert-danger"> {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary my-4">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
