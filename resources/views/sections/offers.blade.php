<section class="section" id="offers">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-lg-4 text-center">
        <div class="section-heading">
          <h6>Menu Kami</h6>
          <h2>Menu spesial minggu ini</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="row" id="tabs">
          <div class="col-lg-12">
            <div class="heading-tabs">
              <div class="row">
                <div class="col-lg-6 offset-lg-3">
                  <ul>
                    <li><a href='#tabs-1'><img src="assets/images/icon-cake.png" style="width:50px" alt="">Dessert</a></li>
                    <li><a href='#tabs-2'><img src="assets/images/icon-drink.png" style="width:50px" alt="">Drinks</a></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <section class='tabs-content'>
              
							<article id='tabs-1'>
                <div class="row">
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
                  <div class="col-lg-6">
										<div class="tab-item">
											<img class="of-cover ar-11" src="/assets/images/menu-item-0{{$c['id']}}.jpg" alt="">
											<h4>{{$c['name']}}</h4>
											<p>{{$c['description']}}</p>
											<div class="price">
												<h6>{{$c['price']}}</h6>
											</div>
										</div>
                  </div>
									@endforeach
                </div>
              </article>
              
							<article id='tabs-2'>
                <div class="row">
									@php
										$drinks = [
											["id" => 1, "name" => "Jus Jeruk", 		"price" => "15K", "description" => "Minuman segar dari jeruk asli dengan rasa yang melegakan."],
											["id" => 2, "name" => "Milkshake", 		"price" => "20K", "description" => "Milkshake krimy dengan berbagai pilihan rasa yang menggugah selera."],
											["id" => 3, "name" => "Thai Tea", 		"price" => "18K", "description" => "Thai tea yang nikmat dengan aroma dan rasa rempah khas Thailand."],
											["id" => 4, "name" => "Jus Stroberi", "price" => "16K", "description" => "Minuman segar dengan jus stroberi asli yang manis dan menyegarkan."],
											["id" => 5, "name" => "Ice Cream", 		"price" => "12K", "description" => "Es krim lezat dengan berbagai varian rasa yang dapat Anda nikmati."],
										];
									@endphp
									@foreach ($drinks as $d)	
                  <div class="col-lg-6">
										<div class="tab-item">
											<img class="of-cover ar-11" src="/assets/images/drinks/{{$d['id']}}.jpg" alt="">
											<h4>{{$d['name']}}</h4>
											<p>{{$d['description']}}</p>
											<div class="price">
												<h6>{{$d['price']}}</h6>
											</div>
										</div>
                  </div>
									@endforeach
                </div>
              </article>

            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>