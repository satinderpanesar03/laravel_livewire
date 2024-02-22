<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\ProductImage;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;
use App\Helpers\ImageUploadService;
use Illuminate\Support\Facades\DB;

class EditProduct extends Component
{
    use WithFileUploads;
    public $product;

    public $name;
    public $description;
    public $price;
    public $images;

    public function mount(Product $product)
    {
        $this->product = $product;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
        
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        $this->product->update([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
        ]);


        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.edit-product',[
            'product_images' => $this->product->images,
        ]);
    }
}
