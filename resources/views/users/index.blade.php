@extends('app')

@section('content')
<section id="list-user">

 @if (count($users) > 0)
     <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
         <thead>
         <tr>
             <th>Nom</th>
             <th>Section</th>
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
                     {{ $user->name }}
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




   