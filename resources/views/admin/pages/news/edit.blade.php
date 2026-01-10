@extends('admin.layouts.main')

@section('page-header')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">Edit Berita</h2>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<form action="{{ route('admin.news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row row-cards">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label required">Judul Berita</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                            value="{{ old('judul', $news->judul) }}">
                        @error('judul') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label required">Ringkasan (Summary)</label>
                        <textarea class="form-control @error('summary') is-invalid @enderror" name="summary"
                            rows="3">{{ old('summary', $news->summary) }}</textarea>
                        @error('summary') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Konten Lengkap</label>
                        <textarea class="form-control" name="content"
                            rows="10">{{ old('content', $news->content) }}</textarea>
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
                            @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ old('category_id', $news->category_id) == $cat->id ?
                                'selected' : '' }}>{{ $cat->nama }}</option>
                            @endforeach
                        </select>
                        @error('category_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tags</label>
                        <input type="text" class="form-control" name="tags"
                            value="{{ old('tags', is_array($news->tags) ? implode(', ', $news->tags) : $news->tags) }}"
                            placeholder="lomba, juara, sekolah">
                        <small class="form-hint">Pisahkan dengan koma.</small>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Thumbnail</label>
                        @if($news->thumbnail)
                        <div class="mb-2">
                            <img src="{{ asset('storage/'.$news->thumbnail) }}" class="rounded border p-1 w-100">
                        </div>
                        @endif
                        <input type="file" class="form-control @error('thumbnail') is-invalid @enderror"
                            name="thumbnail">
                        <small class="form-hint">Biarkan kosong jika tidak ganti gambar.</small>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary w-100">
                            Update Berita
                        </button>
                        <a href="{{ route('admin.news.index') }}" class="btn btn-link w-100 text-muted mt-2">Batal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection