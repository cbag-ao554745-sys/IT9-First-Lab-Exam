@extends('layouts.app')

@section('content')
    <div>
        <div class="d-flex flex-column gap-2 align-items-start mb-3">
            <h1 class="fw-bold fs-3">Characters</h1>
            <a href="{{ route('characters.create') }}" class="btn btn-outline-dark">&plus; Create character</a>
        </div>

        @if ($characters->isEmpty())
            <p class="text-center">No characters yet. Create one to get started.</p>
        @else
            <div class="d-flex flex-column gap-3">
                @foreach ($characters as $character)
                    <div
                        class="p-4 rounded-2 border border-secondary-subtle d-flex align-items-start justify-content-between">
                        <div>
                            <p class="m-0 fw-semibold fs-4">{{ $character->name }}</p>
                            <p class="m-0 fs-5 fw-medium text-secondary-emphasis">{{ $character->power }}</p>
                            <p class="m-0 fs-6">{{ $character->universe }}</p>
                        </div>

                        <div class="btn-group">
                            <button class="btn btn-outline-secondary btn-sm dropdown-toggle" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('characters.edit', $character) }}">Edit</a></li>
                                <form action="{{ route('characters.destroy', $character) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item">Delete</button>
                                </form>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection