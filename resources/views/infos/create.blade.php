@extends('app')

@section('content')

<section id="add-user-form">
    <div class="mdl-card mdl-shadow--2dp wrapper">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="mdl-card__supporting-text">
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/info/store') }}">
                {!! csrf_field() !!}

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                    <input type="text" class="mdl-textfield__input" name="title" value="{{ old('title') }}" required>
                    <label class="mdl-textfield__label" for="sample3">Titre</label>
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                    <input type="text" class="mdl-textfield__input" name="content" value="{{ old('content') }}">
                    <label class="mdl-textfield__label" for="sample3">Contenu</label>
                </div>
                
                <div class="form-group">
                    <select class="form-control" name="lesson_id">
                        @foreach($lessons as $lesson)
                            <option value="{!! $lesson->id !!}">{!! $lesson->id !!}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored">
                    Ajouter
                </button>

            </form>

        </div>
</section>
@endsection
