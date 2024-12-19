<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NTH - Danh sách tài khoản</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container border my-3">
        <h1>Danh sách tài khoản</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Tài khoản</th>
                        <th>Mật khẩu</th>
                        <th>Trạng thái</th>
                    </tr>
                </thead>    
                <tbody>
                    @php
                        $stt=0;
                    @endphp
                    @foreach ($nthquantri ??[] as $item)
                        @php
                            $stt++;
                        @endphp
                        <tr>
                        <td>{{$stt}}</td>
                        <td>{{$item->nthTaiKhoan}}</td>
                        <td>{{$item->nthMatKhau}}</td>
                        <td>
                            <a href="/admins/detail/{{$item->id}}" class="btn btn-success">Chi tiết</a>                            
                            <a href="/admins/edit/{{$item->id}}" class="btn btn-primary"> Sửa </a>
                            <a href="/admins/delete/{{$item->id}}" class="btn btn-danger"
                              onclick="return confirm('Bạn chắc chắn muốn xoá')"
                            > Xoá </a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <a href="/admins/nthlogin" class="btn btn-primary">Thêm mới</a>
    </section>
</body>
</html>