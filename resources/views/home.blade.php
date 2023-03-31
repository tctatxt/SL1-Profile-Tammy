
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
  <h1>My Contact</h1>
  <div class="hubbox">
    <div class="hub">
      <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M31.6825 24.3517C29.735 24.3517 27.8508 24.035 26.0933 23.465C25.818 23.3717 25.5219 23.3578 25.2391 23.425C24.9563 23.4922 24.6981 23.6378 24.4942 23.845L22.0083 26.9642C17.5275 24.8267 13.3317 20.7892 11.0992 16.15L14.1867 13.5217C14.6142 13.0783 14.7408 12.4608 14.5667 11.9067C13.9808 10.1492 13.68 8.265 13.68 6.3175C13.68 5.4625 12.9675 4.75 12.1125 4.75H6.63417C5.77917 4.75 4.75 5.13 4.75 6.3175C4.75 21.0267 16.9892 33.25 31.6825 33.25C32.8067 33.25 33.25 32.2525 33.25 31.3817V25.9192C33.25 25.0642 32.5375 24.3517 31.6825 24.3517Z"
          fill="#59606D"
        />
      </svg>
      <p class="location">+62 813-862-82110</p>
    </div>
    <div class="hub1">
      <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M19.0001 3.16699C23.302 3.16699 23.8387 3.18283 25.5266 3.26199C27.2128 3.34116 28.3607 3.60558 29.3709 3.99824C30.4159 4.40041 31.2962 4.94508 32.1766 5.82383C32.9817 6.61533 33.6047 7.57276 34.0022 8.62949C34.3932 9.63807 34.6592 10.7876 34.7384 12.4738C34.8128 14.1617 34.8334 14.6984 34.8334 19.0003C34.8334 23.3022 34.8176 23.839 34.7384 25.5268C34.6592 27.2131 34.3932 28.361 34.0022 29.3712C33.6058 30.4285 32.9827 31.3861 32.1766 32.1768C31.3849 32.9817 30.4275 33.6046 29.3709 34.0024C28.3623 34.3935 27.2128 34.6595 25.5266 34.7387C23.8387 34.8131 23.302 34.8337 19.0001 34.8337C14.6982 34.8337 14.1614 34.8178 12.4736 34.7387C10.7873 34.6595 9.63941 34.3935 8.62925 34.0024C7.5721 33.6057 6.6145 32.9827 5.82358 32.1768C5.01831 31.3855 4.39531 30.428 3.998 29.3712C3.60533 28.3626 3.34091 27.2131 3.26175 25.5268C3.18733 23.839 3.16675 23.3022 3.16675 19.0003C3.16675 14.6984 3.18258 14.1617 3.26175 12.4738C3.34091 10.786 3.60533 9.63966 3.998 8.62949C4.39421 7.57211 5.01735 6.61442 5.82358 5.82383C6.61473 5.01827 7.57226 4.39523 8.62925 3.99824C9.63941 3.60558 10.7857 3.34116 12.4736 3.26199C14.1614 3.18758 14.6982 3.16699 19.0001 3.16699ZM19.0001 11.0837C16.9004 11.0837 14.8868 11.9177 13.4022 13.4024C11.9175 14.8871 11.0834 16.9007 11.0834 19.0003C11.0834 21.1 11.9175 23.1136 13.4022 24.5983C14.8868 26.0829 16.9004 26.917 19.0001 26.917C21.0997 26.917 23.1133 26.0829 24.598 24.5983C26.0827 23.1136 26.9167 21.1 26.9167 19.0003C26.9167 16.9007 26.0827 14.8871 24.598 13.4024C23.1133 11.9177 21.0997 11.0837 19.0001 11.0837ZM29.2917 10.6878C29.2917 10.1629 29.0832 9.65951 28.7121 9.28834C28.3409 8.91718 27.8375 8.70866 27.3126 8.70866C26.7877 8.70866 26.2843 8.91718 25.9131 9.28834C25.5419 9.65951 25.3334 10.1629 25.3334 10.6878C25.3334 11.2127 25.5419 11.7161 25.9131 12.0873C26.2843 12.4585 26.7877 12.667 27.3126 12.667C27.8375 12.667 28.3409 12.4585 28.7121 12.0873C29.0832 11.7161 29.2917 11.2127 29.2917 10.6878ZM19.0001 14.2503C20.2599 14.2503 21.468 14.7508 22.3588 15.6416C23.2496 16.5324 23.7501 17.7405 23.7501 19.0003C23.7501 20.2601 23.2496 21.4683 22.3588 22.3591C21.468 23.2499 20.2599 23.7503 19.0001 23.7503C17.7403 23.7503 16.5321 23.2499 15.6413 22.3591C14.7505 21.4683 14.2501 20.2601 14.2501 19.0003C14.2501 17.7405 14.7505 16.5324 15.6413 15.6416C16.5321 14.7508 17.7403 14.2503 19.0001 14.2503Z"
          fill="#59606D"
        />
      </svg>
      <p class="locationx">@tctatxt</p>
    </div>
  </div>
  
</div>

@endsection