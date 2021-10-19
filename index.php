<?php

  if(isset($_POST['submit_query'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phno = $_POST['phno'];
    $select1 = $_POST['select1'];
    $select2 = $_POST['select2'];


        //The url you wish to send the POST request to
    $url = 'https://api-notarize.herokuapp.com/customer/createPublicOrder';

    //The data you want to send via POST
    $fields = [
        '__VIEWSTATE '      => 'a',
        '__EVENTVALIDATION' => 'b',
        'btnSubmit'         => 'Submit'
    ];

    //url-ify the data for the POST
    $fields_string = http_build_query($fields);

    //open connection
    $ch = curl_init();

    //set the url, number of POST vars, POST data
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch,CURLOPT_POST, true);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

    //So that curl_exec returns the contents of the cURL; rather than echoing it
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

    //execute post
    $result = curl_exec($ch);
    echo $result;

    header('Location: ./submit.php');

  }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Schdule-now</title>

  </head>
  <body>
   
    <div class="container" style="padding-top: 50px;">
      <div class="row">
          <div class="col-lg-6">
            <form action="" method="POST">
              <h4 class="poda">Schdule an online Notary now.</h4>
              <div class="form-group">
                <label for="exampleFormControlInput1">Full Name</label>
                <input type="name" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Input Text with Label">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput2">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput2" name="email" placeholder="Input Text with Label">
              </div>
              <div class="form-group">
                <label for="exampleFormControlInput3">Phone Number</label>
                <input type="number" class="form-control" id="exampleFormControlInput3" name="phno" placeholder="Input Text with Label">
              </div>
              
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <label for="cars">How many Notarisation:</label>
                  </div>
                  <div class="col-md-6">
                    <select name="select1" id="cars" class="form-control">
                      <option value="">SELECT</option>
                      <option value="saab">Saab</option>
                      <option value="fiat">Fiat</option>
                      <option value="audi">Audi</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-6">
                    <label for="cars">How many Signers:</label>
                  </div>
                  <div class="col-md-6">
                    <select name="select2" id="cars" class="form-control">
                      <option value="">SELECT</option>
                      <option value="saab">Saab</option>
                      <option value="fiat">Fiat</option>
                      <option value="audi">Audi</option>
                    </select>
                  </div>
                </div>
              </div>
              <div>
                <!-- <button type="submit" name='submit' class="btn btn-info float-right">Save and Continue</button> -->
                <input type="submit" class="btn btn-info float-right" name="submit_query" value="Save and Continue">
              </div>
            </form>
          </div>
          <div class="col-lg-6">
              <img src="img/img1.JPG" width="450">
          </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
  </body>
</html>