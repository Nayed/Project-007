<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
  	{!! HTML::style('css/trumbowyg.css') !!}
              
@extends('app')

@section('content')

<section id="add-lesson">
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
      {!! Form::open(array('url' => '/lessons/add_lesson', 'method' => 'POST', 'files'=>true, 'class' => 'form-horizontal')) !!}

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
        {!! Form::text('name', '', array('class' => 'mdl-textfield__input'));!!}
        {!! Form::label('name', 'Nom', array('class' => 'mdl-textfield__label'));!!}
      </div>

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-custom">
        {!! Form::label('date', 'Date du cours');!!}
        {!! Form::input('date', 'date', null, [ 'placeholder' => 'Date'] ); !!}
      </div>

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
        {!! Form::textarea('content', '', array('class' => 'mdl-textfield__input', 'id' => 'trumbowyg-demo', 'rows' => 3));!!}
        {!! Form::label('content', 'Description', array('class' => 'mdl-textfield__label'));!!}
      </div>

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-custom">
        {!! Form::label('category', 'Catégories du groupe');!!}
        {!! Form::select('category', ($list_group));!!}
      </div>

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
        {!! Form::file('images[]', array('multiple'=>true, 'class' => '')) !!}
      </div>

      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
        {!! Form::text('title_document', '', array('class' => 'mdl-textfield__input'));!!}
        {!! Form::label('Titre du document', 'Titre du document', array('class' => 'mdl-textfield__label'));!!}
      </div>

      {!! Form::submit('Valider', array('class' => 'mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored')); !!}


      {!! Form::close() !!}
      {!! HTML::script('js/trumbowyg.js'); !!}


    </div>


</section>

@stop


