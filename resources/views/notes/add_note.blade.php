
@extends('app')

@section('content')
<section id="add-note">
 <p>Ajouter une note à : {{ $user->name }}  </p>

 {!! Form::open(array('url' => '/notes/update_note', 'method' => 'POST')) !!}

 {!! Form::hidden('id',$user->id);!!}
 {!! Form::hidden('id_lecon',$id_lecon);!!}
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-custom">
  {!! Form::label('note', 'Note', array('class' => 'mdl-textfield__label'))!!}
  {!! Form::text('note', '', array('class' => 'mdl-textfield__input'))!!}
</div>

 {!! Form::submit('Envoyer', array('class' => 'mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored')) !!}


 {!! Form::close() !!}
</section>



@stop


