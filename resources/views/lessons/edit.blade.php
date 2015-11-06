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
                {!! Form::open(array('url' => '/lessons/update', 'method' => 'POST', 'files'=>true)) !!}
                {!! Form::hidden('id',$lesson->id);!!}

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                    {!! Form::text('name', $lesson->name, array('class' => 'mdl-textfield__input'));!!}
                    {!! Form::label('name', 'Nom', array('class' => 'mdl-textfield__label'));!!}
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-custom">
                    {!! Form::label('date', 'Date du cours');!!}
                    {!! Form::input('date', 'date', null, [ 'placeholder' => 'Date'] ); !!}
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                    {!! Form::textarea('content', $lesson->content, array('class' => 'mdl-textfield__input', 'id' => 'trumbowyg-demo', 'rows' => 3));!!}
                    {!! Form::label('content', 'Description', array('class' => 'mdl-textfield__label'));!!}
                </div>

                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-custom">
                    {!! Form::label('category', 'Catégories du groupe');!!}
                    {!! Form::select('category', $list_group,$lesson->category_id );!!}
                </div>

                @unless ($lesson->medias->isEmpty())
                    @foreach($lesson->medias as $media)
                        {!! Form::open(array('url' => '/lessons/update_image', 'method' => 'POST', 'files'=>true)) !!}
                        {!! Form::hidden('id',$media->id);!!}
                        {!! Form::label('Titre du document', 'Titre du document');!!}
                        {!! Form::text('title_document',$media->name);!!}
                        {!! Form::file('image');!!}
                        <a href="/uploads/{{$media->path}}" class="lightbox"> Voir le document</a>
                        {!! Form::submit('Envoyer', array('class' => 'send-doc')); !!}


                    @endforeach
                @endunless
                <br>
                <br>
                {!! Form::submit('Valider', array('class' => 'mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored')); !!}


                {!! Form::close() !!}
                {!! HTML::script('js/trumbowyg.js'); !!}


            </div>

    </section>

@stop
