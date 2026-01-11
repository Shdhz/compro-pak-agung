@extends('admin.layouts.main')

@section('page-header')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">Overview</div>
                <h2 class="page-title">Kelola Berita & Artikel</h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <form action="{{ route('admin.news.index') }}" method="GET" class="d-none d-sm-inline-block">
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
                                placeholder="Cari judul berita...">
                        </div>
                    </form>
                    <a href="{{ route('admin.news.create') }}" class="btn btn-primary d-none d-sm-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                            stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                            stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        Tulis Berita
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
            <div><svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24"
                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M5 12l5 5l10 -10" />
                </svg></div>
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
                        <th>Artikel</th>
                        <th>Kategori</th>
                        <th>Penulis</th>
                        <th>Tanggal</th>
                        <th class="w-1">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($news as $index => $item)
                    <tr>
                        <td><span class="text-muted">{{ $news->firstItem() + $index }}</span></td>
                        <td>
                            <div class="d-flex py-1 align-items-center">
                                @if($item->thumbnail)
                                <span class="avatar me-2"
                                    style="background-image: url({{ asset('storage/'.$item->thumbnail) }})"></span>
                                @else
                                <span class="avatar me-2 bg-blue-lt">TXT</span>
                                @endif
                                <div class="flex-fill">
                                    <div class="font-weight-medium text-truncate" style="max-width: 300px;">{{
                                        $item->judul }}</div>
                                    <div class="text-muted text-truncate small" style="max-width: 300px;">{{
                                        $item->summary }}</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge bg-azure-lt">{{ $item->category->nama ?? 'Uncategorized' }}</span>
                        </td>
                        <td class="text-muted">
                            {{ $item->user->nama ?? 'Admin' }}
                        </td>
                        <td class="text-muted">
                            {{ $item->created_at->format('d M Y') }}
                        </td>
                        <td>
                            <div class="btn-list flex-nowrap">
                                <a href="{{ route('admin.news.edit', $item->id) }}"
                                    class="btn btn-white btn-sm">Edit</a>
                                <form action="{{ route('admin.news.destroy', $item->id) }}" method="POST"
                                    onsubmit="return confirm('Hapus berita ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-ghost-danger btn-sm">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center p-4">
                            <p class="empty-title">Belum ada berita</p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="card-footer d-flex align-items-center">
            {{ $news->withQueryString()->links('pagination::bootstrap-5') }}
        </div>
    </div>
</div>
@endsection