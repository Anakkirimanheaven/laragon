@extends('layouts.admin')
@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endsection

@section('content')
<h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables / User /</span> Add</h4>
<div class="card">
        <div class="card-header">
            <div class="float-start">
                <h5>Add</h5>
            </div>
            <div class="float-end">
                <a href="{{route('user.index')}}" class="btn btn-sm btn-primary">
                    Kembali
                </a>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('user.store')}}" method="POST">
                @csrf
                <div class="mb-2">
                    <label for="name">Username</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="password">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label for="isAdmin">Role</label>
                    <select name="isAdmin" class="form-control select @error('isAdmin') is-invalid @enderror">
                        <option value="">Pilih</option>
                        <option value="0">User</option>
                        <option value="1">Admin</option>
                    </select>
                </div>
                <div class="mb-2">
                    <button class="btn btn-sm btn-success" type="submit">simpan</button>
                    <button class="btn btn-sm btn-warning" type="submit">reset</button>
                </div>
            </form>
        </div>
</div>
@endsection
