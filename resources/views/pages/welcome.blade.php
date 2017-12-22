@extends('main')

@section('title', '| Homepage')

@section('content')
<section class="carousel slider" id="slider" data-ride="carousel">
                <div class="carousel-inner">

                    <div class="item active">

                        <img src="{{asset('img/01-slide.jpg')}}" class="img-responsive">

                    </div>
                    <div class="item">

                        <img src="{{asset('img/02-slide.jpg')}}" class="img-responsive">

                    </div>
                    <div class="item">

                        <img src="{{asset('img/03-slide.jpg')}}" class="img-responsive">

                    </div>
                    
                </div>

                <a class=" left carousel-control" href="#slider" role="button" data-slide="prev">

                    <span class="glyphicon glyphicon-chevron-left"></span>

                </a>
                <a class=" right carousel-control" href="#slider" role="button" data-slide="next">

                    <span class="glyphicon glyphicon-chevron-right"></span>

                </a>

                <ol class="carousel-indicators">

                    <li data-target="#slider" data-slide-to="0" class="active"></li>
                    <li data-target="#slider" data-slide-to="1"></li>
                    <li data-target="#slider" data-slide-to="2"></li>
                    <li data-target="#slider" data-slide-to="3"></li>

                </ol>

       </section>
        <div class="row">
            <div class="col-md-12">
                <div class="jumbotron" >
                    <h1 > Recent Post!</h1>
                </div>
                
            </div>
        </div> <!-- end of header .row -->

        <div class="row">
            <div class="col-md-8">
                
                @foreach($posts as $post)

                    <div class="post">
                        <h3>{{ $post->title }}</h3>
                        <p>{{ substr(strip_tags($post->body), 0, 300) }}{{ strlen(strip_tags($post->body)) > 300 ? "..." : "" }}</p>
                        <a href="{{ url('blog/'.$post->slug) }}" class="btn btn-primary">Read More</a>
                    </div>

                    <hr>

                @endforeach

            </div>

        </div>
@stop