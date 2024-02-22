<div>
  <div class="container">
    <table class="table">
      <a href="{{route('create.product')}}"><button type="button" class="btn btn-success">Create</button></a>
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Description</th>
          <th scope="col">Price</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
        <tr>
          <td>{{$product->name}}</td>
          <td>{{$product->description}}</td>
          <td>{{$product->price}}</td>
          <td>
            <a href="{{route('edit.product', $product->id)}}"><button type="button" class="btn btn-warning">Edit</button></a>
            <a onclick="confirm('Are you sure you want to remove the product') || event.stopImmediatePropagation()" wire:click="delete({{ $product->id }})"><button type="button" class="btn btn-danger">Delete</button></a>
          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>

</div>