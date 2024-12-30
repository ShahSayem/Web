<?php
    include 'config.php';
    $id = $_GET['id'];
    //echo $id;
    $dataFetchQuery = "SELECT * FROM `demo` WHERE id = '$id'";
    $record = mysqli_query($conn,$dataFetchQuery);
    $data = mysqli_fetch_array($record);
    echo $data['image'] 
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        form{
            background: #fff;
            padding: 15px;
            box-shadow: 0px 0px 10px 0px;
            border-radius: 10px;
        }
    </style>
    <title>Crud Operation</title>
  </head>
  <body>
  <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <form action="updateAction.php" method="post" enctype="multipart/form-data">
                    <h1>Update your product</h1>
                    <div class="mb-3">
                      Product Name :
                      <input type="text" class="form-control" name="name" value="<?php echo $data['name'] ?>" required>
                      
                    </div>
                    <div class="mb-3">
                      Product Price :
                      <input type="text" class="form-control" name="price" value="<?php echo $data['price'] ?>"required>
                    </div>
                    <div class="mb-3">
                      Product Image :
                      <input type="file" class="form-control" name="image" value="<?php echo $data['image'] ?>"required>
                    </div>
                    <div class="mb-3">
                         <img src="<?php echo $data['image'] ?>" width="200px" alt="">
                    </div>

                    <input type="hidden" name='id' value="<?php echo $data['ID'] ?>">
                    <input class="btn btn-warning col-12" type="submit" name="update" value="update" id="">
                  </form>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>



