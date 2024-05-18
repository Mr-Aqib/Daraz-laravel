<x-layout>

    <div class="container-fluid text-white" style="background-color: #F85606">
        <div class="container d-flex flex-column ">
            <div class="d-flex row flex-row navupper justify-content-between">
                <div class="col-lg-6">
                    <ul class="list-unstyled d-flex flex-row gap-4">
                        <li>Become a Seller</li>
                        <li>Daraz Affiliate Program</li>
                        <li>Help & Support</li>
                        <li>Daraz Logistics</li>
                    </ul>
                </div>
                <div class="col-lg-2">
                    <button class="gap-1 d-flex flex-row border-0" style="background-color: transparent">
                        <img width="30px" src="{{ URL::to('/assets/images/daraz.png') }}" alt="">
                        <p class="m-0 p-0 text-white">Save more on App</p>

                    </button>
                </div>
            </div>
            <div class="d-flex row flex-row align-items-center justify-content-between ">
                <div class="col-lg-2">
                    <img width="140px" src="{{ URL::to('./assets/images/daraz2.png') }}" alt="">
                </div>
                <div class="col-lg-6 rounded-3  d-flex bg-white flex-row align-items-center justif-content-between ">
                    <input style="box-shadow: 0 0 0 0 ;height: 40px" placeholder="Search in Daraz "
                        class="border-0 form-control bg-transparent" type="text" name="search" id="">
                    <div class=" bi bi-search" style="color:#F85606"></div>

                </div>
                <div class="d-flex col-lg-4 flex-row col-lg-3 text-white  align-items-center justify-content-around">
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
</x-layout>
