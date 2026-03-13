@extends('layouts.app')

@section('content')
    <div>
        <h1 class="fs-3">Create Character</h1>

        <form action="{{ route('characters.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                @error('name')
                    <p class="fs-6 text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="power" class="form-label">Power</label>
                <input type="text" name="power" id="power" class="form-control" placeholder="Power">
                @error('power')
                    <p class="fs-6 text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="universe" class="form-label">Universe</label>
                <input type="text" name="universe" id="universe" class="form-control" placeholder="Universe">
                @error('universe')
                    <p class="fs-6 text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <button type="submit" class="btn btn-outline-dark">&plus; Add character</button>
                <a href="{{ route('characters.index') }}" class="btn btn-outline-danger">Cancel</a>
            </div>
        </form>
    </div>
@endsection