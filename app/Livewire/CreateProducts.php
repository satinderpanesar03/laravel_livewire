<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\ProductImage;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Helpers\ImageUploadService;

class CreateProducts extends Component
{

    use WithFileUploads;
    
    public $name;
    public $description;
    public $price;
    public $images;

    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
        'images' => 'required|array|image',
    ];

    public function save()
    {
        $product = Product::create([
            'name' => $this->name,
            'description' => $this->description,
            'price' => $this->price,
        ]);
        if ($this->images !== null) {
            foreach ($this->images as $image) {
                // $imagePath = $image->store('product-images', 'public');
                $imagePath = ImageUploadService::uploadImage($image);
        
                ProductImage::create([
                    'product_id' => $product->id,
                    'image' => $imagePath,
                ]);
            }
        }
    

        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.create-products');
    }
}
