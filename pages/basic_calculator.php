<?php require_once "../partials/head.php" ?>
<?php require_once "../partials/header.php" ?>

    <?php
    include_once '../Classes/Order.php';
    include_once '../data/order.php';
    ?>

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

<?php include_once "../partials/foot.php" ?>