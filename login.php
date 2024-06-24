<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            background-color: rgb(47, 46, 46);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content {
            flex: 1;
            display: flex;
            justify-content: center; 
            align-items: center; 
            position: relative; 
            gap: 2vw;
        }
        nav {
            background-color: black;
            position: relative;
        }
        a {
            color: white;
            height: 75px;
            line-height: 75px;
            text-decoration: none;
            transition: color 0.3s;
        }
        a:hover {
            color: #0bffef;
        }
        ul {
            list-style-type: none; 
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
        }
        li {
            margin-right: 40px;
        }
        h3 {
            font-size: 28px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin: 0;
        }
        .search-page {
            position: absolute;
            left: 0; 
            top: 50%; 
            transform: translateY(-50%); 
            margin-left: 40px;
        }
        .search-container {
            width: 60%;
        }
        .search-input {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            border: 1px solid #ccc;
            border-radius: 25px;
            box-sizing: border-box;
        }
        #icona {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%); 
            margin-right: 40px; 
            fill: #6561eb;
        }
        #notif {
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%); 
            margin-right: 120px; 
        }
        #notif:hover {
            fill: #0bffef;
            transition: color 0.3s;
        }
        .footer {
            width: 100%;
            background-color: rgb(47, 46, 46);
            padding: 20px 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .menu {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px 0;
        }
        .menu__item {
            list-style: none;
            margin: 0 15px;
        }
        .menu__link {
            font-size: 1.2rem;
            color: #fff;
            display: inline-block;
            transition: color 0.3s;
            text-decoration: none;
            opacity: 0.75;
            font-weight: 300;
        }
        .menu__link:hover {
            opacity: 1;
            color: #ffffff;
        }
        .footer p {
            color: #fff;
            margin: 8px 0 0 0;
            font-size: 1rem;
            font-weight: 300;
            text-align: center;
        }
        .footer-line {
            width: 100%;
            opacity: 150%;
            height: 1px;
            background-color: white;
            margin-bottom: 10px;
        }
        .registerBox {
            box-shadow: 4px 4px 11px rgb(114, 114, 114);
            color: #fff;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-bottom: 50px;
            font-size: large;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            border: #ccc 3px solid;
            background-color: rgb(60, 60, 60);
            padding-top: 8px;
            padding: 20px;
            border-radius: 8px;
            width: 360px;
        }
        .registerBox h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }
        .registerBox label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .registerBox input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .registerBox button {
            width: 60%;
            padding: 10px;
            background-color: rgb(47, 46, 46);
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            border: #ccc 2px solid;
        }
        .registerBox button:hover {
            background: #fff;
            color: black;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li>
                <h3>
                    <div class="search-page">
                        <div class="search-container">
                            <form action="search_results.php" method="get">
                                <input type="text" name="query" class="search-input" placeholder="Search...">
                            </form>
                        </div>
                    </div>
                </h3>
            </li>
            <a id="grx" href="gfx.php"><li><h3>GRAPHICS</h3></li></a>
            <a id="edit" href="editing.php"><li><h3>EDITING</h3></li></a>
            <a id="wrt" href="writing.php"><li><h3>WRITING</h3></li></a>
            <a id="prg" href="programming.php"><li><h3>PROGRAMMING</h3></li></a>
            <a id="abt" href="about.php"><li><h3>ABOUT ME</h3></li></a>
            <a id="cont" href="contact.php"><li><h3>CONTACT</h3></li></a>
            <a id="noti" href="notif.php">
                <li>
                    <h3>
                        <svg id="notif" fill="#ffffff" height="50px" width="50px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 611.999 611.999" xml:space="preserve">
                            <g>
                                <g>
                                    <g>
                                        <path d="M570.107,500.254c-65.037-29.371-67.511-155.441-67.559-158.622v-84.578c0-81.402-49.742-151.399-120.427-181.203
                                            C381.969,34,347.883,0,306.001,0c-41.883,0-75.968,34.002-76.121,75.849c-70.682,29.804-120.425,99.801-120.425,181.203v84.578
                                            c-0.046,3.181-2.522,129.251-67.561,158.622c-7.409,3.347-11.481,11.412-9.768,19.36c1.711,7.949,8.74,13.626,16.871,13.626
                                            h164.88c3.38,18.594,12.172,35.892,25.619,49.903c17.86,18.608,41.479,28.856,66.502,28.856
                                            c25.025,0,48.644-10.248,66.502-28.856c13.449-14.012,22.241-31.311,25.619-49.903h164.88c8.131,0,15.159-5.676,16.872-13.626
                                            C581.586,511.664,577.516,503.6,570.107,500.254z M484.434,439.859c6.837,20.728,16.518,41.544,30.246,58.866H97.32
                                            c13.726-17.32,23.407-38.135,30.244-58.866H484.434z M306.001,34.515c18.945,0,34.963,12.73,39.975,30.082
                                            c-12.912-2.678-26.282-4.09-39.975-4.09s-27.063,1.411-39.975,4.09C271.039,47.246,287.057,34.515,306.001,34.515z
                                            M143.97,341.736v-84.685c0-89.343,72.686-162.029,162.031-162.029s162.031,72.686,162.031,162.029v84.826
                                            c0.023,2.596,0.427,29.879,7.303,63.465H136.663C143.543,371.724,143.949,344.393,143.97,341.736z M306.001,577.485
                                            c-26.341,0-49.33-18.992-56.709-44.246h113.416C355.329,558.493,332.344,577.485,306.001,577.485z"/>
                                        <path d="M306.001,119.235c-74.25,0-134.657,60.405-134.657,134.654c0,9.531,7.727,17.258,17.258,17.258
                                            c9.531,0,17.258-7.727,17.258-17.258c0-55.217,44.923-100.139,100.142-100.139c9.531,0,17.258-7.727,17.258-17.258
                                            C323.259,126.96,315.532,119.235,306.001,119.235z"/>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </h3>
                </li>
            </a>
            <a href="login.php">
                <li>
                    <h3>
                        <svg id="icona" fill="#ffffff" width="50px" height="50px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <circle fill="none" cx="12" cy="7" r="3"/>
                            <path d="M12 2C9.243 2 7 4.243 7 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5zm0 8c-1.654 
                            0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm9 11v-1c0-3.859-3.141-7-7-7h-4c-3.86
                            0-7 3.141-7 7v1h2v-1c0-2.757 2.243-5 5-5h4c2.757 0 5 2.243 5 5v1h2z"/>
                            </svg>
                    </h3>
                </li>
            </a>
        </ul>
    </nav>
    <div class="content">
        <div>
    <form class="registerBox" action="logini.php" method="post">
        <h2>Create your account</h2>
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="firstname" required>
        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" name="lastname" required>
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <br><br>
        <button type="submit">Register</button>
    </form>
    
</div>
    <div class="registerBox">
            <h2>Log into your Account</h2>
            <form action="login_process.php" method="post">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <br><br>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
    </div>
    <footer class="footer">
        <div class="footer-line"></div>
        <ul class="menu">
            <li class="menu__item"><a class="menu__link" href="gfx.php">Home</a></li>    
            <li class="menu__item"><a class="menu__link" href="linktr.ee/kvdzi">Linktree</a></li>
            <li class="menu__item"><a class="menu__link" href="contact.php">Contact</a></li>
        </ul>
        <p>&copy;2024 | kvdzi</p>
    </footer>
</body>
</html>

