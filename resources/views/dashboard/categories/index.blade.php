@extends('dashboard.layouts.master',['pageHeader'=>'Category','descriptionHeader'=>'Category Data'])
@section('content')
<div class="mt-4">
<livewire:dashboard.categories-table  searchable="name" addable="modal" modalsView="components.modals.modal-add-category"/>
</div>
@endsection