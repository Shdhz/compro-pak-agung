@extends('admin.layouts.main')

@section('page-header')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">Tambah Guru Baru</h2>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="col-md-8 mx-auto">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Form Data Guru</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.teacher.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label class="form-label">Foto Profil</label>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                        <small class="form-hint">Format: JPG, PNG. Maksimal 2MB.</small>
                        @error('foto') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label required">Nama Lengkap</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                            value="{{ old('nama') }}" placeholder="Nama beserta gelar">
                        @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">NIP</label>
                        <input type="number" class="form-control @error('nip') is-invalid @enderror" name="nip"
                            value="{{ old('nip') }}" placeholder="Nomor Induk Pegawai">
                        @error('nip') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label required">Jabatan Utama</label>
                        <select class="form-select @error('jabatan') is-invalid @enderror" name="jabatan">
                            <option value="">Pilih Jabatan</option>
                            <option value="Kepala Sekolah" {{ old('jabatan')=='Kepala Sekolah' ? 'selected' : '' }}>
                                Kepala Sekolah</option>
                            <option value="Guru" {{ old('jabatan')=='Guru' ? 'selected' : '' }}>Guru Pengajar</option>
                            <option value="Staff" {{ old('jabatan')=='Staff' ? 'selected' : '' }}>Staff / Tata Usaha
                            </option>
                        </select>
                        @error('jabatan') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label required">Jabatan Spesifik</label>
                        <input type="text" class="form-control @error('jabatan_spesifik') is-invalid @enderror"
                            name="jabatan_spesifik" value="{{ old('jabatan_spesifik') }}"
                            placeholder="Contoh: Guru Kelas 1, Guru PJOK">
                        @error('jabatan_spesifik') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                </div>

                <div class="form-footer text-end">
                    <a href="{{ route('admin.teacher.index') }}" class="btn btn-link link-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection