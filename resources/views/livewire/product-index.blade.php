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
        <div class="col">
            <h1>List <strong>Waifu</strong></h1>
        </div>
        <div class="col">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari.." aria-label="Cari.."
                    aria-describedby="basic-addon1">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
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
                                <a href="" class="btn btn-dark btn-block">Detail</a>
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
