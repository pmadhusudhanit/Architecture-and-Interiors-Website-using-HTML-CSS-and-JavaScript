<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body{
            background-image: url("worldb&w.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        #d1 , #d2{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        h1{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            color: red;
        }

        h2{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color: whitesmoke;
        }

        h4{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: whitesmoke;
        }

         .box{
            display: flex;
            align-items: center ;
            justify-content: center;
        } 

        input[id="msg"]{
            width: 100%;
            height: 150%; 
            padding: 24%;
            padding-top: 30%;
            padding-bottom: 30%;
            margin: 5%;
        }

        input[id="name"]{
            width: 100%;
            height: 75%; 
            padding: 10%;
            margin: 5%;
        }

        input[id="mail"]{
            width: 100%;
            height: 75%; 
            padding: 10%;
            margin: 5%;
        }

        #send{
            width: 75%;
            padding: 2.5%;
            font-weight: 100%;
            margin: 5%;
        }

        .divider {
      border-top: 1.5px solid #ccc;
    }

        .container {
      display: flex; 
    }

    .box {
      width: 50%; 
      padding: 20px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    .icon-list {
      display: flex;
      flex-direction: column; 
    }

    .icon {
      font-size: 150%; 
      margin: 5% 0; 
      margin-right: 10%;
      color: red;
    }

      #phone  {
      color: skyblue;
    } 

     #gmail{
        color: #c29525;
     }


    .icon-item {
      display: flex;
      align-items: center;
      margin: 31.25; 
      color: #ccc;
    }

   
    </style>
</head>
<body>
    <div id="d1">
    <h1><center>DETAILS</center></h1> <br>
    </div>

    <div class="divider"></div>

    <div>
        <h2><center>Home & Sweet Home</center></h2>
    </div>

    <div>
        <h4><center>Architectural Elegance, Interior Magic: Transforming Ordinary to Extraordinary !</center></h4>
    </div>
    <center><div class="divider1"></div>
        <div>
            <img style="width: 30%;padding-top:2%;padding-bottom:2%" src="./projecth1.jpg">
        </div>
    </div></center>
    <div class="divider"></div>
    <div style="display: flex;">
        <DIV style="font-size: 150%;color: white;padding-left: 20%;width: 50%;">
            <h2>Architectures</h2>
            <form>
                <input type="radio" name="radio1" id="radio1">
                <label for="radio1">Art Deco</label><br><br>

                <input type="radio" name="radio1" id="radio1">
                <label for="radio1">Cape Cod</label><br><br>

                <input type="radio" name="radio1" id="radio1">
                <label for="radio1">Farm House</label><br><br>

                <input type="radio" name="radio1" id="radio1">
                <label for="radio1">French Provincial</label><br><br>

                <input type="radio" name="radio1" id="radio1">
                <label for="radio1">Midcuetury Modern</label><br><br>
            </form>
        </DIV>


        <DIV style="font-size: 150%;color: white;padding-left: 10%;width: 50%;">
            <h2>Interiors</h2>
            <form>
                <input type="radio" name="radio1" id="radio1">
                <label for="radio1">Living Room</label><br><br>

                <input type="radio" name="radio1" id="radio1">
                <label for="radio1">Master Bedroom</label><br><br>

                <input type="radio" name="radio1" id="radio1">
                <label for="radio1">Kitchen</label><br><br>

                <input type="radio" name="radio1" id="radio1">
                <label for="radio1">Floor</label><br><br>

                <input type="radio" name="radio1" id="radio1">
                <label for="radio1">Wall Decors</label><br><br>
            </form>
        </DIV><br><br>
    </div>
    <center><form><button formaction="./loginpage.html" style="width: 8%;font-size:100%">OK</button></form></center><br>
    <div class="container">
    <form action="detailsConnect.php" method="POST">
        <div class="box">
                <input type="text" name="name" id="name" placeholder="Your Name"> <br>
    
                <input type="text" name="mail" id="mail" placeholder="Email"> <br>
    
                <input type="text" name="msg" id="msg" placeholder="Message"> 

                <center><button type="submit" name="submit" id="submit">Send</button></center>
        </div>
        </form>

        <div class="box">
            <div class="icon-list">
                <div class="icon-item">
            <i class="fas fa-map-marker icon">
            </i> 
            <span>Siripuram, Visakhapatnam, Andhra Pradesh 530003</span>
        </div>
            
        <div class="icon-item">
            <i class="fas fa-phone icon"  id="phone">
            </i>
            <span>+91 9191919191 </span>
        </div>

        <div class="icon-item">
            <i class="fas fa-comment icon"  id="gmail"> 
            </i>
            <span>homesweethome@gmail.com</span>
            </div>
        </div>
      </div>
      </div>
</body>
</html>