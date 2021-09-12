@extends('dashboard.layouts.master',['pageHeader'=>'Couriers','descriptionHeader'=>'Couriers Data'])
@section('content')
<div class="mt-4">
<livewire:dashboard.courier-table  searchable="name" addable="modal" modalsView="components.modals.modal-add-courier"/>
</div>
@endsection