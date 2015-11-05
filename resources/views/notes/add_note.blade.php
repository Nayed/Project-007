
@extends('app')

@section('content')




 {!! Form::open(array('url' => '/lessons/add_lesson', 'method' => 'POST', 'files'=>true)) !!}
 {!! Form::label('name', 'Nom');!!}
 {!! Form::text('name');!!}
  </br>
 {!! Form::label('date', 'Date du cours');!!}
 {!! Form::text('date_start');!!}
  </br>
 {!! Form::label('content', 'Contenu');!!}
 {!! Form::textarea('content', '', array('id' => 'trumbowyg-demo')) !!}

   </br>

  {!! Form::label('category', 'Catégories du groupe');!!}
  {!! Form::select('category',  ($list_group)  ); !!}
  </br>
 {!! Form::label('Titre du document', 'Titre du document');!!}
 {!! Form::text('title_document');!!}
 </br>
{!! Form::file('images[]', array('multiple'=>true)) !!} 

  {!! Form::submit('Click Me!'); !!}
 

 {!! Form::close() !!}
    {!! HTML::script('js/trumbowyg.js'); !!}

<script>

$('#trumbowyg-demo').trumbowyg();
</script>

@stop


