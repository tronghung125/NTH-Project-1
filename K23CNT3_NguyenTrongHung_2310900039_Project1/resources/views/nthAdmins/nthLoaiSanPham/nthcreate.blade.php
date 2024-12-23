@extends('Layout.admins._master')
@section('title','Danh sách loại sản phẩm')

@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col"> 
                <form action="{{route('nthAdmins.nthLoaiSanPham.nthcreatesubmit')}}" method="post">
                    @csrf   
                    <div class="card-header">
                        <h2>Thêm mới sản phẩm</h2>
                    </div>
                    <div class="card-body container-fluid">
                        <div class="mb-3 row">
                            <label for="nthMaLoai" class="col-sm-2 col-form-label">Mã Loại</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control"
                                    value="{{ old('nthMaLoai') }}" 
                                     id="nthMaLoai" name="nthMaLoai">
                                @error('nthMaLoai')
                                    <span class="text-danger">{{ $message }}</span>
                                 @enderror
                            </div>
                        </div>
                        
                        <div class="mb-3 row">
                            <label for="nthTenLoai" class="col-sm-2 col-form-label">Tên loại</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" 
                                    value="{{ old('nthTenLoai') }}" 
                                     id="nthTenLoai" name="nthTenLoai">
                                @error('nthTenLoai')
                                    <span class="text-danger">{{ $message }}</span>
                                 @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nthTrangThai" class="col-sm-2 col-form-label">Trạng thái</label>
                            <div class="col-sm-10">
                              <input type="radio" id="nthTrangThai" name="nthTrangThai" value="1" checked/>
                              <label for="nthTrangThai1">Hiển thị</label>
                              <input type="radio" id="nthTrangThai" name="nthTrangThai" value="0"/>
                              <label for="nthTrangThai2">Khoá</label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-success">Ghi Lại</button>
                        <a href="{{route('admins.nthloaisanpham')}}" class="btn btn-secondary">Quay lại</a>
                    </div>
                </form>
            </div> 
        </div>         
    </div>
@endsection 