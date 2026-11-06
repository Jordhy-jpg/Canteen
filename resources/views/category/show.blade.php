@extends('layouts.app')

@section('title', $category->name)

@section('body')
    <ol class="list-group">
        @forelse($products as $product)
            <li class="list-group-item d-flex justify-content-between align-items-start">
                <div class="ms-2 me-auto">
                    <div class="fw-bold fs-4">{{ $product->name }}</div>
                    <div class="fs-5">{{ $product->description }}</div>
                    <div class="fs-5">{{ $product->price }}</div>
                </div>
                <span class="badge">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Details
                    </button>
                </span>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-4" id="exampleModalLabel">{{ $product->name }}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="fs-5">{{ $product->detail->calories }}</div>
                                <div class="fs-5">{{ $product->detail->ingridients }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        @empty
            <li class="list-group-item d-flex justify-content-between align-items-start">
                No products found.
            </li>
        @endforelse
    </ol>
@endsection
