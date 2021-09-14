<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Store;
use App\Models\User;
use Livewire\Component;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class SellerVerifTable extends LivewireDatatable
{
    protected $listeners = [
        
        'verifSeller',
        'userRefresh' => 'mount'
    ];

    public $reason;
    public $seller;

    public function columns()
    {
        return [
            Column::name('name')->label('Store name'),
            Column::name('user.name')->label('Owner'),

            Column::callback('id', function ($value) {
                return view('components.action-button-verification', compact('value'));
            })
                ->label('Action')
                ->unsortable(),
        ];
    }

    public function builder()
    {
        return Store::where('status','pending');
    }

    public function confirmVerif($id)
    {
        $this->confirm('Are You Sure To Verification This User?', [
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Nope',
            'onConfirmed' => 'verifSeller',
            'inputAttributes' => ["store" => $id],
            'onCancelled' => 'cancelled'
        ]);
    }

    public function confirmReject($id)
    {
        // dd($id);
        $this->dispatchBrowserEvent('OpenModalReject');
        $this->seller = Store::where('id', $id)->first();
    }

    public function rejectSeller()
    {
        // dd($this->seller);
        $this->seller->update([
          'status' => 'rejected',
          'reason_to_reject' => $this->reason,
      ]);
      $this->dispatchBrowserEvent('CloseModalReject');

    $this->alert('warning', 'Seller Rejected!', [
        'toast' => false,   'position' =>  'center',
    ]);
    }


    public function verifSeller(Store $store)
    {
      $store->update([
          'status'=>'verified',
          'reason_to_reject' => null

      ]);

      $store->user->assignRole('seller');
      
    $this->alert('success', 'Seller Verified!', [
        'toast' => false,   'position' =>  'center',
    ]);
    }

}
