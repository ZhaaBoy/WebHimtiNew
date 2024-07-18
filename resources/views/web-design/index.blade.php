@extends('dashboard.kerangka')
@section('tittle', 'HIMTI-UMT | Dashboard | Poster 2023')
@section('poster', 'active')
@section('content')

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-2">
                    <h2 class="text-center">Table Lomba Poster</h2>
                </div>
                <div class="text-right my-4">
                    <a href="" class="btn btn-success">Excel</a>
                    <a href="" class="btn btn-danger">PDF</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Pendaftar</th>
                                <th>Email</th>
                                <th>No Telpon</th>
                                <th>Bukti Pembayaran</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($web as $key => $webd)
                                <tr>
                                    <td>{{ $web->firstItem() + $key }}</td>
                                    <td><a class="btn"
                                        href="{{ route('wd.show', $webd->id) }}">{{ $webd->nama_team }}</a></td>
                                    <td>{{ $webd->email }}</td>
                                    <td>{{ $webd->nomor_telpon }}</td>
                                    <td>
                                        <img src="{{ Storage::url($webd->pembayaran) }}" alt="gambar" width="150px"
                                            class="tumbnail img-fluid">
                                    </td>
                                    <td>
                                        <a href="{{ route('wd.edit', $webd->id) }}"
                                            class="btn btn-success btn-sm">
                                            <i class='fas fa-edit'></i></a>
                                        <form action="{{ route('wd.destroy', $webd->id) }}" method="POST"
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
                                    <td colspan="9" class="text-center">Data Kosong</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div>
                        showing
                        {{ $web->firstItem() }}
                        of
                        {{ $web->lastItem() }}
                    </div>
                    <div class="py-4">
                        {{ $web->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
