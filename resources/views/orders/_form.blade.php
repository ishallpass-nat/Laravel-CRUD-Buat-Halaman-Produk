
<div class="mb-3">
    <label for="name" class="form-label">Order Name</label>
<select name="customer_id" id="customer_id" class="form-select" aria-label="Default select example">
        <option value="">Pilih Customer</option>
        @foreach($customers as $customer)
            <option value="{{ $customer->id }}"
            {{ old('customer_id', $order->customer_id ?? "") == $customer->id ? 'selected' : '' }}>
                {{ $customer->name }} - {{ $customer->email }}
            </option>
        @endforeach
    </select>
</div>
@error('customer_id')
        <div class="alert alert-danger">  
            {{ $message }}
        </div>
    @enderror
 
    <div class="mb-3">
        <label for="order_number" class="form-label">Order Number</label>
        <input type="text" class="form-control" id="order_number" value="{{ old('order_number', $order->order_number  ?? '') }}" name="order_number">
    </div>
@error('order_number')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
@enderror
    
    <div class="mb-3">
        <label for="order_date" class="form-label">Order Date</label>
        <input type="date" class="form-control" id="order_date" value="{{ old('order_date', $order->order_date  ?? '') }}" name="order_date">
    </div>
@error('order_number')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
@enderror

    <div class="mb-3">
        <label for="total" class="form-label">total</label>
        <input type="number" class="form-control" id="total" value="{{ old('total', $order->total  ?? '') }}" name="total">
    </div>
@error('order_number')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
@enderror

<div class="mb-3">
    <label for="name" class="form-label">Order Name</label>
<select name="status" id="status" class="form-select" aria-label="Default select example">
        <option value="">Pilih Status</option>
        @foreach(['pending', 'processing', 'completed', 'canceled'] as $status)
            <option value="{{ $status }}"
            {{ old('status', $order->status ?? "pending") == $status ? 'selected' : '' }}>
            {{ $status }}    
        </option>
        @endforeach
    </select>
</div>
@error('status')
        <div class="alert alert-danger">  
            {{ $message }}
        </div>
    @enderror