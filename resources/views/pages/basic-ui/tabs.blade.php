@extends('layout.master')

@section('content')
<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Basic Tab</h4>
        <div class="row">
          <div class="col-md-6">
            <img class="img-fluid rounded" src="{{ url('assets/images/samples/tab_preview/01.png') }}" alt="tab preview"> </div>
          <div class="col-md-6 pl-md-5">
            <h5 class="mb-4 pb-3">Vacation Home Rental Success</h5>
            <ul class="nav nav-tabs tab-basic" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#whoweare" role="tab" aria-controls="whoweare" aria-selected="true">who we are</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#ourgoal" role="tab" aria-controls="ourgoal" aria-selected="false">Our Goal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history" aria-selected="false">History</a>
              </li>
            </ul>
            <div class="tab-content tab-content-basic">
              <div class="tab-pane fade show active" id="whoweare" role="tabpanel" aria-labelledby="home-tab"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat. </div>
              <div class="tab-pane fade" id="ourgoal" role="tabpanel" aria-labelledby="profile-tab"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eveniet, sapiente corrupti, vitae excepturi nulla soluta esse in ex, dignissimos velit rerum maiores asperiores! </div>
              <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="contact-tab"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quibusdam assumenda fugit velit quis hic nulla necessitatibus? Nulla, possimus rerum quia sapiente necessitatibus! </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Vertical Tab</h4>
        <div class="row ml-md-0 mr-md-0 vertical-tab tab-minimal">
          <ul class="nav nav-tabs col-md-2 justify-content-between" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="tab-2-1" data-toggle="tab" href="#dashboard-2-1" role="tab" aria-controls="dashboard-2-1" aria-selected="true">
                <i class="mdi mdi-speedometer"></i>Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="tab-2-2" data-toggle="tab" href="#message-2-2" role="tab" aria-controls="message-2-2" aria-selected="false">
                <i class="mdi mdi-message-outline"></i>Messages</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="tab-2-3" data-toggle="tab" href="#campaigns-2-3" role="tab" aria-controls="campaigns-2-3" aria-selected="false">
                <i class="mdi mdi-bell-outline"></i>Campaigns</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="tab-2-4" data-toggle="tab" href="#influencers-2-4" role="tab" aria-controls="influencers-2-4" aria-selected="false">
                <i class="mdi mdi-account-outline"></i>Influencers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="tab-2-5" data-toggle="tab" href="#payments-2-5" role="tab" aria-controls="payments-2-5" aria-selected="false">
                <i class="mdi mdi-lightbulb-outline"></i>Payments</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="tab-2-6" data-toggle="tab" href="#analytics-2-6" role="tab" aria-controls="analytics-2-6" aria-selected="false">
                <i class="mdi mdi-airplay"></i>Analytics</a>
            </li>
          </ul>
          <div class="tab-content col-md-10">
            <div class="tab-pane fade show active" id="dashboard-2-1" role="tabpanel" aria-labelledby="tab-2-1">
              <div class="row">
                <div class="col-md-5">
                  <img class="img-fluid rounded" src="{{ url('assets/images/samples/tab_preview/04.png') }}" alt="tab Preview"> </div>
                <div class="col-md-7 pl-md-5">
                  <div class="wrapper mb-4">
                    <h4 class="mb-3">
                      <i class="mdi mdi-speedometer mr-3"></i>Anonymous Proxy</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                  </div>
                  <div class="wrapper mt-4 pt-4">
                    <h4 class="mb-3">
                      <i class="mdi mdi-speedometer mr-3"></i>Addiction When Gambling</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="message-2-2" role="tabpanel" aria-labelledby="tab-2-2">
              <div class="row">
                <div class="col-md-5">
                  <img class="img-fluid rounded" src="{{ url('assets/images/samples/tab_preview/04.png') }}" alt="tab Preview"> </div>
                <div class="col-md-7 pl-md-5">
                  <div class="wrapper mb-4">
                    <h4 class="mb-3">
                      <i class="mdi mdi-speedometer mr-3"></i>Anonymous Proxy</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                  </div>
                  <div class="wrapper mt-4 pt-4">
                    <h4 class="mb-3">
                      <i class="mdi mdi-speedometer mr-3"></i>Addiction When Gambling</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="campaigns-2-3" role="tabpanel" aria-labelledby="tab-2-3">
              <div class="row">
                <div class="col-md-5">
                  <img class="img-fluid rounded" src="{{ url('assets/images/samples/tab_preview/04.png') }}" alt="tab Preview"> </div>
                <div class="col-md-7 pl-md-5">
                  <div class="wrapper mb-4">
                    <h4 class="mb-3">
                      <i class="mdi mdi-speedometer mr-3"></i>Anonymous Proxy</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                  </div>
                  <div class="wrapper mt-4 pt-4">
                    <h4 class="mb-3">
                      <i class="mdi mdi-speedometer mr-3"></i>Addiction When Gambling</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="influencers-2-4" role="tabpanel" aria-labelledby="tab-2-4">
              <div class="row">
                <div class="col-md-5">
                  <img class="img-fluid rounded" src="{{ url('assets/images/samples/tab_preview/04.png') }}" alt="tab Preview"> </div>
                <div class="col-md-7 pl-md-5">
                  <div class="wrapper mb-4">
                    <h4 class="mb-3">
                      <i class="mdi mdi-speedometer mr-3"></i>Anonymous Proxy</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                  </div>
                  <div class="wrapper mt-4 pt-4">
                    <h4 class="mb-3">
                      <i class="mdi mdi-speedometer mr-3"></i>Addiction When Gambling</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="payments-2-5" role="tabpanel" aria-labelledby="tab-2-5">
              <div class="row">
                <div class="col-md-5">
                  <img class="img-fluid rounded" src="{{ url('assets/images/samples/tab_preview/04.png') }}" alt="tab Preview"> </div>
                <div class="col-md-7 pl-md-5">
                  <div class="wrapper mb-4">
                    <h4 class="mb-3">
                      <i class="mdi mdi-speedometer mr-3"></i>Anonymous Proxy</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                  </div>
                  <div class="wrapper mt-4 pt-4">
                    <h4 class="mb-3">
                      <i class="mdi mdi-speedometer mr-3"></i>Addiction When Gambling</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="analytics-2-6" role="tabpanel" aria-labelledby="tab-2-6">
              <div class="row">
                <div class="col-md-5">
                  <img class="img-fluid rounded" src="{{ url('assets/images/samples/tab_preview/04.png') }}" alt="tab Preview"> </div>
                <div class="col-md-7 pl-md-5">
                  <div class="wrapper mb-4">
                    <h4 class="mb-3">
                      <i class="mdi mdi-speedometer mr-3"></i>Anonymous Proxy</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                  </div>
                  <div class="wrapper mt-4 pt-4">
                    <h4 class="mb-3">
                      <i class="mdi mdi-speedometer mr-3"></i>Addiction When Gambling</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Vertical Simple Styled Tab</h4>
        <div class="row mt-4">
          <div class="col-md-6">
            <h5>Headset No Longer Wired For Sound</h5>
            <ul class="nav nav-tabs tab-simple-styled" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="tab-3-1" data-toggle="tab" href="#home-3-1" role="tab" aria-controls="home-3-1" aria-selected="true">
                  <i class="mdi mdi-weather-night"></i>Who we are</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab-3-2" data-toggle="tab" href="#profile-3-2" role="tab" aria-controls="profile-3-2" aria-selected="false">
                  <i class="mdi mdi-tag-multiple"></i>Our Goal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab-3-3" data-toggle="tab" href="#contact-3-3" role="tab" aria-controls="contact-3-3" aria-selected="false">
                  <i class="mdi mdi-border-outside"></i>History</a>
              </li>
            </ul>
            <div class="tab-content tab-content-basic">
              <div class="tab-pane fade show active" id="home-3-1" role="tabpanel" aria-labelledby="tab-3-1">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae iure animi, optio voluptatum impedit debitis ab, facere, aut, eos dolor maxime ipsum saepe laboriosam. Totam modi minima, aliquid voluptates exercitationem quos! Dolore laudantium earum magni voluptatem repellendus a fugiat sequi. </p>
              </div>
              <div class="tab-pane fade" id="profile-3-2" role="tabpanel" aria-labelledby="tab-3-2"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eveniet, sapiente corrupti, vitae excepturi nulla soluta esse in ex, dignissimos velit rerum maiores asperiores! </div>
              <div class="tab-pane fade" id="contact-3-3" role="tabpanel" aria-labelledby="tab-3-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia quibusdam assumenda fugit velit quis hic nulla necessitatibus? Nulla, possimus rerum quia sapiente necessitatibus! </div>
            </div>
          </div>
          <div class="col-md-6">
            <img class="img-fuild w-100 rounded" src="{{ url('assets/images/samples/tab_preview/05.png') }}" alt="tab preview"> </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Colored Tab</h4>
        <ul class="nav nav-tabs tab-solid tab-solid-danger" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="tab-5-1" data-toggle="tab" href="#home-5-1" role="tab" aria-controls="home-5-1" aria-selected="true">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="tab-5-2" data-toggle="tab" href="#profile-5-2" role="tab" aria-controls="profile-5-2" aria-selected="false">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="tab-5-3" data-toggle="tab" href="#contact-5-3" role="tab" aria-controls="contact-5-3" aria-selected="false">Contact</a>
          </li>
        </ul>
        <div class="tab-content tab-content-solid">
          <div class="tab-pane fade show active" id="home-5-1" role="tabpanel" aria-labelledby="tab-5-1">
            <div class="row">
              <div class="col-md-4">
                <img class="img-fluid w-100 rounded" src="{{ url('assets/images/samples/tab_preview/03.png') }}" alt="Sample Image"> </div>
              <div class="col-md-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem vel eveniet qui, fuga saepe inventore aspernatur, voluptate libero soluta quidem ,fuga saepe inventore aspernatur, ad accusantium cumque voluptas, perferendis natus laudantium.</p>
              </div>
            </div>
            <p>Impedit dolores ea facere culpa numquam alias, reprehenderit iste corporis hic fugit sunt cum magni.</p>
          </div>
          <div class="tab-pane fade" id="profile-5-2" role="tabpanel" aria-labelledby="tab-5-2"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eveniet, sapiente corrupti, vitae excepturi nulla soluta esse in ex, dignissimos velit rerum maiores asperiores! </div>
          <div class="tab-pane fade" id="contact-5-3" role="tabpanel" aria-labelledby="tab-5-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam officia mollitia repudiandae, tempore provident omnis magnam deleniti obcaecati, non atque asperiores maiores sint! Officiis rerum quaerat perferendis adipisci aut pariatur. </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Colored Vertical Tab</h4>
        <div class="vertical-tab">
          <ul class="nav nav-tabs tab-solid tab-solid-info mr-4" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="tab-6-1" data-toggle="tab" href="#home-6-1" role="tab" aria-controls="home-6-1" aria-selected="true">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="tab-6-2" data-toggle="tab" href="#profile-6-2" role="tab" aria-controls="profile-6-2" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="tab-6-3" data-toggle="tab" href="#contact-6-3" role="tab" aria-controls="contact-6-3" aria-selected="false">Contact</a>
            </li>
          </ul>
          <div class="tab-content tab-content-solid">
            <div class="tab-pane fade show active" id="home-6-1" role="tabpanel" aria-labelledby="tab-6-1">
              <div class="row">
                <img class="img-fluid w-100 rounded" src="{{ url('assets/images/samples/tab_preview/02.png') }}" alt="Sample Image">
                <p class="mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem vel eveniet qui, fuga saepe inventore aspernatur, voluptate libero.</p>
              </div>
            </div>
            <div class="tab-pane fade" id="profile-6-2" role="tabpanel" aria-labelledby="tab-6-2"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti eveniet, sapiente corrupti, vitae excepturi nulla soluta esse in ex, dignissimos velit rerum maiores asperiores! </div>
            <div class="tab-pane fade" id="contact-6-3" role="tabpanel" aria-labelledby="tab-6-3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam officia mollitia repudiandae, tempore provident omnis magnam deleniti obcaecati, non atque asperiores maiores sint! Officiis rerum quaerat perferendis adipisci aut pariatur. </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection