
@extends('Layout.admins._master')
@section('title', 'Thêm Quản Trị Viên')

@section('content-body')
    <div class="container">
        <form action="{{ route('nthAdmins.nthquantri.nthCreateSubmit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nthTaiKhoan">Tài Khoản</label>
                <input type="text" class="form-control" id="nthTaiKhoan" name="nthTaiKhoan" required>
                @error('nthTaiKhoan') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="nthMatKhau">Mật Khẩu</label>
                <input type="password" class="form-control" id="nthMatKhau" name="nthMatKhau" required>
                @error('nthMatKhau') <span class="text-danger">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="nthTrangThai">Trạng Thái</label>
                <select name="nthTrangThai" id="nthTrangThai" class="form-control" required>
                    <option value="0">Cho Phép Đăng Nhập</option>
                    <option value="1">Khóa</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success">Thêm Quản Trị Viên</button>
        </form>
    </div>
@endsection
