@extends('layout')
@section('title', 'Upload')

@section('content')
<nav class="sub-menu">
    @yield('title')
</nav>
<section class="tweet even">
    Upload Image | <a href="{{ url('#') }}">Upload Video</a> (soon)
</section>
<section>
    <form method="POST" action="{{ url('upload') }}" enctype="multipart/form-data">
        Image 1 (required, png/jpg/bmp/gif, <= 5 MB) :<br />
        <input type="file" name="image1" required>
        Image 2 (optional) :<br />
        <input type="file" name="image2">
        Image 3 (optional) :<br />
        <input type="file" name="image3">
        Image 4 (optional) :<br />
        <input type="file" name="image4">
        Text :
        <textarea id="status" name="tweet" required></textarea>
        @if (Cookie::get('citcuit_session4'))
        <label><input type="checkbox" name="fb" id="fb" value="yes"> Share to Facebook</label><br />
        @else
        <a href="{{ url('settings/facebook') }}">Share to Facebook</a><br />
        @endif
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit">Tweet</button>
    </form>
</section>
@endsection