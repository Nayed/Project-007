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
            <form class="form-horizontal" role="form" autocomplete="off" method="POST" action="{{ url('/user/store') }}">
                {!! csrf_field() !!}

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                    <input type="text" class="mdl-textfield__input" name="name" value="{{ old('name') }}" required>
                    <label class="mdl-textfield__label" for="sample3">Nom</label>
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                    <input type="email" class="mdl-textfield__input" name="email" value="{{ old('email') }}" required>
                    <label class="mdl-textfield__label" for="sample3">E-Mail</label>
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                    <input type="password" class="mdl-textfield__input" name="password" value="{{ old('password') }}" required>
                    <label class="mdl-textfield__label" for="sample3">Password</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label select-wrapper">
                    <select class="form-control" name="group_id">
                        @foreach($groups as $group)
                            <option value="{!! $group->id !!}">{!! $group->name !!}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label select-wrapper">
                    <select class="form-control" name="category_id">
                        @foreach($categories as $categ)
                            <option value="{!! $categ->id !!}">{!! $categ->name !!}</option>
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
