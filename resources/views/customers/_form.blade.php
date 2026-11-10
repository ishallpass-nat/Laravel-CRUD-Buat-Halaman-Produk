
<div class="mb-3">
    <label for="name" class="form-label">Customer Name</label>
    <input type="text" class="form-control" id="name" value="{{ old('name', $customer->name ?? '') }}" name="name" placeholder="Rudy Setiawan">
</div>
@error('name')
<div class="alert alert-danger">
    {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="email" class="form-label">Customer Email</label>
    <input type="email" class="form-control" id="email" value="{{ old('email', $customer->email  ?? '') }}" name="email" placeholder="Email@gmai.com">
</div>
@error('email')
<div class="alert alert-danger">
    {{ $message }}
</div>
@enderror
<div class="mb-3">
    <label for="city" class="form-label">Customer City</label>
    <textarea type="city" class="form-control" id="city" name="city" placeholder="city">
        {{ old('city', $customer->city  ?? '') }}
    </textarea>
</div>
@error('city')
<div class="alert alert-danger"> 
    {{ $message }} 
</div>
@enderror
<div class="mb-3 d-flex justify-content-end">
    <button type="submit" class="btn btn_primary">{{ $buttontext }}</button>
</div>
