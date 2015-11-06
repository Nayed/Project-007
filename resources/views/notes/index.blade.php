
@extends('app')

@section('content')


<section id="add-note-cours">

 {!! Form::open(array('url' => '/notes/redirect_note', 'method' => 'POST', 'files'=>true)) !!}

 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-custom">

 {!! Form::label('cours', 'Liste de vos cours');!!}
 {!! Form::select('lessons',  ($lessons)  ); !!}
</div>
 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-custom">

 {!! Form::submit('Click Me!', array('class' => 'mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored')); !!}
</div>

 {!! Form::close() !!}

</section>




@stop


