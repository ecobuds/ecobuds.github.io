<!DOCTYPE html>
<html>
    <title>EcoBuds</title>
    <link rel="stylesheet" type="text/css" href="styleforhomepage.css"> 
    <link href="https://fonts.googleapis.com/css?family=Work+Sans&display=swap" rel="stylesheet">
    <style>

    ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

form li + li {
  margin-top: 1em;
}
      .form-row{
        margin-top: 25px;
        margin-left: 20px;
      }
      .menu-item {
        font-family: 'Work Sans', sans-serif;
        text-align: center;
        font-size: 75px;
      }
      .w3-container {
        background-image: url("background6.jpg");
        background-repeat: no-repeat;
        background-size: 100%;
        height: 700px;
      }
      .formcolor {
        background-color: blue;
      }
      .progressbarcontainer {
        padding-top: 50px;
      }
      .progress-bar {
        position: relative;
        width: 900px;
        height: 40px;
        border: 5px solid #000;
      }

      .progress-bar-fill {
        height: 100%;
        background: #a1fc56;
        transition: width 0.5s;  
      }
      .progress-bar-value{
        position: absolute;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
       }
      .charimage{
        padding-top: 50px;
        width: 100%;
        height: 100%;
        padding-left: 245px;
      }
    </style>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="stylefordropdown.css">
<body onload="changeImage()" onload="myFunction()">
<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-left" style="width:300px;" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large w3-hide-large" onclick="w3_close()">Close &times;</button>
  <div class="form-row">
  <h> <b>Were you sustainable today? </b></h> 
  </div>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <div class="form-row">
  <label><b>Tasks:</b></label>
  <br><br>
  <ul>
    <li>
      <input type="hidden" name="task1" value="0"/> 
      <input type="checkbox" name="task1" value=10> Didn't use a disposable bottle <br><br>
      <input type="hidden" name="task2" value="0"/>
      <input type="checkbox" name="task2" value=20> Didn't eat meat <br><br>

      <input type="hidden" name="task3" value="0"/>
      <input type="checkbox" name="task3" value=10> Showered for less than five minutes  <br><br>
      <input type="hidden" name="task4" value="0"/>
      <input type="checkbox" name="task4" value=10> Unplugged devices <br><br>
      <input type="hidden" name="task5" value="0"/>
      <input type="checkbox" name="task5" value=10> Composted food waste <br><br>
      <input type="hidden" name="task6" value="0"/>
      <input type="checkbox" name="task6" value=20> Used public transportation or rode a bike rather than drove <br><br>
      <input type="hidden" name="task7" value="0"/>
      <input type="checkbox" name="task7" value=10> Bought local food <br><br>
      <input type="hidden" name="task8" value="0"/>
      <input type="checkbox" name="task8" value=10> Used reusable bags and containers <br><br>
    </li>
  <li class="button">
    <button type="submit">Submit</button>
  </li>
</form>
<p id="demo"><i>No, please try harder tomorrow, I know you can do it! </i>
  <!--<a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>-->
  </div>
</div>

<div class="w3-main" style="margin-left:300px">
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge w3-hide-large" onclick="w3_open()">&#9776;</button>
  <div class="menu">
    <div class="menu-item"><a href="index.php">EcoBuds</a></div>
    <div class="clear"></div>
    
  </div>
</div>

<div class="w3-container">
      <div class="progressbarcontainer">
        <div class="progress-bar">
        <div class="progress-bar-value">65%</div>
        <div class="progress-bar-fill"></div>
      </div>
   <div class="charimage">
        <img src="sadnew.png" id="myImage" width="450" height="450" x="Change">
        </div>
  </div>
   
</div>


<script>
  function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
  }

  function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
  }

  function myFunction() {
    var x1 = <?php echo $_POST["task1"]; ?>;
    var x2 = <?php echo $_POST["task2"]; ?>;
    var x3 = <?php echo $_POST["task3"]; ?>;
    var x4 = <?php echo $_POST["task4"]; ?>;
    var x5 = <?php echo $_POST["task5"]; ?>;
    var x6 = <?php echo $_POST["task6"]; ?>;
    var x7 = <?php echo $_POST["task7"]; ?>;
    var x8 = <?php echo $_POST["task8"]; ?>;
    var n = Number(x1) + Number(x2) + Number(x3) + Number(x4) + Number(x5) + Number(x6) + Number(x7) + Number(x8);
    return n;
  }


  class ProgressBar {
    constructor (element, initialValue = 0) {
      this.valueElem = element.querySelector('.progress-bar-value');
      this.fillElem = element.querySelector('.progress-bar-fill');
      this.setValue(initialValue);
      }

     setValue(newValue) {
        if (newValue < 0) {
            newValue = 0;
          } 
        if (newValue > 100) {
            newValue = 100;
          }
        this.value = newValue;
        this.update();
    }

    update() {
        const percentage = this.value + '%';
        this.fillElem.style.width = percentage;
        this.valueElem.textContent = percentage;
        }
    }

    const pb1 = new ProgressBar(document.querySelector('.progress-bar'), myFunction());

    if (myFunction() >= 70) {
  document.getElementById("demo").innerHTML = "<i> Yes, and I love you for it! </i>";
    }
          else if((myFunction() < 70) && (myFunction()>= 30)) {
        document.getElementById("demo").innerHTML = "<i> Yes, but you can do better... </i>";
      }

    function changeImage() {
      var image = document.getElementById('myImage');
      if (myFunction() >= 70) {
        image.src = "happy.png";
      }
      else if((myFunction() < 70) && (myFunction()>= 30)) {
        image.src = "neutral.png";
      }
      else {
        image.src = "sadnew.png";
      }
    }

</script>
     
</body>

</html>