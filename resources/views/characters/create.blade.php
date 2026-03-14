@extends('layouts.app')

@section('content')
    <div class="p-4 rounded-3" style="background-color: #ffffff; border: 1.5px solid #e7e5e4; box-shadow: 0 2px 12px rgba(0,0,0,0.06);">
        <h1 class="fs-3 mb-4 fw-semibold" style="color: #1c1917;">Create Character</h1>

        <form action="{{ route('characters.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label fw-medium" style="color: #44403c;">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="e.g. Spider-Man">
                @error('name')
                    <p class="fs-6 mt-1" style="color: #b91c1c;">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="power" class="form-label fw-medium" style="color: #44403c;">Power</label>
                <input type="text" name="power" id="power" class="form-control" placeholder="e.g. Web-slinging">
                @error('power')
                    <p class="fs-6 mt-1" style="color: #b91c1c;">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="universe" class="form-label fw-medium" style="color: #44403c;">Universe</label>
                <input type="text" name="universe" id="universe" class="form-control" placeholder="e.g. Marvel">
                @error('universe')
                    <p class="fs-6 mt-1" style="color: #b91c1c;">{{ $message }}</p>
                @enderror
            </div>
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-sm fw-semibold"
                    style="background-color: #1c1917; color: #fff; border: none; border-radius: 8px; padding: 6px 18px;">
                    &plus; Add character
                </button>
                <a href="{{ route('characters.index') }}" class="btn btn-sm fw-semibold"
                    style="background-color: #fff; color: #78716c; border: 1.5px solid #d6d3d1; border-radius: 8px; padding: 6px 18px;">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection