
@extends('app')

@section('content')

<p>Ajouter une note à : {{ $user->name }}  </p>

 {!! Form::open(array('url' => '/lessons/update_note', 'method' => 'POST')) !!}
                 
{!! Form::hidden('id',$user->id);!!}

 {!! Form::label('note', 'Note');!!}
 {!! Form::text('note');!!}
  </br>

  {!! Form::submit('Click Me!'); !!}
 

 {!! Form::close() !!}


@stop


