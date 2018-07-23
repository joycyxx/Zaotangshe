<link rel='stylesheet' href='style.css' type='text/css' xmlns="http://www.w3.org/1999/html"/>
    </head>

    <body>
        <?php session_start();?>
        <script src="script.js"></script>
        <header>
            <a href="home.php"></a>
            W PROPERTY
        </header>
        <br />

        <nav>
            <ul>
                <li class=<?php echo($page=="home" ? "activepage" : "")?>><a href="home.php">主页</a></li>
                <li class=<?php echo($page=="display" ? "activepage" : "")?>><a href="display.php">视频</a></li>
                <li class=<?php echo($page=="about" ? "activepage" : "")?>><a href="about.php">资讯</a></li>
                <li class=<?php echo($page=="chat" ? "activepage" : "")?>><a href="chatting.php">讨论</a></li>
            </ul>
        </nav>
        <br />

        <main>