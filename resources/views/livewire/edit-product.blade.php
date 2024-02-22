<div>
    <div class="form-group container">
        <form wire:submit.prevent="update">
            <div>
                <label for="exampleInputEmail1">Product Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" wire:model="name">
                @error('name') <span>{{ $message }}</span> @enderror
            </div>
            <label for="exampleInputEmail1">Description</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter description" wire:model="description">

            <label for="exampleInputEmail1">Price</label>
            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" wire:model="price">

            <label for="exampleInputEmail1">Images</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" wire:model="images" multiple="multiple">

            <div>
                @foreach($product_images as $img)
                <img src="{{ asset('storage/' . $img->image) }}" alt="..." class="img-thumbnail" width="200px">
                @endforeach

            </div>


            <button type="submit" class="btn btn-primary">Update</button>
            <a href="route('products')"> <button class="btn btn-warning">Back</button></a>
        </form>
    </div>

</div>