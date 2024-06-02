<x-layout>
    <x-flash />
    <x-navbar />

    <div class="container col-lg-4 my-4 bg-white p-2">
        <div class="d-flex flex-row align-items-center justify-content-around">
            <h5>Create Your Account</h5>
            <p class="m-0 p-0">Already Member <a href="">Login </a>Here</p>

        </div>
        <form action="/reg" method="POST" class="p-3">
            @csrf
            <label for="">Name</label>
            <input type="text" name="name" id="" class="form-control" placeholder="User Name"
                value="{{ old('name') }}">
            @error('name')
                <p class="m-0 p-0 text-danger">
                    {{ $message }}
                </p>
            @enderror
            <label for="">Phone Number</label>

            <input type="text" name="phone_number" id="" class="form-control"
                placeholder="Enter Your Email Phone Number" value="{{ old('phone_number') }}">
            @error('phone_number')
                <p class="m-0 p-0 text-danger">
                    {{ $message }}
                </p>
            @enderror
            <label for="">Emai</label>
            <input type="email" name="email" id="" class="form-control"
                placeholder="Enter Your Email Address" value="{{ old('email') }}">
            @error('email')
                <p class="m-0 p-0 text-danger">
                    {{ $message }}
                </p>
            @enderror
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control" placeholder="Enter Your password"
                value="{{ old('password') }}">
            @error('password')
                <p class="m-0 p-0 text-danger">
                    {{ $message }}
                </p>
            @enderror
            <x-submit-btn>
                Sign Up
            </x-submit-btn>
        </form>
    </div>
</x-layout>
