@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Studij') }}
                <a href="{{ route('admin.studies.create') }}" class="btn btn-outline-primary float-right">Dodaj studij</a>
            </div>

            <div class="card-body">
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Naziv</th>
                        <th scope="col">Uredi</th>
                        <th scope="col">Izbriši</th>
                    </tr>
                    </thead>
                    <tbody>
                     @foreach($studies as $study)
                        <tr>
                            <th scope="row">{{ $study->id }}</th>
                            <td>{{ $study->name }}</td>
                            <td>
                                <a href="{{ route('admin.studies.edit', $study->id) }}"><button class="btn btn-outline-primary">Uredi</button></a>
                            </td>
                            <td>
                                <form action="{{ route('admin.studies.destroy', $study->id) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure you want to delete this item?');">Izbriši</button>
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
