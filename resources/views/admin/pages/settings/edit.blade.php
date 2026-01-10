@extends('admin.layouts.main')

@section('page-header')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <div class="page-pretitle">
                    Pengaturan
                </div>
                <h2 class="page-title">
                    Edit Pengaturan
                </h2>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="col-md-6 mx-auto">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit Data: {{ $setting->key }}</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.setting.update', $setting->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label required">Key (Kunci Unik)</label>
                    <input type="text" class="form-control bg-muted-lt @error('key') is-invalid @enderror" name="key"
                        value="{{ old('key', $setting->key) }}" style="text-transform:uppercase; cursor: not-allowed;"
                        readonly>

                    @error('key')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <small class="form-hint text-muted">
                        Key tidak dapat diubah karena bersifat permanen sistem.
                    </small>
                </div>

                <div class="mb-3">
                    <label class="form-label required">Value (Nilai)</label>
                    <textarea class="form-control @error('value') is-invalid @enderror" name="value" rows="5"
                        placeholder="Isi nilai pengaturan...">{{ old('value', $setting->value) }}</textarea>

                    @error('value')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-footer text-end">
                    <a href="{{ route('admin.setting.index') }}" class="btn btn-link link-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection