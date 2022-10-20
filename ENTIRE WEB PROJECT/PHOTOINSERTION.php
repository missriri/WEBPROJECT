<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Upload Image</title>
    </head>
    <body>
        <form action="process2_upload.php" method="POST">
            <Label for="fooditem">Food Name</Label>
            <input type="text" name="fooditem" required="true" placeholder="Food item Name"><br>

            <label for="foodimage">Image</label>
            <input type="file" name="food-image" id="foodimage" required="true"><br>

            <label for="foodprice">Price</label>
            <input type="number" name="foodprice" required="true" placeholder="Food price"><br>

            <input type="submit" name="submitImage" id="submitImage" value="SAVE">
        </form>
    </body>
</html>