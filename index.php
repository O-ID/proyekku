<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Lupa Password</title>
</head>
<body>
    <div class="container mt-3">
    <form action="" method="post">
        <label for="email">Masukkan Email</label>
        <input type="email" name="email" id="email">
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="check_list[]" value="123" id="customCheck6">
            <label class="custom-control-label" for="customCheck6">C/C++</label>
        </div>
        <label for="">Choose</label>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="check_list[]" value="Java" id="customCheck7">
            <label class="custom-control-label" for="customCheck7">Java</label>
        </div>
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="check_list[]" value="PHP" id="customCheck8">
            <label class="custom-control-label" for="customCheck8">PHP</label>
        </div>
        <input type="submit" name="submit" value="Submit"/>
    </form>

    </div>
    <?php
        if(isset($_POST['submit'])){//to run PHP script on submit
            if(!empty($_POST['check_list'])){
            // Loop to store and display values of individual checked checkbox.
                foreach($_POST['check_list'] as $selected){
                    echo $selected."</br>";
                    
                }
            }
        }
    ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>