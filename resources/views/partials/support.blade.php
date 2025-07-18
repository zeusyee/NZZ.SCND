<!-- partials/support.blade.php -->
<section id="about" class="container mb-5 supporting">
  <div class="row d-sm-flex lex-column-reverse">
    <div class="col-lg-5 col-md-6 col-sm-12 d-sm-flex flex-sm-column-reverse">
      <div class="container">
        <div class="row g-2">
          @foreach ([
            ['icon' => 'icons/icon-1.png', 'title' => 'Find the Perfect Fit', 'text' => 'Styles for every body'],
            ['icon' => 'icons/free.png', 'title' => 'Free Exchanges', 'text' => 'Shop with peace of mind.'],
            ['icon' => 'icons/support.png', 'title' => 'Contact Our Seller', 'text' => 'They are here to help you.']
          ] as $item)
          <div class="col-12 d-flex align-items-center"
            style="box-shadow: 0px 0px 30px lightgrey; padding: 10px; border-radius: 10px; cursor: pointer;">
            <img class="img-fluid w-25 me-3" src="{{ asset($item['icon']) }}" alt="">
            <div class="flex-column">
              <h5 class="fw-bold">{{ $item['title'] }}</h5>
              <p><small>{{ $item['text'] }}</small></p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <div class="col-lg-7 col-md-6 col-sm-12">
      <img class="img-fluid" src="{{ asset('icons/xmld.png') }}" alt="">
    </div>
  </div>
</section>
