<section class="section" id="menu">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 ">
          <div class="section-heading">
            <h6>Menu Kami</h6>
            <h2>Kue pilihan kami dengan rasa berkualitas</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="menu-item-carousel">
      <div class="col-lg-12">
        <div class="owl-menu-item owl-carousel">
          @php
            $cakes = [
							["id" => 1, "name" => "Kue Coklat", 					"price" => "25K", "description" => "Kue coklat lezat dengan lapisan ganache coklat."],
							["id" => 2, "name" => "Pancake Manis", 				"price" => "15K", "description" => "Pancake manis dengan sirup maple dan buah-buahan segar."],
							["id" => 3, "name" => "Roti Manis Panjang", 	"price" => "12K", "description" => "Roti manis panjang dengan taburan gula halus."],
							["id" => 4, "name" => "Blueberry CheeseCake", "price" => "35K", "description" => "Cheesecake lembut dengan saus blueberry segar."],
							["id" => 5, "name" => "Cup Cake Manis", 			"price" => "10K", "description" => "Cupcake manis dengan berbagai toping."],
							["id" => 6, "name" => "Kue Manis", 						"price" => "18K", "description" => "Kue manis dengan berbagai varian rasa."]
						];
          @endphp
					@foreach ($cakes as $c)	
          <div class="item">
						<div class='card' style="background-image: url(/assets/images/menu-item-0{{$c['id']}}.jpg);">
							<div class="price">
								<h6>{{$c['price']}}</h6>
              </div>
              <div class='info'>
								<h1 class='title'>{{$c['name']}}</h1>
                <p class='description'>{{$c['description']}}</p>
                <div class="main-text-button">
									<div class="scroll-to-section"><a href="#reservation"> <i class="fa fa-angle-down d-none"></i></a></div>
                </div>
              </div>
            </div>
          </div>
					@endforeach
        </div>
      </div>
    </div>
  </section>