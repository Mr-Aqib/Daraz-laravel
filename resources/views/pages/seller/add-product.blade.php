<x-flash></x-flash>
<x-seller-component>
    <div class="container col-lg-5">
        <h1>
            Add Products
        </h1>

        <form action="/add-product-back" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="">Product Name</label>
            <input type="text" name="productname" id="" class="form-control" value="{{ old('image') }}">
            @error('productname')
                <p class="text-danger">
                    {{ $message }}</p>
            @enderror
            <label for="">Product Description</label>
            <input type="text" placeholder="Description" name="description" id="" class="form-control"
                value="{{ old('image') }}">
            @error('description')
                <p class="text-danger">
                    {{ $message }}</p>
            @enderror
            <label for="">Price</label>
            <input type="number" placeholder="Description" name="price" id="" class="form-control"
                value="{{ old('image') }}">
            @error('price')
                <p class="text-danger">
                    {{ $message }}</p>
            @enderror
            <label for="">Old Price</label>
            <input type="number" placeholder="Old Price" name="oldprice" id="" class="form-control"
                value="{{ old('image') }}">
            @error('oldprice')
                <p class="text-danger">
                    {{ $message }}</p>
            @enderror
            <label for="">Product Image</label>
            <input type="file" placeholder="Description" name="image" id="" class="form-control"
                value="{{ old('image') }}">
            @error('image')
                <p class="text-danger">
                    {{ $message }}</p>
            @enderror
            <x-submit-btn>
                Add Products
            </x-submit-btn>

        </form>
    </div>

</x-seller-component>
