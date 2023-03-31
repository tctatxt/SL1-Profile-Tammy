
@extends('layouts')
@section('container')
  <div class="header fluid">
    <div class="teksH">
      <H1>Welcome To My House!</H1>
      <h6>Hi, You can call me Tami, Tumu. I am a home owner who is interested in the world of programming, both frontend and backend. Currently, I'm studying to improve my design skills. Let's take a look inside my house</h6>
    </div>
    <img src="Home.png" alt="">
  </div>
  <div class="how" id="howGod" data-aos="fade-right">
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
  <div class="mySkill ps-5 pe-5 mt-3" id="mySkill">
    <H1 class="d-flex justify-content-center">My Skill</H1>
    <div class="oneskill">
      <h4>Pyhton</h4>
      <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-warning text-dark" style="width: 75%">75%</div>
      </div>
    </div>
    <div class="oneskill">
      <h4>Java</h4>
      <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-info text-dark" style="width: 50%">50%</div>
      </div>
    </div>
    <div class="oneskill">
      <h4>C/C++</h4>
      <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-warning text-dark" style="width: 75%">75%</div>
      </div>
    </div>
    <div class="oneskill">
      <h4>R</h4>
      <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-success" style="width: 25%">25%</div>
      </div>
    </div>
    <div class="oneskill">
      <h4>HTML/CSS</h4>
      <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-warning text-dark" style="width: 75%">75%</div>
      </div>
    </div>
    <div class="oneskill">
      <h4>JavaScript</h4>
      <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar bg-success" style="width: 25%">25%</div>
      </div>
    </div>
  </div>
  <div class="myarticel d-flex flex-column justify-content-center mt-4" id="myarticel">
    <h1 class="d-flex justify-content-center">My Experience</h1>
    <p class="d-flex justify-content-center">Here are some of the projects I worked on during PPTI:</p>
    
    <div class="articles-fluid d-flex flex-row justify-content-evenly text-reset " data-aos="fade-left">
      <div class="card" style="width: 18rem;">
        <img src="fugemy.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-reset">FuGemy</h5>
        <p class="card-text text-reset">Fugemy is a website that provides various courses and has trained instructors</p>
      </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="facedec.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-reset">FaceDec</h5>
        <p class="card-text text-reset">FacaDe is a website that provides automatic face detection services</p>
      </div>
    </div>
    <div class="card" style="width: 18rem;">
      <img src="poorbye.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-reset">Poorbye</h5>
      <p class="card-text text-reset">Poorbye is a website for managing finances such as recording, analysis and reports.</p>
    </div>
  </div>
</div>
    </div>
  </div>
  <div class="mySchool ps-5 pe-5 mt-4" id="mySchool">
    <h1 class="d-flex justify-content-center mb-2">My Education</h1>
    <div class="school">
      <img src="/sekolah.jpg" alt="">
      <div class="schoolteks">
        <h2>SD-SMA Yos Sudarso Karawang</h2>
        <p>If there are new kids at this school, I can tell them horror stories, the funniest stories at school, who the teachers have taught, and how this school was built.</p>
      </div>
    </div>
  </div>

  <div class="hoby" id="hob">
    <h1>My Hobby</h1>
    <div class="hobBox" data-aos="fade-up">
        <div class="hobby">
          <img src="pict1.png" alt="">
          <div class="teksHobby">
            <h6>Writing</h6>
            <p>I really like this activity. I like to make stories and articles (except papers or journals). I've written several articles, if you want to see them, you can scroll it</p> 
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

<div class="myarticel d-flex flex-column justify-content-center mt-4" id="myarticel">
  <h1 class="d-flex justify-content-center">My Article</h1>
  <p class="d-flex justify-content-center">Here is my article, you can see:</p>
  <div class="articles-fluid d-flex flex-row justify-content-evenly text-reset " data-aos="fade-left">
    @foreach ($kumpul_articel as $ar)
  <div class="card" style="width: 18rem;">
    <a href="/artikel/{{$ar["slug"]}}" class="text-reset text-decoration-none">
      <img src="{{$ar["image"]}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title text-reset">{{$ar["title"]}}</h5>
      <p class="card-text text-reset">{{$ar["excerpt"]}}</p>
      <a href="/artikel/{{$ar["slug"]}}" class="btn btn-outline-primary d-flex justify-content-center mt-2">Klik here</a>
    </div>
    </a>
  </div>
  @endforeach
  </div>
</div>
<div class="myGalery-fluid mt-4" id="myGalery">
  <h1 class="d-flex justify-content-center">My Galery</h1>
  <p class="d-flex justify-content-center">Here is a wall to hang up my creations (well, you can focus on the image instead of the text):</p>
    <div class="galBox" data-aos="fade-up">
        <img src="/renungan1.png" alt="" class=" rounded w-25">
        <img src="/renungan2.png" alt="" class=" rounded w-25">
        <img src="/background.png" alt="" class=" rounded w-25">

    </div>
</div>

<div class="myContact" id="myContact">
  <h1 class="d-flex justify-content-center">My Contact</h1>

</div>

@endsection