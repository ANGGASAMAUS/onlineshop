<!doctype html>
<html lang="en">

  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <title>Daftar Produk</title>
  </head>

  <body>
        <div class="jumbotron jumbotron-fluid position-relative">
          <div class="overlay"></div>
        <div class="container text-center text-red position-relative">
          <h1 class="display-4">ONLINE SHOP</h1>
            <p class="lead">Online Shop Terbaik di Indonesia</p>
            <p class="lead">Owner Angga</p>
              <hr class="my-4">
        </div>
        </div>

            <div class="container">
            <center><h3>Daftar Produk</h3></center>
             <div class="row mt-4">
            @forelse($products as $product)
                <div class="col-md-4 mb-3">
                    <div class="card">
                    <img src="{{ asset('storage/images/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <p class="card-text">Harga: Rp{{ number_format($product->price, 0, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p>Tidak ada produk tersedia.</p>
            @endforelse
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <center><a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Tambah Produk Baru</a></center>

          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
              integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
              crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
              integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
              crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
              integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
              crossorigin="anonymous"></script>
  </body>

</html>
