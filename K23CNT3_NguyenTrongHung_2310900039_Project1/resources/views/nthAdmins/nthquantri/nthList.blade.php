@extends('Layout.admins._master')
@section('title','Danh Sách Quản Trị Viên')

@section('content-body')
    <div class="container border mt-4">
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h1>Danh Sách Quản Trị Viên</h1>
                <!-- Nút Thêm Mới -->
                <a href="{{route('nthAdmins.nthquantri.nthCreate')}}" class="btn btn-success btn-lg">
                    <i class="fa-solid fa-plus-circle"></i> Thêm Mới
                </a>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tài Khoản</th>
                        <th>Mật Khẩu</th>
                        <th>Trạng Thái</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $stt = 0;
                    @endphp
                    @forelse ($nthquantris as $item)
                        @php
                            $stt++;
                        @endphp
                        <tr>
                            <td class="text-center">{{ $stt }}</td>
                            <td>{{ $item->nthTaiKhoan }}</td>
                            <td>{{ $item->nthMatKhau }}</td>
                            <td>
                                @if($item->nthTrangThai == 0)
                                    <span class="badge bg-success">Cho Phép Đăng Nhập</span>
                                @else
                                    <span class="badge bg-danger">Khóa</span>
                                @endif
                            </td>
                            <td >
                                <a href="/nthadmins/nth-quan-tri/nth-detail/{{$item->id}}" class="btn btn-success">Chi tiết</a>
                                <a href="/nthadmins/nth-quan-tri/nth-edit/{{$item->id}}" class="btn btn-primary">Sửa</a>
                                <a href="/nthadmins/nth-quan-tri/nth-delete/{{$item->id}}" class="btn btn-danger"
                                    onclick="return confirm('Bạn có muốn xoá không ?')">Xoá</a>
                            </td>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">
                                Chưa có thông tin Quản Trị Viên
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection