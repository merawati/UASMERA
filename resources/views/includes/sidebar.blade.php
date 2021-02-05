<div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
      <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('news.index')}}">
              <i class="material-icons">News</i>
              <p>News</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="material-icons">News</i>
              <p>PPDB</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="material-icons">News</i>
              <p>Profile</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="material-icons">News</i>
              <p>Jurnal</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="material-icons">News</i>
              <p>CBT</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="material-icons">News</i>
              <p>EXAM</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="material-icons">News</i>
              <p>MEDIA</p>
            </a>
          </li>

          <li class="nav-item">
            <!-- <a class="nav-link" href="">
              <i class="material-icons">News</i>
              <p>Logout</p>
            </a> -->

            <a class="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i class="material-icons">News</i>
                  {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
          <!-- your sidebar here -->
        </ul>
      </div>
    </div>