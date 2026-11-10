@extends("layouts.app")
@section("content")
<div class="row mt-5">
    <div class="col-lg-12 d-flex justify-content-end">
        <a href="{{ route('customers') }}" class="btn btn-primary"> Back </a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h1>Input Customer Data</h1>
            <form action="{{ route('customers.store') }}" method="POST">
                @csrf
                @include('customers._form', [
                    'buttontext' => 'Save Customer Data',
                    'customer' => null,
                ])
                </div>
            </form>
            </div>

@endsection