@extends('Layout.admins._master')
@section('title','Danh sách loại sản phẩm')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col-12">
                <div class="d-flex w-100 justify-content-between">    
                    <h3>Danh sách loại sản phẩm</h3>
                    <a href="{{route('nthAdmins.nthLoaiSanPham.nthcreate')}}" class="btn btn-success">Thêm mới</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">        
            <table class="table table-bordered">
            <thead>
                <th class="text-center">STT</th>
                <th>Mã loại</th>
                <th>Tên loại</th>
                <th>Trạng thái</th>
                <th>Chức năng</th>
            </thead>
            <tbody>
                @forelse ($nthLoaiSanPhams as $item)
                    <tr>
                        <td class="text-center">{{$loop->iteration}}</td>
                        <td>{{$item->nthMaLoai}}</td>                        
                        <td>{{$item->nthTenLoai}}</td>
                        <td>{{$item->nthTrangThai}}</td>
                        <td>
                            <a href="/nthadmins/nth-loai-san-pham/nth-detail/{{$item->id}}" class="btn btn-success">Chi tiết</a>
                            <a href="/nthadmins/nth-loai-san-pham/nth-edit/{{$item->id}}" class="btn btn-primary">Sửa</a>
                            <a href="/nthadmins/nth-loai-san-pham/nth-delete/{{$item->id}}" class="btn btn-danger"
                            onclick="return confirm('Bạn có muốn xoá không ?')">Xoá</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <th colspan="5">Chưa có thông tin loại sản phẩm</th>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection 