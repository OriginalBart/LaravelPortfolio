<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/gamen.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    @yield('css')
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <title>Bartportfolio</title>
  </head>
  <body>
    <div id="container">
      <header>
        <nav>
          <div id="navbar">
            <a
              class="active"
              class="bartolicious"
              class="logo"
              href="javascript:void(0)"
              >𝙱𝚊𝚛𝚝𝚘𝚕𝚒𝚌𝚒𝚘𝚞𝚜</a
            >
            <a class="home" href="/" href="javascript:void(0)">𝙷𝚘𝚖𝚎</a>
            <a class="school" href="/school" href="javascript:void(0)"
              >𝚂𝚌𝚑𝚘𝚘𝚕</a
            >
            <a class="werk" href="/werk" href="javascript:void(0)">𝚆𝚎𝚛𝚔</a>
            <a class="gamen" href="/gamen" href="javascript:void(0)"
              >𝙶𝚊𝚖𝚎𝚗</a
            >
            <a class="vissen" href="/vissen" href="javascript:void(0)"
              >𝚅𝚒𝚜𝚜𝚎𝚗</a
            >
            <a class="voetbal" href="/voetbal" href="javascript:void(0)"
              >𝚅𝚘𝚎𝚝𝚋𝚊𝚕</a
            >
            <a
              class="opdrachten"
              href="/opdrachten"
              href="javascript:void(0)"
              >𝙾𝚙𝚍𝚛𝚊𝚌𝚑𝚝𝚎𝚗</a
            >
            <ul class="navbar-nav ml-auto flex-nowrap">
                
              @guest
              
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                    
                  @else
                          
                      <li class="nav-item dropdown">
                          <a style="color:white;"id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                              <span class="caret"></span>
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
        </nav>

        <section id="naam">
          <div class="container">
            <h1>Bartolicious</h1>
          </div>
        </section>
      </header>
      <section id="projecten">

      @yield('content')


      
      <footer>
        <div class="footertext"><p>@𝙱𝚊𝚛𝚝𝚘𝚕𝚒𝚌𝚒𝚘𝚞𝚜 𝟸𝙼𝙳𝟷</p></div>
      </footer>
      <script>
        window.onscroll = function() {
          myFunction();
        };

        var navbar = document.getElementById("navbar");
        var sticky = navbar.offsetTop;

        function myFunction() {
          if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky");
          } else {
            navbar.classList.remove("sticky");
          }
        }
      </script>
    </div>
  </body>
</html>
