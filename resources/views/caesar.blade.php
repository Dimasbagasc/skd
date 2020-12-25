@include ('layout.main')

@section ('content')

<body>

  @include('layout.nav')

  
  <main id="main">

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Cryptography</h2>
          <p>Caesar Cipher</p>
        </div>

        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <form action="/caesar/enkripsi" method="POST" role="form" class="php-email-form"> 
              @csrf
              <h3>Encoder</h3>
              <label for='plainteks'>Plain Text</label>
              <input type="text" class="form-control" name="kata" required oninvalid="this.setCustomValidity('isinen cuk')" onchange="this.setCustomValidity('')" type="text">
              <br>
              <div class="validate"></div>
              
              <label for='key'>Key</label>
              <input type="text" class="form-control" name="key" required oninvalid="this.setCustomValidity('isinen cuk')" onchange="this.setCustomValidity('')" type="text">
              <br>
              <h5>Hasil</h5>
              <div class="validate"></div>
              
              <div class="mb-3">
                <div class="loading"></div>
                <div class="error-message"></div>
                <div class="btn-wrap">
                <button name="submit" type="submit">Process</button>
                </div>
              </div>
              </form> 
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="200">
              <form action="/caesar/dekripsi" method="POST" role="form" class="php-email-form">
              @csrf
              <h3>Decoder</h3>
              <label for='plainteks'>Cipher</label>
              <input type="text" class="form-control" name="kata" required oninvalid="this.setCustomValidity('isinen cuk')" onchange="this.setCustomValidity('')" type="text">
              <br>
              <div class="validate"></div>

              <label for='key'>Key</label>
              <input type="text" class="form-control" name="key" required oninvalid="this.setCustomValidity('isinen cuk')" onchange="this.setCustomValidity('')" type="text">
              <br>
              <h5>Hasil</h5>
              <div class="validate"></div>

              <div class="mb-3">
                <div class="loading"></div>
                <div class="error-message"></div>
                <div class="btn-wrap">
                  <button name="submit" type="submit">Process</button>
                </div>
              </div>
              </form>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mt-4 mt-lg-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="200">
              <h3>History </h3>
              <table class="table">
                  <thead class="thead">
                    <tr align="center">

                      <th scope="col">Plain Text</th>
                      <th scope="col">Cipher Text</th>
                      <th scope="col">Key</th>
                      <th scope="col">Jenis</th>
                      <th scope="col">Metode</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($tampil_caesar as $his)
                      <tr>
                        <td align="center">
                        {{$his->plain}}
                        </td>
                        <td align="center">
                        {{$his->cipher}}
                        </td>
                        <td align="center">
                        {{$his->key}}
                        </td>
                        <td align="center">
                        {{$his->jenis}}
                        </td>
                        <td align="center">
                        {{$his->Metode}}
                        </td>
                      </tr>
                    @endforeach
                  </tbody>

                 
                </table>
            </div>
          </div>

          

        </div>

      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->

 
  @include('layout.footer')
</body>


</html>