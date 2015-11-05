@extends('app')

@section('content')

 <div class="timeline-guid timeline-post">
     @unless ($lessons->isEmpty())

             @foreach($lessons as $lesson)
                 <button id="semaine-{{ $lesson->id }}" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                     <a href="#article-s{{ $lesson->id }}"> Semaine {{ $lesson->id }}</a>
                 </button>
             @endforeach

     @endunless
 </div>

     @unless ($lessons->isEmpty())
         <div id="timeline">

                 @foreach($lessons as $index => $lesson)

                 @if ( $index % 2 == 0 )
                     <div class="article-wrapper" id="article-s{{ $lesson->id }}">
                 @else
                     <div class="article-wrapper odd" id="article-s{{ $lesson->id }}">
                 @endif

                     <div class="timeline-post article-date">
                         <p> Semaine {{ $lesson->id }} </p>
                         <span>{{ date('F d, Y', strtotime($lesson->created_at)) }}</span>
                     </div>
                     <article class="timeline-post">
                         <button class="timeline-post-button mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab">
                             <a href="/lessons/edit/{{ $lesson->id }}" title="edit">
                                 <i class="material-icons">add</i>
                             </a>
                         </button>
                         <h2>HTML/CSS</h2>
                         <label>Par {{ $lesson->user->name }}</label>
                         <div class="summary">
                             {{ $lesson->content }}
                         </div>
                         <div class="doc-wrapper">

                         @unless ($lesson->medias->isEmpty())
                                 @foreach($lesson->medias as $media)
                                     <i class="icon-doc"></i>
                                     {{ $media->name }}
                                 @endforeach
                         @endunless

                         @if ( isset($user->section->note))
                             <span class="note not">{{$user->section->note}}</span>
                         @else
                             <span class="note not">N/A</span>
                         @endif
                         </div>


                     </article>
                 </div>
                 @endforeach

         </div>
     @endunless

@endsection




   

   