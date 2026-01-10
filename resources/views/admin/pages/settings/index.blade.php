@extends('admin.layouts.main')

@section('page-header')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">
                    Overview
                </div>
                <h2 class="page-title">
                    Kelola Pengaturan
                </h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <form action="{{ route('admin.setting.index') }}" method="GET" class="d-none d-sm-inline-block">
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
                                placeholder="Cari setting..." aria-label="Search in website">
                        </div>
                    </form>
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
                        <th>Key (Kunci)</th>
                        <th>Value (Nilai)</th>
                        <th>Last Updated</th>
                        <th class="w-1">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($settings as $index => $item)
                    <tr>
                        <td><span class="text-muted">{{ $settings->firstItem() + $index }}</span></td>
                        <td>
                            <span class="badge bg-blue-lt">{{ $item->key }}</span>
                        </td>
                        <td class="text-muted">
                            {{ Str::limit($item->value, 50) }}
                        </td>
                        <td>
                            {{ $item->updated_at->format('d M Y H:i') }}
                        </td>
                        <td>
                            <div class="btn-list flex-nowrap">
                                <a href="{{ route('admin.setting.edit', $item->id) }}" class="btn btn-white btn-sm">
                                    Edit
                                </a>

                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center p-4">
                            <div class="empty-img"><img src="./static/illustrations/undraw_printing_invoices_5r4r.svg"
                                    height="128" alt=""></div>
                            <p class="empty-title">Tidak ada data ditemukan</p>
                            <p class="empty-subtitle text-muted">
                                Coba sesuaikan pencarian Anda.
                            </p>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="card-footer d-flex align-items-center">
            <p class="m-0 text-muted">
                Menampilkan <span>{{ $settings->firstItem() }}</span> sampai <span>{{ $settings->lastItem() }}</span>
                dari <span>{{ $settings->total() }}</span> data
            </p>
            <ul class="pagination m-0 ms-auto">
                {{ $settings->withQueryString()->links('pagination::bootstrap-5') }}
            </ul>
        </div>
    </div>
</div>
@endsection