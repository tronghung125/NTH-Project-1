<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giới thiệu</title>
    <style>
        #gioi-thieu-cay-xanh {
    background-color: #f9f9f9;
    padding: 60px 0;
    }

    #gioi-thieu-cay-xanh h2 {
        font-family: 'Arial', sans-serif;
        color: #2c6e49; 
        font-size: 36px;
        font-weight: 600;
        margin-bottom: 30px;
    }

    .about-container p {
        font-family: 'Roboto', sans-serif;
        font-size: 18px;
        line-height: 1.6;
        color: #555;
        margin-bottom: 20px;
    }

    .about-container img {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        max-width: 100%; 
        height: auto;
    }

    .about-container img:hover {
        transform: scale(1.05); 
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1); 
    }

    .text-center {
        margin-bottom: 30px;
        position: relative;
        text-align: center;
    }
    .my-3 {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    @media (max-width: 768px) {
        #gioi-thieu-cay-xanh h2 {
            font-size: 28px;
        }

        .about-container p {
            font-size: 16px;
        }

        .about-container img {
            max-height: 250px; 
        }
    }

    </style>
</head>
<body>
    <section class="mt-5" id="gioi-thieu-cay-xanh">
        <div class="container">
            <h2 class="text-center mb-4">Sự Cần Thiết Của Cây Xanh</h2>
            <div class="row">
                <div class="about-container">
                    <p>
                        Cây xanh đóng vai trò vô cùng quan trọng trong cuộc sống của chúng ta. Không chỉ mang lại không khí trong lành, cây xanh còn giúp cải thiện môi trường sống, giảm nhiệt độ và điều hòa khí hậu. Với sự phát triển nhanh chóng của đô thị hóa, việc giữ gìn và trồng thêm cây xanh càng trở nên cấp thiết hơn bao giờ hết.
                    </p>
    
                    <div class="text-center my-3">
                        <img src="{{ asset('storage/images/san-pham/PT003.jpg') }}" alt="Cây xanh minh họa 1" class="img-fluid rounded shadow" style="max-height: 300px;">
                    </div>
    
                    <p>
                        Một lợi ích không thể phủ nhận của cây xanh là khả năng cung cấp oxy cho con người. Qua quá trình quang hợp, cây xanh hấp thụ khí CO2 và thải ra khí oxy, giúp duy trì sự sống trên Trái Đất. Không chỉ vậy, cây xanh còn là nơi trú ẩn và cung cấp nguồn thức ăn cho nhiều loài động vật.
                    </p>
    
                    <div class="text-center my-3">
                        <img src="{{ asset('storage/images/san-pham/PT003.jpg') }}" alt="Cây xanh minh họa 2" class="img-fluid rounded shadow" style="max-height: 300px;">
                    </div>
    
                    <p>
                        Ngoài ra, cây xanh còn có tác dụng giảm tiếng ồn và bảo vệ đất khỏi sự xói mòn. Các khu vực có nhiều cây xanh thường có nhiệt độ thấp hơn so với những khu vực không có cây. Điều này giúp tạo ra một môi trường sống thoải mái và dễ chịu hơn, đặc biệt là trong những ngày nắng nóng.
                    </p>
    
                    <div class="text-center my-3">
                        <img src="{{ asset('storage/images/san-pham/PT003.jpg') }}" alt="Cây xanh minh họa 3" class="img-fluid rounded shadow" style="max-height: 300px;">
                    </div>
    
                    <p>
                        Không chỉ mang lại lợi ích về mặt môi trường, cây xanh còn có giá trị về mặt thẩm mỹ và tinh thần. Một không gian xanh mát, thoáng đãng sẽ giúp con người cảm thấy thư giãn, giảm căng thẳng và cải thiện sức khỏe tinh thần. Các nghiên cứu đã chỉ ra rằng, những người sống trong môi trường xanh thường có sức khỏe tốt hơn và cảm thấy hạnh phúc hơn.
                    </p>
    
                    <div class="text-center my-3">
                        <img src="{{ asset('storage/images/san-pham/PT003.jpg') }}" alt="Cây xanh minh họa 4" class="img-fluid rounded shadow" style="max-height: 300px;">
                    </div>
    
                    <p>
                        Vì vậy, hãy cùng chung tay trồng và bảo vệ cây xanh để tạo ra một môi trường sống xanh, sạch, đẹp cho thế hệ mai sau. Mỗi hành động nhỏ, như trồng thêm một cây xanh hay chăm sóc cây cối xung quanh, đều góp phần vào việc bảo vệ Trái Đất – ngôi nhà chung của chúng ta.
                    </p>
                    <div class="text-center">
                        <a href="/nthuser" class="btn btn-success">Quay lại Trang Chủ</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>