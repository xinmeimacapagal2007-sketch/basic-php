<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- emoji -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--device:determined by the size of the sceen -->
    <title>Document</title> <!-- Title of the document -->

    <meta name=title content="Document"> <!-- Title for search engines -->
    <meta name="description" content="This is a sample document."> <!-- Description for search engines -->
    <meta name="keywords" content="HTML, CSS, JavaScript"> <!-- Keywords for search engines -->
    <meta name="author" content="Your Name"> <!--Author of the document -->

   <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous"> <link rel="stylesheet" href="styles.css">-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous"> <!--Link to external CSS file -->
</head>
<body>
    <?php
    include_once 'Classes/Order.php';
    include_once 'data/order.php';
    ?>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">practice php</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">basic calculator</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">CRUD</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>
    <form method="POST">
        <div class="row">
            <div class="col">
                <div class="card p-4 gap-4"> 
                    <div>
                        <label class="form-lable">Name</label>
                        <input name="name" class="form-control">
                    </div>
            
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <label class="form-lable">Meal</label>
                                    <input name="meal" class="form-control"> 
                                </div>

                                <div class="col">
                                    <label class="form-lable">Qty</label>
                                    <input name="meal_qty" class="form-control">
                                </div>
                            </div>     
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <label class="form-lable">Drinks</label>
                                    <input name="drink" class="form-control">
                                </div>

                                <div class="col">
                                    <label class="form-lable">Qty</label>
                                    <input name="drink_qty" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class= "d-flex justify-content-end">
                        <button type="submit" class="btn btn-danger">Compute</button>
                    </div>
                </div> 
            </div>

            <div class="col">
                <div class="card"> 
                    <div class="cardbody">
                        <?php if($_POST && $error_message == "") { ?> 
                            <p>
                                Name: <?= $name ?>
                            </p>

                            <p>
                                Meal: <?= $meal_name ?>
                                <?= $meal_qty . 'x' . $meal_price . '=' .$meal_total ?>
                            </p>

                            <p>
                                Drinks: <?= $drink_name ?>
                                <?= $drink_qty . 'x' . $drink_price . '=' .$drink_total ?>
                            </p>

                            <p>
                                Grand Total: <?= $grand_total ?>
                            </p>
                        <?php } else { ?>
                            <p>
                                Please Make Your Order properly
                            </p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </form>
<!--
    <div class="spinner-border text-primary" role="status">
    <span class="visually-hidden">Loading...</span>
    </div>

    <div class="row">
        <div class="col-6">
            <div class="card">
                 INPUT
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="container px-4 text-center">
                    <div class="row gx-5">
                   <div class="col">
                        <div class="p-3">DRINKS</div>
                        <select class="form-select" name="drinks[]" multiple aria-label="Drinks select">
                        <option value="1">Water</option>
                        <option value="2">Soda</option>
                        <option value="3">Juice</option>
                        <option value="4">Coffee</option>
                        </select>
                    </div>

                    <div class="col">
                        <div class="p-3">FOODS</div>
                          <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">Burger</option>
                            <option value="2">Fries</option>
                            <option value="3">Pizza</option>
                            </select>
                    </div>
                    </div>
                    </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                OUTPUT


            </div>
        </div>
        
    </div>
    </div>
-->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>