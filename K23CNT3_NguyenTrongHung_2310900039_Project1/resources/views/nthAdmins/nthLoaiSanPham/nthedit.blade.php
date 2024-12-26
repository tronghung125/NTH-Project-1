@extends('Layout.admins._master')
@section('title','Sửa Loại Sản Phẩm')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{ route('nthAdmins.nthLoaiSanPham.ntheditsubmit', ['id' => $nthLoaiSanPham->id]) }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $nthLoaiSanPham->id }}">

                    <div class="card">
                        <div class="card-header">
                            <h1>Sửa loại sản phẩm</h1>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="nthMaLoai" class="form-label">Mã Loại</label>
                                <input type="text" class="form-control @error('nthMaLoai') is-invalid @enderror" id="nthMaLoai" name="nthMaLoai" value="{{ old('nthMaLoai', $nthLoaiSanPham->nthMaLoai) }}">
                                @error('nthMaLoai')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nthTenLoai" class="form-label">Tên Loại</label>
                                <input type="text" class="form-control @error('nthTenLoai') is-invalid @enderror" id="nthTenLoai" name="nthTenLoai" value="{{ old('nthTenLoai', $nthLoaiSanPham->nthTenLoai) }}">
                                @error('nthTenLoai')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="nthTrangThai" class="form-label">Trạng Thái</label>
                                <div class="col-sm-10">
                                    <input type="radio" id="nthTrangThai1" name="nthTrangThai" value="1" {{ old('nthTrangThai', $nthLoaiSanPham->nthTrangThai) == 1 ? 'checked' : '' }} />
                                    <label for="nthTrangThai1">Hiển Thị</label>
                                    &nbsp;
                                    <input type="radio" id="nthTrangThai0" name="nthTrangThai" value="0" {{ old('nthTrangThai', $nthLoaiSanPham->nthTrangThai) == 0 ? 'checked' : '' }} />
                                    <label for="nthTrangThai0">Khóa</label>
                                </div>
                                @error('nthTrangThai')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn btn-success" type="submit">Cập nhật</button>
                            <a href="{{ route('admins.nthloaisanpham') }}" class="btn btn-primary">Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
