@extends('app')

@section('content')
<section id="list-lesson">
    @if (count($lessons) > 0)

        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
            <thead>
            <tr>
                <th>Intitulé</th>
                <th>Contenu</th>
                <th>Date</th>
                <th>Actions</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($lessons as $lesson)
                    <tr>
                        <!-- Task Name -->
                        <td class="table-text">
                            <div>{{ $lesson->name }}</div>
                        </td>
                        <td class="table-text">
                            <div>{!! $lesson->content !!}</div>
                        </td>
                        <td class="table-text">
                            <div>{{ $lesson->created_at }}</div>
                        </td>
                        <td>
                            <form action="/lessons/edit/{{ $lesson->id }}" method="GET">
                                {{ csrf_field() }}

                                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored">Editer une leçon</button>
                            </form>
                        </td>

                        <td>
                            <!-- TODO: Delete Button -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button class="timeline-post-button mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab">
            <a class="add-user" href="/lesson/add" role="button">
                <i class="material-icons">add</i>
            </a>
        </button>

    @endif
</section>

@endsection




   