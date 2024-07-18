@extends('dashboard.kerangka')
@section('tittle', 'HIMTI-UMT | Dashboard | Data Seminar')
@section('seminar', 'active')
@section('content')
@include('sweetalert::alert')
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="py-2">
                    <h2 class="text-center">Data Pendaftar seminar</h2>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-sm text-center">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No Telpon</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($seminar as $key => $seminars)
                                <tr>
                                    <td>{{ $seminar->firstItem() + $key }}</td>
                                    <td>{{ $seminars->nama }}</td>
                                    <td>{{ $seminars->email }}</td>
                                    <td>{{ $seminars->no_hp }}</td>
                                    <td>
                                        <a href="{{ route('seminar.edit', $seminars->id) }}"
                                            class="btn btn-success btn-sm">
                                            <i class='fas fa-edit'></i></a>
                                        <form action="{{ route('seminar.destroy', $seminars->id) }}" method="POST"
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
                        {{ $seminar->firstItem() }}
                        of
                        {{ $seminar->lastItem() }}
                    </div>
                    <div class="py-4">
                        {{ $seminar->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
