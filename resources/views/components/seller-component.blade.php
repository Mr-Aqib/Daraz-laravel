<style>
    .list:hover {
        background-color: orange;
        cursor: pointer;
    }

    .active {
        background-color: #F29D21
    }
</style>
<x-layout>
    <div class="container-fluid d-flex align-items-center jusitfy-content-center "
        style="width:100vw; height:100vh;background:linear-gradient(135deg,#F36D21,#F29D21)">
        <div style="height: 90vh" class="mx-auto col-lg-10 bg-white shadow rounded-3 ">
            <div class="row mx-auto rounded-3">
                <div class="col-lg-2 shadow rounded-3 bg-dark d-flex flex-column gap-2 justify-content-around  align-items-center "
                    style="height: 90vh">
                    <img width="100px" src="{{ URL::to('./assets/images/daraz2.png') }}" alt="">
                    <ul class="gap-3 d-flex flex-column fs-5 text-white list-unstyled  ">
                        <a href="/seller-dashboard" class=" text-white" style="text-decoration: none">
                            <li class="list rounded-3 d-flex gap-1 align-items-center rounded-3 px-3 active"
                                style="width:max-content"><i class="bi bi-moon-stars-fill"></i>Dash Board
                            </li>
                        </a>
                        <a href="/add-categories" class=" text-white" style="text-decoration: none">
                            <li class="list rounded-3 px-3  d-flex gap-1 align-items-center rounded-3"
                                style="width:max-content"><i class="bi bi-moon-stars-fill"></i>Add Categoreis</li>
                        </a>
                        <li class="list rounded-3 px-3"style="width:max-content"><i
                                class="bi bi-moon-stars-fill"></i>Add Products</li>
                        <li class="list rounded-3 px-3"style="width:max-content"><i
                                class="bi bi-moon-stars-fill"></i>View Products</li>
                        <li class="list rounded-3 px-3"style="width:max-content"><i
                                class="bi bi-moon-stars-fill"></i>View Categories</li>
                        <li class="list rounded-3 px-3"style="width:max-content"><i
                                class="bi bi-moon-stars-fill"></i>Analytics</li>
                        <li class="list rounded-3 px-3"style="width:max-content"><i
                                class="bi bi-moon-stars-fill"></i>Setting</li>
                        <li class="list rounded-3 px-3"style="width:max-content"><i
                                class="bi bi-moon-stars-fill"></i>Logout</li>
                    </ul>
                    <div class="card p-3 rounded-3 " style="background:linear-gradient(135deg,#F36D21,#F29D21)">
                        <img width="70px" src="{{ URL::to('./assets/images/daraz2.png') }}" alt="">
                        <p>Daraz Shopping</p>
                        <button style="background:linear-gradient(135deg,#F36D21,#F29D21)"
                            class="border-white rounded-3">Daraz</button>
                    </div>
                </div>
                <div class="col-lg-10">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</x-layout>
