@extends('_layouts.master')

@section('body')
    <div class="flex flex-wrap flex-1 justify-center">
<h1 class="w-full text-center">@{{ test }}</h1>

<Timer 
         starttime="Oct 1, 2018 09:00:00" 
         endtime="Sep 8, 2019 16:00:00" 
         trans='{  
         "day":"Day",
         "hours":"Hours",
         "minutes":"Minuts",
         "seconds":"Seconds",
         "expired":"Event has been expired.",
         "running":"Till site launch.",
         "upcoming":"Till start of event.",
         "status": {
            "expired":"Expired",
            "running":"In Progress",
            "upcoming":"Future"
           }}'
         ></Timer>
    </div>
@endsection
