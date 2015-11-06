
@extends('app')

@section('content')
<section id="note-edit">
 <p>Ajouter une note à : {{ $user->name }}  </p>

 {!! Form::open(array('url' => '/notes/update_note', 'method' => 'POST')) !!}

 {!! Form::hidden('id',$user->id);!!}
 {!! Form::hidden('id_lecon',$id_lecon);!!}
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-custom">
 {!! Form::label('note', 'Note', array('class' => 'mdl-textfield__label'));!!}
 {!! Form::text('note', '' , array('class' => 'mdl-textfield__input'));!!}
</div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-custom">
 {!! Form::submit('Click Me!', array('class' => 'mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored')); !!}
</div>

 {!! Form::close() !!}
</section>



@stop


