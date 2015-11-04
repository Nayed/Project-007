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

<div id="timeline">

	<div class="article-wrapper" id="article-s1">
		<div class="timeline-post article-date">
			<p> Semaine X </p>
			<span>29/09/15</span>
		</div>
		<article class="timeline-post">
			<button class="timeline-post-button mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab">
				<a href="/edit" title="edit">
					<i class="material-icons">add</i>
				</a>
			</button>
			<h2>HTML/CSS</h2>
			<label>Par Stephane d'Ipformation</label>
			<div class="summary">
				Cette semaine porte sur le html et le css, autrement dis, la base !
			</div>
			<div class="doc-wrapper">
				<i class="icon-doc"></i>
				<span class="note">20</span>
				<i class="icon-doc"></i>
				<i class="icon-doc"></i>
			</div>
		</article>
	</div>
	<div class="article-wrapper odd" id="article-s2">
		<div class="timeline-post article-date">
			<p> Semaine X </p>
			<span>29/09/15</span>
		</div>
		<article class="timeline-post">
			<button class="timeline-post-button mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab">
				<a href="/edit" title="edit">
					<i class="material-icons">add</i>
				</a>
			</button>
			<h2>HTML/CSS</h2>
			<label>Par Stephane d'Ipformation</label>
			<div class="summary">
				Cette semaine porte sur le html et le css, autrement dis, la base !
			</div>
			<div class="doc-wrapper">
				<i class="icon-doc"></i>
				<span class="note">20</span>
				<i class="icon-doc"></i>
				<i class="icon-doc"></i>
			</div>
		</article>
	</div>
	<div class="article-wrapper" id="article-s3">
		<div class="timeline-post article-date">
			<p> Semaine X </p>
			<span>29/09/15</span>
		</div>
		<article class="timeline-post">
			<button class="timeline-post-button mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab">
				<a href="/edit" title="edit">
					<i class="material-icons">add</i>
				</a>
			</button>
			<h2>HTML/CSS</h2>
			<label>Par Stephane d'Ipformation</label>
			<div class="summary">
				Cette semaine porte sur le html et le css, autrement dis, la base !
			</div>
			<div class="doc-wrapper">
				<i class="icon-doc"></i>
				<span class="note">20</span>
				<i class="icon-doc"></i>
				<i class="icon-doc"></i>
			</div>
		</article>
	</div>
	<div class="article-wrapper odd" id="article-s4">
		<div class="timeline-post article-date">
			<p> Semaine X </p>
			<span>29/09/15</span>
		</div>
		<article class="timeline-post">
			<button class="timeline-post-button mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab">
				<a href="/edit" title="edit">
					<i class="material-icons">add</i>
				</a>
			</button>
			<h2>HTML/CSS</h2>
			<label>Par Stephane d'Ipformation</label>
			<div class="summary">
				Cette semaine porte sur le html et le css, autrement dis, la base !
			</div>
			<div class="doc-wrapper">
				<i class="icon-doc"></i>
				<span class="note">20</span>
				<i class="icon-doc"></i>
				<i class="icon-doc"></i>
			</div>
		</article>
	</div>
	<div class="article-wrapper" id="article-s5">
		<div class="timeline-post article-date">
			<p> Semaine X </p>
			<span>29/09/15</span>
		</div>
		<article class="timeline-post">
			<button class="timeline-post-button mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab">
				<a href="/edit" title="edit">
					<i class="material-icons">add</i>
				</a>
			</button>
			<h2>HTML/CSS</h2>
			<label>Par Stephane d'Ipformation</label>
			<div class="summary">
				Cette semaine porte sur le html et le css, autrement dis, la base !
			</div>
			<div class="doc-wrapper">
				<i class="icon-doc"></i>
				<span class="note not">N/A</span>
				<i class="icon-doc"></i>
				<i class="icon-doc"></i>
			</div>
		</article>
	</div>


</div>


@endsection