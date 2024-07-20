@extends('layouts.main')

@section('content')

    <div>
        <h2>Edit student</h2>

        <div class="row">
            <div class="col-md-6">
                <form method="post" action="{{ route('students.update', $student) }}">
                    @csrf
                    @method('PATCH')

                    <div class="mb-3">
                        <label for="name" class="col-form-label">Name:</label>

                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                               name="name" value="{{ old('name', $student->name) }}" required autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary">
                        Save
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
