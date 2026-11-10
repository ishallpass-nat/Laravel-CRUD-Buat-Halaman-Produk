@extends("layouts.app")
@section("content")
<div class="row mt-5">
    <div class="col-lg-12 d-flex justify-content-end">
        <a href="{{ route('orders') }}" class="btn btn-primary"> Back </a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h1>Edit ORder Data</h1>
            <form action="{{ route('orders.store', $order->id) }}" method="POST">
                @csrf
                @method("PUT")
                @include('orders._form')
                <a href="{{ route('orders') }}" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Update Order Data</button>
            </form>
            </div>

@endsection