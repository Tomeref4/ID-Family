<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>ID Family</title>
</head>
<body>
    <div id="Wrapper">
        <header id="headerHolder">
            <div id="profileHolder">
                <a href="#" id="profile"></a>
                <h2 class="soldierName">מיכאל שוורץ</h2>
            </div>
            <div id="logoHolder">
                <a href="Soldier.php" id="logo"></a>
            </div>
            <div id="menuHolder">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                <div id="mySidenav" class="sidenav">
                    <div id="profileHolder">
                        <a href="#" id="profile"></a>
                        <h2 class="soldierName">מיכאל שוורץ</h2>
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
        <main>
            <div class="searchContainer">
                <button class="searchHolderSubmited" type="submit" dir="rtl">
                    <img src="images/glasses.png" alt="">
                </button>
                <input class="searchHolder" type="search" placeholder="חיפוש" aria-label="חיפוש">
            </div>
            <h3 id="hFavorite">מועדפים</h3>
            <div id="favoritHolder">
                <a id="fav1" href="#" class="favorite">
                    <img src="images/fav1.png" alt="">
                    <div class="rec"></div>
                    <span class="favSpan">משפחת לוי תל אביב</span>
                </a>
                <a id="fav2"href="#" class="favorite">
                    <img src="images/fav2.jpg" alt="">
                    <div class="rec"></div>
                    <span class="favSpan">משפחת כהן רחובות</span>
                </a>
                <a id="fav3"href="#" class="favorite">
                    <img src="images/fav3.jpg" alt="">
                    <div class="rec"></div>
                    <span class="favSpan">משפחת ישועה רעננה</span>
                </a>
            </div>
            <div id="selectDisplayHolder">
                <div class="selectContainer">
                    <a href="#" class="activeItem">רשימה</a>
                    <a href="#" class="nonActiveItem">מפה</a>
                </div>
            </div>
            <div id="ListTubHolder">
                <div id="ListHolderContiner">
                    <div class="selectTubContainer">
                        <a href="#" class="activeItem">בתי אירוח</a>
                        <a href="#" class="nonActiveItem">קרובים</a>
                        <a href="#" class="nonActiveItem">מומלצים</a>
                    </div>
                </div>
            </div>
            <div id="articlesHolder">
                <a id="arct1" href="#" class="arct">
                    <img src="images/image1.png" alt="Guest house">
                    <div class="rec2"> 
                    </div>
                    <h3 class="h3Arct">בית החייל</h3> 
                    <span id="arctSpan1">ירושלים · 072-270-2258</span>
                    <a href="#" id="arctA1">1 חברים מתארחים</a>
                </a>
                <a id="arct2" href="#" class="arct">
                    <img src="images/image2.png" alt="Guest house">
                    <div class="rec2">
                    </div>
                    <h3 class="h3Arct">בית החייל</h3>
                    <span id="arctSpan2">רמת גן · 072-2702283</span>
                    <a href="#" id="arctA2">6 חברים מתארחים</a>
                </a>
            </div>
            <div id="upcomingEvemtsHolder">
                <h3 id="Events">אירועים</h3>
                <img src="images/Hannucha.jpg" alt="Hannucha" id="EventsImg">
                <p dir="rtl"><b>חג החנוכה-</b> חג החנוכה חוגגים<br>
                     בקצרין אירוח עם משפחות <br> 
                     הקהילה בהיכל הפיס בשעה 20:15 <br> 
                     מתקיים טקס בהנחייתו של המנחה <br> 
                     קרלוס אורטגה שמגיע במיוחד...
                </p>
            </div>
        </main>
    </div>
    <script src="js/scripts.js"></script>
</body>

</html>