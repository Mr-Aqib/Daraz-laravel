<x-seller-component>
    <div class="container col-lg-5">
        <h1 class="text-center">Add categories</h1>
        <form class="shadow p-3 rounded-4" action="/add-category" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">Category</label>
            <input type="text" name="category" class="form-control">
            @error('category')
                <p class="text-danger">
                    {{ $message }}</p>
            @enderror
            <label for="">Image</label>

            <input type="file" name="image" class="form-control" id="">
            @error('category')
                <p class="text-danger">
                    {{ $message }}</p>
            @enderror
            <x-submit-btn>
                Submit
            </x-submit-btn>
        </form>
    </div>

</x-seller-component>
