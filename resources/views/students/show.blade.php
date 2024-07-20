@extends('layouts.main')

@section('content')

    <div>
        <h2>Show student</h2>

        <p class="mt-5">
            <strong>Name:</strong>
            <span>{{ $student->name }}</span>
        </p>
    </div>

@endsection
