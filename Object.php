<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>ID Family</title>
</head>
<body>
    <div id="Wrapper">
        <header id="headerHolder">
            <div id="profileHolder">
                <a href="#" id="profile"></a>
                <h2 class="soldierName">אריאל טובים</h2>
            </div>
            <div id="logoHolder">
                <a href="index.php" id="logo"></a>
            </div>
            <div id="menuHolder">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                <div id="mySidenav" class="sidenav">
                    <div id="profileHolder">
                        <a href="#" id="profile"></a>
                        <h2 class="soldierName">אריאל טובים</h2>
                    </div>
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="buffer"></div>
                    <a href="#">פרופיל</a>
                    <a href="#">הודעות</a>
                    <a href="#">מסמכים</a>
                    <a href="#">אירועים</a>
                    <div class="buffer"></div>
                    <a href="#">הגדרות</a>
                    <a href="#">התנתקות</a>
                </div>
        </header>
    <main id="Object">
        <div id="ProfileHolder">
            <img src="images/michaelProfile1.png" alt="ProfilePic">
            <h3>מיכאל שוורץ</h3>
            <span id="BneiBrak">בני ברק- 050-2136722</span>
            <span id="LastLocation">:מיקום אחרון</span>
            <a href="#" id="SoliderHou">בית החייל ירושלים</a>
            <button id="Requests" type="button">בקשות</button>
            <span id="Time">החייל לא עדכן מיקום מעל 1 ימים</span>
        </div>
        <div id="Documents">
            <h3>מסמכים</h3>
            <section class="Document" id="Document1">
                <i class="material-icons">&#xe2c7;</i>
                <span class="BigSpan" id="Ptorim">פטורים</span>
                <span class="SmallSpan">9 בספטמבר, 2020</span>
            </section>
            <section class="Document" id="Document2">
                <i class="material-icons">&#xe2c7;</i>
                <span class="BigSpan" id="Sherot">תנאי שירות</span>
                <span class="SmallSpan">9 בספטמבר, 2020</span>
            </section>
            <section class="Document" id="Document3">
                <i class="material-icons">&#xe2c7;</i>
                <span class="BigSpan" id="Work">אישורי עבודה</span>
                <span class="SmallSpan">9 בספטמבר, 2020</span>
            </section>
        </div>
        <div id="Contacts">
            <span class="SmallSpan">אנשי קשר למקרה חירום</span>
            <section class="Contacts" id="FirstContact">
                <i class="fa">&#xf2bd;</i>
                <span id="Contact1">יוסף שוורץ</span>
                <span id="Phone1">054-5576988</span>
            </section>
            <section class="Contacts" id="SecondContact">
                <i class="fa">&#xf2bd;</i>
                <span id="Contact2">רוחמה שוורץ</span>
                <span id="Phone2">054-4638567</span>
            </section>
        </div>
    </main>
    </div>
    <script src="js/commanderScripts.js"></script>
</body>
</html>