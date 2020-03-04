<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
    div{
        border: 2px ;
    }
    
    .me{
        border: 5px solid gray;
    }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 me">
        <div class="card-header text-warning bg-secondary text-white bg-sample text-center ">
                <h4 class="text-warning bg-secondary">File Uploading</h4>
            </div>
            <hr class="col-md-12 mt-4">
            <label for="upload"><h3>SELECT IMAGE</h3></label>
            <div class="col-md-12 mt-20">
            <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="files[]" multiple>
            <button type="submit" name="submit" >
            <i class="fa fa-upload" aria-hidden="true"></i>upload</button>
            </form>
            </div>

    
        
        </div>
        <div class="col-md-4"></div>
        </div>
    </div>
</body>
</html>