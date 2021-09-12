<a href="{{ Route('dashboard.product.edit', ['product' => $value]) }}" class="btn btn-primary">Edit</a>
<a href="{{ Route('dashboard.discount.show',['discount'=>$value]) }}" class="btn btn-success text-light">Discount</a>
<button wire:click="confirmDel({{ $value }})" type="button" class="btn btn-danger">
    Detele
</button>
