@extends('user.app')

@section('bg-img',Storage::disk('local')->url($post->image))

@section('head')
<link rel="stylesheet" href="{{ asset('user/css/prism.css') }}">
@endsection

@section('title',$post->title)

@section('sub-heading',$post->subtitle)

@section('main-content')
<article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <small>Created at {{$post->created_at->diffForHumans()}}</small>
                 @foreach ($post->categories as $category)
                 <a href="{{url('/post/category',$category->slug)}}">
                     <small class="pull-right" style="margin-right: 20px">
                   {{$category->name}}
                   </small>
                 </a>
                
                    @endforeach
                
                    {!!htmlspecialchars_decode($post->body)!!}

                <h3>Tag Clouds</h3>
                @foreach ($post->tags as $tag)
                <a href="{{url('/post/tag',$tag->slug)}}">
                <small class="pull-left" style="margin-right: 20px;border-radius: 5px;border: 1px solid grey;padding: 5px;">
                   {{$tag->name}}
                   </small></a>
                
                    @endforeach
                </div>
            </div>
        </div>
    </article>

    <hr>
@endsection
@section('footer')
<script src="{{ asset('user/js/prism.js') }}"></script>

@endsection