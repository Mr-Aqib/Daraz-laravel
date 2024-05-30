<x-layout>
    <x-navbar>
    </x-navbar>

    <div class="container col-lg-10 p-4 bg-white my-4">
        <div class="row">
            <div class="col-lg-3">
                <img width="300px" src="{{ asset('storage/' . $productfind->image) }}" alt="">
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column gap-2">
                    <h4>{{ $productfind->description }}</h4>
                    <hr>
                    <div class="d-flex flex-column">
                        Rs. {{ $productfind->price }}
                    </div>
                    <div class="d-flex flex-row gap-3">
                        <strike>{{ $productfind->oldprice }}</strike>
                        <p>80%</p>
                    </div>
                    <hr>
                    <div class="d-flex flex-row gap-2 align-items-center ">
                        <p class="m-0 p-0">Quantity</p>
                        <div class="d-flex flex-row gap-2">
                            <button class="btn btn-danger minus">
                                -
                            </button>
                            <input class="w-25 form-control text-center rounded-0 border inputf" value="1"
                                type="number">
                            <button class="btn btn-success plus">
                                +
                            </button>
                        </div>

                    </div>
                    <div class="d-flex flex-row justify-content-center gap-3 my-3">
                        <button class="btn btn-danger w-25">Add to cart</button>
                        <button class="btn btn-success w-25">Button</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="d-flex flex-column gap-2">
                    <div class="d-flex flex-row gap-2">
                        <i class="bi bi-geo-alt"></i>
                        <p class="p-0 m-0">Sindh, Karachi - Gulshan-e-Iqbal, Block 15</p>
                    </div>
                </div>
                <div class="d-flex flex-column gap-2">
                    <div class="d-flex flex-row gap-2">
                        <i class="bi bi-geo-alt"></i>
                        <p class="p-0 m-0">Cash on Delivery Available</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        let btnplus = document.querySelector('.plus')
        let btnminus = document.querySelector('.minus')
        let input = document.querySelector('.inputf')
        let count = 0
        btnplus.addEventListener('click', () => {
            count++
            input.style.value = '0';
        })
        btnminus.addEventListener('click', () => {
            count--
            if (count < 1) {
                count = 1
            }
            input.style.value = 'count';

        })
    </script>
</x-layout>
