<!-- partials/product.blade.php -->
<section id="product" class="container mb-5">
  <div class="casual-shoes">
    <h1 class="fw-bold py-3">CASUAL SHOES</h1>
    <div class="row">
      @foreach ([
        ['img' => 'images/packo.png', 'name' => 'Nike Shoe'],
        ['img' => 'images/daco.png', 'name' => 'Sneakers Skate Shoe'],
        ['img' => 'images/pngegg 1.png', 'name' => 'Sneakers Basketball shoe']
      ] as $shoe)
      <div class="col-md-6 col-lg-4 col-sm-12 mb-sm-3">
        <div class="card">
          <div class="card-body">
            <img class="img-fluid" src="{{ asset($shoe['img']) }}" alt="">
            <h5 class="card-title fw-bold mt-4">{{ $shoe['name'] }}</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <div class="d-flex justify-content-between">
              <h3 class="fw-bold" style="color:#FA804C">$255</h3>
              <button class="btn nike-btn px-3 py-2">
                <i class="fa-solid fa-cart-shopping me-2"></i> BUY NOW
              </button>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
