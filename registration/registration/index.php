<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="utf-8">

    <!-- so bootstrap can recongise between a mobile and destop device -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- linking the bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <!-- JQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!-- my CSS -->
    <link rel="stylesheet" href="style.css.css" type="text/css">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light " style="background-color: aquamarine">

        <a class="navbar-brand" href="index.php" style="max-width: 30%;">
            <img src="logo.png" class="img-fluid">InTheKitchen
        </a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>

                <li class="nav-item">
                    <a href="Favourites.php" class="nav-link">Favourites</a>
                </li>

                <li class="nav-item">
                    <a href="zomato.php" class="nav-link">Restaurants</a>
                </li>

                <li class="nav-item">
                    <a href="Account.php" class="nav-link">Account</a>
                </li>
            </ul>
        </div>

    </nav>
    <!-- end of navbar -->
    <!-- start of jumbotron -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 jumbotron">
                <div class="text">
                    <h1>Hello World</h1>
                    <p> wewdfd sdfsdfsdfsd sdfsdfsdf sdfsdfsd sdfsdf</p>
                    <a href="#" class="btn btn-lg btn-success">Click me</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid my-container">
        <div class="row my row">
            <div class="col-md-8 col-sm-6 Search">

                <!--  <div class="input-group mb-3 Search-Box">
                    <input  id="foodie" type="text" class="form-control" placeholder="what food are you craving?" aria-label="search box" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                        
                  -->
                <div class="input-group mb-3 Search-Box">
                    <form class="form">
                        <label>Enter a Post ID</label>
                        <input class="post-id-input" placeholder="what are you feeling?" aria-label="search box" aria-describedby="basic-addon2">
                        <button type="submit" name="button" "btn btn-outline-secondary">Submit</button>
                    </form>
                    <div class="input-group-append">


                    </div>
                </div>


                <div class="output"></div>

                <!-- Handlebars template  -->
                <script id="recipes-template" type="text/x-handlebars-template">
                    <ul class="recipe-list">
                        {{#each recipes}}
                            <li class="recipe">
                            <h2>{{this.title}}</h2>
                            <img src="{{this.image_url}}" />
                            </li>
                            
                        {{/each}}
                  </ul>
                </script>






            </div>
        </div>

    </div>





    <!--
                              Axios is a librays for sending ajax requests.
                              link to documentaion: https://github.com/axios/axios
                             -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js" charset="utf-8"></script>
    <!--
                              Handlebars is a client side template engine.
                              link to documentaion:https://handlebarsjs.com/
                             -->
    <script src="handlebars-379172e.js" charset="utf-8"></script>
    <script src="SearchAPI.js" charset="utf-8"></script>



</body>

</html>
