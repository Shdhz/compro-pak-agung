@extends('admin.layouts.main')

@section('page-header')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">Edit Foto Galeri</h2>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="col-md-6 mx-auto">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edit: {{ $gallery->nama }}</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.gallery.update', $gallery->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label required">Judul Foto</label>
                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                        value="{{ old('nama', $gallery->nama) }}">
                    @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label required">Kategori</label>
                    <select class="form-select @error('kategori') is-invalid @enderror" name="kategori">
                        <option value="Kegiatan" {{ old('kategori', $gallery->kategori) == 'Kegiatan' ? 'selected' : ''
                            }}>Kegiatan Sekolah</option>
                        <option value="Fasilitas" {{ old('kategori', $gallery->kategori) == 'Fasilitas' ? 'selected' :
                            '' }}>Fasilitas</option>
                        <option value="Prestasi" {{ old('kategori', $gallery->kategori) == 'Prestasi' ? 'selected' : ''
                            }}>Prestasi</option>
                        <option value="Lainnya" {{ old('kategori', $gallery->kategori) == 'Lainnya' ? 'selected' : ''
                            }}>Lainnya</option>
                    </select>
                    @error('kategori') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">File Foto</label>

                    @if($gallery->foto)
                    <div class="mb-2">
                        <img src="{{ asset('storage/'.$gallery->foto) }}" class="rounded border p-1"
                            style="max-height: 200px; width: 100%; object-fit: cover;">
                    </div>
                    @endif

                    <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto">
                    <small class="form-hint">Biarkan kosong jika tidak ingin mengubah foto.</small>
                    @error('foto') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="form-footer text-end">
                    <a href="{{ route('admin.gallery.index') }}" class="btn btn-link link-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection