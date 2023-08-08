<!DOCTYPE html>
<html>

  <link
    href="https://c...content-available-to-author-only...r.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
    crossorigin="anonymous"/>
  <link href="https://c...content-available-to-author-only...e.com/ajax/libs/font-awesome/6.4.0/css/all.css"rel="stylesheet"/>

  <style>
    .center-align {
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
  <link rel="stylesheet" href="sstyle.css">

  <style>
    nav{
      position: fixed;
    }
    .center-align {
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
  <body style="margin-left: 10px;">
    <nav>
      <div class="st">
          Shaheed Tareq Huda Hall
      </div>
      <input type="checkbox" id="click" >
      <label for="click" class="menu-btn"><i class="fas fa-bars"></i></label>
      <ul>
          <li><a   href="thall.php">Home</a></li>
          <li><a  href="about_hall.php">About Hall</a></li>
         
          <li><a class="active" href="dinningg.php">Dinning</a></li>
          <li><a  href="notice.php">Room</a></li>

          <li><a href="register_form.php">Login</a></li>
      </ul>
  </nav>
    <div class="col">
        <img src="img/dinningg.jpg" class="img-fluid">
     </div>
     <br>
     <div class="row">
      <div class="col"></div>
      <div class="col-md-3">
        <h1 style="text-align: center;">400+ <br>Students</h1>
      </div>
      <div class="col-md-3">
        <h1 style="text-align: center;">12+ <br>Staff</h1>
      </div>
      <div class="col"></div>
    </div>
    <br><br>
    <div class="row">
      <div class="col-lg-1 col-md-1 col-sm-1">  <h4>Notice:</h4> </div>
      <div class="col"><h4><marquee style="color: red;">For Dining token contact the Hall office between 6:30 PM to 8:00 PM</marquee></h4> </div>  
    </div>
    <br><br>
    <div class="row">
      <h1>Dining Fee : </h1>
 
      <div class="col-md-6">
        <table class="table" >
          <tr> <td>1</td> <td>Full Month</td> <td>2500 TK</td> </tr>
          <tr> <td>2</td> <td>First Half</td> <td>1300 TK</td> </tr>
          <tr> <td>3</td> <td>Second Half</td> <td>1300 TK</td> </tr>
          <tr> <td>4</td> <td>First 20 Days</td> <td>1700 TK</td> </tr>
          <tr> <td>5</td> <td>Last 10 Days</td> <td>900 TK</td> </tr>
        </table>
      </div>
 
    </div>
    <br><br>
    <div class="container center-align"> 
      <a href="login_form.php" class="btn btn-dark btn-lg">Pay dining bill</a>
    </div>
    <script
      src="https://c...content-available-to-author-only...r.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
    <?php include 'footer.php'?>
 </body>
</html>