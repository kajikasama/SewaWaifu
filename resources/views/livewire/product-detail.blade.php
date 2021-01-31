<div class="container">
	<div class="row mt-4">
		<div class="col">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-dark">Home</a></li>
					<li class="breadcrumb-item"><a href="{{ route('products') }}" class="text-dark">List Waifu</a></li>
					<li class="breadcrumb-item active" aria-current="page">Waifu Detail</li>
				</ol>
			</nav>
		</div>
	</div>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card gambar-product">
				<div class="card-body text-center">
					<img class="img-fluid" src="{{ url('img/WaifuList') }}/{{ $product->gambar }}" alt="">
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<h2>
				<strong>{{ $product->nama }}</strong>
			</h2>
			<h4>
				Rp.{{ number_format($product->harga)  }}
				@if($product->is_ready==1)
				<span class="badge badge-success"><i class="fas fa-check"></i> Ready Stock</span>
				@else
				<span class="badge badge-danger"><i class="fas fa-times"></i> Stock Habis</span>
				@endif
			</h4>
			<div class="row">
				<div class="col">
					<table class="table" style="border: hidden">
						<tr>
							<td>Fandom</td>
							<td>:</td>
							<td><img width="100px" class="img-fluid" src="{{ url('img/fandom') }}/{{ $product->fandom->gambar }}" alt=""></td>
						</tr>
						<tr>
							<td>Jenis</td>
							<td>:</td>
							<td>{{ $product->jenis }}</td>
						</tr>
						<tr>
							<td>Berat</td>
							<td>:</td>
							<td>{{ $product->berat_badan }}</td>
						</tr>
						<tr>
							<td>Jumlah</td>
							<td>:</td>
							<td>
								<input id="jumlah_pesanan" type="number" class="form-control @error('jumlah_pesanan') is-invalid @enderror" name="jumlah_pesanan" value="{{ old('jumlah_pesanan') }}" required autocomplete="name" autofocus>
								@error('jumlah_pesanan')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
									@enderror
								</span>
							</td>
						</tr>
						<tr>
							<td colspan="3"><strong>Custom Name set (isi jika inginkan sesuai selera)</strong></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td>
								<input id="jumlah_pesanan" type="text" class="form-control @error('jumlah_pesanan') is-invalid @enderror" name="jumlah_pesanan" value="{{ old('jumlah_pesanan') }}" required autocomplete="name" autofocus>
								@error('jumlah_pesanan')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
									@enderror
								</span>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>