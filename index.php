<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stay At Home</title>
    <script src="script/index-script.js"></script>
    <!--
    <script src="script/newsfeed-script.js"></script> -->
    <link rel="stylesheet" href="styles/index-style.css">
</head>
<body>
    <!--Header Section-->
    <section id="header-section">
        <div class="container">
            <div id="nav-container">
                <div id="website-title">
                    <h2>
                        <a href="#" id="website-title">Covid-19 Tracker</a>
                    </h2>
                </div>
                <div></div>
                <div id=nav-bar>
                    <ul>
                        <li>
                            <h4>
                                <a href="#statistics-section">Statistics</a>
                            </h4>
                        </li>
                        <li>
                            <h4>
                                <a href="#news-section">News</a>
                            </h4>                            
                        </li>
                        <li>
                            <h4>
                                <a href="#symptoms-section">Symptoms</a>
                            </h4>
                        </li>
                        <li>
                            <h4>
                                <a href="#prevention-section">Prevention</a>
                            </h4>
                        </li>
                        <li>
                            <h4>
                                <a href="#about-section">About</a>
                            </h4>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!--Statistics Section-->
    <div class="section-container">
        <section id="statistics-section">
            <ul>
                <li>
                    <h2>
                        <p id="world-stat" style="color: lightgray;">00000000</p>
                    </h2>    
                        <p>World Cases</p>
                </li>
                <li>
                    <h2>
                        <p id="recovered-stat" style="color: lightgreen;">00000000</p>
                    </h2>
                        <p>Total Recovered</p>
                </li>
                <li>
                    <h2>
                        <p id="death-stat">00000000</p>
                    </h2>    
                        <p>Total Deaths</p>
                </li>
            </ul>
        </section>        
    </div>

    <!--map Section-->
    <div class="section-container">
        <section id="map-section">
            <iframe src="https://ourworldindata.org/grapher/total-cases-covid-19?tab=map" width="100%" height="600px"></iframe>
        </section>        
    </div>

    <!--news Section-->
    <div class="section-container">
        <section id="news-section">
            <?php
                include 'news.php';
            ?>
        </section>       
    </div>

    <!--symptoms Section-->
    <div class="section-container">
        <section id="symptoms-section">
            <div class="container">
                <div style="text-align: left;">
                    <h1 class="title">Know the Symtoms</h1>
                    <h2 >Be Aware. Stay Healthy</h2>
                    <p>COVID-19 affects different people in different ways. Most infected people will develop mild to moderate illness and recover without hospitalization.</p>    
                </div>
                <div>
                    <img src="img/img00.png" alt="">
                </div>
            </div>
            <div id="symptoms-list">
                <ul>
                    <li>
                        <img src="img/symptoms/1.png" alt="">
                    </li>
                    <li>
                        <img src="img/symptoms/2.png" alt="">
                    </li>
                    <li>
                        <img src="img/symptoms/3.png" alt="">
                    </li>
                    <li>
                        <img src="img/symptoms/4.png" alt="">
                    </li>
                    <li>
                        <img src="img/symptoms/5.png" alt="">
                    </li>
                    <li>
                        <img src="img/symptoms/6.png" alt="">
                    </li>
                </ul>
            </div>
        </section>        
    </div>

    <!--prevention Section-->
    <div class="section-container">
        <section id="prevention-section">
            <div class="container">
                <img id="stay-at-home" src="img/img02.png" alt="">
                <div style="text-align: left; margin: 1em;">
                    <h1 class="title">Prevention and Cure</h1>
                    <h2>Save yourself. Save the people around you.</h2>
                </div>   
            </div>
            <ul>
                <li>
                    <img src="img/prevention/1.png" alt="">
                    <p>Sanitize your phone</p>
                </li>
                <li>
                    <img src="img/prevention/2.png" alt="">
                    <p>Cancel unimportant errands</p>
                </li>
                <li>
                    <img src="img/prevention/3.png" alt="">
                    <p>Clean your space</p>
                </li>
                <li>
                    <img src="img/prevention/4.png" alt="">
                    <p>Maintain safe distance</p>
                </li>
                <li>
                    <img src="img/prevention/5.png" alt="">
                    <p>Stay at Home</p>
                </li>
                <li>
                    <img src="img/prevention/6.png" alt="">
                    <p>Always monitor yourself</p>
                </li>
            </ul>
        </section>       
    </div>

    <!--sources section-->
    <div class="section-container">
        <section id="sources-section">
            <h2>Sources</h2>
            <ol>
                <li>
                    <a href="https://www.worldometers.info/coronavirus/" target="_blank">Worldometers</a>
                </li>
                <li>
                    <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/situation-reports/" target="_blank">Novel Coronavirus (2019-nCoV) situation reports</a> - <a href="https://www.who.int/" target="_blank">World Health Organization (WHO)</a>
                </li>
                <li>
                    <a href="https://www.cdc.gov/" target="_blank">2019 Novel Coronavirus (2019-nCoV) in the U.S. -. U.S. Centers for Disease Control and Prevention (CDC)</a>
                </li>
                <li>
                    <a href="http://www.nhc.gov.cn/xcs/yqtb/list_gzbd.shtml" target="_blank">Outbreak Notification - National Health Commission (NHC) of the People’s Republic of China</a>    
                </li>
            </ol>
        </section>
    </div>

    <!--about Section-->
    <div class="section-container">
        <section id="about-section">
            <h1 class="title" style="text-align: left; padding: 45px 150px;">About the Creators</h1>
            <div class="container">
                <div class="creators">   
                    <p>John Matthew Mangalus</p>
                    <img src="img/about/matt.png" alt="">
                </div>
                <div class="creators">
                    <img src="img/about/henny.png" alt="">
                    <p>John Hendrix Taculod</p>
                </div>
                <div class="creators"> 
                    <p>Brian Christian Estiller</p>
                    <img src="img/about/bri.png" alt="">
                </div>
                <div class="creators">
                    <img src="img/about/fewew.png" alt="">
                    <p>Jayson Carl Ferrer</p>
                </div>
            </div>
        </section>  
    </div>
</body>
</html>