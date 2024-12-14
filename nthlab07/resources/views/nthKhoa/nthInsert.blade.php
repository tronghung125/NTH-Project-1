<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NTH - Thêm mới thông tin khoa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <section class="container my-3">
        <form action="{{ route('nthkhoa.nthinsertsubmit')}}" method="post">                
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3>Thêm mới thông tin Khoa</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3 row">
                        <label for="nthmakh" class="col-sm-2 col-form-label">Mã Khoa</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" 
                            id="nthmakh" name="nthmakh"
                            value="{{old('nthmakh')}}">
                            @error('nthmakh')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nthtenkh" class="col-sm-2 col-form-label">Tên Khoa</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" 
                            id="nthtenkh" name="nthtenkh"
                            value="{{old('nthtenkh')}}">
                            @error('nthtenkh')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary mx-2">Submit</button>
                    <a href="/khoas" class="btn btn-primary">Back</a>
                </div>
            </div>
        </form>
    </section>
</body>
</html>
