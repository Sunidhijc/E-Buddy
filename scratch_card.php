<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Scratch Card</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
  <!-- Stylesheet -->
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body {
      height: 100vh;
      background: url(child_l5.jpg) no-repeat;
            background-size: cover;
            background-position: center; 
    }

    .container1 {
      width: 31em;
      height: 31em;
      background-color: #f5f5f5;
      position: absolute;
      transform: translate(-50%, -50%);
      top: 50%;
      left: 50%;
      border-radius: 0.6em;
    }

    .base,
    #scratch {
      height: 200px;
      width: 200px;
      position: absolute;
      transform: translate(-50%, -50%);
      top: 50%;
      left: 50%;
      text-align: center;
      cursor: grabbing;
      border-radius: 0.3em;
    }

    .base {
      background-color: #ffffff;
      font-family: "Poppins", sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      box-shadow: 0 1.2em 2.5em rgba(16, 2, 96, 0.15);
    }

    .base h3 {
      font-weight: 600;
      font-size: 1.5em;
      color: #17013b;
    }

    .base h4 {
      font-weight: 400;
      color: #746e7e;
    }

    #scratch {
      -webkit-tap-highlight-color: transparent;
      -webkit-touch-callout: none;
      -webkit-user-select: none;
      user-select: none;
    }
  </style>
</head>
<body>
  <?php require '_main_nav.php' ?>
  <div class="container1">
  
    <div class="base">
      <h4>You Won</h4>
      <h3 id = "demo"></h3>
      <script>
          let x = Math.floor((Math.random() * 50) + 1);
          document.getElementById("demo").innerHTML = x;
      </script>
    </div>
    <canvas id="scratch" width="200" height="200"></canvas>
  </div>
  <!-- Script -->
  <script>
    let canvas = document.getElementById("scratch");
    let context = canvas.getContext("2d");

    const init = () => {
      let gradientColor = context.createLinearGradient(0, 0, 135, 135);
      gradientColor.addColorStop(0, "#c3a3f1");
      gradientColor.addColorStop(1, "#6414e9");
      context.fillStyle = gradientColor;
      context.fillRect(0, 0, 200, 200);
    };

    //initially mouse X and mouse Y positions are 0
    let mouseX = 0;
    let mouseY = 0;
    let isDragged = false;

    //Events for touch and mouse
    let events = {
      mouse: {
        down: "mousedown",
        move: "mousemove",
        up: "mouseup",
      },
      touch: {
        down: "touchstart",
        move: "touchmove",
        up: "touchend",
      },
    };

    let deviceType = "";

    //Detech touch device
    const isTouchDevice = () => {
      try {
        //We try to create TouchEvent. It would fail for desktops and throw error.
        document.createEvent("TouchEvent");
        deviceType = "touch";
        return true;
      } catch (e) {
        deviceType = "mouse";
        return false;
      }
    };

    //Get left and top of canvas
    let rectLeft = canvas.getBoundingClientRect().left;
    let rectTop = canvas.getBoundingClientRect().top;

    //Exact x and y position of mouse/touch
    const getXY = (e) => {
      mouseX = (!isTouchDevice() ? e.pageX : e.touches[0].pageX) - rectLeft;
      mouseY = (!isTouchDevice() ? e.pageY : e.touches[0].pageY) - rectTop;
    };

    isTouchDevice();
    //Start Scratch
    canvas.addEventListener(events[deviceType].down, (event) => {
      isDragged = true;
      //Get x and y position
      getXY(event);
      scratch(mouseX, mouseY);
    });

    //mousemove/touchmove
    canvas.addEventListener(events[deviceType].move, (event) => {
      if (!isTouchDevice()) {
        event.preventDefault();
      }
      if (isDragged) {
        getXY(event);
        scratch(mouseX, mouseY);
      }
    });

    //stop drawing
    canvas.addEventListener(events[deviceType].up, () => {
      isDragged = false;
    });

    //If mouse leaves the square
    canvas.addEventListener("mouseleave", () => {
      isDragged = false;
    });

    const scratch = (x, y) => {
      //destination-out draws new shapes behind the existing canvas content
      context.globalCompositeOperation = "destination-out";
      context.beginPath();
      //arc makes circle - x,y,radius,start angle,end angle
      context.arc(x, y, 12, 0, 2 * Math.PI);
      context.fill();
    };

    window.onload = init();
  </script>
</body>

</html>