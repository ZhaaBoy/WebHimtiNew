@extends('kerangka.master')
@section('tittle', 'HIMTI-UMT | HIFEST MOBILE LEGENDS 2023')
@section('pendaftaran', 'active')
@section('ml', 'active')
@section('content')
    @include('sweetalert::alert')
    <div class="container mt-5 section-body">
         <h1 class="text-center text-bold text-dark col-md-12">MOHON MAAF PENDAFTARAN SUDAH DI TUTUP SAMPAI JUMPA DI LOMBA MOBILE LEGENDS HIFEST HIMTI UMT 2024</h1>
        <!--<h1 class="text-center text-bold text-dark col-md-12">Pendaftaran HIFEST Mobile Legends</h1>-->
        <!--<div class="row border card-body py-4">-->
        <!--    <div class="col-md-12">-->
        <!--        <form action="{{ route('mls.store') }}" method="POST" enctype="multipart/form-data">-->
        <!--            @csrf-->
        <!--            <div class="form-group">-->
        <!--                <label for="nama_pendaftar">Nama Pendaftar</label>-->
        <!--                <input type="text" name="nama_pendaftar" id="nama_pendaftar"-->
        <!--                    class="form-control @error('nama_pendaftar') is invalid @enderror"-->
        <!--                    value="{{ old('nama_pendaftar') }}" required>-->
        <!--                @error('nama_pendaftar')-->
        <!--                    <div class="alert alert-danger"> {{ $message }}</div>-->
        <!--                @enderror-->
        <!--            </div>-->
        <!--            <div class="form-group">-->
        <!--                <label for="email">Email</label>-->
        <!--                <input type="email" name="email" id="email"-->
        <!--                    class="form-control @error('email') is invalid @enderror" value="{{ old('email') }}" required>-->
        <!--                @error('email')-->
        <!--                    <div class="alert alert-danger"> {{ $message }}</div>-->
        <!--                @enderror-->
        <!--            </div>-->
        <!--            <div class="form-group">-->
        <!--                <label for="nama_team">Nama Team</label>-->
        <!--                <input type="text" name="nama_team" id="nama_team"-->
        <!--                    class="form-control @error('nama_team') is invalid @enderror" value="{{ old('nama_team') }}"-->
        <!--                    required>-->
        <!--                @error('nama_team')-->
        <!--                    <div class="alert alert-danger"> {{ $message }}</div>-->
        <!--                @enderror-->
        <!--            </div>-->
        <!--            <div class="form-group">-->
        <!--                <label for="nama_leader">Nama Leader</label>-->
        <!--                <input type="text" name="nama_leader" id="nama_leader"-->
        <!--                    class="form-control @error('nama_leader') is invalid @enderror" value="{{ old('nama_leader') }}"-->
        <!--                    required>-->
        <!--                @error('nama_leader')-->
        <!--                    <div class="alert alert-danger"> {{ $message }}</div>-->
        <!--                @enderror-->
        <!--            </div>-->
        <!--            <div class="form-group">-->
        <!--                <label for="team_1">Anggota 1</label>-->
        <!--                <input type="text" name="team_1" id="team_1"-->
        <!--                    class="form-control @error('team_1') is invalid @enderror" value="{{ old('team_1') }}" required>-->
        <!--                @error('team_1')-->
        <!--                    <div class="alert alert-danger"> {{ $message }}</div>-->
        <!--                @enderror-->
        <!--            </div>-->
        <!--            <div class="form-group">-->
        <!--                <label for="team_2">Anggota 2</label>-->
        <!--                <input type="text" name="team_2" id="team_2"-->
        <!--                    class="form-control @error('team_2') is invalid @enderror" value="{{ old('team_2') }}"-->
        <!--                    required>-->
        <!--                @error('team_2')-->
        <!--                    <div class="alert alert-danger"> {{ $message }}</div>-->
        <!--                @enderror-->
        <!--            </div>-->
        <!--            <div class="form-group">-->
        <!--                <label for="team_3">Anggota 3</label>-->
        <!--                <input type="text" name="team_3" id="team_3"-->
        <!--                    class="form-control @error('team_3') is invalid @enderror" value="{{ old('team_3') }}"-->
        <!--                    required>-->
        <!--                @error('team_3')-->
        <!--                    <div class="alert alert-danger"> {{ $message }}</div>-->
        <!--                @enderror-->
        <!--            </div>-->
        <!--            <div class="form-group">-->
        <!--                <label for="team_4">Anggota 4</label>-->
        <!--                <input type="text" name="team_4" id="team_4"-->
        <!--                    class="form-control @error('team_4') is invalid @enderror" value="{{ old('team_4') }}"-->
        <!--                    required>-->
        <!--                @error('team_4')-->
        <!--                    <div class="alert alert-danger"> {{ $message }}</div>-->
        <!--                @enderror-->
        <!--            </div>-->
        <!--            <div class="form-group">-->
        <!--                <label for="team_5">Anggota 5</label>-->
        <!--                <input type="text" name="team_5" id="team_5"-->
        <!--                    class="form-control @error('team_5') is invalid @enderror" value="{{ old('team_5') }}"-->
        <!--                    required>-->
        <!--                @error('team_5')-->
        <!--                    <div class="alert alert-danger"> {{ $message }}</div>-->
        <!--                @enderror-->
        <!--            </div>-->
        <!--            <div class="form-group">-->
        <!--                <label for="cadangan_1">Cadangan 1</label>-->
        <!--                <input type="text" name="cadangan_1" id="cadangan_1"-->
        <!--                    class="form-control @error('cadangan_1') is invalid @enderror" value="{{ old('cadangan_1') }}"-->
        <!--                    required>-->
        <!--                @error('cadangan_1')-->
        <!--                    <div class="alert alert-danger"> {{ $message }}</div>-->
        <!--                @enderror-->
        <!--            </div>-->
        <!--            <div class="form-group">-->
        <!--                <label for="cadangan_2">Cadangan 2</label>-->
        <!--                <input type="text" name="cadangan_2" id="cadangan_2"-->
        <!--                    class="form-control @error('cadangan_2') is invalid @enderror" value="{{ old('cadangan_2') }}"-->
        <!--                    required>-->
        <!--                @error('cadangan_2')-->
        <!--                    <div class="alert alert-danger"> {{ $message }}</div>-->
        <!--                @enderror-->
        <!--            </div>-->
        <!--            <div class="form-group">-->
        <!--                <label for="nomor_telpon">Nomor Telpon</label>-->
        <!--                <input type="number" name="nomor_telpon" id="nomor_telpon"-->
        <!--                    class="form-control @error('nomor_telpon') is invalid @enderror"-->
        <!--                    value="{{ old('nomor_telpon') }}" required>-->
        <!--                @error('nomor_telpon')-->
        <!--                    <div class="alert alert-danger"> {{ $message }}</div>-->
        <!--                @enderror-->
        <!--            </div>-->
        <!--            <div class="form-group">-->
        <!--                <label for="pembayaran">Bukti Pembayaran</label>-->
        <!--                <input type="file" name="pembayaran" id="pembayaran" class="form-control @error('pembayaran') is invalid @enderror"-->
        <!--                    value="{{ old('pembayaran') }}" required>-->
        <!--                        @error('pembayaran')-->
        <!--                    <div class="alert alert-danger"> {{ $message }}</div>-->
        <!--                @enderror-->
        <!--            </div>-->
        <!--            <div class="d-flex justify-content-end">-->
        <!--                <button type="submit" class="btn btn-primary my-4">Daftar</button>-->
        <!--            </div>-->
        <!--        </form>-->
        <!--    </div>-->
        <!--</div>-->
    </div>

@endsection
