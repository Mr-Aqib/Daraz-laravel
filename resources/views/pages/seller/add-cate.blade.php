<x-seller-component>
    <div class="container col-lg-5">
        <h1 class="text-center">Add categories</h1>
        <form class="shadow p-3 rounded-4" action="" method="POST" enctype="multipart/form-data">
            <label for="">Category</label>
            <input type="text" name="category" class="form-control">
            <label for="">Image</label>
            <input type="file" name="image" class="form-control" id="">
            <x-submit-btn>
                Submit
            </x-submit-btn>
        </form>
    </div>

</x-seller-component>
