
<style>
body {margin:0;font-family:sans-serif;}

.topnav {
  overflow: hidden;
  background-color: #0B6623;
}

 .topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding-top:10px;
  padding-right:7px;
  text-decoration: none;
  font-size: 20px;
}

.topnav .icon {
  display: none;
}

.dropdown {
    overflow: hidden;
}
#home{
  float:right;
}
#set{
  float:right;
}

.dropdown .dropbtn {
    font-size: 17px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: #0B6623;
    font-family: inherit;
    margin: 0;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color:#5D4D3D;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: white;
    padding: 10px,14px;
    text-decoration: none;
    display: block;
    text-align: left;
}


.dropdown-content a:hover {
    background-color: #ddd;
    color: black;
}

.dropdown:hover .dropdown-content {
    display: block;
}

@media screen and (max-width: 800px) {
  .topnav a:not(:nth-child(-n+2)){
    display:none;
    padding-left:10px;
  }
  .dropdown .dropbtn {
    display: none;
  }
  #home{
    float:left;
  }
  #set{
    float:right;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 800px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  #home{
    float:left;
  }
  #set{
    float:right;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
<div class="topnav" id="myTopnav">

  <a class ="logo" href="#"> <img src="./images/adbl1.png">
  </a>
  <a class="logo" style="padding-top:15px; color:white;"> ADBL Inventory Management system </a> 
  <?php
          if (isset($_SESSION["id"])) {
            ?>
  <a class="fa fa-user"  style="padding-top:15px;" href="logout.php" id="set">&nbsp;Logout</a>
  <?php
          }
        ?>    

  <div class="dropdown" id="set">
    <button class="dropbtn " style="padding-top:10px; font-size:20px;"><span class="fa fa-cog">&nbsp;Settings 
      <i class="fa fa-caret-down"></i>
    </span>
    </button>

    <div class="dropdown-content">
      <a href="#">Change Password</a>
    </div>
  </div> 
  <a class="fa fa-home" style="padding-top:15px;" id="home" href="#about">Home</a>
  <a href="javascript:void(0);" style="font-size:15px, padding-top:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

