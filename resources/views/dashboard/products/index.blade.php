@extends('dashboard.layouts.master',['pageHeader'=>'Products','descriptionHeader'=>'Products Data'])
@section('content')
<div class="mt-4">
<livewire:dashboard.product-table  addable="{{ Route('dashboard.product.create') }}" />
</div>
@endsection