@extends('layouts.app')

@section('content')
<div class="post-page">

  <div class="banner">
    <div class="container">
      <h1>How to build webapps that scale</h1>

      <div class="post-meta">
        <a href="{{ route('profile.show', ['username' => 'eric-simons']) }}"><img src="http://i.imgur.com/Qr71crq.jpg" /></a>
        <div class="info">
          <a href="{{ route('profile.show', ['username' => 'eric-simons']) }}" class="author">Eric Simons</a>
          <span class="date">January 20th</span>
        </div>
        <button class="btn btn-sm btn-outline-secondary">
          <i class="ion-plus-round"></i>
          &nbsp;
          Follow Eric Simons <span class="counter">(10)</span>
        </button>
        &nbsp;&nbsp;
        <button class="btn btn-sm btn-outline-primary">
          <i class="ion-heart"></i>
          &nbsp;
          Favorite Post <span class="counter">(29)</span>
        </button>
      </div>
    </div>
  </div>

  <div class="container page">

    <div class="row post-content">
      <div class="col-md-12">
        <p>Web development technologies have evolved at an incredible clip over the past few years...</p>
        <h2 id="introducing-ionic">Introducing Ionic.</h2>
        <p>Before, building hybrid apps was a chore -- not because it was hard to build web pages, but because it was hard to build full-fledged web applications...</p>
        <h2 id="what-we-re-going-to-build">What we&#39;re going to build</h2>
        <p>We will be building an app called Songhop...</p>
      </div>
    </div>

    <hr />

    <div class="post-actions">
      <div class="post-meta">
        <a href="{{ route('profile.show', ['username' => 'eric-simons']) }}"><img src="http://i.imgur.com/Qr71crq.jpg" /></a>
        <div class="info">
          <a href="{{ route('profile.show', ['username' => 'eric-simons']) }}" class="author">Eric Simons</a>
          <span class="date">January 20th</span>
        </div>

        <button class="btn btn-sm btn-outline-secondary">
          <i class="ion-plus-round"></i>
          &nbsp;
          Follow Eric Simons <span class="counter">(10)</span>
        </button>
        &nbsp;
        <button class="btn btn-sm btn-outline-primary">
          <i class="ion-heart"></i>
          &nbsp;
          Favorite Post <span class="counter">(29)</span>
        </button>
      </div>
    </div>

    <div class="row">

      <div class="col-md-8 col-md-offset-2">

        <div class="card">
          <div class="card-block">
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <a href="{{ route('profile.show', ['username' => 'jacob-schmidt']) }}" class="comment-author">
              <img src="http://i.imgur.com/Qr71crq.jpg" class="comment-author-img" />
            </a>
            &nbsp;
            <a href="{{ route('profile.show', ['username' => 'jacob-schmidt']) }}" class="comment-author">Jacob Schmidt</a>
            <span class="date-posted">Dec 29th</span>
          </div>
        </div>

        <div class="card">
          <div class="card-block">
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          </div>
          <div class="card-footer">
            <a href="{{ route('profile.show', ['username' => 'jacob-schmidt']) }}" class="comment-author">
              <img src="http://i.imgur.com/Qr71crq.jpg" class="comment-author-img" />
            </a>
            &nbsp;
            <a href="{{ route('profile.show', ['username' => 'jacob-schmidt']) }}" class="comment-author">Jacob Schmidt</a>
            <span class="date-posted">Dec 29th</span>
            <span class="mod-options">
              <i class="ion-edit"></i>
              <i class="ion-trash-a"></i>
            </span>
          </div>
        </div>

        <form class="card comment-form">
          <div class="card
