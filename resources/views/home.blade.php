@dd
@extends('layout')
@section('container')
<div class="header">
  <div class="teksH">
    <H1>Welcome To My House!</H1>
    <h6>Hi, You can call me Tami, Tumu. I am a home owner who is interested in the world of programming, both frontend and backend. Currently, I'm studying to improve my design skills. Let's take a look inside my house</h6>
  </div>
  <img src="Home.png" alt="">
</div>
<div class="how" id="howGod">
  <H1>How God Made Me</H1>
  <div class="pict">
    <div class="item">
      <img src="Group 1.png" alt="">
      <h5>Introvert</h5>
    </div>
    <div class="item">
      <img src="Group 2.png" alt="">
      <h5>Thinker</h5>
    </div>
    <div class="item">
      <img src="Group 3.png" alt="">
      <h5>Hard Worker</h5>
    </div>
    <div class="item">
      <img src="Group 4.png" alt="">
      <h5>Perfectionist</h5>
    </div>
  </div>
</div>
<div class="hoby" id="hob">
  <h1>My Hobby</h1>
  <div class="hobBox">
      <div class="hobby">
        <img src="pict1.png" alt="">
        <div class="teksHobby">
          <h6>Writing</h6>
          <p>I really like this activity. I like to make stories and articles (except papers or journals). I've written several articles, if you want to see them, you can press myarticel in navigation</p> 
        </div>
      </div>
      <div class="hobby">
        <img src="pict2.png" alt="">
        <div class="teksHobby">
          <h6>Sleeping</h6>
          <p>Sleep is the solution to life's problems, not clubbing, taking drugs or smoking.</p>
        </div>
      </div>
      <div class="hobby">
        <img src="pict3.png" alt="">
        <div class="teksHobby">
          <h6>Listening to Music</h6>
          <p>I like to listen to various genres of music, except the metal and dangdut genres.</p>
        </div>
      </div>
  </div>
</div>
<div class="myarticel">
  <h1>My Articel</h1>
  <p>Here is my articel, you can see:</p>
  @foreach ($articel as $ar)
  <article class="mb-5">
  <a href="/articel/{{$ar->slug}}"><h2>{{$ar->title}}</h2></a>
  <h2>{{$ar->excerpt}}</h2>
  </article>
</div>

@endsection