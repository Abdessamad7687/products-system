<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Management</title>
    <link rel="stylesheet" href="{{('assets/css/styles.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
        <h3 class="text-center mt-3">Products managemment system</h3>
        <div class="d-flex gap-3 col-md-12 col-lg-12 col-sm-4 mt-5">
            <div class="form-group col-md-8">
                <!-- Title -->
                <label for="title">Title:</label>
                <input type="text" class="form-control" placeholder="title">
            </div>
            <div class="form-group">
                <!-- Category -->
                <label for="Category">Category:</label>
                <select class="form-select mt-2">
                    <option value="product-1">product-1</option>
                    <option value="product-2">product-2</option>
                    <option value="product-3">product-3</option>
                </select>
            </div>
        </div>

        <div class="d-flex gap-3 mt-3 col-md-12 col-lg-12 col-sm-4">
            <div class="form-group">
                <!-- Price -->
                <label for="price">Price:</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <!-- Taxes -->
                <label for="taxes">Taxes:</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <!-- Ads -->
                <label for="ads">Ads:</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <!-- Discount -->
                <label for="discount">Discount:</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <!-- Count -->
                <label for="discount">Count:</label>
                <input type="number" class="form-control">
            </div>

        </div>

        <div class="d-flex gap-3 mt-3 col-md-12 col-lg-12 col-sm-4">
            

            <div class="form-group mt-4" >
            <!-- total -->
            <small>Total:</small>
        </div>  
        </div>

        
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>