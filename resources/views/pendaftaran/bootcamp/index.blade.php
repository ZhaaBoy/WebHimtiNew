@extends('dashboard.kerangka')
@section('tittle', 'HIMTI-UMT | Dashboard | Data Bootcamp 2023')
@section('bootcamp', 'active')
@section('content')
@include('sweetalert::alert')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-2">
                    <h2 class="text-center">Data Pendaftar Bootcamp 2023</h2>
                </div>
                <div class="mb-3">
                <button class="btn btn-success" href="#">Total Peserta : {{$peserta}}</button>
                <a class="btn btn-danger" href="{{ route('bootcamp2023.pdf')}}">Export PDF</a>
               </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Nim</th>
                                <th>Kelas</th>
                                <th>Email</th>
                                <th>Angkatan</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>Pengalaman Organisasi</th>
                                <th>No Handphone</th>
                                <th>No Keluarga</th>
                                <th>Pembayaran</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($btcmp1 as $key => $btcmps)
                                <tr>
                                    <td>{{ $btcmp1->firstItem() + $key }}</td>
                                    <td>{{ $btcmps->nama }}</td>
                                    <td>{{ $btcmps->nim }}</td>
                                    <td>{{ $btcmps->kelas }}</td>
                                    <td>{{ $btcmps->email }}</td>
                                    <td>{{ $btcmps->angkatan }}</td>
                                    <td>{{ date('d-m-Y', strtotime($btcmps->tgl_lahir))}}</td>
                                    <td>{{ $btcmps->alamat }}</td>
                                    <td>{{ $btcmps->organ }}</td>
                                    <td>{{ $btcmps->no_hp }}</td>
                                    <td>{{ $btcmps->no_kel }}</td>
                                    <td>
                                        <img src="{{ Storage::url($btcmps->pembayaran) }}" alt="gambar" width="150px"
                                            class="tumbnail img-fluid">
                                    </td>
                                    <td>
                                        <a href="{{ route('btcmp.edit', $btcmps->id) }}"
                                            class="btn btn-success btn-sm">
                                            <i class='fas fa-edit'></i></a>
                                        <form action="{{ route('btcmp.destroy', $btcmps->id) }}" method="POST"
                                            class="pt-1">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm delete_confirm">
                                                <i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="13" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div>
                        showing
                        {{ $btcmp1->firstItem() }}
                        of
                        {{ $btcmp1->lastItem() }}
                    </div>
                    <div class="py-4">
                        {{ $btcmp1->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
