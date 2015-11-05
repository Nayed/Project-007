@extends('app')

@section('content')

 <div class="timeline-guid timeline-post">
     <button id="semaine-1" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
         <a href="#article-s1"> Semaine 1</a>
     </button>
     <button id="semaine-2" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
         <a href="#article-s2"> Semaine 2</a>
     </button>
     <button id="semaine-3" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
         <a href="#article-s3"> Semaine 3</a>
     </button>
     <button id="semaine-4" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
         <a href="#article-s4"> Semaine 4</a>
     </button>
     <button id="semaine-5" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
         <a href="#article-s5"> Semaine 5</a>
     </button>

 </div>

     @unless ($lessons->isEmpty())
         <div id="timeline">

                 @foreach($lessons as $lesson)
                 <div class="article-wrapper" id="article-s1">
                     <div class="timeline-post article-date">
                         <p> Semaine X </p>
                         <span>{{ $lesson->created_at }}</span>
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
                         @unless ($lesson->medias->isEmpty())
                             <div class="doc-wrapper">
                                 @foreach($lesson->medias as $media)
                                     <i class="icon-doc"></i>
                                     {{ $media->name }}
                                 @endforeach
                             </div>
                         @endunless
                         <span class="note">20</span>

                     </article>
                 </div>
                 @endforeach

         </div>
     @endunless

@endsection




   

   