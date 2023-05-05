<!DOCTYPE html>
<html>
<head>
    <title>Coffee List</title>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
			background-color: beige;
            min-height: 2400px;
		}

		.card {
			margin-bottom: 20px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
			border-radius: 5px;
		}
		.card-img-top {
			border-top-left-radius: 5px;
			border-top-right-radius: 5px;
		}
		.card-body {
			text-align: center;
		}
		.card-title {
			font-size: 24px;
			font-weight: bold;
			margin-top: 20px;
			margin-bottom: 10px;
		}
		.card-text {
			font-size: 16px;
			color: #888;
			margin-bottom: 20px;
		}

        .btn-primary {
            background-color: #00704A;
            border-color: #00704A;
        }

        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            height: 100px;
            display: flex;
        }
        .navbar-light .navbar-brand {
            color: #00704A;
        }

        .navbar-light .navbar-nav .nav-link {
            color: #00704A;
        }


    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"> <img src="https://www.starbuckschilled.com/static/img/logo.87d8a2ad.png" width="30" height="30" class="d-inline-block align-top" alt="Starbucks logo">
                    Starbucks
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/coffee-list">Cofee List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/transaction-history">Transaction History</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <h1>Our Coffee</h1>
        <hr>
        <div class="row">
            <div class="col-sm-4 mb-3">
                <div class="card">
                    <img src="https://globalassets.starbucks.com/assets/5c515339667943ce84dc56effdf5fc1b.jpg?impolicy=1by1_wide_topcrop_630" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Cappuccino</h5>
                        <p class="card-text">A traditional Italian coffee beverage that is prepared with espresso, steamed milk, and milk foam. It is typically served in a 6 oz. cup.</p>
                        <form method="POST" action="{{ route('coffee.buy') }}" class="mb-3" id="buy-form">
                            @csrf
                            <input type="hidden" name="coffee" value="Cappuccino">
                            <button type="button" class="btn btn-primary" onclick="confirmAndSubmit()">Buy</button>
                          </form>

                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card">
                    <img src="https://globalassets.starbucks.com/assets/ec519dd5642c41629194192cce582135.jpg?impolicy=1by1_wide_topcrop_630" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Espresso</h5>
                        <p class="card-text">A strong black coffee made by forcing steam through ground coffee beans. It is typically served in a small 1-2 oz. shot glass.</p>
                        <form method="POST" action="{{ route('coffee.buy') }}">
                            @csrf
                            <input type="hidden" name="coffee" value="Espresso">
                            <button type="submit" class="btn btn-primary" onclick="confirmAndSubmit()">Buy</button>
                          </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card">
                    <img src="https://globalassets.starbucks.com/assets/7b7b3f0c3b36442cbbd88b0d86a56088.jpg?impolicy=1by1_wide_topcrop_630" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Latte</h5>
                        <p class="card-text">A coffee drink made with espresso and steamed milk. It is typically served in a 8-12 oz. glass.</p>
                        <form method="POST" action="{{ route('coffee.buy') }}">
                            @csrf
                            <input type="hidden" name="coffee" value="Latte">
                            <button type="submit" class="btn btn-primary" onclick="confirmAndSubmit()">Buy</button>
                          </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mb-3">
                <div class="card">
                    <img src="https://globalassets.starbucks.com/assets/f12bc8af498d45ed92c5d6f1dac64062.jpg?impolicy=1by1_wide_topcrop_630" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Americano</h5>
                        <p class="card-text">A coffee drink prepared by diluting espresso with hot water, giving it a similar taste to regular brewed coffee. It is typically served in a 6-8 oz. cup.</p>
                        <form method="POST" action="{{ route('coffee.buy') }}">
                            @csrf
                            <input type="hidden" name="coffee" value="Americano">
                            <button type="submit" class="btn btn-primary" onclick="confirmAndSubmit()">Buy</button>
                          </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card">
                    <img src="https://globalassets.starbucks.com/assets/3eab25199e994b689fa5c047fc31f217.jpg?impolicy=1by1_wide_topcrop_630" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Mocha</h5>
                        <p class="card-text">A coffee drink that combines espresso with steamed milk and chocolate syrup or powder. It is typically served in a 8-12 oz. glass.</p>
                        <form method="POST" action="{{ route('coffee.buy') }}">
                            @csrf
                            <input type="hidden" name="coffee" value="Mocha">
                            <button type="submit" class="btn btn-primary" onclick="confirmAndSubmit()">Buy</button>
                          </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mb-3">
                <div class="card">
                    <img src="https://globalassets.starbucks.com/assets/196709c5870249dd9c2408469dd70df1.jpg?impolicy=1by1_wide_topcrop_630" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Iced Coffee</h5>
                        <p class="card-text">A chilled coffee beverage that is served over ice. It is typically made with regular brewed coffee and milk or cream, and can be sweetened to taste.</p>
                        <form method="POST" action="{{ route('coffee.buy') }}">
                            @csrf
                            <input type="hidden" name="coffee" value="Iced Coffee">
                            <button type="submit" class="btn btn-primary" onclick="confirmAndSubmit()">Buy</button>
                          </form>

                    </div>
                </div>
            </div>

            <div class="col-sm-4 mb-3">
                <div class="card">
                    <img src="https://www.starbucks.co.th/stb-media/2020/08/48.Affogato1080.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Affogato</h5>
                        <p class="card-text">An Italian dessert that consists of a scoop of vanilla gelato or ice cream topped with a shot of hot espresso. It is typically served in a small bowl or glass.</p>
                        <form method="POST" action="{{ route('coffee.buy') }}">
                            @csrf
                            <input type="hidden" name="coffee" value="Affogato">
                            <button type="submit" class="btn btn-primary" onclick="confirmAndSubmit()">Buy</button>
                          </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mb-3">
                <div class="card">
                    <img src="https://globalassets.starbucks.com/assets/fedee22e49724cd09fbcc7ee2e567377.jpg?impolicy=1by1_wide_topcrop_630" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Flat White</h5>
                        <p class="card-text">A coffee drink that is made with espresso and steamed milk, but with a higher ratio of coffee to milk than a latte. It is typically served in a 6 oz. cup.</p>
                        <form method="POST" action="{{ route('coffee.buy') }}">
                            @csrf
                            <input type="hidden" name="coffee" value="Flat White">
                            <button type="submit" class="btn btn-primary" onclick="confirmAndSubmit()">Buy</button>
                          </form>
                    </div>
                </div>
            </div>

            <div class="col-sm-4 mb-3">
                <div class="card">
                    <img src="https://globalassets.starbucks.com/assets/410cd92738514641bf497d4b6a18c30f.jpg?impolicy=1by1_wide_topcrop_630" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Frapuccino</h5>
                        <p class="card-text">Whether you're looking for a morning pick-me-up or a sweet afternoon treat. The smooth and velvety texture of the Frappuccino is sure to please any coffee lover.</p>
                        <form method="POST" action="{{ route('coffee.buy') }}">
                            @csrf
                            <input type="hidden" name="coffee" value="Frapuccino">
                            <button type="submit" class="btn btn-primary" onclick="confirmAndSubmit()">Buy</button>
                          </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>

        function confirmAndSubmit() {
          if (confirm("Are you sure you want to buy this coffee?")) {
            document.getElementById("buy-form").submit();

          }
        }
        </script>


    <footer class="bg-dark text-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p>&copy; 2023 Starbucks Coffee. All rights reserved.</p>
                </div>
                <div class="col-sm-6 text-end">
                    <p>Follow us on social media:</p>
                    <a href="https://www.facebook.com/StarbucksIndonesia/?locale=id_ID" class="btn btn-primary">Facebook</a>
                    <a href="https://twitter.com/SbuxIndonesia?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" class="btn btn-primary">Twitter</a>
                    <a href="https://www.instagram.com/starbucksindonesia/?hl=en" class="btn btn-primary">Instagram</a>
                </div>
            </div>
        </div>
    </footer>
