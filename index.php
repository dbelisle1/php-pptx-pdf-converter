<style>
    <?php include 'style/main.css'; 
?>
</style>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="all-container">
    <h1>Powerpoint to image local converter</h1>
    <form name="form" method="post" action="src/upload.php" enctype="multipart/form-data" class="selection-container" >
        <input type="file" name="my_file" /><br /><br />
        <input type="submit" name="submit" value="Upload" />
        <label id="status"></label>
    </form>
    </div>
    


</body>

</html>