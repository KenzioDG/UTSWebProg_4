<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <style>

        body{
            background-color: beige;
        }
        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100px;
            display: flex;
        }

        .btn-primary{
            background-color: #00704A;
            border-color: #00704A;
        }

        .navbar-light .navbar-brand {
            color: #00704A;
        }

        .navbar-light .navbar-nav .nav-link {
            color: #00704A;
        }
    </style>
    <title>Transaction History</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Starbucks</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
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

    <div class="container mt-4">
      <h1>Transaction History</h1>
      <p><strong>User:</strong> {{ $user->name }}</p>
      <p><strong>Loyalty Level:</strong> {{ $user->loyalty }}</p>
      <table class="table">
        <thead>
          <tr>
            <th>Date</th>
            <th>Coffee</th>
          </tr>
        </thead>
        <tbody>
          @foreach($transactions as $transaction)
          <tr>
            <td>{{ $transaction->date }}</td>
            <td>{{ $transaction->coffee }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <footer class="bg-dark text-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p>&copy; 2023 Starbucks Coffee. All rights reserved.</p>
                </div>
                <div class="col-sm-6 text-end">
                    <p>Follow us on social media:</p>
                    <a href="#" class="btn btn-primary">Facebook</a>
                    <a href="#" class="btn btn-primary">Twitter</a>
                    <a href="#" class="btn btn-primary">Instagram</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
