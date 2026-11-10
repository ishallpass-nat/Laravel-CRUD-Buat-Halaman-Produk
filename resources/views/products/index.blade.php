
@extends("layouts.app")
@section("content")
<div class="row mt-5">
    <div class="col-lg-12 d-flex justify-content-end">
        <a href="{{ route('products.create') }}" class="btn btn-primary"> Tambah Produk </a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h1>Produk Data</h1>
        @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
                @endif
            <table class="table">

                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                    <tbody>
                        @php  $no = 1; @endphp
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $product["name"]}}</td>
                            <td>{{ $product["price"]}}</td>
                            <td>{{ $product["stock"]}}</td>
                            <td>
                                <a href="{{ route('products.show', $product['id']) }}" class="btn btn-primary">View Detail</a>
                                <a href="{{ route('products.edit', $product['id']) }}" class="btn btn-primary">Edit Data</a>
                                <form action="{{ route('products.delete', $product['id']) }}" method="POST" 
                                    style="display:inline;"
                                    onsubmit="return confirm('Apakah anda yakin akan menghapus data ini?')"> 
                                    @csrf
                                    @method('DELETE')

                                <button type="submit" class="btn btn-danger"> Delete </button>
                        </form>
                        </td>
                        </tr>
                        @php $no++; @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>


    {{-- <div class="row">
    <div col-lg-12>
        {{ $customers->links() }}
    </div> 
</div> --}}

@endsection



{{-- <h1>Product Data</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Harga</th>
            <th scope="col">Stock</th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @foreach($products as $product) 
            <tr>
                <td>{{ $no }}</td>
                <td>{{ $product["product"] }}</td>
                <td>{{ $product["price"] }}</td>
                <td>{{ $product["stock"] }}</td>
            </tr>
                @php $no++; @endphp
        @endforeach
    </tbody>
    </table>
@endsection --}}
