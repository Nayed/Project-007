@extends('app')

@section('content')




 {!! Form::open(array('url' => '/lessons/update', 'method' => 'POST', 'files'=>true)) !!}
 
  {!! Form::hidden('id',$lesson->id);!!}

 
 {!! Form::label('name', 'Nom');!!}
 {!! Form::text('name',$lesson->name);!!}
  </br>
 {!! Form::label('content', 'Contenu');!!}
 {!! Form::textarea('content', $lesson->content, array('id' => 'trumbowyg-demo')) !!}

   </br>

  {!! Form::label('category', 'Catégories du groupe');!!}
  {!! Form::select('category', $list_group,$lesson->category_id  ); !!}


 {!! Form::file('image');!!}
   @unless ($lesson->medias->isEmpty())
        @foreach($lesson->medias as $media)
                {!! Form::hidden('id',$media->id);!!}
                {!! Form::label('Titre du document', 'Titre du document');!!}
                {!! Form::text('title_document',$media->name);!!}
                {!! HTML::image('uploads/'.$media->path)!!}
        @endforeach
 @endunless
 
  {!! Form::submit('Click Me!'); !!}
 

 {!! Form::close() !!}




{!! HTML::script('js/trumbowyg.js'); !!}

<script>

$('#trumbowyg-demo').trumbowyg();
</script>

@stop





@stop
