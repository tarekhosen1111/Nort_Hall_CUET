
<!DOCTYPE html>
<html>
  <head>
    
  </head>
  <link
    href="https://c...content-available-to-author-only...r.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
    crossorigin="anonymous"
  />
  <link
    href="https://c...content-available-to-author-only...e.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    rel="stylesheet"
  />
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
  <body >
  <nav>
        <div class="st">
            Shaheed Tareq Huda Hall
        </div>
        <input type="checkbox" id="click" >
        <label for="click" class="menu-btn"><i class="fas fa-bars"></i></label>
        <ul>
            <li><a   href="thall.php">Home</a></li>
            <li><a  href="about_hall.php">About Hall</a></li>
           
            <li><a href="dinningg.php">Dinning</a></li>
            <li><a class="active" href="notice.php">Room</a></li>
 
            <li><a href="register_form.php">Login</a></li>
        </ul>
    </nav>
    <div class="col" >
      <img src="img/room.jpg" class="img-fluid" style="width: 100%" />
    </div>
    <br />
    <div class="row">
      <div class="col"></div>
      <div class="col-md-3">
        <h1 style="text-align: center">110+ <br />Room</h1>
      </div>
      <div class="col-md-3">
        <h1 style="text-align: center">10<br />Vacant</h1>
      </div>
      <div class="col"></div>
    </div>
    <br /><br />
    <div class="row">
      <div class="col-lg-1 col-md-1 col-sm-1"><h4>Notice:</h4></div>
      <div class="col">
        <h4>
          <marquee style="color: red"
            >Apply for the room before 17 August</marquee
          >
        </h4>
      </div>
    </div>
    <br /><br />
    <div class="row">
      <h1>Terms & Conditions :</h1>
      <div class="col-lg-1"></div>
      <div
        class="col-lg-8"
        style="
          text-align: justify;
          border: 1px solid;
          margin-left: 10px;
          font-size: large;
        "
      >
        <p>1.All students must reside in their assigned rooms.</p>
        <p>
          2.You must eat in the dining hall according to the rules. If you do
          not cut a token in the dining hall for three consecutive months, your
          seat will be automatically cancelled.
        </p>
        <p>
          3.It is completely prohibited to physically and mentally abuse
          (ragging) any student in the hostel.
        </p>
        <p>
          4.You must refrain from any activity that disrupts the study
          environment (loud music, loud conversations, and sports-related
          noise).
        </p>
        <p>5.Smoking is completely prohibited inside the hostel.</p>
        <p>
          6.It is completely prohibited to carry, consume, or sell any type of
          drugs inside the hostel.
        </p>
        <p>
          7.You must refrain from any activity that damages the hostel property.
        </p>
        <p>
          8.Taking any kind of items (plates, utensils, bowls, jugs, chairs,
          etc.) used in the dining hall to the room is strictly prohibited.
        </p>
        <p>
          9.Without permission, you cannot take out or bring in any furniture
          from your room.
        </p>
        <p>
          10.The use of electric heater, internet receiver or similar electrical
          appliances in the hostel is strictly prohibited.
        </p>
        <p>
          11.In order to maintain a clean and healthy environment in the hostel,
          you must keep your respective rooms and the verandah in front of the
          room clean and tidy. The hostel authorities will inspect the rooms
          every 3 (three) months by giving notice. If the hostel authorities do
          not find the room environment satisfactory, each room will be fined
          TK. 500/- (five hundred).
        </p>
        <p>
          12.No guest will be allowed to enter and stay in the hostel without
          permission.
        </p>
      </div>
      <div class="col-lg-2"></div>
    </div>
    <br /><br />
    <div class="container center-align">
      <a href="login_form.php" class="btn btn-dark btn-lg"
        >Apply for Room</a
      >
    </div>
    <script
      src="https://c...content-available-to-author-only...r.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
    <?php include 'footer.php'?>
  </body>
</html>
