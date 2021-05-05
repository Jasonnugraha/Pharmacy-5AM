<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Home</title>
    </head>
    
    <body>
        <!-- The real input data -->
        <div class="container">
            <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group row">
                <label for="inputProductName" class="col-sm-2 col-form-label">Product Name</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputProductNameId" name="productName" placeholder="Enter Product Name">
                    </div>
                </div>

                <div class="form-group row">
                <label for="salesQuantity" class="col-sm-2 col-form-label">Sales Quantity</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" id="salesQuantityId" name="salesQuantity" placeholder="Enter the amount for the Sales Quantity">
                    </div>
                </div>

                <div class="form-group row">
                <label for="productPrice" class="col-sm-2 col-form-label">Product Price</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" id="productPriceId" name="productPrice" placeholder="Enter the amount for the Product Price">
                    </div>
                </div>

                <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                    <input type="submit" value="Submit" name="submit" class="btn btn-primary"/>
                </div>
                </div>
            </form>
        </div>
    </body>
</html>