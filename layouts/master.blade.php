<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ $title }}</title>
    <meta charset="UTF-8">
    
    {{ HTML::script('js/jquery.min.js') }}
    {{ HTML::script('js/bootstrap.min.js')}}
    {{ HTML::style('css/bootstrap.min.css') }}
    <style>
        #foot{
            background:#000;
            min-height: 30px;
            max-width: 100%;
        }
    </style>

</head>
<body>

        <nav class="navbar navbar-default">
            <div class="container">
               <div class="navbar-header">
                   <!--collapse hamburger-->
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-toggle">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                   </button>
                   
                  <a class="navbar-brand" href="/welcome"><img src="img/logo.png" style="margin-top:-12px;"></a>
                </div><!--end of header-->
               
               <div class="collapse navbar-collapse" id="menu-toggle">
                   <ul class="nav navbar-nav">
                       <li><a href="{{ url('/welcome') }}">HOME</a></li>
                   </ul>
                   <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            
                    <button type="button" class="btn btn-default navbar-btn" data-container="body" data-toggle="popover" data-placement="bottom">Login</button>
                </li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>

                </div>
               
            </div>
        </nav>
        
        <div class="container-fluid">
            @yield('content')
        </div>
        
        <!--footer-->
         <div class="text-center" >
              &copy:2016
         </div>
            

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <!--popover login-->
    
    <div id="popover_content_wrapper" style="display: none">
      <form action="" role="form">
        <div class="form-group">
          <br><input type="text" class="form-control" id="user" placeholder="Email-id" /> <br>
          <input type="password" class="form-control" id="password" placeholder="Password" />
        </div>
          <button type="submit" class="btn btn-default">Sign in</button> <button type="submit" class="btn btn-success">{{ HTML::link('/users/register','Register')}}</button>
      </form>
    </div>


    <script>
    // popover demo
    $('button[data-toggle=popover]').popover({ 
        html : true,
            //trigger: "click",
        content: function() {
          return $('#popover_content_wrapper').html();
        }
    });
    </script> 


 </body>
</html>""