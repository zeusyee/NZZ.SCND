<!-- partials/banner.blade.php -->
<section class="banner mb-5">
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      @foreach ([
        ['img' => 'images/banner-shoes.png', 'title' => 'NFINITY RUN 1'],
        ['img' => 'images/daco.png', 'title' => 'NFINITY RUN 2'],
        ['img' => 'images/packo.png', 'title' => 'NFINITY RUN 3']
      ] as $index => $item)
      <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
        <div class="row">
          <div class="col-md-6">
            <img class="img-fluid w-75" src="{{ asset($item['img']) }}" alt="">
          </div>
          <div class="col-md-6 m-auto">
            <h1 class="fw-bold display-4">
              <span style="color:#FA804C">NIKE REACT</span><br>{{ $item['title'] }}
            </h1>
            <p>Everybody is different, which is why we offer styles for every body.</p>
            <a class="btn nike-btn px-3 py-2" href="#product">
              <i class="fa-solid fa-cart-shopping me-2"></i> BUY NOW
            </a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
