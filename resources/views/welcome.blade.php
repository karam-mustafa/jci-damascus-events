@extends('layouts.main')

@section('content')
    @component('components.logo-center')@endcomponent

    <img class="w-100" src="{{asset('/images/event-background.jpg')}}" />

    <div class="event-introduction text-center">
        <h1> {{trans('global.titles.event_introduction')}} </h1>
        <p> {{trans('global.texts.event_introduction')}} </p>
    </div>
@endsection
