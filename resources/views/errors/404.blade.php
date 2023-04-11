<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404 Page Not Found</title>
    <link href="{{asset('frontend/Errorstyle.css')}}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">


</head>
<body>

    <div class="main" style="display: flex; justify-content: center;
    align-items: center; flex-direction: column; width: 100%; height: 100vh">

        <h1 style="font-size: 20rem; margin: 0; padding: 0;">404</h1>
        <h2 style="font-size: 1.2rem; margin: 0; padding: 0; line-height: 40px">SORRY, WE COULDN'T FIND THAT PAGE.</h2>
        <h2 style="font-size: 1.2rem; margin: 0; padding: 0;">LET'S TRY AGAIN FROM MAIN PAGE.</h2>

        <div class="container not-btn">

            <a href="/" class="button">
            <div class="button__line"></div>
            <div class="button__line"></div>
            <span class="button__text">Home Page</span>
            <div class="button__drow1"></div>
            <div class="button__drow2"></div>
            </a>
        
        </div>

    </div>
    <!-- partial:index.partial.html -->
    
  <!-- partial -->
   
</body>
</html>