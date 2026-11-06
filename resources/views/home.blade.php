@extends('layouts.app')

@section('title', 'Home')

@section('body')
    <ul class="list-group">
        @forelse($categories as $category)
            <li class="list-group-item">
                <a class="nav-link" href="{{ route('category.show', $category) }}" wire:navigate>
                    <h2 class="m-0">{{ $category->name }}</h2>
                    <p class="m-0">{{ $category->description }}</p>
                </a>
            </li>
        @empty
            <li class="list-group-item">No categories found.</li>
        @endforelse
    </ul>
@endsection
