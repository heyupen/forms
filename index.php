<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    
    <div class="container card" style="width:35rem;">
    <div class="card-body">
    <h3 class="text-center">Customer Details</h3>
        <div class="row">
                <form action="" method="post">
                    <div class="col-lg-12 col-md-12 col-sm-12 m-5 text-start">
                    <label class="lab">First Name <input type="text" name="f_name" required></label>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 m-5 text-start">
                    <label class="lab">Last Name <input type="text" name="l_name" required></label>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 m-5 text-start">
                    <label class="lab lab1">Email <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" name="email" required></label>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 m-5 text-start">
                    <label class="cont">Contact <input type="tel" pattern="[7-9]{1}[0-9]{9}" name="contact" required></label>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 m-5 text-start">
                   <label class="gen">Gender :</label>
                    <label class="lab">Male <input class="form-check-input" type="radio" name="flexRadioDefault"></label>
                    <label class="lab">Female <input class="form-check-input" type="radio" name="flexRadioDefault"></label>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 m-5 text-start">
                    <label class="lab">City Name <input type="text" name="city_name" required></label>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 m-5 text-start">
                    <label class="sta">State <!-- <input type="option" name="sate" required> -->
                        <select>
                            <option>Rjasthan</option>
                            <option>Gujrat</option>
                            <option>Maharasthra</option>
                            <option>Aasam</option>
                            <option>Bihar</option>
                        </select>
                    </label>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 m-5 text-start">
                    <label class="con">Counrty <input type="text" name="country" required></label>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 m-5 text-start">
                    <button class="btn" name="save">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>