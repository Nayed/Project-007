@extends('app')

@section('content')

 @unless ($lessons->isEmpty())
        <div class="panel panel-default">
      
            <div class="panel-body">

                    <!-- Table Headings -->
                 
                    <!-- Table Body -->
                    <tbody>
                        @foreach($lessons as $lesson)
                           {{ $lesson->name }}
                                @unless ($lesson->medias->isEmpty())
                                  @foreach($lesson->medias as $media)
                                    {{ $media->name }}
                                  @endforeach
                                @endunless
                        @endforeach
                    </tbody>
            </div>
        </div>
    @endunless
@endsection




   

   