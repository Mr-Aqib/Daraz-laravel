<style>
    .underlay {
        width: 100vw;
        height: 100vh;
        position: fixed;
        top: 0;
        z-index: 1111;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgb(218, 231, 218, 0.6);
        transition: all .4s;
    }
</style>
@if (session()->has('message'))
    <div class="underlay">
        <div class="overlay card text-center p-3 rounded-3">
            <h3>{{ session('message') }}</h3>
            <button style="background:linear-gradient(135deg,#F36D21,#F29D21)"
                class="ok my-4 fw-medium fs-5 p-1 rounded-3 border-0 w-75 mx-auto d-block">
                Ok
            </button>
        </div>
    </div>
@endif
<script>
    let btn = document.querySelector('.ok')
    let underlay = document.querySelector('.underlay')
    btn.addEventListener('click', () => {
        underlay.style.scale = '0'
    })
</script>
