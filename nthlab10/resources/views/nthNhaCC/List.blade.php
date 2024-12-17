<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách nhà cung cấp</title>
</head>
<body>
    <header class="container my-3">
        <h1>Danh sách nhà cung cấp</h1>
    </header>
    <section class="container my-1 border p-2">
        <thead>
            <th>STT</th>
            <th>Mã nhà cung cấp</th>
            <th>Tên nhà cung cấp</th>
            <th>Địa chỉ</th>
            <th>Email</th>
            <th>Điện thoại</th>
        </thead>
        <tbody>
            @forelse ($nthNhaCCs as $item)
                <tr>
                    <td>1</td>
                    <td>{{$item->nthMaNCC}}</td>
                    <td>{{$item->nthTenCC}}</td>
                    <td>{{$item->nthDiachi}}</td>
                    <td>{{$item->nthemail}}</td>
                    <td>{{$item->nthDienthoai}}</td>
                    <td>
                        View / Edit / Delete
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Chưa có dữ liệu</td>
                </tr>
            @endforelse
            <tr>
                <th colspan="7" colspan="7">{{[$nthNhaCCs->links('pagination::bootstrap-5')]}}</th>
            </tr>
        </tbody>
        <table>
            <button class="btn btn-primary">Thêm mới</button>
        </table>
    </section>
</body>
</html>