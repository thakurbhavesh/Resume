<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{$title}}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/
font-awesome/5.15.2/css/all.min.css"/>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

<style>
    body,html{
        height: 100%;
    }
    h3,p{
        font-family: 'Satisfy', cursive;
    }
    .container-fluid{
        min-height: 100%;
    }
    a.nav-link{
        color: whitesmoke;
    }
    a.nav-link:hover{
        color: black;
        background-color: #e9cd79;
    }
    a.nav-link:active{
        color: black;
        background-color: #ffc107;
        font-weight: bold;
        font-family: 'Satisfy', cursive;

    }
    
</style>

</head>
<body>
 
<div class="container-fluid bg-dark">
<div class="row">
    <div class="col-sm-2">
        @include('include.sidebar')
    </div>
    <div class="col-sm-10">
        {{$content}}
    </div>
</div>
</div>


</body>
</html>
