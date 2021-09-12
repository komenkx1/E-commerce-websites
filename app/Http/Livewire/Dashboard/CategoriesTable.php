<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Category;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Illuminate\Support\Str;


class CategoriesTable extends LivewireDatatable
{
    protected $listeners = [
        'removeCategory',
        'userRefresh' => 'mount'
    ];

    protected $rules = [
        'name' => 'required|string',
    ];

    public $model = Category::class;
    public $category;
    public $name;

    public function columns()
    {
        return [
            Column::name('name'),

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
            'onConfirmed' => 'removeCategory',
            'inputAttributes' => ["id" => $id],
            'onCancelled' => 'cancelled'
        ]);
    }

    public function editForm($id)
    {
        $this->dispatchBrowserEvent('OpenModalCategory');
        $this->category = Category::where('id', $id)->first();
        $this->name = $this->category->name;
    }

    public function Updatecategory()
    {
        // dd($this->name);
        $this->validate();
        Category::where('id', $this->category->id)->update(['name' => $this->name,  'slug' => Str::slug($this->name),]);
        $this->dispatchBrowserEvent('CloseModalCategory');
        $this->alert('success', 'Data Updated!', [
            'toast' => false,   'position' =>  'center',
        ]);
    }

    public function removeCategory($id)
    {
        Category::where('id', $id)->delete();
        $this->alert('warning', 'Data Deleted!', [
            'toast' => false,   'position' =>  'center',
        ]);
    }
}
