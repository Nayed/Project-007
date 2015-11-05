@extends('app')

@section('content')
 @if (count($users) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Liste des users
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Table Headings -->
                    <thead>
                        <th>Name</th>
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
                            <tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
    
    <a class="btn btn-primary" href="/users/create" role="button">Ajouter un utilisateur</a>
    </form>
@endsection
@endsection




   