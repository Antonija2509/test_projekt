@extends('layouts.app')

@section('content')



    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dodaj test') }}</div>

                <div class="card-body">
                    <form action="{{ route('teacher.quiz.storeQA') }}" method="post">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputQuiz">Test</label>
                                <select id="inputQuiz" name="quiz" class="form-control">
                                    <option selected="true" disabled="disabled">Izaberi...</option>
                                    @foreach($quizzes as $quiz)
                                        <option value="{{ $quiz->id }}">{{ $quiz->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputQuestion">Pitanje</label>
                                <input type="text" name="question[question]" class="form-control" id="inputQuestion">
                                @error('question.question')
                                <small class="form-text text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputAnswer1">1. odgovor</label>
                                <input type="text" name="answers[][answer]" class="form-control" id="inputAnswer1">
                                <input type="hidden" id="correctAnswer1" name="correct1" value="{{ 0 }}" />
                                <input type="checkbox" id="correctAnswer1" name="correct1" value="{{ 1 }}">
                                <label for="correctAnswer1">Odaberi točan odgovor</label><br>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAnswer2">2.odgovor</label>
                                <input type="text" name="answers[][answer]" class="form-control" id="inputAnswer2">

                                <!--<input type="hidden" id="correctAnswer2" name="correct[][correct]" value="{{ 0 }}" />-->
                                <input type="hidden" id="correctAnswer2" name="correct2" value="{{ 0 }}" />
                                <input type="checkbox" id="correctAnswer2" name="correct2" value="{{ 1 }}">

                                <label for="correctAnswer2"> Odaberi točan odgovor</label><br>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAnswer3">3. odgovor</label>
                                <input type="text" name="answers[][answer]"  class="form-control" id="inputAnswer3">
                                <input type="hidden" id="correctAnswer3" name="correct3" value="{{ 0 }}" />
                                <input type="checkbox" id="correctAnswer3" name="correct3" value="{{ 1 }}">
                                <label for="correctAnswer3"> Odaberi točan odgovor</label><br>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputAnswer4">4.odgovor</label>
                                <input type="text" name="answers[][answer]"  class="form-control" id="inputAnswer4">
                                <input type="hidden" id="correctAnswer4" name="correct4" value="{{ 0 }}" />
                                <input type="checkbox" id="correctAnswer4" name="correct4" value="{{ 1 }}">
                                <label for="correctAnswer4"> Odaberi točan odgovor</label><br>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-outline-primary btn-block">Dodaj</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
