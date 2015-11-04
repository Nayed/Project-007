<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
  	{!! HTML::style('css/trumbowyg.css') !!}
              
@extends('app')

@section('content')




 {!! Form::open(array('url' => '/lessons/add_lesson', 'method' => 'POST', 'files'=>true)) !!}
 {!! Form::label('name', 'Nom');!!}
 {!! Form::text('name');!!}
  </br>
 {!! Form::label('content', 'Contenu');!!}
 {!! Form::textarea('content', '', array('id' => 'trumbowyg-demo')) !!}

   </br>

  {!! Form::label('category', 'Catégories du groupe');!!}
  {!! Form::select('category',  ($list_group)  ); !!}
 
 
 {!! Form::file('image');!!}
 
  {!! Form::submit('Click Me!'); !!}
 

 {!! Form::close() !!}
    {!! HTML::script('js/trumbowyg.js'); !!}

<script>

$('#trumbowyg-demo').trumbowyg();
</script>

@stop


