{{-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            PolyTherm
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto"></ul>

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav> --}}

<nav class="navbar navbar-light navbar-fixed-top bg-faded ">
    <!-- <h1>Fincheck Business</h1> -->
    <div class="__logo">
      <a href="/">
      <img src="/images/LogoMakr_7zX4ST.png" style="width:45px;height:65px;" alt="Fincheck Business Logo">
        {{-- <img src="/images/polytext2.png" style="width:150px;height:40px; padding-left:15px; padding-bottom: 5px;" alt="Fincheck Business Logo"> --}}
        <h1 style="width:150px;height:40px; padding-left:15px; padding-bottom: 5px;">PolyTherm</h1>
      </a>
      {{-- <a to="/">
        <img src="/public/images/polytext2.png" style="width:200px;height:50px;" alt="Fincheck Business Logo">
      </a> --}}
    </div>
    <div class="__links a1 fadeIn">
      <a href="/about">About Us</a>
      <!-- <a href="/gallery">Gallery</nuxt-link> -->
      <!-- <a href="/how-it-works">How it works?</nuxt-link> -->
      <a href="/faq">FAQs</a>
      <a href="/partners">Partners</a>
      <a href="/contact">Contact Us</a>
      <!-- <a href="//fincheck.co.za/"><el-button type="success" >Personal Finance</el-button></a>
      <a href="//my.fincheck.co.za/"><el-button type="primary" >My Fincheck</el-button></a> -->
      
    </div>
  </nav>
  <div class="toggle" :class="{ '__visible' : sideBarVisible === true }">
    <i class="material-icons" @click="toggleSidebar()">menu</i>
  </div>
  <div class="sidebar" :class="{ '__visible' : sideBarVisible === true }">
    <div class="__items">
      <div class="__item">
        <a href="/">Home</a>
      </div>
      <div class="__item">
        <a href="/about">About Us</nuxt-link>
      </div>
      <!-- <div class="__item">
        <a href="/how-it-works">How it works?</nuxt-link>
      </div> -->
      <div class="__item">
        <a href="/faq">FAQs</nuxt-link>
      </div>
      <div class="__item">
        <a href="/partners">Partners</nuxt-link>
      </div>
      <div class="__item">
        <a href="/contact">Contact Us</nuxt-link>
      </div>
      <!-- <div class="__item">
        <a href="//fincheck.co.za/"><el-button type="success">Personal Finance</el-button></a>
      </div>
      <div class="__item">
        <a href="//my.fincheck.co.za/"><el-button type="primary">My Fincheck</el-button></a>
      </div> -->
    </div>
  </div>