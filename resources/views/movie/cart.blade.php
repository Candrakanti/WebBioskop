@extends('layouts.main')

@section('container')
    <div class="container ms-4">
        @foreach (Cart::content() as $item)
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('images/product/' . $item->image) }}" alt="product-thumbnail">
                        {{-- <img src="..." class="img-fluid rounded-start" alt="..."> --}}
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->name }}</h5>
                            <p class="card-text">{{ $item->qty }}</p>
                            <p class="card-text"><small class="text-muted">{{ $item->price }}</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="border border-danger border-2 opacity-50">
        @endforeach
    </div>
@endsection
