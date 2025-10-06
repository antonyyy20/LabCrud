@extends('layouts.app')

@section('template_title')
    {{ $product->description ?? __('Show') . " " . __('Product') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Product</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('products.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        <div class="row">
                            <div class="col-md-6">
                                <strong>{{ __('Description') }}:</strong>
                                {{ $product->description }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <strong>{{ __('Price') }}:</strong>
                                ${{ number_format($product->price, 2) }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <strong>{{ __('Stock') }}:</strong>
                                {{ $product->stock }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
