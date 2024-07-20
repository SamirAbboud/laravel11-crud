@extends('layouts.main')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h2>
            Students ({{ $students->total() }})
        </h2>
        <a href="{{ route('students.create') }}">Add new student</a>
    </div>

    <div class="mt-5">
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($students as $student)
                <tr>
                    <th scope="row">{{ $student->id }}</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->created_at }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{ route('students.show', $student) }}">View</a>
                        <a class="btn btn-warning btn-sm" href="{{ route('students.edit', $student) }}">Edit</a>
                        <form class="d-inline" method="post" action="{{ route('students.destroy', $student) }}">
                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?');"
                            >Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $students->links() }}
    </div>
@endsection
