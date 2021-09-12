<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class OutputImage extends Component
{
    protected $listeners = [
        'removeImage',
    ];
    public $product;
    public function render()
    {
        return view('livewire.dashboard.output-image');
    }

    public function mount()
    {
        $this->product;

    }

    public function confirmDel($id)
    {
        $this->confirm('Are You Sure To Delete This Data?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Nope',
            'onConfirmed' => 'removeImage',
            'inputAttributes' => ["product" => $id],
            'onCancelled' => 'cancelled'
        ]);
    }

    public function removeImage($id)
    {
        
        $image = ProductImage::where('id', $id)->first();

        Storage::delete('/public/img/products_image/' . $image->image_name);
        $image->delete();
       

        $this->alert('warning', 'Data Deleted!', [
            'toast' => false,   'position' =>  'center',
        ]);
    }
}
