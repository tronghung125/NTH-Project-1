<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container my-5">
        <h2>Liên Hệ</h2>
        <form action="/submit-contact" method="POST" id="contactForm">
            @csrf
            <div class="mb-3">
                <h4>Họ và tên</h4>
                <label for="name" class="form-label"></label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <h4>Số điện thoại</h4>
                <label for="phone" class="form-label"></label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="mb-3">
                <h4>Địa chỉ</h4>
                <label for="address" class="form-label"></label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <div class="mb-3">
                <h4>Email</h4>
                <label for="email" class="form-label"></label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <h4>Chọn sản phẩm</h4>
                <label for="product" class="form-label"></label>
                <select class="form-select" id="product" name="product" required>
                    <option value="product1">Sản phẩm 1</option>
                    <option value="product2">Sản phẩm 2</option>
                    <option value="product3">Sản phẩm 3</option>
                    <option value="product4">Sản phẩm 4</option>
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Gửi</button>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();
            window.location.href = '/nthuser'; 
        });
    </script>

    <style>
        .container {
            max-width: 800px;
        }
    
        h2 {
            font-size: 2rem;
            font-weight: 600;
            color: #007bff;
        }
    
        .form-label {
            font-weight: bold;
            color: #333;
        }
    
        .form-input {
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 10px;
            font-size: 1rem;
        }
    
        .form-input:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }
    
        .btn-submit {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }
    
        .btn-submit:hover {
            background-color: #0056b3;
        }
    
        .btn-submit:focus {
            outline: none;
        }
    
        .mb-3 {
            margin-bottom: 20px;
        }
    
        /* Add a little shadow around the form */
        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    
        form .form-control {
            font-size: 1rem;
        }
    
        /* Style the select dropdown */
        .form-select {
            border-radius: 8px;
            padding: 10px;
        }
    </style>
</body>
</html>
