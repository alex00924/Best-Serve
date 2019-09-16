<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="/" class="simple-text logo-normal">
      <div style="text-align: center; width: 100%">
        <img src="{{ asset('material') }}/img/logo.png" width="100px" height="100px">
      </div>
      <div style="text-align: center; width: 100%">
        {{ __('messages.title') }}
      </div>
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('messages.dashboard') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('profile.edit') }}">
          <i class="material-icons">person</i>
            <p>{{ __('messages.your_profile') }}</p>
        </a>
      </li>
      @if(auth()->user()->isAdmin())
      <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('user.index') }}">
          <i class="material-icons">people</i>
            <p>{{ __('messages.user_management') }}</p>
        </a>
      </li>
      @endif
      <li class="nav-item{{ $activePage == 'blacklist' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('blacklist.index') }}">
          <i class="material-icons">content_paste</i>
            <p>{{ __('messages.black_lists') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'blacklist-create' ? ' active' : '' }}">
        <a class="nav-link" href="/blacklist/create">
          <i class="material-icons">edit</i>
            <p>{{ __('messages.add_report') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>