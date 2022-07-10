<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>ID Family</title>
</head>

<body>
    <div id="Wrapper">
        <header id="headerHolder">
            <div id="profileHolder">
                <a href="#" id="profile2"></a>
                <h2 class="soldierName">אריאל טובים</h2>
            </div>
            <div id="logoHolder">
                <a href="index.php" id="logo"></a>
            </div>
            <div id="menuHolder">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                <div id="mySidenav" class="sidenav">
                    <div id="profileHolder">
                        <a href="#" id="profile2"></a>
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
        <main>
            <div id="beforLisrHolder">
                <div id="editingCotainer">
                    <div class="editingTubCotainer">
                        <a href="AddSolider.php" class="activeItem">הוספה</a>
                        <a href="#" class="nonActiveItem">עריכה</a>
                        <a href="#" class="nonActiveItem">מחיקה</a>
                    </div>
                </div>
                <div class="searchContainer">
                    <button class="searchHolderSubmited" type="submit" dir="rtl">
                        <img src="images/glasses.png" alt="">
                    </button>
                    <input class="searchHolder" type="search" placeholder="חיפוש" aria-label="חיפוש">
                </div>
            </div>
            <div id="listHolder">
                <div class="solderObj">
                    <div class="disc">
                        <h1 dir="rtl">מיכאל שוורץ</h1>
                            <div class="textHolder"  dir="rtl">
                                <h4>עדכן מיקום לפני</h3>
                                <h5 style="color: brown;">1 ימים</h5>
                            </div>
                    </div>
                    <div class="aCounaiter">
                        <span class="dot">i</span>
                        <a href="Object.php" class="aSoldaier">
                            <img src="images/michaelProfile1.png" alt="" class="objImage">
                        </a>
                    </div>
                </div>
                <div class="solderObj">
                    <div class="disc">
                        <h1 dir="rtl">דרור אמסלם</h1>
                            <div class="textHolder"  dir="rtl">
                                <h4>עדכן מיקום לפני</h3>
                                <h5 >2 שעות</h5>
                            </div>
                    </div>
                    <div class="aCounaiter">
                        <a href="#" class="aSoldaier">
                            <img src="images/DrorProfile1.png" alt="" class="objImage" >
                        </a>
                    </div>
                </div>
                <div class="solderObj">
                    <div class="discWithrequest">
                        <h1 dir="rtl">רות קיידר</h1>
                            <div class="textHolder"  dir="rtl">
                                <h4>עדכן מיקום לפני</h3>
                                <h5>4 שעות</h5>
                            </div>
                            <h5 dir="rtl">בקשת העלאת מסמכים לאישור בשעה 08:30</h5>
                    </div>
                    <div class="aCounaiter">
                        <span class="dot">i</span>
                        <a href="#" class="aSoldaier">
                            <img src="images/RothProfile1.png" alt="" class="objImage">
                        </a>
                    </div>
                </div>
                <div class="solderObj">
                    <div class="disc">
                        <h1 dir="rtl">אבינועם יוסף</h1>
                            <div class="textHolder"  dir="rtl">
                                <h4>עדכן מיקום לפני</h3>
                                <h5 >4 שעות</h5>
                            </div>
                    </div>
                    <div class="aCounaiter">
                        <a href="#" class="aSoldaier">
                            <img src="images/avinoamProfile.png" alt="" class="objImage">
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="js/commanderScripts.js"></script>
</body>

</html>