@extends('Layout.admins._master')
@section('title','Thêm Chi tiết Hóa Đơn')
    
@section('content-body')
    <div class="container border">
        <div class="row">
            <div class="col">
                <form action="{{ route('nthAdmins.nthcthoadon.nthCreateSubmit') }}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h1>Thêm mới chi tiết hóa Đơn</h1>
                        </div>

                        <div class="mb-3">
                            <label for="nthHoaDonID" class="form-label">Mã Hóa Đơn</label>
                            <select name="nthHoaDonID" id="nthHoaDonID" class="form-control">
                                @foreach ($nthhoadon as $item)
                                    <option value="{{ $item->id }}">{{ $item->nthMaHoaDon }}</option>
                                @endforeach
                            </select>
                            @error('nthHoaDonID')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nthSanPhamID" class="form-label">Mã Sản Phẩm</label>
                            <select name="nthSanPhamID" id="nthSanPhamID" class="form-control">
                                @foreach ($nthsanpham as $item)
                                    <option value="{{ $item->id }}" data-price="{{ $item->nthDonGia }}">{{ $item->nthMaSanPham }}</option>
                                @endforeach
                            </select>
                            @error('nthSanPhamID')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nthSoLuongMua" class="form-label">Số Lượng Mua</label>
                            <input type="number" class="form-control" id="nthSoLuongMua" name="nthSoLuongMua" value="{{ old('nthSoLuongMua') }}" min="1" oninput="calculateThanhTien()">
                            @error('nthSoLuongMua')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nthDonGiaMua" class="form-label">Đơn Giá Mua</label>
                            <input type="number" class="form-control" id="nthDonGiaMua" name="nthDonGiaMua" value="{{ old('nthDonGiaMua') }}" oninput="calculateThanhTien()">
                            @error('nthDonGiaMua')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nthThanhTien" class="form-label">Thành Tiền</label>
                            <input type="number" class="form-control" id="nthThanhTien" name="nthThanhTien" value="{{ old('nthThanhTien') }}" readonly>
                            @error('nthThanhTien')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nthTrangThai" class="form-label">Trạng Thái</label>
                            <div class="col-sm-10">
                                <input type="radio" id="nthTrangThai0" name="nthTrangThai" value="0" checked />
                                <label for="nthTrangThai0">Hoàn Thành</label>
                                &nbsp;
                                <input type="radio" id="nthTrangThai1" name="nthTrangThai" value="1" />
                                <label for="nthTrangThai1">Trả Lại</label>
                                &nbsp;
                                <input type="radio" id="nthTrangThai2" name="nthTrangThai" value="2" />
                                <label for="nthTrangThai2">Xóa</label>
                            </div>
                            @error('nthTrangThai')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="card-footer">
                            <button class="btn btn-success">Thêm</button>
                            <a href="{{ route('nthAdmins.nthcthoadon') }}" class="btn btn-primary">Quay lại</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        // Hàm tính Thành Tiền
        function calculateThanhTien() {
            var quantity = parseFloat(document.getElementById('nthSoLuongMua').value);
            var unitPrice = parseFloat(document.getElementById('nthDonGiaMua').value);
            var thanhTien = quantity * unitPrice;
            document.getElementById('nthThanhTien').value = thanhTien.toFixed(2);
        }

        document.getElementById('nthSanPhamID').addEventListener('change', function() {
            var selectedOption = this.options[this.selectedIndex];
            var price = selectedOption.getAttribute('data-price');
            document.getElementById('nthDonGiaMua').value = price;
            calculateThanhTien();
        });
    </script>
@endsection