@extends('Layout.admins._master')
@section('title', 'Chỉnh Sửa Quản Trị Viên')

@section('content-body')
    <div class="container">
        <form action="{{ route('nthAdmins.nthquantri.nthEditSubmit', $nthquantri->id) }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nthTaiKhoan">Tài Khoản</label>
                <input type="text" class="form-control" id="nthTaiKhoan" name="nthTaiKhoan" value="{{ $nthquantri->nthTaiKhoan }}" required>
                @error('nthTaiKhoan') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="nthMatKhau">Mật Khẩu</label>
                <input type="password" class="form-control" id="nthMatKhau" name="nthMatKhau">
                @error('nthMatKhau') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="nthTrangThai">Trạng Thái</label>
                <select name="nthTrangThai" id="nthTrangThai" class="form-control" required>
                    <option value="0" {{ $nthquantri->nthTrangThai == 0 ? 'selected' : '' }}>Cho Phép Đăng Nhập</option>
                    <option value="1" {{ $nthquantri->nthTrangThai == 1 ? 'selected' : '' }}>Khóa</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Cập Nhật</button>
        </form>
    </div>
@endsection