@extends('user.app')
@section('bg-img',asset('user/img/home-bg.jpg'))

@section('title','Tanvir`s Blog')

@section('sub-heading','Learn New Things Everyday')

@section('head')

<style>
    .fa-thumbs-up:hover{
    color: #f41115;
    }
</style>
@endsection

@section('main-content')

<div class="container">
        <div class="row" id="app">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            @foreach ($posts as $post)
          
           
                <div class="post-preview">
                    <a href="{{url('post',$post->slug)}}">
                        <h2 class="post-title">
                           {{$post->title}}
                        </h2>
                        <h3 class="post-subtitle">
                            {{$post->subtitle}}
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> {{$post->created_at->diffForHumans()}}
                    <a href="">
                    <small>0</small>
                    <i class="fa fa-thumbs-up"></i>
                    </a>

                    </p>
                </div>

                 @endforeach
                <hr>
               
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                    {{$posts->links()}}

                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

@endsection