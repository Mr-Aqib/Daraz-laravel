  <div class="container-fluid text-white" style="background-color: #F85606">
      <div class="container d-flex flex-column  p-2 ">
          <div class="d-flex row flex-row navupper justify-content-between ">
              <div class="col-lg-6">
                  <ul style="font-size: 13px" class="list-unstyled d-flex flex-row gap-4">
                      <li>Become a Seller</li>
                      <li>Daraz Affiliate Program</li>
                      <li>Help & Support</li>
                      <li>Daraz Logistics</li>
                      <a href="/seller-dashboard" style="text-decoration: none ;color:#FFF1EB">
                          <li>Seller Board</li>
                      </a>
                  </ul>
              </div>
              <div class="col-lg-2">
                  <button class="gap-2 align-items-center d-flex flex-row border-0 p-1 rounded-2"
                      style="background-color:rgba(93, 91, 91, 0.8)">
                      <img width="20px" src="{{ URL::to('/assets/images/daraz.png') }}" alt="">
                      <p class=" m-0 p-0 text-white">Save more on App</p>
                  </button>
              </div>
          </div>
          <div class="d-flex row flex-row align-items-center justify-content-around ">
              <div class="col-lg-2 d-flex align-items-center justify-content-center">
                  <img width="120px" src="{{ URL::to('./assets/images/daraz2.png') }}" alt="">
              </div>
              <div class="col-lg-6 rounded-3  d-flex bg-white flex-row align-items-center justif-content-between ">
                  <input style="box-shadow: 0 0 0 0 ;height: 40px" placeholder="Search in Daraz "
                      class="border-0 form-control bg-transparent" type="text" name="search" id="">
                  <div class=" bi bi-search" style="color:#F85606"></div>

              </div>
              <div class="d-flex col-lg-3 gap-2  flex-row col-lg-3 text-white  align-items-center  ">
                  @guest
                      <button
                          class=" align-items-center justify-content-center bg-transparent d-flex flex-row border-0 gap-1">
                          <i class="bi bi-person" style="color:white"></i>
                          <p class="text-white m-0 p-0"><a href="/login" class="text-white"
                                  style="text-decoration: none">log in </a></p>
                      </button>
                      <h6>|</h6>
                      <button
                          class="align-items-center justify-content-center bg-transparent d-flex flex-row border-0 text-white">
                          <a href="/register" style="text-decoration: none" class="text-white">
                              Sign Up
                          </a>
                      </button>
                  @endguest
                  @auth
                      <button
                          class="align-items-center justify-content-center bg-transparent d-flex flex-row border-0 text-white">
                          <i class="bi bi-person" style="color:white"></i>
                          Salam {{ auth()->user()->name }}
                      </button>
                      <h6>|</h6>
                  @endauth

                  <button
                      class=" align-items-center justify-content-center bg-transparent d-flex flex-row border-0 gap-1">
                      <i class="bi bi-globe" style="color:white"></i>
                      <p class="text-white m-0 p-0">EN</p>
                      <i class="bi text-white bi-caret-down"></i>

                  </button>
                  <div class="bi bi-cart" style="font-size: 25px"></div>
                  @auth
                      <form action="/logout" method="POST">
                          @csrf
                          <button class="btn btn-danger">
                              <i class="bi text-white bi-power"></i>
                          </button>
                      </form>
                  @endauth

              </div>
          </div>
      </div>
  </div>
