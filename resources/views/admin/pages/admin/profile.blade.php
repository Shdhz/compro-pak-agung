@extends('admin.layouts.main')

@section('page-header')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">Profil Saya</h2>
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
            <div><svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg></div>
            <div>{{ session('success') }}</div>
        </div>
        <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
    </div>
    @endif

    <div class="row row-cards">
        
        <div class="col-md-6">
            <form action="{{ route('admin.update-profile') }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="card h-100">
                    <div class="card-header">
                        <h3 class="card-title">Informasi Dasar</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label required">Nama Lengkap</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" 
                                name="nama" value="{{ old('nama', $user->nama) }}">
                            @error('nama') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label required">Alamat Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                                name="email" value="{{ old('email', $user->email) }}">
                            @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Simpan Profil</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-6">
            <form action="{{ route('admin.update-password') }}" method="POST">
                @csrf
                @method('PUT')

                <div class="card h-100">
                    <div class="card-header">
                        <h3 class="card-title">Ganti Password</h3>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label required">Password Saat Ini</label>
                            <input type="password" class="form-control @error('current_password') is-invalid @enderror" 
                                name="current_password" placeholder="Masukkan password lama">
                            @error('current_password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label required">Password Baru</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" 
                                name="password" placeholder="Minimal 8 karakter">
                            @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label required">Konfirmasi Password Baru</label>
                            <input type="password" class="form-control" 
                                name="password_confirmation" placeholder="Ulangi password baru">
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-warning">Ganti Password</button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection