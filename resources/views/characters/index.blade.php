@extends('layouts.app')

@section('content')
    <div>
        <div class="d-flex flex-column gap-2 align-items-start mb-4">
            <h1 class="fw-bold fs-3 mb-0" style="color: #1c1917;">Characters</h1>
            <a href="{{ route('characters.create') }}" class="btn btn-sm fw-semibold"
                style="background-color: #1c1917; color: #fff; border: none; border-radius: 8px; padding: 6px 16px;">
                &plus; Create character
            </a>
        </div>

        @if ($characters->isEmpty())
            <p class="text-center" style="color: #a8a29e;">No characters yet. Create one to get started.</p>
        @else
            <div class="d-flex flex-column gap-3">
                @foreach ($characters as $character)
                    <div class="p-4 rounded-3 d-flex align-items-start justify-content-between"
                        style="background-color: #ffffff; border: 1.5px solid #e7e5e4; box-shadow: 0 2px 8px rgba(0,0,0,0.05);">
                        <div>
                            <p class="m-0 fw-semibold fs-4" style="color: #1c1917;">{{ $character->name }}</p>
                            <p class="m-0 fs-5 fw-medium" style="color: #57534e;">{{ $character->power }}</p>
                            <p class="m-0 fs-6" style="color: #a8a29e;">{{ $character->universe }}</p>
                        </div>

                        <div class="btn-group">
                            <button class="btn btn-sm dropdown-toggle fw-medium" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false"
                                style="background-color: #f5f4f2; color: #44403c; border: 1.5px solid #d6d3d1; border-radius: 8px;">
                                Actions
                            </button>
                            <ul class="dropdown-menu" style="background-color: #fff; border: 1.5px solid #e7e5e4; border-radius: 10px;">
                                <li>
                                    <a class="dropdown-item" href="{{ route('characters.edit', $character) }}"
                                        style="color: #44403c;">Edit</a>
                                </li>
                                <form action="{{ route('characters.destroy', $character) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item" style="color: #b91c1c;">Delete</button>
                                </form>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection