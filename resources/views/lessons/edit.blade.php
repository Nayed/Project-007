@extends('app')

@section('content')


<form method="POST" action="/lessons/update" accept-charset="UTF-8">
		{!! csrf_field() !!} 
		
		<input name="id" type="hidden" id="id" value="{{$lesson->id}}" >   
		<label for="nom">Nom : </label>    
		<input name="name" type="text" id="name" value="{{$lesson->name}}" > </br>   
		
	    <label for="nom">Contenu </label>    
		<textarea name="content" id="content" rows="5" cols="10" > {{$lesson->content}}  </textarea>    

		<input type="submit" value="Envoyer !">	
</form>
@stop
