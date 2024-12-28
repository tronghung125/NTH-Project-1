@extends('Layout.admins._master')
@section('title', 'Danh Sách Tin Tức')

@section('content-body')
    <section class="container border my-3">
        <h1 class="mb-4">Danh Sách Tin Tức</h1>

        <!-- Thông báo thành công -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Mã Tin Tức</th>
                    <th>Tiêu Đề</th>
                    <th>Mô Tả</th>
                    <th>Nội Dung</th>
                    <th>Ngày Đăng</th>
                    <th>Ngày Cập Nhật</th>
                    <th>Hình Ảnh</th>
                    <th>Trạng Thái</th>
                    <th>Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($nthtinTucs as $item)
                    <tr>
                        <td>{{ ($nthtinTucs->currentPage() - 1) * $nthtinTucs->perPage() + $loop->index + 1 }}</td>
                        <td>{{ $item->nthMaTT }}</td>
                        <td>{{ $item->nthTieuDe }}</td>
                        <td>{{ Str::limit($item->nthMoTa, 50) }}</td>
                        <td>{{ Str::limit($item->nthNoiDung, 50) }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->nthNgayDangTin)->format('d/m/Y H:i') }}</td>
                        <td>{{ \Carbon\Carbon::parse($item->nthNgayCapNHap)->format('d/m/Y H:i') }}</td>
                        <td style="text-align: center;">
                            <img src="{{ asset('storage/' . $item->nthHinhAnh) }}" alt="Tin tức {{ $item->nthMaTT }}" width="100" height="100">
                        </td>
                        <td>
                            @if($item->nthTrangThai == 0)
                                <span class="badge bg-success">Hiển Thị</span>
                            @else
                                <span class="badge bg-danger">Khóa</span>
                            @endif
                        </td>
                        <td >
                            <a href="/nthadmins/nth-tin-tuc/nth-detail/{{$item->id}}" class="btn btn-success">Chi tiết</a>
                            <a href="/nthadmins/nth-tin-tuc/nth-edit/{{$item->id}}" class="btn btn-primary">Sửa</a>
                            <a href="/nthadmins/nth-tin-tuc/nth-delete/{{$item->id}}" class="btn btn-danger"
                                onclick="return confirm('Bạn có muốn xoá không ?')">Xoá</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Phân trang -->
        <div class="d-flex justify-content-center mt-3">
            {{ $nthtinTucs->links('pagination::bootstrap-5') }}
        </div>

        <!-- Thêm mới Tin Tức -->
        <div class="text-end mt-3">
            <a href="{{ route('nthAdmins.nthtintuc.nthcreate') }}" class="btn btn-success">
                <i class="fa-solid fa-plus"></i> Thêm Mới Tin Tức
            </a>
        </div>
    </section>
@endsection