@extends('dashboard.layouts.master',['pageHeader'=>'Products','descriptionHeader'=>'Products Data'])
@section('content')
<div class="mt-4">
    <livewire:dashboard.discount-table  addable="{{ Route('dashboard.discount.create',['id'=>$discount]) }}" :discount="$discount" />

</div>
@endsection