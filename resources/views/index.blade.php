@extends('layouts.master')

@section('header')
    <header class="intro-header" style="background-image: url('/img/cch-post-bg-filter.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Melbourne Cocoaheads</h1>
                        <hr class="small">
                        @if($event)
                            <p class="subheading">
                                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                <a href="{{ $event->url() }}" style="color:white">Next Meetup</a> &rarr; {{ $event->starts_at->format('l jS \\of F Y \\@ g:iA') }}
                            </p>
                            <p class="subheading">
                                <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                                {{ $event->location }} - {{ $event->address_display }}
                            </p>
                        @else
                            <p class="subheading">
                                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                No upcoming events scheduled.
                            </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @foreach($posts as $post)
                    <div class="post-preview">
                        <a href="{{ $post->url() }}">
                            <h2 class="post-title">
                                {{ $post->title }}
                            </h2>
                            <h3 class="post-subtitle">
                                {{ $post->subtitle }}
                            </h3>
                        </a>
                        <p class="post-meta">Posted on {{ $post->created_at->format('l jS \\of F Y') }}</p>
                    </div>
                    <hr>
                @endforeach

                <ul class="pager">
                    <li class="next">
                        <a href="{{ route('posts') }}">View All Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection