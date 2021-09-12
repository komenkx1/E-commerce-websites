<div>
    <output id="result" class="row">
        @forelse ($product->product_image as $image)
            
        <div class="col-md-3 card img-output">
            <div class="img">
            <img class="thumbnail" src="{{ $image->image }}">
        </div>
        <br>
            <button type="button" class="position-absolute btn btn-md btn-danger p-3 m-2" wire:click="confirmDel({{ $image->id }})"><i class="fas fa-times"></i></button>
        </div> 
        
        @empty
        <p class="p-3 text-center">Tidak ada gambar tersedia</p>
        @endforelse

    </output>
</div>
