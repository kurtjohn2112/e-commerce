<?php 
include '../classes/Market.php';
$obj = new Market;
$items = $obj->show();


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
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="dash-item.php" class="navbar-brand">ADMIN</a>
            <button class="navbar-toggler" type="button" data-bs-target="#collapse-nav" data-bs-toggle="collapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapse-nav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Users</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Items</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Orders</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="p-5 mt-5 ">
        <div class="conatainer">
            <div class="card w-50 mx-auto shadow">
                <div class="card-header p-4 bg-dark"></div>
                <div class="card-body">
                    <form action="../action/item-action.php" method="post">
                        <div class="input-group">
                            <input type="text" name="item-name" placeholder="Item Name" id="" class="form-control">
                            <input type="text" name="item-price" placeholder="Item Price" id="" class="form-control">
                        </div>
                        <div class="input-group mt-3">
                            <input type="text" name="item-desc" placeholder="Description" class="form-control" id="">
                            <button type="submit" class="btn btn-success" name="btn_add" value="add_item">Save</button>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <a href="#" class="text-decoration-none">Check Users Here</a>
                </div>
            </div>
        </div>
    </section>

    <section class=" p-5 mt-5">
        <div class="container">
            <ul class="list-group">
                <?php if(!empty($items)): ?>
                    <?php foreach($items as $item): ?>
                        <li class="list-group-item">
                            <?php echo $item['name'] ?> 
                            <a href="../action/item-delete.php?id=<?php echo $item['id'] ?>" class="float-end mx-1 text-danger"> <i class="fas fa-trash"></i> </a>
                            <a href="edit-item.php?id=<?php echo $item['id'] ?>" class="float-end mx-1 text-info "> <i class="fas fa-edit"></i> </a>
                        </li>
                    <?php endforeach; ?>
                   
                <?php endif; ?>
               
            </ul>
        </div>
    </section>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>