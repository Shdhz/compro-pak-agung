@extends('admin.layouts.main')

@section('page-header')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">Edit Fasilitas</h2>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="col-md-6 mx-auto">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit: {{ $facility->nama }}</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.facility.update', $facility->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label required">Nama Fasilitas</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                        value="{{ old('nama', $facility->nama) }}">
                    @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Badge / Label</label>
                    <input type="text" class="form-control @error('badge') is-invalid @enderror" name="badge"
                        value="{{ old('badge', $facility->badge) }}">
                    @error('badge') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Foto Thumbnail</label>

                    @if($facility->thumbnail)
                    <div class="mb-2">
                        <img src="{{ asset('storage/'.$facility->thumbnail) }}" class="rounded border p-1"
                            style="max-height: 150px">
                    </div>
                    @endif

                    <input type="file" class="form-control @error('thumbnail') is-invalid @enderror" name="thumbnail">
                    <small class="form-hint">Biarkan kosong jika tidak ingin mengubah gambar.</small>
                    @error('thumbnail') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-footer text-end">
                    <a href="{{ route('admin.facility.index') }}" class="btn btn-link link-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection