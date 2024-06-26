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
            margin-top: 30px;
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
        #icona:hover {
            fill: #0bffef;
            transition: color 0.3s;
        }
        #prg {
            color: #6561eb;
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
        .center-text {
            text-align: center;
        }
        .left-text {
            text-align: left;
        }
        .social-icons img {
            height: 30px;
            width: 40px;
            margin-right: 5px;
        }
        .tools-icons img {
            width: 40px;
            height: 40px;
            margin-right: 5px;
        }
        .stats {
            display: flex;
            justify-content: left;
        }
        .stats img {
            margin: 10px;
        }
        .boxed{
            color: white;
            background-color: #464444;
            width: 60%;
            margin: auto;
            margin-top: 30px;
            border: #ccc 5px solid;
            padding: 9px;
            border-radius: 3px;
            box-shadow: 4px 4px 11px rgb(114, 114, 114);
        }
        .flexin {
            display: flex;
            justify-content: space-between; 
            align-items: center; 
            margin-top: 10px;
            position: relative; 
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
        <div class="boxed">
        <h1 class="center-text">👋 , I'm kvdzidev</h1><br>
        <h3 class="center-text">A passionate frontend developer from Poland</h3><br>
        <h3 class="center-text">You can check out my github programming portfolio here!</h3><br>

        <h3 class="left-text">Connect with me:</h3>
        <p class="left-text social-icons">
            <a href="https://instagram.com/kvdzi_" target="_blank"><img src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/instagram.svg" alt="kvdzi" /></a>
            <a href="https://www.behance.net/kvdzi" target="_blank"><img src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/behance.svg" alt="kvdzi" /></a>
            <a href="https://github.com/kvdzidev" target="_blank"><img src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/github.svg" alt="kvdzi" /></a>
            <a href="https://www.youtube.com/c/kvdzi" target="_blank"><img src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/youtube.svg" alt="kvdzi" /></a>
            <a href="https://x.com/kvdzigfx" target="_blank"><img src="https://raw.githubusercontent.com/rahuldkjain/github-profile-readme-generator/master/src/images/icons/Social/twitter.svg" alt="kvdzi" /></a>
        </p>

        <h3 class="left-text">Languages and Tools:</h3><br>
        <p class="left-text tools-icons">
            <a href="https://www.blender.org/" target="_blank" rel="noreferrer"><img src="https://download.blender.org/branding/community/blender_community_badge_white.svg" alt="blender" /></a>
            <a href="https://www.w3schools.com/cpp/" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/cplusplus/cplusplus-original.svg" alt="cplusplus" /></a>
            <a href="https://www.w3schools.com/css/" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg" alt="css3" /></a>
            <a href="https://www.figma.com/" target="_blank" rel="noreferrer"><img src="https://www.vectorlogo.zone/logos/figma/figma-icon.svg" alt="figma" /></a>
            <a href="https://www.w3.org/html/" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg" alt="html5" /></a>
            <a href="https://www.java.com" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/java/java-original.svg" alt="java" /></a>
            <a href="https://www.linux.org/" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/linux/linux-original.svg" alt="linux" /></a>
            <a href="https://www.mysql.com/" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg" alt="mysql" /></a>
            <a href="https://nodejs.org" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/nodejs/nodejs-original-wordmark.svg" alt="nodejs" /></a>
            <a href="https://www.oracle.com/" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/oracle/oracle-original.svg" alt="oracle" /></a>
            <a href="https://www.photoshop.com/en" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/photoshop/photoshop-line.svg" alt="photoshop" /></a>
            <a href="https://www.php.net" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="php" /></a>
            <a href="https://www.python.org" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/python/python-original.svg" alt="python" /></a>
            <a href="https://reactjs.org/" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/react/react-original-wordmark.svg" alt="react" /></a>
            <a href="https://www.sqlite.org/" target="_blank" rel="noreferrer"><img src="https://www.vectorlogo.zone/logos/sqlite/sqlite-icon.svg" alt="sqlite" /></a>
            <a href="https://unity.com/" target="_blank" rel="noreferrer"><img src="https://www.vectorlogo.zone/logos/unity3d/unity3d-icon.svg" alt="unity" /></a>
            <a href="https://unrealengine.com/" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/kenangundogan/fontisto/036b7eca71aab1bef8e6a0518f7329f13ed62f6b/icons/svg/brand/unreal-engine.svg" alt="unreal" /></a>
            <a href="https://www.adobe.com/products/xd.html" target="_blank" rel="noreferrer"><img src="https://cdn.worldvectorlogo.com/logos/adobe-xd.svg" alt="xd" /></a>
            <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank" rel="noreferrer"><img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg" alt="javascript" /></a>
            <a href="https://www.adobe.com/in/products/illustrator.html" target="_blank" rel="noreferrer"><img src="https://www.vectorlogo.zone/logos/adobe_illustrator/adobe_illustrator-icon.svg" alt="illustrator" /></a>
        </p>
        <div class="flexin">
            

                <div class="stats">
                    <img src="https://github-readme-stats.vercel.app/api/top-langs?username=kvdzidev&show_icons=true&locale=en&layout=compact" alt="kvdzidev" />
                </div>
                <div class="stats">
                    <img src="https://github-readme-stats.vercel.app/api?username=kvdzidev&show_icons=true&locale=en" alt="kvdzidev" />
                </div>
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
