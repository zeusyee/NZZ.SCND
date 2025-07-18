<!-- partials/formal.blade.php -->
<section class="container mb-5">
  <div class="formal-shoes">
    <h1 class="fw-bold py-3">FORMAL SHOES</h1>
    <div class="row">
      @foreach ([
        ['img' => '/images/formal1.png', 'name' => 'Prestige High-Cut Leather'],
        ['img' => 'images/formal2.png', 'name' => 'Slip-On Formal Shoe'],
        ['img' => 'images/formal3.png', 'name' => 'Slip-On Formal Shoe']
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
