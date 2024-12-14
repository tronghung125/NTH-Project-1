<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách sinh viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container">
        <div class="card">
            <div class="card-header">
                <h1>Danh sách sinh viên</h1>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã sinh viên</th>
                            <th>Họ sinh viên</th>
                            <th>Tên sinh viên</th>
                            <th>Giới tính</th>
                            <th>Ngày sinh</th>
                            <th>Nơi sinh</th>
                            <th>Mã khoa</th>
                            <th>Học bổng</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $stt = 0; @endphp
                        @foreach ($nthsinhvien as $item)
                            @php $stt++; @endphp
                            <tr>
                                <td class="text-center">{{$stt}}</td>
                                <td>{{$item->nthmasv}}</td>
                                <td>{{$item->nthhosv}}</td>
                                <td>{{$item->nthtensv}}</td>
                                <td>{{$item->nthphai}}</td>
                                <td>{{$item->nthngaysinh}}</td>
                                <td>{{$item->nthnoisinh}}</td>
                                <td>{{$item->nthmakh}}</td>
                                <td>{{$item->nthhocbong}}</td>
                                <td class="text-center">
                                    <a href="/sinhvien/detail/{{$item->nthmasv}}" class="btn btn-success">Chi tiết</a>
                                    <a href="/sinhvien/edit/{{$item->nthmasv}}" class="btn btn-primary">Sửa</a>
                                    <a href="/sinhvien/delete/{{$item->nthmasv}}" class="btn btn-danger"
                                       onclick="return confirm('Bạn muốn xóa sinh viên này không? Mã: {{$item->nthmasv}}');">
                                       Xóa
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <h3>Tổng số: {{ count($nthsinhvien) }}</h3>
                <a href="/sinhvien/create" class="btn btn-primary">Thêm mới</a>
            </div>
        </div>
    </section>
</body>
</html>
