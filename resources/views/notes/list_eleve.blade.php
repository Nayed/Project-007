@extends('app')

@section('content')
 @if (count($users) > 0)
        <div class="panel panel-default">
            
            <div class="panel-heading">
                Liste des eleves de la session
            </div>
           
            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Prénom de l'éleve</th>
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
                              
                                <td>
                                        <form action="/notes/add_note/{{ $user->id }}" method="GET">
                                            {{ csrf_field() }}

                                            <button>Ajouter une note</button>
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




   