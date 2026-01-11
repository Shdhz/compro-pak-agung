@extends('admin.layouts.main')

@section('page-header')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">Upload Foto Baru</h2>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="col-md-6 mx-auto">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Form Galeri</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label required">Judul Foto</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                        value="{{ old('nama') }}" placeholder="Contoh: Kegiatan Upacara Senin">
                    @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label required">Kategori</label>
                    <select class="form-select @error('kategori') is-invalid @enderror" name="kategori">
                        <option value="">Pilih Kategori</option>
                        <option value="Kegiatan" {{ old('kategori')=='Kegiatan' ? 'selected' : '' }}>Kegiatan Sekolah
                        </option>
                        <option value="Fasilitas" {{ old('kategori')=='Fasilitas' ? 'selected' : '' }}>Fasilitas
                        </option>
                        <option value="Prestasi" {{ old('kategori')=='Prestasi' ? 'selected' : '' }}>Prestasi</option>
                        <option value="Lainnya" {{ old('kategori')=='Lainnya' ? 'selected' : '' }}>Lainnya</option>
                    </select>
                    @error('kategori') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label required">File Foto</label>
                    <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                    <small class="form-hint">Format: JPG, PNG. Maksimal 2MB.</small>
                    @error('foto') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-footer text-end">
                    <a href="{{ route('admin.gallery.index') }}" class="btn btn-link link-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection