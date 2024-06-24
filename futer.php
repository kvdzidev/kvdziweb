
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap");

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      display: flex;
      background: #333;
      justify-content: flex-end;
      align-items: flex-end;
      min-height: 100vh;
    }

    .footer {
      position: relative;
      width: 100%;
      background-color: rgb(47, 46, 46);
      min-height: 100px;
      padding: 20px 50px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    .social-icon,
    .menu {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      margin: 10px 0;
      flex-wrap: wrap;
    }

    .social-icon__item,
    .menu__item {
      list-style: none;
    }

    .social-icon__link {
      font-size: 2rem;
      color: #fff;
      margin: 0 10px;
      display: inline-block;
      transition: 0.5s;
    }

    .social-icon__link:hover {
      transform: translateY(-10px);
    }

    .menu__link {
      font-size: 1.2rem;
      color: #fff;
      margin: 0 10px;
      display: inline-block;
      transition: 0.5s;
      text-decoration: none;
      opacity: 0.75;
      font-weight: 300;
    }

    .menu__link:hover {
      opacity: 1;
    }

    .footer p {
      color: #fff;
      margin: 15px 0 10px 0;
      font-size: 1rem;
      font-weight: 300;
    }
  </style>
  <body>
    <footer class="footer">
      <ul class="menu">
        <li class="menu__item"><a class="menu__link" href="#">Home</a></li>    
        <li class="menu__item"><a class="menu__link" href="#">Linktree</a></li>
        <li class="menu__item"><a class="menu__link" href="#">Contact</a></li>
      </ul>
      <p>&copy;2024 | kvdzi</p>
    </footer>

