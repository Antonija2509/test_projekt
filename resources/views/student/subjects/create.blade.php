@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Predmet') }}</div>

                <div class="card-body">
                    <form action="{{ route('student.subjects.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Izaberi predmet</label>
                            <select class="form-control" name="subject" id="exampleFormControlSelect1">
                                <option selected="true" disabled="disabled">Izaberi...</option>
                                @foreach($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Dodaj predmet</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


