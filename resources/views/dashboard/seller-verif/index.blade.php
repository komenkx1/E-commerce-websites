@extends('dashboard.layouts.master',['pageHeader'=>'Seller Registration','descriptionHeader'=>'Seller Registration Data'])
@section('content')
<div class="mt-4">
<livewire:dashboard.seller-verif-table  searchable="name"  modalsView="components.modals.modal-verif-seller"/>
</div>
@endsection