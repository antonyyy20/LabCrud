<div class="row padding-1 p-1">
    <div class="col-md-12">
        <div class="form-group mb-3">
            <label for="description" class="form-label">{{ __('Description') }}</label>
            <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" 
                   value="{{ old('description', $product->description ?? '') }}" required>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="price" class="form-label">{{ __('Price') }}</label>
            <input type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror" 
                   value="{{ old('price', $product->price ?? '') }}" step="0.01" min="0" required>
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="stock" class="form-label">{{ __('Stock') }}</label>
            <input type="number" name="stock" id="stock" class="form-control @error('stock') is-invalid @enderror" 
                   value="{{ old('stock', $product->stock ?? '') }}" min="0" required>
            @error('stock')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">{{ __('Cancel') }}</a>
    </div>
</div>