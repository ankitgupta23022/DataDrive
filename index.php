<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no user-scalable=yes">

    <!-- Load No Cache for this website-->
    
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="CACHE-CONTROL" content="NO-CACHE">

    <!------------------------------------>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="shortcut icon" type="img/ico" href="images/drive_logo.ico">
    <title>DataDrive</title>
  </head>
  <body>
    <h1></h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="javascript.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="icon" href="//ssl.gstatic.com/docs/doclist/images/infinite_arrow_favicon_5.ico">
    <link rel="shortcut icon" href="images/drive_logo.ico" type="image/x-icon" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    
    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>
-->
    
<!-- DMCA TAKEDOWN Modal BEGINS --><!--tabindex=-1 is used to prevent selection of the object by the tab key || aria is used for visually impaired persons using screenreader to read the screen aloud && role is also used for visually impaired -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content"><!--Modal content is used for the white background and it holds Modal Header, Body and Footer-->
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DMCA Takedown Notice:-</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
				All parts of the DataDrive are for private use only.
No files are hosted on our server,
All contents are provided by non-affiliated third parties.
They are only indexed much like how Google works.
DataDrive does not accept the responsibility for content hosted on third party websites and does not have any involvement in the downloading/uploading of movies. We just post links available in internet.
This site merely indexes other site’s contents. The hosting server or the administrator cannot be held responsible for the contents of any linked sites or any link contained in a linked site, or changes/updates to such sites. Since freedom of speech is allowed in this industry, we do not act in any kind of copyright infringement. If in case there is an infringing content and you believe it should be removed then contact us to remove it immediately. We won’t even ask you for verification details.

Contact us here and state the name of the post published on our site.<br />
Email:- <a href="mailto:ankitgupta23022@gmail.com">Ankit Gupta</a><br>

Thank you for understanding...<br />

"Please allow 2-3 Business Days for the Removal of copyright material"

                                </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- DMCA TAKEDOWN Modal ENDS -->


    <!------------------------Navbar Start---------------------->
    <nav class="navbar navbar-expand-lg fixed-top navbar-mainbg">
        <a data-toggle="modal" data-target="#exampleModal" class="navbar-brand navbar-logo" href="index.php"><img src="images/gdrive.png" width="30" height="30" class="d-inline-block align-top" alt="">
            DataDrive</a>
            
        <!-- Navbar Toggler Icon For Mobile Devices(This button or toggle collapses the ID=navbarSupportedContent)-->    
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-black"></i>
        </button>
        <!-------------------------------------------->
        <!--After this comment the id=navbarSupportedContent is present which is collapsed upon the button click or navigation clicked for mobiles-->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!--Basically what ml-auto does is that it segregates the navbar in 2 pieces one for the website's icon or logo and other for the navigable links -->
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <!--Below this comment we have navbar items or links-->
                <li class="nav-item active">
                    <a class="nav-link" href="index.php"><i class="fas fa-camera"></i>Bollywood</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="webseries.php"><i class="fas fa-ticket-alt"></i>WebSeries</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hollywood.php"><i class="fas fa-video"></i>Hollywood</a>
                </li>
              <!--
                <li class="nav-item">
                    <a class="nav-link" href="softwares.php"><i class="fas fa-play-circle"></i>Softwares</a>
                </li>
              -->
                <li class="nav-item">
                    <a class="nav-link" href="games.php"><i class="fas fa-gamepad"></i>Games</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="request.php"><i class="fas fa-file"></i>Request</a>
                </li>
                <!---------Navbar items or links ends here----------------->
            </ul>
        </div>
    </nav>
    
    <!------------------------Navbar Ends---------------------->

    <!------------------------Search Box BEGINS----------------> 

    <div class="container-fluid"><form>
      <div class="form-group"></div>
        <!--<input type="text" readonly class="form-control" id="formGroupExampleInput" placeholder="Search..."> -->
        <marquee Scrollamount=10>Cyberpunk is now avaliable @ <a href="games.php">Games section</a> | To Search For Something Mobile users can click on ellipsis( ⋮ ) button and go to [Find in page] option whereas Desktop Users can press ctrl+f.....Happy Downloading</marquee>
      </div></form></div>
      
    <!------------------------Search Box ENDS---------------->

    <!------------------------MAIN CONTENT AREA ie CARD AREA BEGINS---------------->
    <div class="padlrtb text-justify">
 
        <div class="card-deck mt-3 padlr">
            
          <div class="card border-dark">
          <!--  <img class="card-img-top" src="images/laxmii.jpg" alt="Laxmii"> -->
          
          <div class="videowidth"> 
            <video id='myVideo' muted controls loop="" preload="none" height="350px" width="350px"poster="images/laxmii.jpg" class="card-img-top"><source src="videos/laxmii.mp4" type="video/mp4"></video>
           </div>
          
            <div class="card-body">
              <h5 class="card-title">Laxmii</h5>
              <p class="card-text">Laxmii is a 2020 Indian Hindi-language comedy horror film written and directed by Raghava Lawrence in his Hindi directorial debut. It is a remake of the 2011 Tamil film Kanchana and stars Akshay Kumar and Kiara Advani. Due to the COVID-19 pandemic, the film will be released in cinemas with the selected overseas markets in India and was stream digitally on Disney+Hotstar on 9 November 2020.</p>
            </div>
            <div class="card-footer">
              <a href="https://drive.google.com/file/d/11ZJf1mg36jWjzR7-etVfymR4UibDLqG9/view?usp=sharing" class="btn btn-primary" target="_blank">480p</a>
              <a href="https://drive.google.com/file/d/1tQKLOamsTrE_hoUEnspOIqGE__ScuYw3/view?usp=sharing" class="btn btn-primary" target="_blank">720p</a>
              <a href="https://drive.google.com/file/d/1oVtQpHiQaMX3w1eumk5zctFj65CyuIlX/view?usp=sharing" class="btn btn-primary" target="_blank">1080p</a>
            </div>
          </div> 

          <div class="card border-dark">
             <!-- <img class="card-img-top" src="images/malang.jpg" alt="Malang"> -->
             
             <div class="videowidth"> 
            <video id='myVideo' muted controls loop="" preload="none" height="350px" width="350px"poster="images/malang.jpg" class="card-img-top"><source src="videos/malang.mp4" type="video/mp4"></video>
           </div> 
           
              <div class="card-body">
                <h5 class="card-title">Malang</h5>
                <p class="card-text">Malang is a 2020 Indian Hindi-language romantic action thriller film directed by Mohit Suri and produced by Luv Ranjan, Ankur Garg, Bhushan Kumar, Krishan Kumar and Jay Shewakramani. It stars Aditya Roy Kapur,Disha Patani,Anil Kapoor and Kunal Khemu, with a guest appearance by Shaad Randhawa.</p>
              </div>
              <div class="card-footer">
                <a href="https://drive.google.com/open?id=1eIhSJeH-nRKL2pRrJOHjt-ZI57S6mo3q" class="btn btn-primary" target="_blank">480p</a>
                <a href="https://drive.google.com/open?id=17F2qDaupIrHsT-wVda-xsJFqIERvjWzl" class="btn btn-primary" target="_blank">720p</a>
                <a href="https://drive.google.com/open?id=1aF6RIo556Qkt6n4Tphe7wu4gs6xS8WES" class="btn btn-primary" target="_blank">1080p</a>
              </div>
            </div>
          

          <div class="card border-dark">
              <!-- <img class="card-img-top" src="images/chokedpbh.jpg" alt="Choked: Paisa Bolta Hai"> -->
              
              <div class="videowidth"> 
            <video id='myVideo' muted controls loop="" preload="none" height="350px" width="350px"poster="images/chokedpbh.jpg" class="card-img-top"><source src="videos/chokedpbh.mp4" type="video/mp4"></video>
           </div>
              
              <div class="card-body">
                <h5 class="card-title">Choked: Paisa Bolta Hai</h5>
                <p class="card-text">Choked: Paisa Bolta Hai is a 2020 Indian Hindi-language drama film directed and co-produced by Anurag Kashyap, written by Nihit Bhave, and jointly produced by Netflix and Good Bad Films (in their debut production). The film stars Saiyami Kher and Roshan Mathew, with Amruta Subhash and Rajshri Deshpande appearing in supporting roles. Set against the backdrop of 2016 Indian banknote demonetisation, the film tells the story of a bank cashier who discovers a stash of cash hidden in her kitchen sink.</p>
              </div>
              <div class="card-footer">
                <a href="https://drive.google.com/open?id=1V9Dexw-jwgl3_9gWdTQpDYz4dTSBxk5m" class="btn btn-primary" target="_blank">480p</a>
                <a href="https://drive.google.com/open?id=19kuoiCJ19w7Gl9t_43NvB7TvNFQUjubo" class="btn btn-primary" target="_blank">720p</a>
                <a href="https://drive.google.com/open?id=1mLstW9jvU2-OhwFrko2JCW6erE6WtES-" class="btn btn-primary" target="_blank">1080p</a>
              </div>
            </div>

          
        </div>
        

          <div class="card-deck mt-3 padlr">
            
            <div class="card border-dark" >
            <!--  <img class="card-img-top" src="images/sonchiriya.jpeg" alt="Sonchiriya"> -->
            
            <div class="videowidth"> 
            <video id='myVideo' muted controls loop="" preload="none" height="350px" width="350px"poster="images/sonchiriya.jpeg" class="card-img-top"><source src="videos/sonchiriya.mp4" type="video/mp4"></video>
           </div>
            
              <div class="card-body">
                <h5 class="card-title">Sonchiriya</h5>
                <p class="card-text">Sonchiriya (transl. the golden bird) is a 2019 Indian action film co-written and directed by Abhishek Chaubey and starring Sushant Singh Rajput, Bhumi Pednekar, Manoj Bajpayee, Ranvir Shorey and Ashutosh Rana. The film presents a rooted tale set in Chambal. The film was released on 1 March 2019 in 940 screens worldwide, with 720 screens in India and 220 in overseas regions. The film received positive reviews from critics. Its dialogues are entirely in the Bundeli dialect.The film is now being remade into bengali as " sonar pakhi" starring arefin shuvo,sotabdi wadud,ashish vidyarti & ahmed rubel in lead roles.</p>
              </div>
              <div class="card-footer">
                <a href="https://drive.google.com/file/d/1clus8o35qh2aU7CzVYroDudXICY7fioT/view?usp=sharing" class="btn btn-primary" target="_blank">480p</a>
                <a href="https://drive.google.com/file/d/1TTWTBSoBjLHl64yybE8ytqljtKUnWlUv/view?usp=sharing" class="btn btn-primary" target="_blank">720p</a>
                <a href="https://drive.google.com/file/d/1Gr7XkEevDyHfCH-I4JEKG3eZEUBRHMnL/view?usp=sharing" class="btn btn-primary" target="_blank">1080p</a>
              </div>
            </div>


            <div class="card border-dark">
            <!--  <img class="card-img-top" src="images/thappad.jpg" alt="Thappad"> -->
            
            <div class="videowidth"> 
            <video id='myVideo' muted controls loop="" preload="none" height="350px" width="350px"poster="images/thappad.jpg" class="card-img-top"><source src="videos/thappad.mp4" type="video/mp4"></video>
           </div>
            
              <div class="card-body">
                <h5 class="card-title">Thappad</h5>
                <p class="card-text">Thappad (transl. Slap) is a 2020 Indian Hindi-language drama film directed by Anubhav Sinha and produced by him and Bhushan Kumar of T-Series. The film, starring Taapsee Pannu, was released in theatres on 28 February 2020.</p>
                
              </div>
              <div class="card-footer">
                <a href="https://drive.google.com/open?id=1LAZ1jmXTsZnLTBuimZaaWR7eBuIo_-4y" class="btn btn-primary" target="_blank">480p</a>
                <a href="https://drive.google.com/open?id=1qADvuYg9lw4z3ElP0X4ZbBXjn5RJtfVr" class="btn btn-primary" target="_blank">720p</a>
                <a href="https://drive.google.com/open?id=1XJ5dUNB2IJ5lpVFh_WDmaqJUmQn7fGcq" class="btn btn-primary" target="_blank">1080p</a>
              </div>
            </div>

            <div class="card border-dark">
             <!-- <img class="card-img-top" src="images/dreamgirl.jpg" alt="Dream Girl"> -->
             
              <div class="videowidth"> 
            <video id='myVideo' muted controls loop="" preload="none" height="350px" width="350px"poster="images/dreamgirl.jpg" class="card-img-top"><source src="videos/dreamgirl.mp4" type="video/mp4"></video>
           </div>
             
              <div class="card-body">
                <h5 class="card-title">Dream Girl</h5>
                <p class="card-text">Dream Girl is a 2019 Indian Hindi-language comedy film directed by Raaj Shaandilyaa and co-produced by Ekta Kapoor and Shobha Kapoor under their banner Balaji Motion Pictures. In the film, Ayushmann Khurrana plays a cross-gender actor whose female voice impersonation begets attention from others. Nushrat Bharucha, Annu Kapoor, Manjot Singh,Vijay Raaz and Nidhi Bisht feature in supporting roles.</p>
            
              </div>
              <div class="card-footer">
                <a href="https://drive.google.com/open?id=1LSr78g5lr6Oa3Z5DgdvRH_V6NZU7hicM" class="btn btn-primary" target="_blank">480p</a>
                <a href="https://drive.google.com/open?id=1keOp2KtpNNzF3Lc91X9-pg6ZGEga6krY" class="btn btn-primary" target="_blank">720p</a>
                <a href="https://drive.google.com/file/d/17uCEPtqJ9ROOSOIDA33e_7giKczTQs0f/view?usp=sharing" class="btn btn-primary" target="_blank">1080p</a>
              </div>
            </div>
            
            
              
          <div class="card-deck mt-3 mb-3 padlr">
            
            <div class="card border-dark">
            <!--  <img class="card-img-top" src="images/kabirsingh.jpg" alt="Kabir Singh"> -->
            
             <div class="videowidth"> 
            <video id='myVideo' muted controls loop="" preload="none" height="350px" width="350px"poster="images/kabirsingh.jpg" class="card-img-top"><source src="videos/kabirsingh.mp4" type="video/mp4"></video>
           </div>
            
              <div class="card-body">
                <h5 class="card-title">Kabir Singh</h5>
                <p class="card-text">Kabir Singh is a 2019 Indian Hindi-language romantic drama film written and directed by Sandeep Vanga. It is a remake of his own Telugu film Arjun Reddy (2017). Jointly produced by Cine1 Studios and T-Series, the film stars Shahid Kapoor and Kiara Advani. Kapoor plays Kabir Singh, a surgeon who spirals into self-destruction when his girlfriend, Preeti leaves him desperately.</p>
                
              </div>
              <div class="card-footer">
                <a href="https://drive.google.com/open?id=1zIRNSNF_dD33-vFPQutveTKOeb2V0RgM" class="btn btn-primary" target="_blank">480p</a>
                <a href="https://drive.google.com/open?id=1c2_CBZQwdNuqWgeCwtDwQolWfQ-XgsG-" class="btn btn-primary" target="_blank">720p</a>
                <a href="https://drive.google.com/file/d/1NR-IXuKBbXotDIRDeeLtuwmy5IFNAe3o/view?usp=sharing" class="btn btn-primary" target="_blank">1080p</a>
              </div>
            </div>

            <div class="card border-dark">
             <!-- <img class="card-img-top" src="images/angrejimedium.jpg" alt="Amgreji Medium"> -->
             
             <div class="videowidth"> 
            <video id='myVideo' muted controls loop="" preload="none" height="350px" width="350px"poster="images/angrejimedium.jpg" class="card-img-top"><source src="videos/angrejimedium.mp4" type="video/mp4"></video>
           </div>
             
              <div class="card-body">
                <h5 class="card-title">Angreji Medium</h5>
                <p class="card-text">Angrezi Medium (transl. English Medium) is a 2020 Indian Hindi-language comedy drama film directed by Homi Adajania and produced under the production banner Maddock Films. A spiritual sequel to the 2017 film Hindi Medium, the film stars Irrfan Khan, Kareena Kapoor Khan, Deepak Dobriyal and Radhika Madan. Filming began in Udaipur on 5 April 2019 and was completed by July in London. This was Irrfan's last film to be released before his death on 29 April 2020.</p>
              </div>
              <div class="card-footer">
                <a href="https://drive.google.com/open?id=1MEebJ7XR5-nmDpkZSt3rZqlguMCJZRFI" class="btn btn-primary" target="_blank">480p</a>
                <a href="https://drive.google.com/open?id=1mkx3ubcn6YcUKzAOx60k52XxFC1JynB8" class="btn btn-primary" target="_blank">720p</a>
                <a href="https://drive.google.com/open?id=1AWISHH6c9A6rE16ZdMspmzb4ySdYH2vA" class="btn btn-primary" target="_blank">1080p</a>
              </div>
            </div>

            <div class="card border-dark">
            <!-- <img class="card-img-top" src="images/baaghi3.jpg" alt="Baaghi 3"> -->
            
            <div class="videowidth"> 
            <video id='myVideo' muted controls loop="" preload="none" height="350px" width="350px"poster="images/baaghi3.jpg" class="card-img-top"><source src="videos/baaghi3.mp4" type="video/mp4"></video>
           </div>
            
              <div class="card-body">
                <h5 class="card-title">Baaghi 3</h5>
                <p class="card-text">Baaghi 3 is a 2020 Indian Hindi-language action thriller film directed by Ahmed Khan. Produced by Nadiadwala Grandson Entertainment and Fox Star Studios, it is a spiritual sequel to Baaghi 2 (2018) and the third film in the Baaghi film series. Baaghi 3 stars Tiger Shroff, Riteish Deshmukh and Shraddha Kapoor. A remake of the 2012 Tamil-language film Vettai.</p>
              </div>
              <div class="card-footer">
                <a href="https://drive.google.com/open?id=1RF5DWRZsVnDt5EanlfxBk0jUc1q2O80R" class="btn btn-primary" target="_blank">480p</a>
                <a href="https://drive.google.com/open?id=1r8i2y4Tbd5Toh0M84hfDStaXxQw9JX9V" class="btn btn-primary" target="_blank">720p</a>
                <a href="https://drive.google.com/open?id=1t7XvzMEW8rePcz8mvIEIh3dxlrDOmCoN" class="btn btn-primary" target="_blank">1080p</a>
              </div>
            </div>
          
          
          <div class="card-deck mt-3 padlr">
              
            <div class="card border-dark">
          <!--  <img class="card-img-top" src="images/ghoomketu.jpg" alt="Ghoomketu"> -->
          
          <div class="videowidth"> 
            <video id='myVideo' muted controls loop="" preload="none" height="350px" width="350px"poster="images/ghoomketu.jpg" class="card-img-top"><source src="videos/ghoomketu.mp4" type="video/mp4"></video>
           </div>
          
            <div class="card-body">
              <h5 class="card-title">Ghoomketu</h5>
              <p class="card-text">Ghoomketu is a 2020 Indian Hindi-language comedy-drama film written and directed by Pushpendra Nath Misra. The film stars Nawazuddin Siddiqui, Ragini Khanna, Anurag Kashyap, Ila Arun, Raghuvir Yadav and Brijendra Kala in the main lead roles while also features Amitabh Bachchan, Ranveer Singh, Sonakshi Sinha, Chitrangada Singh in the cameo appearances.</p>
            </div>
            <div class="card-footer">
              <a href="https://drive.google.com/open?id=1FOlRuXpPrCYbYFWQoiFg3qwx8LpthFTf" class="btn btn-primary" target="_blank">480p</a>
              <a href="https://drive.google.com/open?id=17J21o4BdaVzkvOCAprSoogTdAAuLgkwV" class="btn btn-primary" target="_blank">720p</a>
              <a href="https://drive.google.com/open?id=1UlIcboNIrMnG21OvTBn0pwQA6NfZ1Pzn" class="btn btn-primary" target="_blank">1080p</a>
            </div>
          </div> 
        
         <!-- DEMO AREA FOR THE CARD TO VIDEO ELEMENT && INVISIBLE class and LESS-CONTENT id  -->     

          <div class="card border-dark invisible" id="less-content">
             <!-- <img class="card-img-top" src="images/malang.jpg" alt="Malang"> -->
             
             <div class="videowidth"> 
            <video id='myVideo' muted controls loop="" preload="none" height="350px" width="350px"poster="images/malang.jpg" class="card-img-top"><source src="videos/malang.mp4" type="video/mp4"></video>
           </div> 
           
              <div class="card-body">
                <h5 class="card-title">Malang</h5>
                <p class="card-text">Malang is a 2020 Indian Hindi-language romantic action thriller film directed by Mohit Suri and produced by Luv Ranjan, Ankur Garg, Bhushan Kumar, Krishan Kumar and Jay Shewakramani. It stars Aditya Roy Kapur,Disha Patani,Anil Kapoor and Kunal Khemu, with a guest appearance by Shaad Randhawa.</p>
              </div>
              <div class="card-footer">
                <a href="https://drive.google.com/open?id=1eIhSJeH-nRKL2pRrJOHjt-ZI57S6mo3q" class="btn btn-primary" target="_blank">480p</a>
                <a href="https://drive.google.com/open?id=17F2qDaupIrHsT-wVda-xsJFqIERvjWzl" class="btn btn-primary" target="_blank">720p</a>
                <a href="https://drive.google.com/open?id=1aF6RIo556Qkt6n4Tphe7wu4gs6xS8WES" class="btn btn-primary" target="_blank">1080p</a>
              </div>
            </div>
          
          <!----------------------------------------------------------------------------->
        
          <div class="card border-dark invisible" id="less-content">
              <!-- <img class="card-img-top" src="images/chokedpbh.jpg" alt="Choked: Paisa Bolta Hai"> -->
              
              <div class="videowidth"> 
            <video id='myVideo' muted controls loop="" preload="none" height="350px" width="350px"poster="images/chokedpbh.jpg" class="card-img-top"><source src="videos/chokedpbh.mp4" type="video/mp4"></video>
           </div>
              
              <div class="card-body">
                <h5 class="card-title">Choked: Paisa Bolta Hai</h5>
                <p class="card-text">Choked: Paisa Bolta Hai is a 2020 Indian Hindi-language drama film directed and co-produced by Anurag Kashyap, written by Nihit Bhave, and jointly produced by Netflix and Good Bad Films (in their debut production). The film stars Saiyami Kher and Roshan Mathew, with Amruta Subhash and Rajshri Deshpande appearing in supporting roles. Set against the backdrop of 2016 Indian banknote demonetisation, the film tells the story of a bank cashier who discovers a stash of cash hidden in her kitchen sink.</p>
              </div>
              <div class="card-footer">
                <a href="https://drive.google.com/open?id=1V9Dexw-jwgl3_9gWdTQpDYz4dTSBxk5m" class="btn btn-primary" target="_blank">480p</a>
                <a href="https://drive.google.com/open?id=19kuoiCJ19w7Gl9t_43NvB7TvNFQUjubo" class="btn btn-primary" target="_blank">720p</a>
                <a href="https://drive.google.com/open?id=1mLstW9jvU2-OhwFrko2JCW6erE6WtES-" class="btn btn-primary" target="_blank">1080p</a>
              </div>
            </div>

        </div>
            
        
    </div>

    <!------------------------MAIN CONTENT AREA ie CARD AREA Ends---------------->
    

    <!------------------------Pagination Begins-------------->
    <!--
    <nav aria-label="Page navigation">
      <ul class="pagination justify-content-center pt-3 pagination-md">
        <li class="page-item disabled">
          <span class="page-link">Previous</span>
        </li>
        <li class="page-item active"><a class="page-link" href="index.html">1</a></li>
        <li class="page-item disabled">
          <span class="page-link">
            2
            <span class="sr-only">(current)</span>
          </span>
        </li>
        <li class="page-item disabled"><a class="page-link" href="#">3</a></li>
        <li class="page-item disabled">
          <a class="page-link" href="#">Next</a>
        </li>
      </ul>
    </nav>
  -->
    <!-------------------------Pagiantion Ends--------------->    
  

    <!-------------------------FOOTER BEGINS------------------------------->

    <footer class="footer-distributed">

			<div class="footer-left">

				<h3>Ankit<span>Gupta</span></h3>

				<p class="footer-links">
					<a href="index.php">Bollywood</a>
					·
					<a href="webseries.php">WebSeries</a>
					·
					<a href="hollywood.php">Hollywood</a>
				<!--	·
					<a href="softwares.php">Softwares</a>
        -->	·
					<a href="games.php">Games</a>
					·
					<a href="request.php">Request</a>
					·
					<a data-toggle="modal" data-target="#exampleModal" href="">DMCA</a>
				</p>

				<p class="footer-company-name">Copyright &copy; 2020 All rights reserved |<style>.heart{color:#bf0f0f;}</style>
        Made with <span class="heart">❤</span> by Ankit</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Guru Nanak Institutions</span> Mullana, Ambala</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+91 8434940067</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:ankitgupta23022@gmail.com">ankitgupta23022@gmail.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About</span>
					Young, Carefree.
				</p>

				<div class="footer-icons">

					<a href="https://www.facebook.com/ankitgupta23022"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/AnkitGu86825797"><i class="fa fa-twitter"></i></a>
					<a href="https://instagram.com/_ankit_.gupta?igshid=ny5a5jjb2idh"><i class="fa fa-instagram"></i></a>
					<a href="https://www.linkedin.com/in/ankit-gupta-02178a148/"><i class="fa fa-linkedin"></i></a>
                    
				</div>

			</div>

		</footer>

    <!--------------------------FOOTER ENDS------------------------------->
    
    <!--------------------------ON HOVER SCRIPT BEGINS-------------------->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
	//with class div
	/*Using Jquery's $(document).ready(function()) => The ready() method is used to make a function available after the document is loaded. Whatever code you write inside the $(document ). ready() method will run once the page DOM is ready to execute JavaScript code.*/
	$(document).ready(function(){
	    /*Using JQuery's hover(function) to play video on hovering over => videowidth CLASS*/
		$(".videowidth").hover(function(){
			$(this).children("video")[0].play();
		},
		function(){
		$(this).children("video")[0].pause();
		});
	});
	// Without id and class div
	/*$(document).ready(function(){
		$("video").hover(function(){
			$(this)[0].play();
		},
		function(){
		$(this)[0].pause();
		});
	});*/
	</script>
    
    <!--------------------------ON HOVER SCRIPT ENDS---------------------->
    
    <!--------------------------CURRENT VIEW SCRIPT BEGINS------------------------>
<script> 

/*Using InsertionObserver Javascript API*/

/*Flow of control are mentioned in numbers as eg #no*/

//Trivia:- Whats a viewport? => The viewport is the user's visible area of a web page.
let options = {
    root: null, //It denotes the viewport
    rootMargin:'0px', //It denotes the rootmargin ie the margin above or below the viewport(only supports PIXEL or px values)
    threshold:1.0 /*Values can be between 1 or 0 => If the value is 1 the item should be 100% in the viewport for this to work and If the value is 0 then if any part of the element is present it'll work fine*/
};

/*=> Used arrow function notation here*/

let callback = (entries,observer)=>{
    
    /*This callback function can be simply written as
    function callback(entries,observer){
        
    }
    */
    /*And since in Javascript a normal function will create a variable with name callback so, when we are using => arrow function notation here we have to create a variable callback ourself as arrow function doesn't create variables*/
    entries.forEach(entry => {
    if(entry.target.id == 'myVideo')
    {
       if(entry.isIntersecting){//Checks if the target element is intersecting with our viewport and returns true if it does
          entry.target.play();//Playing the video
        }
    else{
        entry.target.pause();//Pausing the video
    }
   }
  });
}

let observer = new IntersectionObserver(callback, options);//Mandatory syntax to use InsertionObserver Javascript API
observer.observe(document.querySelector('#myVideo'));//Observer which observes the elements in the viewport

</script>
    
    
    <!--------------------------CURRENT VIEW SCRIPT ENDS------------------------>

    

  </body>
</html>
