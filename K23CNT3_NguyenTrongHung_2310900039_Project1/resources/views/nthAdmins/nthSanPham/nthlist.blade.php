@extends('Layout.admins._master')
@section('title', 'Danh Sách Sản Phẩm')

@section('content-body')
    <div class="container border mt-4">
        <div class="row mb-4">
            <div class="col-12 d-flex justify-content-between align-items-center">
                <h1>Danh Sách Sản Phẩm</h1>
                <a href="{{route('nthAdmins.nthSanPham.nthcreate')}}" class="btn btn-success btn-lg">
                    <i class="fa-solid fa-plus-circle"></i> Thêm Mới
                </a>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">STT</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Hình Ảnh</th>
                        <th>Số Lượng</th>
                        <th>Đơn Giá</th>
                        <th>Mã Loại</th>
                        <th>Trạng Thái</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $stt = 0;
                    @endphp
                    @forelse ($nthsanphams as $item)
                        @php
                            $stt++;
                        @endphp
                        <tr>
                            <td class="text-center">{{ $stt }}</td>
                            <td>{{ $item->nthMaSanPham }}</td>
                            <td>{{ $item->nthTenSanPham }}</td>
                            <td style="display: flex; justify-content: center; align-items: center; height: 100px;">
                                <img src="{{ asset('storage/' . $item->nthHinhAnh) }}" alt="Sản phẩm {{ $item->nthMaSanPham }}" width="100" height="100">
                            </td>
                            <td>{{ $item->nthSoLuong }}</td>
                            <td>{{ $item->nthDonGia}}</td>
                            <td>{{ $item->nthMaLoai }}</td>
                            <td>
                                @if($item->nthTrangThai == 0)
                                    <span class="">0</span>
                                @else
                                    <span class="">1</span>
                                @endif
                            </td>
                            <td >
                                <a href="/nthadmins/nth-san-pham/nth-detail/{{$item->id}}" class="btn btn-success">Chi tiết</a>
                                <a href="/nthadmins/nth-san-pham/nth-edit/{{$item->id}}" class="btn btn-primary">Sửa</a>
                                <a href="/nthadmins/nth-san-pham/nth-delete/{{$item->id}}" class="btn btn-danger"
                                    onclick="return confirm('Bạn có muốn xoá không ?')">Xoá</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9" class="text-center text-muted">
                                Chưa có thông tin sản phẩm
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection