<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách nhà cung cấp</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container">
        <div class="card">
            <div class="card-header">
                <h1>Danh sách nhà cung cấp</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã nhà cung cấp</th>
                            <th>Tên nhà cung cấp</th>
                            <th>Địa chỉ</th>
                            <th>Email</th>
                            <th>Điện thoại</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($nthNhaCCs as $key => $item)
                            <tr>
                                <td>{{$key +1}}</td>
                                <td>{{$item->nthMaNCC}}</td>
                                <td>{{$item->nthTenNCC}}</td>
                                <td>{{$item->nthDiachi}}</td>
                                <td>{{$item->nthemail}}</td>
                                <td>{{$item->nthDienthoai}}</td>
                                <td class="text-center">
                                    <a href="/sinhvien/detail/{{$item->nthMaNCC}}" class="btn btn-success">Chi tiết</a>
                                    <a href="/sinhvien/edit/{{$item->nthMaNCC}}" class="btn btn-primary">Sửa</a>
                                    <a href="/sinhvien/delete/{{$item->nthMaNCC}}" class="btn btn-danger"
                                       onclick="return confirm('Bạn muốn xóa nhà cung cấp này không? Mã: {{$item->nthMaNCC}}');">
                                       Xóa
                                    </a>
                                </td>>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">Chưa có dữ liệu</td>
                            </tr>
                        @endforelse
                        <tr>
                            <th colspan="7">{{ $nthNhaCCs->links('pagination::bootstrap-5') }}</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <a href="/nhacc/create" class="btn btn-primary">Thêm mới</a>
            </div>
        </div>
    </section>
</body>
</html>