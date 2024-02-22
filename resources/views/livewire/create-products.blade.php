<div class="container">
<form wire:submit.prevent="save">
  <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name" wire:model="name">

    <label for="exampleInputEmail1">Description</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter description" wire:model="description">

    <label for="exampleInputEmail1">Price</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter price" wire:model="price">

    <label for="exampleInputEmail1">Images</label>
    <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" wire:model="images"  multiple="multiple">


  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
