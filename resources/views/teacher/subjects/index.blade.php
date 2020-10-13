@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Predmet') }}
                    <a href="{{ route('teacher.subjects.create') }}" class="btn btn-outline-primary float-right">Dodaj predmet</a>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ime</th>
                            <th scope="col">Uredi</th>
                            <th scope="col">Izbriši</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($subjects as $subject)
                            <tr>
                                <th scope="row">{{ $subject->id }}</th>
                                <td>{{ $subject->name }}</td>
                                <td>
                                    <a href="{{ route('teacher.subjects.edit', $subject->id) }}"><button class="btn btn-outline-primary">Uredi</button></a>
                                </td>
                                <td>
                                    <form action="{{ route('teacher.subjects.destroy', $subject->id) }}" method="post">
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
