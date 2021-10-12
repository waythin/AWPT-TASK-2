
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{route('home') }}">NIKIFILINI</a>
    </div>

    <ul class="nav navbar-nav">
      <li><a href="{{route('home') }}">HOME</a></li>
    </ul>

    <!-- <ul class="nav navbar-nav">
      <li><a href="{{route('service') }}">PRODUCT/SERVICE</a></li>
    </ul>

    <ul class="nav navbar-nav">
      <li><a href= "{{route('teams') }}"> OUR TEAMS</a></li>
    </ul>

    <ul class="nav navbar-nav">
      <li> <a href="{{route('aboutus') }}">ABOUT US</a></li>
    </ul> -->

    <ul class="nav navbar-nav">
      <li ><a href="{{route('submit') }}">REGISTRATION</a></li>
    </ul>
    <!-- <ul class="nav navbar-nav">
      <li ><a href="{{route('list')}}">LIST</a></li>
    </ul> -->

    </ul>
    <ul class="nav navbar-nav">
      <li ><a href="{{route('login')}}">LOGIN</a></li>
    </ul>
    </ul>
   
    </ul>
    <ul class="nav navbar-nav">
      <li ><a href="{{route('contact')}}">CONTACT</a></li>
    </ul>






    <!-- <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default">Search</button>
    </form> -->
  </div>
</nav>

</body>
</html>
