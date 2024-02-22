<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ShowProducts extends Component
{

    public function delete(Product $product)
    {
        $product->delete();
    }

    public function render()
    {

        return view('livewire.show-products',[
            'products' => Product::all(),
        ]);
    }
}
