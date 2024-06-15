<div>
	<style>
	.mr-2{
	margin-right: 20px;
	}

	.divTable{
		display: table;
		width: 100%;
	}
	.rowTable {
		display: table-row;
	}
	.divTableHeading {
		display: table-header-group;
	}
	.divTableCol, .divTableHead {
		border-bottom: 1px solid #eee;
		display: table-cell;
		padding: 3px 10px;
	}
	.divTableHeading {
		background-color: #EEE;
		display: table-header-group;
		font-weight: bold;
	}
	.divTableFoot {
		background-color: #EEE;
		display: table-footer-group;
		font-weight: bold;
	}
	.divTableBody {
		display: table-row-group;
	}
	.rowTable .divTableCol .media img{
		width: 80%;
		height: 60px;
	}
	</style>
	<div class="container">
		<div class="divTable div-hover">
			
				<div class="rowTable bg-primary text-white pb-2">
					<div class="divTableCol"></div>
					<div class="divTableCol">Product</div>
					<div class="divTableCol">Quantity</div>
					<div class="divTableCol">Price</div>
					<div class="divTableCol">Total</div>
					<div class="divTableCol">Actions</div>
				</div>

				@foreach($cartitems as $item)
				<button wire:click="test">Test</button>
			
				<div class="rowTable">
					<div class="divTableCol">
						<div class="media">
							<img src="{{ $item->product->image }}" class="w-20 rounded" alt="Thumbnail" />
						</div>
					</div>
					<div class="divTableCol"><strong class="label label-warning">{{ $item->product->name}}</strong></div>
						<div class="justify-center md:justify-end md:flex mt-6">
							<div class="w-20 h-10">
								<div class="custom-number-input h-10 w-32">
									<div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent mt-1">
										<button class="" wire:click="decrementQty({{ $item->id }})">
											<span class="m-auto text-2xl font-thin">−</span>
										</button>
										<span class="p-2">{{ $item->quantity}}</span>
										<button class="" wire:click="incrementQty({{ $item->id }})">
											<span class="m-auto text-2xl font-thin">+</span>
										</button>
									</div>
								</div>
							</div>
						</div>
					<div class="divTableCol"><strong>€56.67</strong></div>
					<div class="divTableCol"><strong>€170.01</strong></div>
					<div class="divTableCol">
						<button type="button" class="btn btn-danger"><span class="fa fa-remove"></span> Remove</button>
					</div>
				</div>
				@endforeach
			<br>
				<div class="rowTable">
					<div class="divTableCol"></div>
					<div class="divTableCol"></div>
					<div class="divTableCol"></div>
					<div class="divTableCol"><h5>Subtotal</h5></div>
					<div class="divTableCol">
						<h5><strong>€570.00</strong></h5>
					</div>
				</div>
				<div class="rowTable">
					<div class="divTableCol"></div>
					<div class="divTableCol"></div>
					<div class="divTableCol"></div>
					<div class="divTableCol"><h5>Prezzo totale</h5></div>
					<div class="divTableCol">
						<h5><strong>€570.00</strong></h5>
					</div>
				</div>
				<div class="rowTable">
					<div class="divTableCol"></div>
					<div class="divTableCol"></div>
					<div class="divTableCol"></div>
					<div class="divTableCol"><h3>Total</h3></div>
					<div class="divTableCol">
						<h3><strong>€570.00</strong></h3>
					</div>
				</div>
				<div class="rowTable">
					<div class="divTableCol"></div>
					<div class="divTableCol"></div>
					<div class="divTableCol"></div>
					<div class="divTableCol">
						<button type="button" class="btn btn-default col-6"></span> Torna indietro </button>
					</div>
					<div class="divTableCol">
						<button type="button" class="btn btn-success">Salva la pratica</span></button>
					</div>
				</div>        
		</div>
	</div>

</div>