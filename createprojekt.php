<?php include "header.php";

if(isset($_POST['submit-customer'])){

  createCustomer($conn, $_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['phoneNumber'], $_POST['adress'], $_POST['postcode'], $_POST['city']);
}

if(isset($_POST['create-car'])){

  createCar($conn, $_POST['make'], $_POST['model'], $_POST['licensenumber']);
}








?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.default.min.css"
  integrity="sha512-pTaEn+6gF1IeWv3W1+7X7eM60TFu/agjgoHmYhAfLEU8Phuf6JKiiE8YmsNC0aCgQv4192s4Vai8YZ6VNM6vyQ=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js"
  integrity="sha512-IOebNkvA/HZjMM7MxL0NYeLYEalloZ8ckak+NDtOViP7oiYzG5vn6WVXyrJDiJPhl4yRdmNAG49iuLmhkUdVsQ=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
></script>



<div class="container">
<h1 class="pcenter">Create project</h1><br>

<h2 class="pcenter">Customer info</h2><br>
<form method="POST">

<select id="normalize">
<option value=""></option>
    <?php
        $allcustomer = fetchTcustomer($conn);
        foreach($allcustomer as $row){
            echo "<option value='{$row['id']}'>{$row['First_Name']}</option>" ;
        }

    ?>
</select>


<br>
<div class="pcenter">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#checkCustomerInfo">
        Check customer info
    </button>
</div><br>
<div class="pcenter">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createCustomer">
        Create new customer
    </button>
</div><br>

<h2 class="pcenter">Car info</h2><br>

<select id="normalize2">
<option value=""></option>
    <?php
        $allcars = fetchcar($conn);
        foreach($allcars as $row){
            echo "<option value='{$row['id']}'>{$row['Make']}    {$row['Reg']}</option>" ;
        }

    ?>
</select>

<br>
<div class="pcenter">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#checkCarInfo">
        Check car info
    </button>
</div><br>
<div class="pcenter">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createCar">
        Create new car
    </button>
</div><br>

<div class="form-group">
  <label for="email">Date Start</label>
  <input type="date" class="form-control" id="datestart" name="datestart" aria-describedby="emailHelp" placeholder="">
</div>

<div class="form-group">
      <label for="email">Date end</label>
      <input type="date" class="form-control" id="dateend" name="dateend" aria-describedby="emailHelp" placeholder="">
 </div>

 <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="headline" name="headline" aria-describedby="emailHelp" placeholder="">
 </div>

 <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp" placeholder="">
 </div>

 <input type="submit" name="create-projekt" class="btn btn-primary">Create</input>

</form>


























<div class="modal fade" id="checkCustomer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create customer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <form method="POST">
            <div class="form-group">

            </div>
            <button type="submit" class="btn btn-primary">Check</button>
        </form>


      </div>
      <div class=   "modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="createCustomer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create customer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="POST">
            <div class="form-group">
                <label for="firstname">firstname</label>
                <input type="text" class="form-control" id="firstname"  name="firstname" aria-describedby="firstnameHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="lastname">lastname</label>
                <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="lastnameHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="phoneNumber">Phone number</label>
                <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" aria-describedby="phonenumberHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="adress">Adress</label>
                <input type="text" class="form-control" id="adress" name="adress" aria-describedby="adressHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="postcode">Postcode</label>
                <input type="text" class="form-control" id="postcode" name="postcode" aria-describedby="postcodeHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" class="form-control" id="city" name="city" aria-describedby="cityHelp" placeholder="">
            </div>
            <input type="submit" name="submit-customer" class="btn btn-primary">Create</input>
        </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="checkCar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create customer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">


        <form method="POST">
            <div class="form-group">
                <label for="customerName">Customer name</label>
                <input type="text" class="form-control" id="examplcustomerNameeInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary">Check</button>
        </form>
          

      </div>
      <div class=   "modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
     

<div class="modal fade" id="createCar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create customer</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form method="POST">
            <div class="form-group">
                <label for="brand">Brand</label>
                <input type="text" class="form-control" name="make" id="brand" aria-describedby="brandHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="model">Model</label>
                <input type="text" class="form-control" name="model" id="model" aria-describedby="modelHelp" placeholder="">
            </div>
            <div class="form-group">
                <label for="licensenumber">License number</label>
                <input type="text" class="form-control" name="licensenumber" id="licensenumber" aria-describedby="licensenumberHelp" placeholder="">
            </div>
            <input type="submit" class="btn btn-primary" name="create-car">Create</input>
        </form>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>