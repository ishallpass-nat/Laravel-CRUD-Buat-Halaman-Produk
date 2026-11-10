@extends("layouts.app")
@section("content")
<div class="row mt-5">
    <div class="col-lg-12 d-flex justify-content-end">
        <a href="{{ route('products') }}" class="btn btn-primary"> Back </a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h1>Detail Product Data</h1>
                <div class="mb-3 d-flex">
                    <label class="form-label">Product Name</label>
                    <div>{{$product->name}}</div>
                </div>
                <div class="mb-3 d-flex">
                    <label class="form-label">Product Stock:</label>
                    <div>{{$product->stock}}</div>
                </div>              
                <div class="mb-3 d-flex">
                    <label class="form-label">Product Price:</label>
                    <div>{{$product->price}}</div>
                </div>

            </form>
            </div>

@endsection