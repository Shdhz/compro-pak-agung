@extends('admin.layouts.main')

@section('page-header')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">Tambah Fasilitas Baru</h2>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="col-md-6 mx-auto">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Form Input Fasilitas</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.facility.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label required">Nama Fasilitas</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                        value="{{ old('nama') }}" placeholder="Contoh: Perpustakaan Digital">
                    @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Badge / Label</label>
                    <input type="text" class="form-control @error('badge') is-invalid @enderror" name="badge"
                        value="{{ old('badge') }}" placeholder="Contoh: Full AC, 24 Jam">
                    <small class="form-hint">Label pendek untuk informasi tambahan (opsional).</small>
                    @error('badge') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto Thumbnail</label>
                    <input type="file" class="form-control @error('thumbnail') is-invalid @enderror" name="thumbnail">
                    <small class="form-hint">Format: JPG/PNG, Maks. 2MB.</small>
                    @error('thumbnail') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-footer text-end">
                    <a href="{{ route('admin.facility.index') }}" class="btn btn-link link-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection