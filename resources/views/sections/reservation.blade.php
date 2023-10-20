<section class="section" id="reservation">
  <div class="container">
      <div class="row">
          <div class="col-lg-6 align-self-center">
              <div class="left-text-content">
                  <div class="section-heading">
                      <h6>Hubungi kami</h6>
                      <h2>Anda dapat melakukan reservasi atau datang langsung ke toko kami</h2>
                  </div>
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="phone">
                              <i class="fa fa-whatsapp"></i>
                              <h4>Whatsapp</h4>
                              <span><a href="#">080-090-0990</a><br><a href="#">080-090-0880</a></span>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="message">
                              <i class="fa fa-map-marker"></i>
                              <h4>Alamat</h4>
                              <span>Jl. Ir. H. Juanda No.15 <br> Sidodadi, Kota Samarinda</span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6">
              <div class="contact-form">
                  <form id="contact" action="" method="post">
                    <div class="row">
                      <div class="col-lg-12">
                          <h4>Form Reservasi</h4>
                      </div>
                      <div class="col-lg-6 col-sm-12">
                        <fieldset>
                          <input name="name" type="text" id="name" placeholder="Nama anda" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-6 col-sm-12">
                        <fieldset>
                        <input name="email" type="text" id="email" pattern="[^ @]*@[^ @]*" placeholder="Alamat email" required="">
                      </fieldset>
                      </div>
                      <div class="col-lg-6 col-sm-12">
                        <fieldset>
                          <input name="phone" type="text" id="phone" placeholder="Nomor whatsapp" required="">
                        </fieldset>
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <fieldset>
                          <select value="number-guests" name="number-guests" id="number-guests">
                              <option value="number-guests">Jumlah pengunjung</option>
                              <option name="1" id="1">1</option>
                              <option name="2" id="2">2</option>
                              <option name="3" id="3">3</option>
                              <option name="4" id="4">4</option>
                              <option name="5" id="5">5</option>
                              <option name="6" id="6">6</option>
                              <option name="7" id="7">7</option>
                              <option name="8" id="8">8</option>
                              <option name="9" id="9">9</option>
                              <option name="10" id="10">10</option>
                              <option name="11" id="11">11</option>
                              <option name="12" id="12">12</option>
                          </select>
                        </fieldset>
                      </div>
                      <div class="col-lg-6">
                          <div id="filterDate2">    
                            <div class="input-group date" data-date-format="dd/mm/yyyy">
                              <input  name="date" id="date" type="text" class="form-control" placeholder="dd/mm/yyyy">
                              <div class="input-group-addon" >
                                <span class="glyphicon glyphicon-th"></span>
                              </div>
                            </div>
                          </div>   
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <fieldset>
                          <select value="time" name="time" id="time">
                              <option value="time">Waktu</option>
                              <option name="Breakfast" id="Breakfast">Pagi</option>
                              <option name="Lunch" id="Lunch">Siang</option>
                              <option name="Dinner" id="Dinner">Malam</option>
                          </select>
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <textarea name="message" rows="6" id="message" placeholder="Catatan" required=""></textarea>
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="main-button-icon">Buat reservasi</button>
                        </fieldset>
                      </div>
                    </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>