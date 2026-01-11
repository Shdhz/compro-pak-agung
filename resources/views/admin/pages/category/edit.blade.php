@extends('admin.layouts.main')

@section('page-header')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">Edit Kategori</h2>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="col-md-6 mx-auto">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit: {{ $category->nama }}</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.category.update', $category->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label class="form-label required">Nama Kategori</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $category->nama) }}">
                    @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-footer text-end">
                    <a href="{{ route('admin.category.index') }}" class="btn btn-link link-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection