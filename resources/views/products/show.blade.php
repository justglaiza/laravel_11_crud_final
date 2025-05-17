@extends('layouts.app')
@section('content')
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Product Information
                    </div>
                    <div class="float-end">
                        <a href="{{ route('products.index') }}" class="btn
btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">

                        <label for="code"
                            class="col-md-4 col-form-
label text-md-end text-start"><strong>Code:</strong></label>

                        <div class="col-md-6" style="line-height:
35px;">
                            {{ $product->code }}
                        </div>
                    </div>
                    <div class="row">

                        <label for="name"
                            class="col-md-4 col-form-
label text-md-end text-start"><strong>Name:</strong></label>

                        <div class="col-md-6" style="line-height:
35px;">
                            {{ $product->name }}
                        </div>
                    </div>
                    <div class="row">

                        <label for="quantity"
                            class="col-md-4 col-
form-label text-md-end text-start"><strong>Quantity:</strong></label>

                        <div class="col-md-6" style="line-height:
35px;">
                            {{ $product->quantity }}
                        </div>
                    </div>
                    <div class="row">

                        <label for="price"
                            class="col-md-4 col-form-
label text-md-end text-start"><strong>Price:</strong></label>

                        <div class="col-md-6" style="line-height:
35px;">
                            {{ $product->price }}
                        </div>
                    </div>
                    <div class="row">

                        <label for="description"
                            class="col-md-4 col-
form-label text-md-end text-
start"><strong>Description:</strong></label>

                        <div class="col-md-6" style="line-height:
35px;">
                            {{ $product->description }}
                        </div>
                    </div>
                    <div class="row">
                        <label for="image"
                            class="col-md-4 col-form-label text-md-end text-start"><strong>Image:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{-- {{ dd(Storage::url($product->image)); }} --}}
                            @if ($product->image)
                                <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"
                                    class="img-fluid w-100">
                            @else
                                <p class="text-end">No image available</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
