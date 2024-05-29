<x-layout>
    {{-- Navbar --}}
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
                    <button
                        class=" align-items-center justify-content-center bg-transparent d-flex flex-row border-0 gap-1">
                        <i class="bi bi-person" style="color:white"></i>
                        <p class="text-white m-0 p-0">log in</p>
                    </button>
                    <h6>|</h6>
                    <button
                        class="align-items-center justify-content-center bg-transparent d-flex flex-row border-0 text-white">
                        Sign Up
                    </button>
                    <h6>|</h6>
                    <button
                        class=" align-items-center justify-content-center bg-transparent d-flex flex-row border-0 gap-1">
                        <i class="bi bi-globe" style="color:white"></i>
                        <p class="text-white m-0 p-0">EN</p>
                        <i class="bi text-white bi-caret-down"></i>

                    </button>
                    <div class="bi bi-cart" style="font-size: 25px"></div>
                </div>
            </div>
        </div>
    </div>
    {{-- Slider --}}
    <div class="container my-2 ">
        <div class="row d-flex flex-row">
            <div class="col-lg-2 p-2 px-3 bg-white rounded-4">
                <ul class="list-unstyled d-flex flex-column gap-2" style="font-size: 13px">
                    <li>Groceries & Pets</li>
                    <li>Health & Beauty</li>
                    <li>Mens's Fashion</li>
                    <li>Womens's Fashion</li>
                    <li>Mother & Baby</li>
                    <li>Home & Liftstyle</li>
                    <li>Electronic Devices</li>
                    <li>Electronic Accessories</li>
                    <li>TV & Home Applonces</li>
                    <li>Sports & Outdoor</li>
                    <li>Watches,Abgs & Jwewllery</li>
                    <li>Automotive & Motorbike</li>
                </ul>
            </div>
            <div class="col-lg-10">
                <div id="carouselExampleRide" class=" carousel slide" data-bs-ride="true">
                    <div class="carousel-inner  rounded-3">
                        <div class="carousel-item active">
                            <img src="{{ URL::to('/assets/images/slider1.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ URL::to('/assets/images/slider2.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ URL::to('/assets/images/slider3.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ URL::to('/assets/images/slider3.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    {{-- Daraz Verified --}}
    <div class="rounded-3 p-2 container my-3 d-flex flex-row align-items-center justify-content-around"
        style="background-color: #FFF1EB">
        <div class="d-flex flex-row gap-1 align-items-center justify-content-center">
            <i class="bi bi-patch-check-fill" style="color:#F85606"></i>
            <p class="m-0 p-0" style="font-size: 16px">Safe Payments</p>
        </div>
        <h6>|</h6>
        <div class="d-flex flex-row gap-1 align-items-center justify-content-center">
            <i class="bi bi-patch-check-fill" style="color:#F85606"></i>
            <p class="m-0 p-0" style="font-size: 16px">Natonwide Delivery</p>
        </div>
        <h6>|</h6>
        <div class="d-flex flex-row gap-1 align-items-center justify-content-center">
            <i class="bi bi-patch-check-fill" style="color:#F85606"></i>
            <p class="m-0 p-0" style="font-size: 16px">Free & Easy Returns</p>
        </div>
        <h6>|</h6>
        <div class="d-flex flex-row gap-1 align-items-center justify-content-center">
            <i class="bi bi-patch-check-fill" style="color:#F85606"></i>
            <p class="m-0 p-0" style="font-size: 16px">Best Price Guranted</p>
        </div>
        s


    </div>
    {{-- Image 4th div --}}
    <div class="container d-flex flex-column">
        <p>Categories</p>
        <div class="d-flex " style="flex-wrap: wrap">
            @foreach ($getcategory as $item)
                <div class="card p-2 px-3 align-items-center justify-content-center">
                    <img width="100px" src="{{ asset('storage/' . $item->image) }}" alt=""
                        style="object-fit:cover">
                    <p>Description</p>
                </div>
            @endforeach
        </div>

    </div>
</x-layout>
