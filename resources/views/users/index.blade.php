@extends('app')

@section('content')
<section id="list-user">

 @if (count($users) > 0)
     <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
         <thead>
         <tr>
             <th>Nom</th>
             <th>Section</th>
             <th>Edit</th>
             <th>Supprimer</th>
         </tr>
         </thead>
         <tbody>
         @foreach ($users as $user)
             <tr>
                 <!-- Task Name -->
                 <td class="table-text">
                     {{ $user->name }}
                 </td>
                 <td class="table-text">
                     {{ $user->category->name }}
                 </td>
                 <td>
                    <form action="/user/edit/{{ $user->id }}" method="GET">
                        {{ csrf_field() }}
            
                        <button style="color:white">Edit</button>
                    </form>
                </td>
                 <td>
                    <form action="/user/{{ $user->id }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
            
                        <button style="color:white">Supprimer</button>
                    </form>
                </td>
             </tr>
         @endforeach
         </tbody>
     </table>


<<<<<<< Updated upstream
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
                                    <form action="/user/edit/{{ $user->id }}" method="POST">
                                            {{ csrf_field() }}

                                            <button>Edit</button>
                                    </form>
                                </td>
                            <tr> 
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
=======
        
>>>>>>> Stashed changes
    @endif
     <button class="timeline-post-button mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab">
         <a class="add-user" href="/users/create" role="button">
             <i class="material-icons">add</i>
         </a>
     </button>

</section>
@endsection




   