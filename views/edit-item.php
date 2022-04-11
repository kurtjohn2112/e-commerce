<?php 

$id = $_GET['id']; // url variable
include '../classes/Market.php';
$obj = new Market;

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <section class="p-5 mt-5 ">
        <div class="conatainer">
            <div class="card w-50 mx-auto shadow">
                <div class="card-header p-4 bg-dark"></div>
                <div class="card-body">
                    <form action="../action/edit-item-action.php" method="post">
                        <div class="input-group">
                            <input type="text" name="item-name" value="<?php echo $data['name'] ?>" placeholder="Item Name" id="" class="form-control">
                            <input type="text" name="item-price" value="<?php echo $data['price'] ?>" placeholder="Item Price" id="" class="form-control">
                        </div>
                        <div class="input-group mt-3">
                            <input type="hidden" name="item-id" value="<?php echo $data['id'] ?>">
                            <input type="text" value="<?php echo $data['description'] ?>" name="item-desc" placeholder="Description" class="form-control" id="">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="#" class="text-decoration-none">Check Users Here</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>