@extends("layouts.app")
@section("content")
<div class="row mt-5">
    <div class="col-lg-12 d-flex justify-content-end">
        <a href="{{ route('orders.create') }}" class="btn btn-primary"> Tambah Order </a>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <h1>Order Data</h1>                
        @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
                @endif
            <table class="table">
                <thead>

                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Order Number</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Order Date</th>
                    <th scope="col">Total</th>
                    <th scope="col">Order Date</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                    <tbody>
                        @php  $no = 1; @endphp
                        @foreach($orders as $order)
                        <tr>
                            <td>{{ $no }}</td>
                            <td>{{ $order["order_number"]}}</td>
                            <td>{{ $order["name"]}}</td>
                            <td>{{ $order["order_date"]}}</td>
                            <td>{{ $order["total"]}}</td>
                            <td>
                                <a href="{{ route('orders.show', $order['id']) }}" class="btn btn-primary">View Detail</a>
                                <a href="{{ route('orders.edit', $order['id']) }}" class="btn btn-primary">Edit Data</a>
                                <form action="{{ route('orders.delete', $order['id']) }}" method="POST" 
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
<div class="row">
    <div col-lg-12>
        {{ $orders->links() }}
    </div> 
</div>

@endsection