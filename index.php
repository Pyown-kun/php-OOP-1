<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="./bootstrap.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Konser Vtuber</title>
</head>

<style>
  :root {
    --scroll-opacity: 0.5;

    scrollbar-color: rgba(48, 48, 48, var(--scroll-opacity)) rgba(58, 58, 58, var(--scroll-scroll-opacity)) !important;
    scrollbar-width: thin !important;
  }

  ::-webkit-scrollbar {
    width: 6px;
  }

  ::-webkit-scrollbar-track {
    background: rgba(48, 48, 48, var(--scroll-opacity));
  }

  ::-webkit-scrollbar-thumb {
    background: rgba(46, 54, 69, var(--scroll-opacity));
  }

  ::-webkit-scrollbar-thumb:hover {
    background: rgba(58, 58, 58, var(--scroll-opacity));
  }

  @font-face {
    font-family: "acumen-pro";
    src: url("acumin.woff2");
  }

  .font-saya {
    font-family: "acumen-pro";
  }

  .module-border-wrap {
    max-width: auto;
    padding: 1rem;
    position: relative;
    background: linear-gradient(to right, red, purple);
    padding: 3px;
  }

  .module-border-wrap2 {
    width: 100%;
    max-width: auto;
    padding: 1rem;
    position: relative;
    background: linear-gradient(to right, red, purple);
    padding: 3px;
  }

  .module {
    background: #222;
    color: white;
    padding: 2rem;
  }

  .bg-anime {
    background-image: url(loop.mp4_snapshot_00.00.759.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    background-attachment: fixed;
    width: 100vw;
    height: 100vh;
    position: fixed;
    z-index: -10;
    filter: brightness(50%);
  }

  .videoSize {
    width: auto;
    height: 830px;
  }

  .videoSizeO {
    z-index: 20;
    transition-duration: 500ms;
    width: 100%;
    height: 840px;
  }

  #daleman {
    display: none;
    opacity: 0;
    transition-duration: 500ms;
  }
</style>

<body>
  <div class="bg-anime"></div>

  <div id="tombolStart" class="m-3 position-absolute videoSizeO">
    <div style="height: 100vh" class="d-flex justify-content-center align-items-center">
      <div class="d-grid mx-auto">
        <img id="tombolUtama" src="start.png" alt="">
      </div>
    </div>
  </div>

  <div class="">
    <div class="m-2 p-3 bg-dark font-saya">
      <div class="d-flex position-relative justify-content-center videoSize">
        <video id="mainPlace" style="position: absolute; width: 100%; height: 840px; z-index: 10">
          <source src="intro.mp4" type="video/mp4" />
        </video>
        <video id="mainPlace2" loop style="position: absolute; width: 100%; height: 840px">
          <source src="loop.mp4" type="video/mp4" />
        </video>
      </div>
    </div>

    <div id="daleman">
      <div class="m-2 p-3 bg-dark font-saya text-center text-light">
        <h1>About</h1>
        <div class="d-flex justify-content-center">
          <div class="module-border-wrap">
            <div class="module">

              <img src="loop.mp4_snapshot_00.00.759.jpg" class="img-fluid" alt="...">
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur iure ab ipsa laboriosam harum? Ratione consequuntur temporibus perspiciatis quae omnis, exercitationem accusamus vel! Rem ad explicabo molestias, ipsum deleniti incidunt!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias
                soluta cumque sed culpa error corporis consequatur maiores quos,
                perferendis tempore deleniti recusandae aliquid sunt
                consequuntur architecto officia accusamus, excepturi laboriosam.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="m-2 p-3 bg-dark font-saya text-center text-light">
        <h1>Login Main</h1>
        <div class="d-flex justify-content-center">
          <div class="module-border-wrap2">
            <div class="module">
              <div class="d-grid mx-auto">
                <a href="login.php" class="btn btn-danger" type="submit">Login</a>
              </div>
              <!-- <form action="./Andrea/hasilOrder.php" method="post">
                <?php
                // include 'Andrea/tiketKonser465.php'
                ?>
                <div class=" d-flex justify-content-center">
                  <button class="btn btn-danger" type="submit">Kirim</button>
                </div> -->
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="m-2 p-3 bg-dark font-saya text-center text-light">
        <h1>Tukar Voucher</h1>
        <div class="d-flex justify-content-center">
          <div class="module-border-wrap2">
            <div class="module">
              <a href="./ilham/tukar_voucher453.php">
                <img src="Mar.jpg" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="m-2 p-3 bg-dark font-saya text-light">
        <div class="d-flex justify-content-center">
          <div class="module-border-wrap">
            <div class="module">
              <h1 class="text-center mb-5">Cast</h1>
              <div class="row">
                <div class="col-5">
                  <div class="d-flex justify-content-center">
                    <img style="height: 100vh;" src="mikaPikazo.jpg" alt="" />
                  </div>
                </div>
                <div class="col-7">
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi harum non dolor adipisci quae commodi voluptas eum culpa nemo, qui nam atque, reiciendis nulla magnam incidunt debitis quas? Perspiciatis, rerum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis quaerat officiis, itaque doloremque impedit totam nam nihil. Sapiente id aut, sequi quisquam maiores molestias exercitationem iusto modi fugit quidem nemo?
                  </p>
                  <h3>Source : Mika Pikazo</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="m-2 p-3 bg-dark font-saya text-center text-light">
        <div class="d-flex justify-content-center">
          <div class="module-border-wrap2">
            <div class="module">
              <h1 class="mb-5">Contributor</h1>
              <div class="row gap-2">
                <div class="col">
                  <div class=" d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                      <img src="Zuramaru Cute.png" class="card-img-top" alt="...">
                      <div class="text-center card-body text-light bg-dark">
                        <h3>Aezakmi</h3>
                        <p class="card-text">Artist</p>
                        <p class="card-text">Programer</p>
                        <p class="card-text">Video Editor Support</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class=" d-flex justify-content-center">
                    <div class="card d-flex justify-content-center" style="width: 18rem;">
                      <img src="Illustration.png" class="card-img-top" alt="...">
                      <div class="text-center card-body text-light bg-dark">
                        <h3>Ilham</h3>
                        <p class="card-text">Video Editor</p>
                        <p class="card-text">Programer</p>
                        <p class="card-text">GYM Support</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Remove the container if you want to extend the Footer to full width. -->
      <div class="mt-5">
        <!-- Footer -->
        <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
          <!-- Section: Social media -->
          <section class="d-flex justify-content-between p-4" style="background-color: #f22222">
            <!-- Left -->
            <div class="me-5">
              <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
              <a href="" class="text-white me-4">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="" class="text-white me-4">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="" class="text-white me-4">
                <i class="fab fa-google"></i>
              </a>
              <a href="" class="text-white me-4">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="" class="text-white me-4">
                <i class="fab fa-linkedin"></i>
              </a>
              <a href="" class="text-white me-4">
                <i class="fab fa-github"></i>
              </a>
            </div>
            <!-- Right -->
          </section>
          <!-- Section: Social media -->

          <!-- Section: Links  -->
          <section class="">
            <div class="container text-center text-md-start mt-5">
              <!-- Grid row -->
              <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                  <!-- Content -->
                  <h6 class="text-uppercase fw-bold">Company name</h6>
                  <hr class="mb-4 mt-0 d-inline-block mx-auto" style="
                        width: 60px;
                        background-color: #7c4dff;
                        height: 2px;
                      " />
                  <p>
                    Here you can use rows and columns to organize your footer
                    content. Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit.
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold">Products</h6>
                  <hr class="mb-4 mt-0 d-inline-block mx-auto" style="
                        width: 60px;
                        background-color: #7c4dff;
                        height: 2px;
                      " />
                  <p>
                    <a href="#!" class="text-white">MDBootstrap</a>
                  </p>
                  <p>
                    <a href="#!" class="text-white">MDWordPress</a>
                  </p>
                  <p>
                    <a href="#!" class="text-white">BrandFlow</a>
                  </p>
                  <p>
                    <a href="#!" class="text-white">Bootstrap Angular</a>
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold">Useful links</h6>
                  <hr class="mb-4 mt-0 d-inline-block mx-auto" style="
                        width: 60px;
                        background-color: #7c4dff;
                        height: 2px;
                      " />
                  <p>
                    <a href="#!" class="text-white">Your Account</a>
                  </p>
                  <p>
                    <a href="#!" class="text-white">Become an Affiliate</a>
                  </p>
                  <p>
                    <a href="#!" class="text-white">Shipping Rates</a>
                  </p>
                  <p>
                    <a href="#!" class="text-white">Help</a>
                  </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                  <!-- Links -->
                  <h6 class="text-uppercase fw-bold">Contact</h6>
                  <hr class="mb-4 mt-0 d-inline-block mx-auto" style="
                        width: 60px;
                        background-color: #7c4dff;
                        height: 2px;
                      " />
                  <p>
                    <i class="fas fa-home mr-3"></i> New York, NY 10012, US
                  </p>
                  <p><i class="fas fa-envelope mr-3"></i> info@example.com</p>
                  <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                  <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
              </div>
              <!-- Grid row -->
            </div>
          </section>
          <!-- Section: Links  -->

          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->
      </div>
      <!-- End of .container -->
    </div>
  </div>
</body>

<script>
  const video = document.querySelector("#mainPlace");
  const video2 = document.querySelector("#mainPlace2");
  const buttonStart = document.querySelector("#tombolUtama");
  const containerStart = document.querySelector("#tombolStart");
  const daleman = document.querySelector("#daleman");
  buttonStart.addEventListener("click", () => {
    video.play();
    video.style.zIndex = 10;
    containerStart.style.opacity = 0;
  });

  video.onended = () => {
    video.style.opacity = 0;
    video.style.zIndex = 0;
    video2.style.zIndex = 10;
    video2.play();
    daleman.style.display = "block";
    daleman.style.opacity = 100;
  };
</script>

</html>