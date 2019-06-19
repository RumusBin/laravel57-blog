@extends('layouts.app')
@section('title', 'Welcome to my blog')
@section('content')
    <div class="container">
        <section class="hero is-info is-medium is-bold">
            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        <br>sed eiusmod tempor incididunt ut labore et dolore magna aliqua</h1>
                </div>
            </div>
        </section>
        <div class="section">
            <div class="row columns is-multiline">
                @foreach($content['last_posts'] as $last_post)
                <div class="column is-one-third">
                    <div class="card large round">
                        <div class="card-image">
                            <figure class="image">
                                <img src="/images/{{$last_post->postImage}}" alt="">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-left">
                                    {{--<img src="" alt="img">--}}
                                </div>
                                <div class="media-content">
                                    <p class="title is-4 no-padding">
                                        {{$last_post->title}}
                                    </p>
                                    <div class="content">
                                        {{$last_post->content}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

