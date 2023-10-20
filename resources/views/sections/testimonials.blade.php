<section class="section" id="chefs">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 offset-lg-4 text-center">
        <div class="section-heading">
          <h6>Testimoni</h6>
          <h2>Testimoni dari pelanggan kami</h2>
        </div>
      </div>
    </div>
    <div class="row">
      @php
      $testimonials = [
				["id" => 1, "name" => "David Brendi", 		"role" => "Food vlogger",	"image" => "testi-1.jpg", "testi" => "Kue-kue dari sini sungguh luar biasa! Rasanya begitu autentik dan selalu membuat saya kembali untuk mencicipi lebih banyak."],
				["id" => 2, "name" => "Budi Santoso", 	"role" => "Chef Kue", 		"image" => "testi-2.jpg", "testi" => "Sebagai seorang koki, saya sangat menghargai kualitas kue di sini. Mereka selalu segar dan bermutu tinggi."],
				["id" => 3, "name" => "Anita Wijaya", 	"role" => "Mahasiswa", 		"image" => "testi-3.jpg", "testi" => "Harga terjangkau dan rasanya luar biasa. Tempat favorit saya untuk nongkrong bersama teman-teman."],
				["id" => 4, "name" => "Rizky Pratama",	"role" => "Mahasiswa", 		"image" => "testi-4.jpg", "testi" => "Saya sering memesan kue-kue di sini saat kuliah, dan mereka selalu menghibur selera saya."],
				["id" => 5, "name" => "Maya Sari", 			"role" => "Traveller", 		"image" => "testi-5.jpg", "testi" => "Ketika saya bepergian, saya selalu mencari toko kue lokal, dan Sweet Delight adalah salah satu yang terbaik!"],
			];
      @endphp
      @foreach ($testimonials as $t)	
      <div class="col-lg-4 mb-4">
        <div class="chef-item">
          <div class="thumb">
            <div class="overlay"></div>
            <ul class="social-icons d-none">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
					<div style="min-height: 150px">
						<p class="p-3" style="font-size: 18px">
							<i class="fa fa-quote-left"></i>
							{{$t['testi']}}
							<i class="fa fa-quote-right"></i>
						</p>
					</div>
          <div class="d-flex">
						<div class="m-2">
							<img class="rounded-circle" src="/assets/images/testimonials/{{$t['image']}}" style="width: 50px">
						</div>
						<div class="mx-2 my-auto text-left">
							<h5>{{$t['name']}}</h5>
							<span>{{$t['role']}}</span>
						</div>
          </div>
        </div>
      </div>
			@endforeach
    </div>
  </div>
</section>