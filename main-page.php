


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website</title>
    <link rel="stylesheet" href="main-page.css?v=<?php echo time(); ?>" >
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    
</head>
<body>  
<<<<<<< HEAD
    


=======
    <?php
>>>>>>> 6b96220c7b1061945195d98b3077dd382a3f256d
        <div>
        <div class="header">
                <div class="text1">
                    <img class="img1" src="logo3-PhotoRoom.png-PhotoRoom.png" alt="">
                </div>
                    <div class="header2">
                        <div class=" text2">
                     
                        <a href="dashboard.php"><button class="button4" ><b>DASHBOARD</b></button></a>
                        <button class="button0"> <b>HOME</b> </button>
                            <a href="about-us-page.php" target=" _blank"><button class="button1"> <b>ABOUT US</b> </button></a>
                            <a href="Contactus.php" target=" _blank" ><button class="button2"> <b>CONTACT US</b> </button></a>
                            <a href="Sign-in-page.php" target="_blank"><button class="button3"> <b>SIGN IN</b> </button></a>
                

                        <div class="searchbar" id="">
                                <input class="search" type="text" name="" placeholder=" Search..." id="">
                        </div>
                    </div>
                </div>
            </div>
                    
            </div>
        </div>
        <div class="football-page">
            <div class="mainpage">
                <div id="kontentiFootball">
                    <img id="slideshowFootball" alt="SlideShow Football" />
                    <div class="navigation">
                        <button class="arrow-button" onclick="prevImgFootball()">&#9664;</button>
                        <button class="right-arrow" onclick="changeImgFootball()">&#9654;</button>
                    </div>
                </div>
                <div class="Titull1">
                <b>TE FUNDIT</b>
                <hr style="height: 1px; width: 1400px; background-color: rgb(43, 45, 179);border-color:rgb(43, 45, 179) ;">
                </div>
                <div class="small-images">
                        <DIV class="lajmi2">
                            <img class="foto-lajmi2" src="ballondorwinner.jpg" alt="">
                            <div class="foto-teksti2"> <b>SHPALLET FITUESI I TOPIT TE ARTE</b>	</div>
                        </DIV>
                        <DIV class="lajmi3">
                            <img class="foto-lajmi3" src="bellinghamphoto.jpg" alt="">
                            <div class="foto-teksti3">  <b>BELLINGHAM FITON 'THE GOLDEN BOY'</b></div>
                        </DIV>
                        <DIV class="lajmi4">
                            <img class="foto-lajmi4" src="albania-qualify.jpg" alt="">
                            <div class="foto-teksti4"> <b>SHQIPERIA KUALIFIKOHET PER 'EURO 2024'</b> </div>
                        </DIV>
                        <DIV class="lajmi5">
                            <img class="foto-lajmi5" src="euro2024.jpg" alt="">
                            <div class="foto-teksti5"> <b>SHQIPERIA NE 'GRUPIN E VDEKJES'</b> </div>
                        </DIV>
                        <script>
                            let iFootball = 0;
                            const imgArrayFootball = ['bellinghamphoto.jpg','albania-qualify.jpg' ,'championsleaguenews.jpg'];
                            const slideshowImageFootball = document.getElementById('slideshowFootball');
            
                            function changeImgFootball() {
                                iFootball = (iFootball + 1) % imgArrayFootball.length;
                                slideshowImageFootball.style.opacity = 0;
                                setTimeout(function () {
                                    slideshowImageFootball.src = imgArrayFootball[iFootball];
                                    slideshowImageFootball.style.opacity = 1;
                                }, 500); 
                            }
            
                            function prevImgFootball() {
                                iFootball = (iFootball - 1 + imgArrayFootball.length) % imgArrayFootball.length;
                                slideshowImageFootball.style.opacity = 0;
                                setTimeout(function () {
                                    slideshowImageFootball.src = imgArrayFootball[iFootball];
                                    slideshowImageFootball.style.opacity = 1;
                                }, 500); 
                            }
                            window.onload = function () {
                        changeImgFootball();
                    };
                        </script>
        </div>
        </div>
        <div class="basketball-page">
            <div class="mainpage-basketball">
                <div id="kontentiBasketball">
                    <img id="slideshowBasketball" alt="Slideshow Image" />
                    <div class="navigation">
                        <button id="basketball-button" class="arrow-button" onclick="prevImgBasketball()">&#9664;</button>
                        <button id="basketball-button" class="right-arrow" onclick="changeImgBasketball()">&#9654;</button>
                    </div>
                </div>
                        <div class="Titull1">
                        <b>TE FUNDIT</b>
                        <hr style="height: 1px; width: 1400px;border: 1px solid rgb(207, 83, 0);background-color: rgb(207, 83, 0);">
                        </div>
                        <div class="small-images">
                                <DIV class="lajmi6">
                                    <img class="foto-lajmi6" src="basketballfoto4.jpg" alt="">
                                    <div class="foto-teksti6"> <B>LEBRON NDIHMON NE FITOREN E LAKERS</B>	</div>
                                </DIV>
                                <DIV class="lajmi7">
                                    <img class="foto-lajmi7" src="basketballfoto5.jpg" alt="">
                                    <div class="foto-teksti7"> <B>ALL-STAR TEAM PER VITIN 2023</B></div>
                                </DIV>
                                <DIV class="lajmi8">
                                    <img class="foto-lajmi8" src="basketballfoto6.jpg" alt="">
                                    <div class="foto-teksti8"> <B>FINALET PER VITIN 2023</B> </div>
                                </DIV>
                                <DIV class="lajmi9">
                                    <img class="foto-lajmi9" src="basketballfoto7.jpg" alt="">
                                    <div class="foto-teksti9"> <B>GIANNIS ME ROL KRUCIAL NE EKIPIN E TIJ</B> </div>
                                </DIV>   
                                <script>
                                    let iBasketball = 0;
                                    const imgArrayBasketball = ['basketballfoto1.png', 'basketballfoto2.png', 'basketballfoto3.png'];
                                    const slideshowImageBasketball = document.getElementById('slideshowBasketball');
                    
                                    function changeImgBasketball() {
                                        iBasketball = (iBasketball + 1) % imgArrayBasketball.length;
                                        slideshowImageBasketball.style.opacity = 0;
                                        setTimeout(function () {
                                            slideshowImageBasketball.src = imgArrayBasketball[iBasketball];
                                            slideshowImageBasketball.style.opacity = 1;
                                        }, 500); 
                                    }
                    
                                    function prevImgBasketball() {
                                        iBasketball = (iBasketball - 1 + imgArrayBasketball.length) % imgArrayBasketball.length;
                                        slideshowImageBasketball.style.opacity = 0;
                                        setTimeout(function () {
                                            slideshowImageBasketball.src = imgArrayBasketball[iBasketball];
                                            slideshowImageBasketball.style.opacity = 1;
                                        }, 500); 
                        };
                
                        window.addEventListener('load', function () {
                    changeImgFootball();
                    changeImgBasketball();
                    changeImgBoxing();
                });
                            
                                </script>   
                </div>
                <div class="boxing-page">
                    <div class="mainpage-boxing">
                        <div id="kontentiBoxing">
                            <img id="slideshowBoxing" alt="Slideshow Image" />
                            <div class="navigation">
                                <button class="Boxingarrow" onclick="prevImgBoxing()">&#9664;</button>
                                <button class="Boxingarrow" onclick="changeImgBoxing()">&#9654;</button>
                            </div>
                        </div>
            
                        <script>
                            let iBoxing = 0;
                            const imgArrayBoxing = ['boxingfoto1.jpg', 'boxingfoto2.jpg', 'boxingfoto3.jpg'];
                            const slideshowImageBoxing = document.getElementById('slideshowBoxing');
            
                            function changeImgBoxing() {
                                iBoxing = (iBoxing + 1) % imgArrayBoxing.length;
                                slideshowImageBoxing.style.opacity = 0;
                                setTimeout(function () {
                                    slideshowImageBoxing.src = imgArrayBoxing[iBoxing];
                                    slideshowImageBoxing.style.opacity = 1;
                                }, 500);
                            }
            
                            function prevImgBoxing() {
                                iBoxing = (iBoxing - 1 + imgArrayBoxing.length) % imgArrayBoxing.length;
                                slideshowImageBoxing.style.opacity = 0;
                                setTimeout(function () {
                                    slideshowImageBoxing.src = imgArrayBoxing[iBoxing];
                                    slideshowImageBoxing.style.opacity = 1;
                                }, 500);
                            }
                        </script>
            
                        <div class="Titull1">
                            <b>TE FUNDIT</b>
                            <hr style="height: 1px; width: 1400px; border: 1px solid rgb(180, 0, 0); background-color: rgb(180, 0, 0);">
                        </div>
            
                        <div class="small-images">
                            <DIV class="lajmi10">
                                <img class="foto-lajmi10" src="boxingfoto4.jpg" alt="">
                                <div class="foto-teksti10"> <B>MAKHACHEV FITON KUNDER 'THE VOLK'</B> </div>
                            </DIV>
                            <DIV class="lajmi11">
                                <img class="foto-lajmi11" src="boxingfoto5.jpg" alt="">
                                <div class="foto-teksti11"> <B>MARKU, GATI PER SFIDEN E RADHES </B> </div>
                            </DIV>
                            <DIV class="lajmi12">
                                <img class="foto-lajmi12" src="boxingfoto6.jpg" alt="">
                                <div class="foto-teksti12"> <B>JOSHUA SFIDON TYSON FURYN</B> </div>
                            </DIV>
                            <DIV class="lajmi13">
                                <img class="foto-lajmi13" src="boxingfoto7.jpg" alt="">
                                <div class="foto-teksti13"> <B>JON JONES GATI PER RIKTHIM  </B> </div>
                            </DIV>
                        </div>
                    </div>
                </div>
                </div>
<<<<<<< HEAD
        
          
                
                
=======
                ?>
>>>>>>> 6b96220c7b1061945195d98b3077dd382a3f256d
</body>
</html>