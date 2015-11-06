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



    @endif
     <button class="timeline-post-button mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab">
         <a class="add-user" href="/users/create" role="button">
             <i class="material-icons">add</i>
         </a>
     </button>

</section>
@endsection




   