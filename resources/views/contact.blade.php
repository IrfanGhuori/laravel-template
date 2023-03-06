<!-- Include header -->
<x-header />

<body>
    
    <!-- Include Navbar -->
    <x-navbar />
    <!-- Include Navbar -->

   <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section>
      <div class="bg-holder overlay" style="background-image:url(core/img/background-2.jpg);background-position:center bottom;"></div>
      <!--/.bg-holder-->
      <div class="container">
        <div class="row pt-6" data-inertia='{"weight":1.5}'>
          <div class="col-md-8 text-white" data-zanim-timeline="{}" data-zanim-trigger="scroll">
            <div class="overflow-hidden">
              <h1 class="text-white fs-4 fs-md-5 mb-0 lh-1" data-zanim-xs='{"delay":0}'>Contact</h1>
              <div class="nav" aria-label="breadcrumb" role="navigation" data-zanim-xs='{"delay":0.1}'>
                <ol class="breadcrumb fs-1 ps-0 fw-bold">
                  <li class="breadcrumb-item"><a class="text-white" href="#!">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->


    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="preloader" id="preloader">
        <div class="loader">
          <div class="line-scale">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
      </div>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-100">
        <div class="container">
          <div class="row align-items-stretch justify-content-center mb-4">
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="card h-100">
                <div class="card-body px-5">
                  <h5 class="mb-3">Melbourne Office</h5>
                  <p class="mb-0 text-1100"> 121 King Street,<br>Melbourne 1200,<br>Australia</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="card h-100">
                <div class="card-body px-5">
                  <h5 class="mb-3">Sydney Office</h5>
                  <p class="mb-0 text-1100"> 62 Collins Street West,<br>Sydney 3000, <br>Australia</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 mb-4 mb-lg-0">
              <div class="card h-100">
                <div class="card-body px-5">
                  <h5>Socials</h5><a class="d-inline-block mt-2" href="#!"><span class="fab fa-linkedin fs-2 me-2 text-primary"></span></a><a class="d-inline-block mt-2" href="#!"><span class="fab fa-twitter-square fs-2 mx-2 text-primary"></span></a><a class="d-inline-block mt-2" href="#!"><span class="fab fa-facebook-square fs-2 mx-2 text-primary"></span></a><a class="d-inline-block mt-2" href="#!"><span class="fab fa-google-plus-square fs-2 ms-2 text-primary"></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="card mb-4">
            <div class="card-body p-5 h-100">
              <div class="googlemap" data-gmap="data-gmap" data-latlng="48.8583701,2.2922873,17" data-scrollwheel="false" data-icon="core/img/map-marker.png" data-zoom="17" data-theme="Tripitty">
                <div class="marker-content py-3">
                  <h5>Eiffel Tower</h5>
                  <p class="mb-0">Gustave Eiffel's iconic, wrought-iron 1889 tower,<br> with steps and elevators to observation decks.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-body h-100 p-5">
              <h5 class="mb-3">Write to us</h5>
              <form action="sendform" method="post">
                @csrf
                <div class="mb-4"><input class="form-control bg-white" type="text" name="uUser" placeholder="Your Name" value="Irfan">
                  <small> @error('uUser'){{ $message }} @enderror </small>
                </div>
              
                <div class="mb-4"><input class="form-control bg-white" type="text" name="uEmail" placeholder="Email" value="irfan@hotmail.com">
                  <small> @error('uEmail'){{ $message }} @enderror </small>
                  <small> @error('msg'){{ $message }} @enderror </small>
                </div>
                
                <div class="mb-4"><textarea class="form-control bg-white" rows="11" name="uDetails" placeholder="Enter your descriptions here..." >
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, sunt, distinctio soluta quasi voluptates, iste doloribus quae minima 
                  eaque blanditiis in dolorum eos sint mollitia molestiae numquam totam? Illo praesentium quaerat, odit ad saepe iusto iure eaque blanditiis 
                  consequuntur quod, adipisci totam repellendus. Illum explicabo consequuntur nihil voluptatibus tenetur quae qui adipisci sint quam voluptas
                   id eligendi, dolorum, dicta, soluta dolores eos? At quisquam, dolorum esse provident debitis impedit delectus nisi vero nobis soluta quas
                    similique deserunt, distinctio veritatis dicta adipisci quaerat ullam vel sit.
                   Tempore nisi id debitis blanditiis error sequi aliquid aperiam, placeat iure excepturi assumenda deleniti iusto! </textarea>
                  <small> @error('uDetails'){{ $message }} @enderror </small>
                </div>
                
                <button class="btn btn-md-lg btn-primary" type="Submit"> <span class="color-white fw-600">Send Now</span></button>
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
           
             
              </form>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section style="background-color: #3D4C6F">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="bg-primary text-white p-5 p-lg-6 rounded-3">
              <h4 class="text-white fs-1 fs-lg-2 mb-1">Sign up for email alerts</h4>
              <p class="text-white">Stay current with our latest insights</p>
              <form class="mt-4" action="queries" method="post">
                <div class="row align-items-center">
                  <div class="col-md-7 pe-md-0">
                   @csrf
                    <div class="input-group"><input class="form-control" type="text" placeholder="Enter Email Here"></div>
                  </div>
                  <div class="col-md-5 mt-3 mt-md-0">
                    <div class="d-grid"><button class="btn btn-warning" type="submit"><span class="text-primary fw-semi-bold">Submit</span></button></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 mt-4 mt-lg-0">
            <div class="row">
              <div class="col-6 col-lg-4 text-white ms-lg-auto">
                <ul class="list-unstyled">
                  <li class="mb-3"><a class="text-white" href="contact.html">Contact Us</a></li>
                  <li class="mb-3"><a class="text-white" href="#!">FAQ</a></li>
                  <li class="mb-3"><a class="text-white" href="#!">Privacy Policy</a></li>
                  <li class="mb-3"><a class="text-white" href="#!">Terms of Use</a></li>
                  <li class="mb-3"><a class="text-white" href="#!">Global Office</a></li>
                  <li class="mb-3"><a class="text-white" href="#!">Local Office</a></li>
                </ul>
              </div>
              <div class="col-6 col-sm-5 ms-sm-auto">
                <ul class="list-unstyled">
                  <li class="mb-3"><a class="text-decoration-none d-flex align-items-center" href="#!"> <span class="brand-icon me-3"><span class="fab fa-linkedin-in"></span></span>
                      <h5 class="fs-0 text-white mb-0 d-inline-block">Linkedin</h5>
                    </a></li>
                  <li class="mb-3"><a class="text-decoration-none d-flex align-items-center" href="#!"> <span class="brand-icon me-3"><span class="fab fa-twitter"></span></span>
                      <h5 class="fs-0 text-white mb-0 d-inline-block">Twitter</h5>
                    </a></li>
                  <li class="mb-3"><a class="text-decoration-none d-flex align-items-center" href="#!"> <span class="brand-icon me-3"><span class="fab fa-facebook-f"></span></span>
                      <h5 class="fs-0 text-white mb-0 d-inline-block">Facebook</h5>
                    </a></li>
                  <li class="mb-3"><a class="text-decoration-none d-flex align-items-center" href="#!"> <span class="brand-icon me-3"><span class="fab fa-google-plus-g"></span></span>
                      <h5 class="fs-0 text-white mb-0 d-inline-block">Google+</h5>
                    </a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div><!-- end of .container-->
    </section><!-- <section> close ============================-->
    <!-- ============================================-->


<!-- footer -->
<x-footer />