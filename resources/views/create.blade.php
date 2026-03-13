@extends('layouts.app')

@section('content')
    <h2>Character Dictionary</h2>

    @if($errors->any())
        <div class="alert-error">
            <strong>Fix these errors:</strong>
            <ul>@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
        </div>
    @endif

    <form action="{{ route('submissions.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Name *</label>
            <input type="text" name="name"
                   class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                   value="{{ old('student_name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Power *</label>
            <input type="text" name="assignment_title"
                   class="{{ $errors->has('assignment_title') ? 'is-invalid' : '' }}"
                   value="{{ old('assignment_title') }}">
            @error('assignment_title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label>Status *</label>
            <select name="status"
                    class="{{ $errors->has('status') ? 'is-invalid' : '' }}">
                <option value="">-- Select --</option>
                <option value="pending"   {{ old('status') == 'pending'   ? 'selected' : '' }}>Pending</option>
                <option value="submitted" {{ old('status') == 'submitted' ? 'selected' : '' }}>Submitted</option>
            </select>
            @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <a href="{{ route('submissions.index') }}" class="btn btn-secondary">Cancel</a>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection