<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Facades\Storage;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class ProductTable extends LivewireDatatable
{
    public $model = Product::class;
    protected $listeners = [
        'removeProduct',
    ];


    public function columns()
    {
        return [
            Column::name('name')->view('components.tables.products.productName')->searchable(),
            Column::name('product_rate')->label('rate'),
            Column::name('stock'),
            Column::name('status')->view('components.tables.products.productStatus')->searchable(),
            Column::name('kondisi')->searchable()->label('condition'),
            Column::name('price')->view('components.tables.products.productPrice')->searchable(),

            Column::callback('id', function ($value) {
                return view('components.action-button-products', compact('value'));
            })
                ->label('Action')
                ->unsortable(),
        ];
    }

    public function confirmDel($id)
    {
        $this->confirm('Are You Sure To Delete This Data?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Nope',
            'onConfirmed' => 'removeProduct',
            'inputAttributes' => ["product" => $id],
            'onCancelled' => 'cancelled'
        ]);
    }

    public function removeProduct(Product $product)
    {
        foreach ($product->product_image as $image) {
            Storage::delete('/public/img/products_image/' . $image->image_name);
        }
        ProductImage::where('product_id', $product->id)->delete();
        $product->delete();

        $this->alert('warning', 'Data Deleted!', [
            'toast' => false,   'position' =>  'center',
        ]);
    }
}
