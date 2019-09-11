<!doctype html>
<html lang="en">
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  </head>
  <body>
      {{-- start navbar --}}
      <nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
          <a class="navbar-brand" href="{{Route('index', $locale = 'vi')}}">{{ trans('tasks.home') }}</a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ trans('tasks.language') }}</a>
                      <div class="dropdown-menu" aria-labelledby="dropdownId">
                          <a class="dropdown-item" href="{{Route('index', $locale = 'en')}}">English</a>
                          <a class="dropdown-item" href="{{Route('index', $locale = 'vi')}}">Vietnamese</a>
                      </div>
                  </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="{{ trans('tasks.search') }}">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">{{ trans('tasks.search') }}</button>
              </form>
          </div>
      </nav>
      {{-- end navbar --}}

      {{-- start content --}}
      <div class="container">
          @yield('content')
      </div>
      {{-- end content --}}

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
  </body>
</html>
