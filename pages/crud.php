<?php require_once "../partials/head.php" ?>
<?php require_once "../partials/header.php" ?>

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

<?php include_once "../partials/foot.php" ?>