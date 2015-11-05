
@extends('app')

@section('content')




 {!! Form::open(array('url' => '/notes/list_eleve', 'method' => 'POST', 'files'=>true)) !!}


  {!! Form::label('cours', 'Liste de vos cours');!!}
  {!! Form::select('lessons',  ($lessons)  ); !!}

  {!! Form::submit('Click Me!'); !!}
 

 {!! Form::close() !!}



@stop


