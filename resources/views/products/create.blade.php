@extends("layouts.app")
@section("content")
<div class="row mt-5">
    <div class="col-lg-12 d-flex justify-content-end">
        <a href="{{ route('products') }}" class="btn btn-primary"> Back </a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h1>Create Product Data</h1>
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Contoh : Steak Ayam">
                </div>
                <div class="mb-3">
                    <label for="Stock" class="form-label">Product Stock</label>
                    <input type="number" class="form-control" id="stock" name="stock" placeholder="Contoh : 14">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Product Price</label>
                    <input type="number" class="form-control" id="price" name="price" placeholder="Contoh : 12000">
                </div>
                <div class="mb-3 d-flex justify-content-end">
                    <button type="submit" class="btn btn_primary"> Save Product Data</button>
                </div>

                </div>
            </form>
            </div>

@endsection