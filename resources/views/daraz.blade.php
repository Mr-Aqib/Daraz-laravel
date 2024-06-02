<x-layout>
    {{-- Navbar --}}
    <x-navbar />
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
                    <img width="100px" height="100px" src="{{ asset('storage/' . $item->image) }}" alt=""
                        style="object-fit:cover">
                    <p>{{ $item->category }}</p>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container d-flex flex-column">
        <h4>Products</h4>
        <div class="d-flex " style="flex-wrap: wrap">
            @foreach ($getproducts as $item)
                <a style="text-decoration: none" href="/single-product/{{ $item->id }}"
                    class="card p-2 px-3 align-items-center justify-content-center">

                    <img width="100px" height="200px" src="{{ '/storage/' . $item->image }}" alt="Product Images"
                        style="object-fit:cover">
                    <p class="m-0 p-0">{{ $item->productname }}</p>
                    <div class="d-flex flex-row gap-3 align-items-start justify-content-start">
                        <p class="m-0 p-0">Rs .{{ $item->price }}</p>
                        <strike style="color:#F85606">Rs. {{ $item->oldprice }}</strike>

                    </div>



                </a>
            @endforeach
        </div>
    </div>
</x-layout>
