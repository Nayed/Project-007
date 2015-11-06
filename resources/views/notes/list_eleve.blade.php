@extends('app')

@section('content')
<section id="list-note">
    @if (count($users) > 0)

        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">

            <!-- Table Headings -->
            <thead>
            <th>Prénom de l'éleve</th>
            <th>Note</th>
            <th>Actions</th>
            <th>&nbsp;</th>
            </thead>

            <!-- Table Body -->
            <tbody>
            @foreach ($users as $user)

                <tr>
                    <!-- Task Name -->
                    <td class="table-text">
                        <div>{{ $user->name }}</div>
                    </td>
                    @unless ($user->notes->isEmpty())
                        <td class="table-text">
                            <div>  {{ ($user->notes[0]->value) }}</div>
                        </td>
                    @endunless

                    @unless (!$user->notes->isEmpty())
                        <td class="table-text">
                            <div>Non noté</div>
                        </td>
                    @endunless

                    <td>
                        <form action="/notes/add_note/{{$id_lecon}}/{{ $user->id }}" method="GET">
                            {{ csrf_field() }}
                            <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--raised mdl-button--colored">Ajouter une note</button>
                        </form>


                    </td>


                    <td>
                        <!-- TODO: Delete Button -->
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    @endif
</section>

@endsection




   