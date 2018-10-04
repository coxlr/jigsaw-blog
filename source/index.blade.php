@extends('_layouts.master')

@section('body')
<h1>@{{ test }}</h1>

<Timer 
         starttime="Oct 1, 2018 09:00:00" 
         endtime="Sep 8, 2019 16:00:00" 
         trans='{  
         "day":"Day",
         "hours":"Hours",
         "minutes":"Minuts",
         "seconds":"Seconds",
         "expired":"Event has been expired.",
         "running":"Till the end of event.",
         "upcoming":"Till start of event.",
         "status": {
            "expired":"Expired",
            "running":"Running",
            "upcoming":"Future"
           }}'
         ></Timer>
@endsection
