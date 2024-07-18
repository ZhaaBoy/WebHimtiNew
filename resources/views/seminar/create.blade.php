@extends('kerangka.master')
@section('tittle', 'HIMTI-UMT | Seminar HIFEST 2023')
@section('pendaftaran', 'active')
@section('seminar', 'active')
@section('content')
    <div class="container mt-5 section-body">
  <h1 class="text-center text-bold text-dark col-md-12">MOHON MAAF PENDAFTARAN SUDAH DI TUTUP SAMPAI JUMPA DI SEMINAR HIFEST HIMTI UMT 2024</h1>
        <!--<h1 class="text-center text-bold text-dark col-md-12">Pendaftaran SEMINAR HIFEST 2023</h1>-->
        <!--<div class="row border card-body py-4">-->
        <!--    <div class="col-md-12">-->
        <!--        <form action="{{ route('seminars.store') }}" method="POST" enctype="multipart/form-data">-->
        <!--            @csrf-->
        <!--            <div class="form-group">-->
        <!--                <label for="nama">Nama</label>-->
        <!--                <input type="text" name="nama" id="nama"-->
        <!--                    class="form-control @error('nama') is invalid @enderror"-->
        <!--                    value="{{ old('nama') }}" required>-->
        <!--                @error('nama')-->
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
        <!--                <label for="no_hp">Nomor Telpon</label>-->
        <!--                <input type="number" name="no_hp" id="no_hp"-->
        <!--                    class="form-control @error('no_hp') is invalid @enderror" value="{{ old('no_hp') }}" required>-->
        <!--                @error('no_hp')-->
        <!--                    <div class="alert alert-danger"> {{ $message }}</div>-->
        <!--                @enderror-->
        <!--            </div>-->

        <!--            <div class="form-group">-->
        <!--                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">-->
        <!--                <label class="form-check-label" for="flexCheckDefault">-->
        <!--                    Saya mengisi data dengan benar.-->
        <!--                </label>-->
        <!--            </div>-->
        <!--            <div class="d-flex justify-content-end">-->
        <!--                <button type="submit" class="btn btn-primary my-4" for="flexCheckDefault">Daftar</button>-->
        <!--            </div>-->
        <!--        </form>-->
        <!--    </div>-->
        <!--</div> -->
    </div>

@endsection
