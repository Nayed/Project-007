@extends('app')

@section('content')
 @if (count($lessons) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Liste des cours
            </div>

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
                                    <div>{{ $lesson->content }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $lesson->date }}</div>
                                </td>
                                <td>
                                        <form action="/lessons/edit/{{ $lesson->id }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('POST') }}
                                
                                            <button>Editer cours</button>
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
@endsection




   