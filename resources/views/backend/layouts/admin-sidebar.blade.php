@php
    $prefix=Request::route()->getPrefix();
    $route=Route::current()->getName();
@endphp
{{-- @dd($prefix); --}}

  <!-- Main Sidebar Container start -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('home')}}" class="brand-link">
      <img src="{{asset('public')}}/backend/dist/img/logo.png" alt="logo.png" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('public')}}/backend/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->role}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @if(Auth::user()->role=='Admin')
        <li class="nav-item has-treeview {{($prefix=='/users')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                User Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('users.all')}}" class="nav-link {{($route=='users.all')?'active':''}} ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User List</p>
                </a>
              </li>
            </ul>
        </li>
        <li class="nav-item has-treeview {{($prefix=='/profile')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Profile Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('profile.user')}}" class="nav-link {{($route=='profile.user')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Profile</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('change.password')}}" class="nav-link {{($route=='change.password')?'active':''}}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>User Password Change</p>
                  </a>
                </li>
              </ul>
        </li>


        <li class="nav-item has-treeview {{($prefix=='/logos')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Logo Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('logos.view')}} " class="nav-link {{($route=='logos.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logo</p>
                </a>
              </li>


            </ul>
        </li>
        <li class="nav-item has-treeview {{($prefix=='/sliders')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Slider Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('sliders.view')}} " class="nav-link {{($route=='sliders.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider</p>
                </a>
              </li>
            </ul>
        </li>


           {{--Learning Source Management --}}
           <li class="nav-item has-treeview {{($prefix=='/source')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Learning Source Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('source.view')}} " class="nav-link {{($route=='source.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Learning Source</p>
                </a>
              </li>
            </ul>
        </li>

              {{-- Navbar start Here --}}
         {{-- Developer Info Management --}}
        <li class="nav-item has-treeview {{($prefix=='/developerInfo')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Developer Info Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('developerInfo.view')}} " class="nav-link {{($route=='developerInfo.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Developer Info</p>
                </a>
              </li>
            </ul>
        </li>

         {{--   About Management --}}
         <li class="nav-item has-treeview {{($prefix=='/about')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                About Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('about.view')}} " class="nav-link {{($route=='about.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Me</p>
                </a>
              </li>
            </ul>
        </li>

                {{--Skill Management --}}
                <li class="nav-item has-treeview {{($prefix=='/skill')?'menu-open':''}} ">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                        Skill Management
                        <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                        <a href="{{route('skill.view')}} " class="nav-link {{($route=='skill.view')?'active':''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p> Skill</p>
                        </a>
                        </li>
                    </ul>
                </li>

         {{-- Project Management --}}
        <li class="nav-item has-treeview {{($prefix=='/project')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Project Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('project.view')}} " class="nav-link {{($route=='project.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project</p>
                </a>
              </li>
            </ul>
        </li>

         {{--JobExperience Management --}}
         <li class="nav-item has-treeview {{($prefix=='/experience')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                JobExperience Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('experience.view')}} " class="nav-link {{($route=='experience.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p> JobExperience</p>
                </a>
              </li>
            </ul>
        </li>

            {{--Training Management --}}
            <li class="nav-item has-treeview {{($prefix=='/training')?'menu-open':''}} ">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Training Management
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route('training.view')}} " class="nav-link {{($route=='training.view')?'active':''}}">
                      <i class="far fa-circle nav-icon"></i>
                      <p> Training</p>
                    </a>
                  </li>
                </ul>
            </li>

            {{--  Contact Management --}}
        <li class="nav-item has-treeview {{($prefix=='/contacts')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Contact Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('contacts.view')}} " class="nav-link {{($route=='contacts.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact</p>
                </a>
              </li>
            </ul>
        </li>
        {{-- Navbar End Here --}}

        {{--    Email Management --}}
        <li class="nav-item has-treeview {{($prefix=='/email')?'menu-open':''}} ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Email Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('user-email.view')}} " class="nav-link {{($route=='user-email.view')?'active':''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Email</p>
                </a>
              </li>
            </ul>
        </li>
        @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
 <!-- Main Sidebar Container end -->
