@extends("layouts.app")
@section("content")
<div class="row mt-5">
    <div class="col-lg-12 d-flex justify-content-end">
        <a href="{{ route('customers') }}" class="btn btn-primary"> Back </a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h1>Detail Customer Data</h1>
                <div class="mb-3 d-flex">
                    <label class="form-label">Customer Name:</label>
                    <div>{{$customer->name}}</div>
                </div>
                <div class="mb-3 d-flex">
                    <label class="form-label">Customer Email</label>
                    <div>{{$customer->email}}</div>
                </div>              
                <div class="mb-3 d-flex">
                    <label class="form-label">Customer City</label>
                    <div>{{$customer->city}}</div>
                </div>

            </form>
            </div>

@endsection