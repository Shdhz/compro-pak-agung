@extends('admin.layouts.main')

@section('page-header')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">Tulis Berita Baru</h2>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row row-cards">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label required">Judul Berita</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                            value="{{ old('judul') }}" placeholder="Masukkan judul menarik...">
                        @error('judul') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label required">Ringkasan (Summary)</label>
                        <textarea class="form-control @error('summary') is-invalid @enderror" name="summary" rows="3"
                            placeholder="Deskripsi singkat untuk tampilan depan...">{{ old('summary') }}</textarea>
                        <small class="form-hint">Maksimal 255 karakter.</small>
                        @error('summary') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Konten Lengkap</label>
                        <textarea class="form-control" name="content" rows="10"
                            placeholder="Tulis isi berita di sini...">{{ old('content') }}</textarea>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label required">Kategori</label>
                        <select class="form-select @error('category_id') is-invalid @enderror" name="category_id">
                            <option value="">Pilih Kategori</option>
                            @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ old('category_id')==$cat->id ? 'selected' : '' }}>{{
                                $cat->nama }}</option>
                            @endforeach
                        </select>
                        @error('category_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tags</label>
                        <input type="text" class="form-control" name="tags" value="{{ old('tags') }}"
                            placeholder="lomba, juara, sekolah">
                        <small class="form-hint">Pisahkan dengan koma.</small>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Thumbnail</label>
                        <input type="file" class="form-control @error('thumbnail') is-invalid @enderror"
                            name="thumbnail">
                        <small class="form-hint">Format: JPG, PNG. Max 2MB.</small>
                        @error('thumbnail') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary w-100">
                            Terbitkan Berita
                        </button>
                        <a href="{{ route('admin.news.index') }}" class="btn btn-link w-100 text-muted mt-2">Batal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection