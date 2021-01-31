<div class="container">
	<div class="row">
		<div class="col">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">List Waifu</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9">
			<h1>{{ $title }}</h1>
		</div>
		<!-- Search Form  -->
		<div class="col-md-3">
			<div class="input-group mb-3">
				<input wire:model="search" autofocus="on" type="text" class="form-control" placeholder="Cari waifu / fandom .." aria-label="Cari waifu / fandom .." aria-describedby="basic-addon2">
				<div class="input-group-append">
					<button class="btn btn-secondary" type="button"><i class="fas fa-search"></i></button>
				</div>
			</div>
		</div>
	</div>
	<!-- Best Waifu -->
	<div class="product mt-4 mb-4">
		<div class="row">
			@foreach($products as $product)
			<div class="col-md-4 mb-4">
				<div class="card">
					<div class="card-body text-center">
						<img class="img-fluid" src="{{ url('img/waifulist') }}/{{ $product->gambar }}" alt="">
						<div class="row mt-2">
							<div class="col-md-12">
								<h5 class="card-title font-weight-bold">{{ $product->nama }}</h5>
								<h5 class="card-title">Rp.{{ number_format($product->harga, 0, ".",".") }} </h5>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<a href="{{ route('products.detail', $product->id) }}" class="btn btn-dark btn-block"><i class="fas fa-eye"></i> Detail</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<!-- Pagination -->
		<div class="row">
			<div class="col">
				{{ $products->links() }}
			</div>
		</div>
	</div>
</div>