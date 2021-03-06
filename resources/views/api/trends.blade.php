@extends('layout')
@section('title', 'Trends')

@section('content')
<nav class="nav-submenu">
    @yield('title')
</nav>
<section class="tweet tweet-odd">
    <form method="GET" action="{{ url('trends') }}">
        <select name="location">
            @foreach($locations as $location)
            <option value="{{ $location->woeid }}"@if($curent_location == $location->woeid) selected @endif>{{ $location->name }}</option>
            @endforeach
        </select>
        <button type="submit">Select</button>
    </form>
</section>
@foreach($results as $result)
<section class="tweet {{ $result->class }}">
    <strong><a href="{{ url('search?q=' . $result->query . '&result_type=mixed') }}">{{ $result->name }}</a></strong>@if($result->tweet_volume != '') <br /><small>{{ $result->tweet_volume }} tweets</small> @endif
</section>
@endforeach
@endsection