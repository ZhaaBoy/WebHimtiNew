@extends('kerangka.master')
@section('tittle', 'HIMTI-UMT | Sertifikat')
@section('sertifikat', 'active')
@section('content')

<div class="content-wrapper" >
    <div class="container">
    <div class="card shadow-sm p-3 mb-5 bg-body rounded" style="height:70vh">
        <div class="card-body">
            <div class="section-title">
                <p>Validation Certificate HIMTI</p>
            </div>
            <div class="d-flex justify-content-center">
            <form
            class="d-flex justify-content-center w-100 navbar-search" action="{{route('sertifikat')}}" method="GET">
            <div class="input-group h-10">
                <input type="text" class="form-control border-0" placeholder="ID Certificate"
                    aria-label="Search" aria-describedby="basic-addon2" name="cari" value="{{ $request->cari }}">
                <div class="input-group-append h-25">
                    <button class="btn btn-primary d-flex justify-content-center" style="height: 35px;" type="submit"> Search
                    </button>
                </div>
            </div>
        </form>
    </div>
    {{-- success --}}
    @if (!empty($request->cari))
      @forelse ($sertifikat as $sertif)
     <div class="success-checkmark" style="margin-top: 25px">
        <div class="check-icon">
          <span class="icon-line line-tip"></span>
          <span class="icon-line line-long"></span>
          <div class="icon-circle"></div>
          <div class="icon-fix"></div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
          <h1>Sertifikat Tervalidasi</h1>
        </div>
      <div class="d-flex justify-content-center section-title">
          <p>{{$sertif->nama_peserta}}</p>
        </div>
        @empty
        <div class="d-flex justify-content-center" style="padding-top: 15px">
            <h5>ID Sertifikat tidak valid</h5>
        </div>
        @endforelse
        @else
        <div class="d-flex justify-content-center" style="padding-top: 15px">
            <h5>Masukkan ID Sertifikat yang valid</h5>
        </div>
        @endif
      {{--  --}}

</div>
</div>
</div>
</div>

@endsection
