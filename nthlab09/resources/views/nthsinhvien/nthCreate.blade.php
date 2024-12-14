<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thêm mới sinh viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <div class="card">
            <div class="card-header">
                <h3>Thêm mới sinh viên</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('sinhvien.nthcreatesubmit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nthmasv" class="form-label">Mã sinh viên</label>
                        <input type="text" name="nthmasv" id="nthmasv" class="form-control" value="{{ old('nthmasv') }}">
                    </div>
                    <div class="mb-3">
                        <label for="nthhosv" class="form-label">Họ sinh viên</label>
                        <input type="text" name="nthhosv" id="nthhosv" class="form-control" value="{{ old('nthhosv') }}">
                    </div>
                    <div class="mb-3">
                        <label for="nthtensv" class="form-label">Tên sinh viên</label>
                        <input type="text" name="nthtensv" id="nthtensv" class="form-control" value="{{ old('nthtensv') }}">
                    </div>
                    <div class="mb-3">
                        <label for="nthphai" class="form-label">Giới tính</label>
                        <select name="nthphai" id="nthphai" class="form-select">
                            <option value="Nam" {{ old('nthphai') == '1' ? 'selected' : '' }}>Nam</option>
                            <option value="Nữ" {{ old('nthphai') == '0' ? 'selected' : '' }}>Nữ</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nthngaysinh" class="form-label">Ngày sinh</label>
                        <input type="date" name="nthngaysinh" id="nthngaysinh" class="form-control" value="{{ old('nthngaysinh') }}">
                    </div>
                    <div class="mb-3">
                        <label for="nthnoisinh" class="form-label">Nơi sinh</label>
                        <input type="text" name="nthnoisinh" id="nthnoisinh" class="form-control" value="{{ old('nthnoisinh') }}">
                    </div>
                    <div class="mb-3">
                        <label for="nthmakh" class="form-label">Mã khoa</label>
                        <input type="text" name="nthmakh" id="nthmakh" class="form-control" value="{{ old('nthmakh') }}">
                    </div>
                    <div class="mb-3">
                        <label for="nthhocbong" class="form-label">Học bổng</label>
                        <input type="number" name="nthhocbong" id="nthhocbong" class="form-control" value="{{ old('nthhocbong') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Thêm</button>
                    <a href="/sinhvien" class="btn btn-secondary">Quay lại</a>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
