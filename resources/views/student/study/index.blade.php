@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Studij') }}</div>

            <div class="card-body">
                <form action="{{ route('student.studies.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Izaberi studij</label>
                        <select class="form-control" name="study" id="exampleFormControlSelect1">
                            @foreach($studies as $study)
                            <option value="{{ $study->id }}">{{ $study->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-outline-primary">Dodaj studij</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection


