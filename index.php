<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatBot with PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="chatbox">
            <div class="header">
                <div class="headerimg">
                <img src="img/alicia.jpg" alt="Alicia" style="width:50px; height:50px; border-radius: 50%;">
                </div>
                <div class="headertitle">
                <h4>Alicia Parker <span class="avail"> </span></h4>
                </div>
                
            </div>
            <div class="body" id="chatbody">
                <div class="scroller"></div>
            </div>
            <form class="chat" method="post" autocomplete="off">
                <div>
                    <input type="text" name="chat" id="chat" placeholder="Chat Box">
                </div>
                <div>
                    <input type="submit" value="Send" id="btn">
                </div>
            </form>
        </div>
    </div>
    <script>
        window.setInterval(function() {
            var elem = document.getElementById('chatbody');
            elem.scrollTop = elem.scrollHeight;
        }, 600);
    </script>
    <script src="app.js"></script>
</body>

</html>