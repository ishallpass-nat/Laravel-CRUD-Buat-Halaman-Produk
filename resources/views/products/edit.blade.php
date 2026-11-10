@extends("layouts.app")
@section("content")
<div class="row mt-5">
    <div class="col-lg-12 d-flex justify-content-end">
        <a href="{{ route('products') }}" class="btn btn-primary"> Back </a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h1>Input Product Data</h1>
            <form action="{{ route('products.update', $products->id) }}" method="POST">
                @csrf
                @method("PUT")
                <div class="mb-3">
                    <label for="name" class="form-label">Products Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $products->name }}" placeholder="Steak Ayam">
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Product Stocks</label>
                    <input type="number" class="form-control" id="stock" name="stock" value="{{ $products->stock }}" placeholder="12">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Product Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ $products->price }}" placeholder="price">
                </div>
                <div class="mb-3 d-flex justify-content-end">
                    <button type="submit" class="btn btn_primary"> Update Product Data</button>
                </div>
            </form>
            </div>

@endsection