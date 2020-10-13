@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Predmeti') }}
                <a href="{{ route('student.subjects.create') }}" class="btn btn-outline-primary float-right">Dodaj predmet</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Naziv</th>
                            <th scope="col">ECTS</th>
                            <th scope="col">Izbriši</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($student->subjects as $subject)
                        <tr>
                            <td>{{ $subject->name }}</td>
                            <td>{{ $subject->ects }}</td>
                            <td>
                                <form action="{{ route('student.subjects.destroy', $subject->id) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this user?');">Izbriši</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection


