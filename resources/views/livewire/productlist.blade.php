<div class="container">
    @include('components.layouts.flash-message')
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <div class="relative">
                    <!-- Use inline CSS to set the background image -->
                    <div class="card-img-top" style="background-image: url('{{ $product->image }}'); background-size: cover; height: 200px;">
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <a href="#" class="btn btn-primary" wire:click="addToCart({{ $product->id }})">Add To Cart</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
