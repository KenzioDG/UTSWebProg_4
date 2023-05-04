<!DOCTYPE html>
<html>
<head>

    <style>
        body {
            background-image: url(https://wallpapers.com/images/featured/ack1avygrxnhaxjq.jpg);
            background-size: contain;

        }

        footer {
            position: absolute;
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

    </style>

    <nav class="navbar navbar-expand-lg navbar-light @if($loyalty == 'gold') bg-warning @else bg-light @endif">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Starbucks</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">{{$loyalty}} level</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
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
        <a href="{{ route('coffee-list') }}" class="btn btn-primary" style="background-color: #00704A; border: #00704A; color: white;">View Our Coffee List</a>
    </div>

    <footer class="py-3" @if ($loyalty === 'gold')
    style="background-color: gold; color: black;"
@elseif ($loyalty === 'green')
    style="background-color: green; color: white;"
@else
    style="background-color: #343a40; color: white;"
@endif>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p>&copy; 2023 Starbucks Coffee. All rights reserved.</p>
                </div>
                <div class="col-sm-6 text-end">
                    <p>Follow us on social media:</p>
                    <a href="#" class="btn btn-primary" style="background-color: #00704A;; border-color: #00704A;">Facebook</a>
                    <a href="#" class="btn btn-primary" style="background-color: #00704A;; border-color: #00704A;;">Twitter</a>
                    <a href="#" class="btn btn-primary" style="background-color: #00704A;; border-color: #00704A;;">Instagram</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.min.js"></script>
</body>
</html>
