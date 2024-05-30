<x-layout>
    <x-navbar>
    </x-navbar>

    <div class="container col-lg-10 p-4 bg-white">
        <div class="row">
            <div class="col-lg-3">
                <img width="300px"
                    src="https://static-01.daraz.pk/p/f1e807670f4b48d351503533223a2552.jpg_400x400q75-product.jpg_.webp"
                    alt="">
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column">
                    <h4>Insecticide Refill Coil stand, Metal stand Rack Hook for Room Décor Wall Mounted and Coil
                        Stand,Nordic iron insect mosquito coil holder retro innovative home incense mosquito repellent
                        ,Nordic Spiral Mosquito Coil Holder Iron Art Mosquito Coil Frame</h4>
                    <hr>
                    <div class="d-flex flex-row">
                        <p>RS :</p>
                        <p>RS :</p>
                    </div>
                    <div class="d-flex flex-row gap-3">
                        <strike>RS. 300</strike>
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
                </div>
            </div>
            <div class="col-lg-3">
                <div class="d-flex flex-column gap-2">
                    <div class="d-flex flex-row gap-2">
                        <i class="bi bi-geo-alt"></i>
                        <p class="p-0 m-0">Sindh, Karachi - Gulshan-e-Iqbal, Block 15</p>
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
