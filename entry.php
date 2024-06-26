<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>mainwelcomesubpages</title>
<style>
    a::before {  
        transform: scaleX(0);
        transform-origin: bottom right;
        border-radius: 22px;
        border: none;
    }
    a:hover::before {
        transform: scaleX(1);
        border-radius: 22px;
        border: none;
        transform-origin: bottom left;
    }
    
    a::before {
        content: " ";
        display: block;
        position: absolute;
        inset: 0 0 0 0;
        background: hsl(0, 0%, 100%);
        z-index: -1;
        transition: transform .3s ease;
        border-radius: 22px;
    }
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        border-radius: 22px;
    }
    body{
      background-color: black;
    }
    #myDiv {
      position: relative;
      cursor: pointer;
    }
    #myDiv button {
      all: unset;
      background-color: var(--black); 
      padding: 6px; 
      border-radius: 6px;
      width: 300px;
      height: 180px;
      border: 2px solid white; 
      border-radius: 22px;
      box-shadow: 0 0 6px var(--white); 
      overflow: hidden;
      display: flex;  
      justify-content: center;
      align-items: center; 
    }
    @keyframes glitch {
      0% {
        transform: skew(0deg);
      }
      25% {
        transform: skew(5deg);
      }
      50% {
        transform: skew(-10deg);
      }
      75% {
        transform: skew(5deg);
      }
      100% {
        transform: skew(0deg);
      }
    }
      button:hover {
        animation: glitch 2s infinite; 
      }
    
    #myDiv button img {
      width: 160px;
      height: 120px;
    }

    a {
        position: relative;
        font-size: 5rem;
    }

    @media (orientation: landscape) {
        body {
            grid-auto-flow: column;
        }
    }
</style>
</head>
<body>
<a>
    <div class="container" id="myDiv">
        <a href="gfx.php">
          <button>
            <img src="https://www.pngall.com/wp-content/uploads/15/Hand-Cursor-Transparent.png" alt="SVG Icon Click">
          </button>
        </a>
      </div>
    </a>
</body>
</html>