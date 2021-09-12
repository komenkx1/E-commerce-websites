<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Courier;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Illuminate\Support\Str;


class CourierTable extends LivewireDatatable
{
    protected $listeners = [
        'removeCourier',
        'userRefresh' => 'mount'
    ];

    protected $rules = [
        'name' => 'required|string',
    ];

    public $model = Courier::class;
    public $courier;
    public $name;

    public function columns()
    {
        return [
            Column::name('courier'),

            Column::callback('id', function ($value) {
                return view('components.action-button-modal', compact('value'));
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
            'onConfirmed' => 'removeCourier',
            'inputAttributes' => ["id" => $id],
            'onCancelled' => 'cancelled'
        ]);
    }

    public function editForm($id)
    {
        $this->dispatchBrowserEvent('OpenModalCourier');
        $this->courier = Courier::where('id', $id)->first();
        $this->name = $this->courier->courier;
    }

    public function UpdateCourier()
    {


        $this->validate();
        Courier::where('id', $this->courier->id)->update(['courier' => $this->name]);
        $this->dispatchBrowserEvent('CloseModalCourier');
        $this->alert('success', 'Data Updated!', [
            'toast' => false,   'position' =>  'center',
        ]);
    }

    public function removeCourier($id)
    {
        Courier::where('id', $id)->delete();
        $this->alert('warning', 'Data Deleted!', [
            'toast' => false,   'position' =>  'center',
        ]);
    }
}
