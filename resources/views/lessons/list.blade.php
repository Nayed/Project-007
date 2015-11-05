@extends('app')

@section('content')
 @if (count($lessons) > 0)
        <div class="panel panel-default">
            
            <div class="panel-heading">
                Liste des cours
            </div>
            <form action="/lessons/add" method="GET">
                {{ csrf_field() }}

                 <button>Ajouter une leçon</button>
            </form>
            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Intitulé</th>
                        <th>Contenu</th>
                        <th>Date</th>
                        <th>Actions</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
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

                                            <button>Editer une leçon</button>
                                        </form>
                                    </td>

                                <td>
                                    <!-- TODO: Delete Button -->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection




   