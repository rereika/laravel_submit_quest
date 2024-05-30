@extends('layouts.app')

@section('content')
<div class="home-page">

  <div class="banner">
    <div class="container">
      <h1 class="logo-font">conduit</h1>
      <p>A place to share your knowledge.</p>
    </div>
  </div>

  <div class="container page">
    <div class="row">

      <div class="col-md-9">
        <div class="feed-toggle">
          <ul class="nav nav-pills outline-active">
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Your Feed</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Global Feed</a>
            </li>
          </ul>
        </div>

        <div class="post-preview">
          <div class="post-meta">
            <a href="{{ route('profile.show', ['username' => 'eric-simons']) }}"><img src="http://i.imgur.com/Qr71crq.jpg" /></a>
            <div class="info">
              <a href="{{ route('profile.show', ['username' => 'eric-simons']) }}" class="author">Eric Simons</a>
              <span class="date">January 20th</span>
            </div>
            <button class="btn btn-outline-primary btn-sm pull-xs-right">
              <i class="ion-heart"></i> 29
            </button>
          </div>
          <a href="{{ route('post.show', ['slug' => 'how-to-build-webapps-that-scale']) }}" class="preview-link">
            <h1>How to build webapps that scale</h1>
            <p>In my demo, the holy grail layout is nested inside a document...</p>
            <span>Read more...</span>
          </a>
        </div>

        <div class="post-preview">
          <div class="post-meta">
            <a href="{{ route('profile.show', ['username' => 'albert-pai']) }}"><img src="http://i.imgur.com/N4VcUeJ.jpg" /></a>
            <div class="info">
              <a href="{{ route('profile.show', ['username' => 'albert-pai']) }}" class="author">Albert Pai</a>
              <span class="date">January 20th</span>
            </div>
            <button class="btn btn-outline-primary btn-sm pull-xs-right">
              <i class="ion-heart"></i> 32
            </button>
          </div>
          <a href="{{ route('post.show', ['slug' => 'the-song-you-wont-ever-stop-singing']) }}" class="preview-link">
            <h1>The song you won't ever stop singing. No matter how hard you try.</h1>
            <p>In my demo, the holy grail layout is nested inside a document...</p>
            <span>Read more...</span>
          </a>
        </div>

      </div>

      <div class="col-md-3">
        <div class="sidebar">
          <p>Popular Tags</p>

          <div class="tag-list">
            <a href="#" class="label label-pill label-default">programming</a>
            <a href="#" class="label label-pill label-default">javascript</a>
            <a href="#" class="label label-pill label-default">angularjs</a>
            <a href="#" class="label label-pill label-default">react</a>
            <a href="#" class="label label-pill label-default">mean</a>
            <a href="#" class="label label-pill label-default">node</a>
            <a href="#" class="label label-pill label-default">rails</a>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>
@endsection
