@extends('master')
@section('titulo')
Calendario
@stop
@section('breadcrumb')
<li class="active">Calendario</li>
@stop
@section('container')
<div id="calendar"></div>
@stop
@section('css')
{{ HTML::style('libs/css/fullcalendar/fullcalendar.css') }}


@stop
@section('scripts')
{{ HTML::script('libs/js/plugins/fullcalendar/moment.min.js') }}
{{ HTML::script('libs/js/plugins/fullcalendar/fullcalendar.js') }}
{{ HTML::script('libs/js/plugins/fullcalendar/es.js') }}
<script>
    $(document).ready(function() {

    // page is now ready, initialize the calendar...
        var calendar = new Helper();
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            eventSources: [
                // your event source
                {
                        url: calendar.basePath+'/tareas', // use the `url` property
                        textColor:"red",
                        dataType : 'jsonp'




                }
            ]

        })

    });
</script>
@stop