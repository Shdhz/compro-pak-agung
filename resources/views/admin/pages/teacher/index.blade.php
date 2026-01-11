@extends('admin.layouts.main')

@section('page-header')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">Overview</div>
                <h2 class="page-title">Kelola Data Guru</h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <form action="{{ route('admin.teacher.index') }}" method="GET" class="d-none d-sm-inline-block">
                        <div class="input-icon">
                            <span class="input-icon-addon">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                    <path d="M21 21l-6 -6" />
                                </svg>
                            </span>
                            <input type="text" name="search" value="{{ request('search') }}" class="form-control"
                                placeholder="Cari Nama / NIP...">
                        </div>
                    </form>
                    <a href="{{ route('admin.teacher.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        Tambah Guru
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="col-12">
    @if(session('success'))
    <div class="alert alert-important alert-success alert-dismissible" role="alert">
        <div class="d-flex">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 12l5 5l10 -10" />
                </svg>
            </div>
            <div>{{ session('success') }}</div>
        </div>
        <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
    </div>
    @endif

    <div class="card">
        <div class="table-responsive">
            <table class="table table-vcenter card-table table-striped">
                <thead>
                    <tr>
                        <th class="w-1">No</th>
                        <th>Profil</th>
                        <th>Identitas (Nama & NIP)</th>
                        <th>Jabatan</th>
                        <th class="w-1">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($teachers as $index => $item)
                    <tr>
                        <td><span class="text-muted">{{ $teachers->firstItem() + $index }}</span></td>
                        <td>
                            @if($item->foto)
                            <span class="avatar avatar-md"
                                style="background-image: url({{ asset('storage/'.$item->foto) }})"></span>
                            @else
                            <span class="avatar avatar-md bg-blue-lt">{{ substr($item->nama, 0, 2) }}</span>
                            @endif
                        </td>
                        <td>
                            <div class="font-weight-medium">{{ $item->nama }}</div>
                            <div class="text-muted small">NIP: {{ $item->nip ?? '-' }}</div>
                        </td>
                        <td>
                            <div class="text-reset">{{ $item->jabatan }}</div>
                            <div class="text-muted small">{{ $item->jabatan_spesifik }}</div>
                        </td>
                        <td>
                            <div class="btn-list flex-nowrap">
                                <a href="{{ route('admin.teacher.edit', $item->id) }}"
                                    class="btn btn-white btn-sm">Edit</a>
                                <form action="{{ route('admin.teacher.destroy', $item->id) }}" method="POST"
                                    onsubmit="return confirm('Yakin hapus data guru ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-ghost-danger btn-sm">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center p-4">
                            <p class="empty-title">Belum ada data guru</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer d-flex align-items-center">
            {{ $teachers->withQueryString()->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection