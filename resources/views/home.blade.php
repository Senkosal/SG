@extends('Layout.layout')

@section('title', 'Home Page')

@section('content')
    <span class="genre-title">International</span>
    <div class="music-genre-container">
        <div class="music-group-container">
            <div class="music-group">
                <div class="music-image">
                    <img src="{{asset('images/sea-of-problem.jpg')}}" alt="">
                </div>
                <span class="music-title">Sea of Problem</span>
                <div class="music-artist">
                    <div class="artist-profile-container">
                        <img src="{{asset('images/glichery.jpg')}}" alt="">
                    </div>
                    <span class="artist-name">Glichery</span>
                </div>
            </div>
        </div>
        <div class="music-group-container">
            <div class="music-group">
                <div class="music-image">
                    <img src="{{asset('images/sea-of-problem.jpg')}}" alt="">
                </div>
                <span class="music-title">Sea of Problem</span>
                <div class="music-artist">
                    <div class="artist-profile-container">
                        <img src="{{asset('images/glichery.jpg')}}" alt="">
                    </div>
                    <span class="artist-name">Glichery</span>
                </div>
            </div>
        </div>
    </div>
@endsection
