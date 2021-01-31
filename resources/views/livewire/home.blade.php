<div class="container">
	<!-- Banner  -->
	<div class="banner">
		<img src="{{ url('img/Slider/Slider.png') }}" alt="">
	</div>

	<!-- Fandom -->
	<div class="pilih-fandom mt-4">
		<h2><strong>Pilih Fandom</strong></h2>
		<div class="row">
			@foreach($fandoms as $fandom)
			<div class="col">
				<div class="card shadow">
					<a href="{{ route('products.fandom', $fandom->id) }}">
						<div class="card-body text-center">
							<img class="img-fluid" src="{{ url('img/fandom') }}/{{ $fandom->gambar }}" alt="">
						</div>
					</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>

	<!-- Best Waifu -->
	<div class="product mt-4 mb-4">
		<h3 class="mb-3">
			<strong>Best Waifus</strong>
			<a href="{{ route('products') }}" class="btn btn-dark float-right"><i class="fas fa-eye"></i> Lihat Semua</a>
		</h3>
		<div class="row">
			@foreach($products as $product)
			<div class="col-md-3">
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
	</div>
</div>