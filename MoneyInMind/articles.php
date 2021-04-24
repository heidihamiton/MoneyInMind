<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style/stylesheet.css">

    <!-- Bootstrap javascript and JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    <title>Money in Mind</title>
</head>
<body>
<!-- NavBar -->
<nav class="navbar navbar-light" style="background-color: #FFFFFF;">
    <a class="navbar-brand" href="index.php">
        <img src="../../MoneyInMind/img/logo.png" width="130" alt="" >
    </a>

    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" style = "color:black;" href="budgeting.php">Budgeting</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" style = "color:black;" href="tracker.php">Tracker</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" style = "color:black;" href="graphs.php">Graphs</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" tabindex="-1" aria-disabled="true">Articles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" style = "color:black;" href="settings.php">Settings</a>
        </li>
        <!-- Search Bar -->
        <form class="form-inline">
            <input id="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-secondary" type="submit">Search</button>
        </form>

        <!-- Sign in and New User Buttons -->
        <button type="button" class="btn btn-link" style="color:black;">Sign In</button>
        <button type="button" class="btn btn-link" style="color:black;">New User</button>

    </ul>
</nav>

<!-- Start of main body -->
    <div id="myDIV" style="background-blend-mode: normal;">
        <div class="container">
            <div class="row">
                <!-- this acts as padding on either side -->
                <div class="col"></div>

                <!-- This is where the content is-->

                <div class="col-10">
                    <div class="card">
                        <div class="card-body">
                            <h2> Articles </h2>
                        </div>
                    </div>
                    <p></p>
                    <div class="card-group">
                        <div class="card">
                            
                            <div class="card-body">
                                <h5 class="card-title">Mental Health and Shopping</h5>
                                <p class="card-text">The holiday season often goes hand in hand with shopping. 
                                    Shopping for gifts, shopping for holiday décor, and shopping for the best 
                                    Black Friday or Cyber Monday deals all seem to be a crucial part of the 
                                    holiday season. Buying gifts for loved ones is a generous way to express
                                    kindness, and one of the five love languages is receiving gifts. 
                                    However, sometimes shopping can take its toll on our mental health. 
                                    Shopping can take its toll on our wallets as well as our mental health,
                                    especially when we shop without a purpose. Compulsive buying, “retail therapy,” 
                                    or shopping out of boredom can lead to a pile of unnecessary belongings, guilt, 
                                    and financial hardships. 
                                </p>
                                <button type="button" class="btn btn-link" style="color:black;"> 
                                <a href="https://discoverymood.com/blog/mental-health-and-shopping/">Link to Article</a> 
                                </button>
                            </div>
                        </div>
                        <p> </p>
                        <div class="card">
                            
                            <div class="card-body">
                                <h5 class="card-title">Asking for Help</h5>
                                <iframe width="320" height="215"
                                src="https://www.youtube.com/embed/watch?v=9FbBwehUp5Q&ab_channel=PsychHub">
                                </iframe>
                                <p class="card-text">Talking about your mental health is important, 
                                    but it can also be uncomfortable to open up to others. If you are struggling, 
                                    watch this video to learn ways to overcome fears.
                                </p>
                            </div>
                        </div>
                        <p> </p>
                        <div class="card">
                            
                            <div class="card-body">
                            <h5 class="card-title">5 Money-Saving Shopping Tips</h5>
                            <p class="card-text">Have you already squeezed every last penny out of your budget? 
                                Maybe not. Thanks to free-market capitalism, we can choose from a wide variety 
                                of products at a wide range of prices pretty much any time we want to buy something. 
                                Unlike investing, saving money on purchases doesn't require any specialised training, 
                                and is an easy way for anyone to stretch their budget a little further. No matter
                                what your income level, you can give yourself more breathing room by becoming a
                                savvy shopper. Here are five tips to help you get started.
                            </p>
                            <button type="button" class="btn btn-link" style="color:black;"> 
                                <a href="https://www.investopedia.com/articles/pf/07/five-saving-tips.asp">Link to Article</a> 
                            </button>
                            </div>
                        </div>
                    </div>


                </div>

                <!-- this acts as padding on either side -->
                <div class="col"></div>
            </div>
        </div>
    </div>

</body>
</html>
