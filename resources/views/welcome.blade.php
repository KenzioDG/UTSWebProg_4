<!DOCTYPE html>
<html>
<head>

    <style>
        body {
            background-image: url(https://wallpapers.com/images/featured/ack1avygrxnhaxjq.jpg);
            background-size: contain;
            min-height: 2000px;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 100px;
        }

        .mt-5 {
            background: floralwhite;
            padding: 20px;
            border-radius: 10px;
            color: #00704A;
        }

        .navbar-light .navbar-brand {
            color: #00704A;
        }

        .navbar-light .navbar-nav .nav-link {
            color: #00704A;
        }

        .btn-primary {
            background-color: #00704A;
            border-color: #00704A;
        }

    </style>

    <nav class="navbar navbar-expand-lg navbar-light @if($loyalty == 'gold') bg-warning @else bg-light @endif">
        <div class="container-fluid">
            <a class="navbar-brand"> <img src="https://www.starbuckschilled.com/static/img/logo.87d8a2ad.png" width="30" height="30" class="d-inline-block align-top" alt="Starbucks logo">
                Starbucks
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand">{{$loyalty}} level</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/coffee-list">Coffee List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/transaction-history">Transaction History</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <h1>{{ $greeting }}, {{ $name }}!</h1>
        <p>Get your favorite coffee delivered to your doorstep and enjoy the perfect brew from the comfort of your own home. Whether you prefer a rich and bold espresso or a smooth and creamy latte, Starbucks has a wide selection of delicious drinks to satisfy your cravings. With just a few clicks, you can place an order and have it delivered right to your door, so you can sit back, relax, and savor every sip of your favorite coffee.</p>
        <a href="" class="btn btn-primary" style="background-color: #00704A; border: #00704A; color: white;">View Our Coffee List</a>
    </div>

    <div class="container mt-5 ">
        <div id="promo-carousel" class="carousel slide" data-bs-ride="carousel" >
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#promo-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#promo-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#promo-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://tripkuliner.com/wp-content/uploads/2022/07/starbucks_gopay_25072022.jpg" class="d-block w-100" alt="Promo 1">
                </div>
                <div class="carousel-item">
                    <img src="https://cdn-2.tstatic.net/tribunnews/foto/bank/images/promo-starbucks-treat-buy-1-get-1-free.jpg" class="d-block w-100" alt="Promo 2">
                </div>
                <div class="carousel-item">
                    <img src="https://d2v6npc8wmnkqk.cloudfront.net/storage/4651/FEBRUARI-FOOD-BANNER-03.jpg" class="d-block w-100" alt="Promo 3">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#promo-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#promo-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <footer class="py-3" @if ($loyalty === 'gold')
    style="background-color: gold; color: black;"
        @else
            style="background-color: darkolivegreen; color: white;"
        @endif>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p>&copy; 2023 Starbucks Coffee. All rights reserved.</p>
                </div>
                <div class="col-sm-6 text-end">
                    <p>Follow us on social media:</p>
                    <a href="https://www.facebook.com/StarbucksIndonesia/?locale=id_ID" class="btn btn-primary" style="background-color:#00704A; border: #00704A">Facebook</a>
                    <a href="https://twitter.com/SbuxIndonesia?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="btn btn-primary" style="background-color:#00704A; border: #00704A">Twitter</a>
                    <a href="https://www.instagram.com/starbucksindonesia/?hl=en" class="btn btn-primary" style="background-color:#00704A; border: #00704A">Instagram</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>
</body>
</html>
