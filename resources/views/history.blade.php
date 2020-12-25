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
          <p>History</p>
        </div>

        <div class="row justify-content-center">

          <div class="col-12">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="100">
              <h3>History</h3>
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
                    @foreach ($histori as $his)
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

      </div>
    </section><!-- End Pricing Section -->

  </main><!-- End #main -->


@include('layout.footer')

</body>
</html>