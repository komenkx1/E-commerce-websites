<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Discount;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class DiscountTable extends LivewireDatatable
{
   
    public $discount;
    protected $listeners = [
        'removeDiscount',
    ];

    public function builder()
    {
        return Discount::where('product_id',$this->discount);
    }

    public function columns()
    {
        return [
            Column::name('percentage')->searchable(),
            Column::name('start'),
            Column::name('end'),
            Column::callback('id', function ($value) {
                $url = Route('dashboard.discount.edit',['discount'=>$value]);
                return view('components.default-action-buttons', compact('value','url'));
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
            'onConfirmed' => 'removeDiscount',
            'inputAttributes' => ["product" => $id],
            'onCancelled' => 'cancelled'
        ]);
    }

    public function removeDiscount(Discount $discount)
    {

        $discount->delete();

        $this->alert('warning', 'Data Deleted!', [
            'toast' => false,   'position' =>  'center',
        ]);
    }
}
