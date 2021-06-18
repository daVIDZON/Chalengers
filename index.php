<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
        <link rel="shortcut icon" type="image/png" href="<?php echo bloginfo('template_url'); ?>img/logo.png">
        <?php  
        wp_head();
        ?>
        <title>Challengers</title>
    </head>
    <body>
       <header>
          <div class="container">
              <div class="first-part-header">
                 <?php
                    wp_nav_menu([
                     'menu'           =>  'Main',      
                     'container'      =>  false,
                     'menu_class'     =>  'menu__list',      
                     'echo'           =>   true,
                     'fallback_cb'    =>   'wp_page_menu',  
                     'items_wrap'     => '<ul class="menu__list">%3$s</ul>',
                     'depth'          =>  1
                    ]);
                ?>
               </div>
               <div class="header-menu-img-block">
                  <img class="logo_img" src="<?php echo bloginfo('template_url'); ?>/assets/img/logo.png">
               </div>
               <div class="second-part-header">
                  <ul class="menu__list">
                     <li class="header-menu-position">
                      <a href="#" class="header-menu_text">Home</a>
                     </li>
                     <li class="header-menu-position">
                      <a href="#" class="header-menu_text">Pages</a>
                              <ul class="sub-menu-list">
                                   <li class="sub-menu-list-1">
                                     <a href="#" class="sub-menu-link">Single Post</a>
                                          <ul class="sub-sub-menu-list">
                                             <li class="sub-menu-list-2">
                                              <a href="#" class="sub-sub-menu-link">Option #1</a>
                                             </li> 
                                             <li class="sub-menu-list-2">
                                              <a href="#" class="sub-sub-menu-link">Option #2</a>
                                             </li>  
                                             <li class="sub-menu-list-2">
                                              <a href="#" class="sub-sub-menu-link">Option #3</a>
                                             </li>                                                                                                                                               
                                         </ul>
                                   </li>
                                   <li class="sub-menu-list-1">
                                     <a href="#" class="sub-menu-link">Single Page</a>
                                          <ul class="sub-sub-menu-list">
                                             <li class="sub-menu-list-2">
                                              <a href="#" class="sub-sub-menu-link">Right Sidebar</a>
                                             </li> 
                                             <li class="sub-menu-list-2">
                                              <a href="#" class="sub-sub-menu-link">Left Sidebar</a>
                                             </li>  
                                             <li class="sub-menu-list-2">
                                              <a href="#" class="sub-sub-menu-link">Fuel Width</a>
                                             </li>                                                                                                                                               
                                         </ul>
                                   </li>

                                   <li class="sub-menu-list-1">
                                     <a href="#" class="sub-menu-link">Media Archive</a>
                                   </li>
                                   <li class="sub-menu-list-1">
                                     <a href="#" class="sub-menu-link">Shortcodes</a>
                                   </li>
                                   <li class="sub-menu-list-1">
                                     <a href="#" class="sub-menu-link">404 Page</a>
                                   </li>

                              </ul>
                     </li>
                     <li class="header-menu-position">
                      <a href="#" class="header-menu_text">Table</a>
                     </li>
                     <li class="header-menu-position">
                      <a href="#" class="header-menu_text">Calendar</a>
                     </li>
                </ul>
               </div>
            </div>
       </header>
     <main id="anchor">
       <div class="main-slider">
          <div class="sliders s1"><img class="main-slider-image--1" src="<?php echo bloginfo('template_url'); ?>/assets/img/003-1900x885.jpg"></div>
          <div class="sliders s2"><img class="main-slider-image--2" src="<?php echo bloginfo('template_url'); ?>/assets/img/10-1900x885.jpg"></div>
          <div class="flash-img"></div>
      <div class="radio-buttons">
         <input type="radio" name="r" id="r1" checked>
         <input type="radio" name="r" id="r2">
      </div>
      <div class="navigations">
         <label class="bar" for="r1"></label>
         <label class="bar" for="r2"></label>
      </div>
       </div> 
           <div class="shop-menu">
                <div class="heading-shop-menu">
                     <p class="shop-menu-text">Our new online shop is now open! Check it out!</p>
                </div>
                 <div class="shop-button">
                    <div class="main-shop-button">
                       <a href="#" class="shop-menu-link"><p class="shop-menu-button">Visit Shop</p></a>    
                     </div>    
                </div>
           </div>   
           <div class="main-team-games">
              <div class="main-team-content-block">
               <img class="main-team-background" src="<?php echo bloginfo('template_url'); ?>/assets/img/teams.png">
               <div class="main-team-block--1">
                  <h1 class="heading-team-menu">
                     PREVIOUS GAMES
                  </h1>
                  <div class="main-team-menu-block-1">
                      <div class="main-team-top-menu">
                          <div class="main-team-top-centr">
                             <a href=""><img class="team-menu-photo" src="<?php echo bloginfo('template_url'); ?>/assets/img/5.png"></a> 
                             <p class="main-team-top-text">Montana Rockets</p>
                             <div>
                                <p class="main-team-score">62</p>
                             </div>
                             <div>
                              <p class="main-team-score-2">65</p>
                           </div>
                             <p class="main-team-top-text-2">Minnesote Challengers</p>
                             <a href=""><img class="team-menu-photo-2" src="<?php echo bloginfo('template_url'); ?>/assets/img/logo-m.png"></a> 
                          </div>
                      </div>
                      <div class="main-team-bottom-menu">
                         <div class="main-team-bottom-block-1">
                           <a href="#" class="main-team-bottom-link"><p class="main-team-bottom-text">October 26, 2021</p></a> 
                           <div class="main-team-bottom-dash-box">
                              <p class="main-team-bottom-dash">__</p>
                           </div>
                           <a href="#" class="main-team-bottom-link"><p class="main-team-bottom-text-2">7:00 pm</p></a> 
                         </div>
                         <div class="main-team-bottom-block-2">
                         <p  class="main-team-bottom-text-3">Primary Leaque</p>
                         <p  class="main-team-bottom-text-4">2021</p>
                         <a href="#" class="main-team-bottom-link"> <p  class="main-team-bottom-text-5">Recap</p></a> 
                         </div>
                     </div>
                  </div>

                  <div class="main-team-menu-block-1">
                     <div class="main-team-top-menu">
                        <div class="main-team-top-centr">
                           <a href=""><img class="team-menu-photo-3" src="<?php echo bloginfo('template_url'); ?>/assets/img/logo-m.png"></a> 
                           <p class="main-team-top-text-3">Minnesote Challengers</p>
                           <div>
                              <p class="main-team-score-2">59</p>
                           </div>
                           <div>
                            <p class="main-team-score">53</p>
                         </div>
                           <p class="main-team-top-text-2">Nevada Stars</p>
                           <a href=""><img class="team-menu-photo-4" src="<?php echo bloginfo('template_url'); ?>/assets/img/6.png"></a> 
                        </div>
                    </div>
                    <div class="main-team-bottom-menu">
                       <div class="main-team-bottom-block-1">
                         <a href="#" class="main-team-bottom-link"><p class="main-team-bottom-text">November 2, 2021</p></a> 
                         <div class="main-team-bottom-dash-box">
                            <p class="main-team-bottom-dash">__</p>
                         </div>
                         <a href="#" class="main-team-bottom-link"><p class="main-team-bottom-text-2">6:00 pm</p></a> 
                       </div>
                       <div class="main-team-bottom-block-2">
                       <p  class="main-team-bottom-text-3">Primary Leaque</p>
                       <p  class="main-team-bottom-text-4">2021</p>
                       <a href="#" class="main-team-bottom-link"> <p  class="main-team-bottom-text-5">Recap</p></a> 
                       </div>
                   </div>
                  </div>
                 </div>
                 <div class="main-team-block--2">
                  <h1 class="heading-team-menu">
                     NEXT GAMES
                  </h1>
                  <div class="main-team-menu-block-2">
                     <div class="main-team-top-menu">
                        <div class="main-team-top-centr">
                           <a href=""><img class="team-menu-photo-3" src="<?php echo bloginfo('template_url'); ?>/assets/img/logo-m.png"></a> 
                           <p class="main-team-top-text-3">Minnesote Challengers</p>
                           <div>
                              <p class="main-team-top-text-versus">Vs</p>
                         </div>
                           <p class="main-team-top-text-2">Delaware Hawks</p>
                           <a href=""><img class="team-menu-photo-5" src="<?php echo bloginfo('template_url'); ?>/assets/img/7.png"></a> 
                        </div>
                    </div>
                    <div class="main-team-bottom-menu">
                       <div class="main-team-bottom-block-1">
                         <a href="#" class="main-team-bottom-link"><p class="main-team-bottom-text-6">July 3, 2022</p></a> 
                         <div class="main-team-bottom-dash-box">
                            <p class="main-team-bottom-dash">__</p>
                         </div>
                         <a href="#" class="main-team-bottom-link"><p class="main-team-bottom-text-2">8:00 pm</p></a> 
                       </div>
                       <div class="main-team-bottom-block-2">
                       <p  class="main-team-bottom-text-3">Primary Leaque</p>
                       <p  class="main-team-bottom-text-4">2022</p>
                       <a href="#" class="main-team-bottom-link"> <p  class="main-team-bottom-text-5">Read More</p></a> 
                       </div>
                   </div>
                  </div>

                  <div class="main-team-menu-block-2">
                     <div class="main-team-top-menu">
                        <div class="main-team-top-centr">
                           <a href=""><img class="team-menu-photo" src="<?php echo bloginfo('template_url'); ?>/assets/img/8.png"></a> 
                           <p class="main-team-top-text">Michigan Wolves</p>
                           <div>
                              <p class="main-team-top-text-versus">Vs</p>
                         </div>
                           <p class="main-team-top-text-2">Minnesote Challengers</p>
                           <a href=""><img class="team-menu-photo-6" src="<?php echo bloginfo('template_url'); ?>/assets/img/logo-m.png"></a> 
                        </div>
                    </div>
                    <div class="main-team-bottom-menu">
                       <div class="main-team-bottom-block-1">
                         <a href="#" class="main-team-bottom-link"><p class="main-team-bottom-text-6">July 7, 2021</p></a> 
                         <div class="main-team-bottom-dash-box">
                            <p class="main-team-bottom-dash">__</p>
                         </div>
                         <a href="#" class="main-team-bottom-link"><p class="main-team-bottom-text-2">7:00 pm</p></a> 
                       </div>
                       <div class="main-team-bottom-block-2">
                       <p  class="main-team-bottom-text-3">Primary Leaque</p>
                       <p  class="main-team-bottom-text-4">2022</p>
                       <a href="#" class="main-team-bottom-link"> <p  class="main-team-bottom-text-5">Read More</p></a> 
                       </div>
                   </div>
                  </div>
              </div>   
              </div>
         </div> 
         <div class="main-highlights-content">
            <div class="main-highlights-content-2">
               <div class="main-highlights-block-1">
                  <div class="main-highlights-part-1-block">
                     <div class="image-highlights-block-1">
                        <img class="image-highlights-1" src="<?php echo bloginfo('template_url'); ?>/assets/img/news13-350x220.jpg">
                     </div>
                     <div class="adding-button">
                        <i class="fas fa-plus svg-highlights-icon"></i>
                     </div> 
                        <div class="content-hightlights-block-2">
                         <a href="#" class="content-hightlights-link"><p class="content-hightlights-text">November 8, 2018</p></a>          
                         <a href="" class="heading-highlights-content-link"><h1 class="heading-highlights-content">NBA Draft Starts On Thursday</h1></a>
                          <div class="content-highlights-button-news">
                                 <a class="content-highlights-button-link" href="#"><p class="content-highlights-button-text">League News</p></a> 
                          </div>
                          <p class="content-hightlights-text-2">Seriously the in it of great the handed implemented that still employed derive and he to have town having for himself until day come do during…</p>
                        </div>  
                        <div class="content-hightlights-block-3">
                                 <div class="main-content-hightlights">
                                   <p class="content-hightlights-text-3"> <i class="fas fa-user svg-highlights-user-icon"></i>CyberSpaceArt</p>
                                   <p class="content-hightlights-text-4"><i class="far fa-eye svg-highlights-user-icon"></i>2071</p>
                                   <p class="content-hightlights-text-5"><i class="fas fa-comments svg-highlights-user-icon"></i>3</p>
                                   <p class="content-hightlights-text-6"><i class="fas fa-tags svg-highlights-user-icon"></i>draft</p>
                                 </div>                          
                        </div>
                  </div>


                  <div class="main-highlights-part-2-block"">
                     <div class="image-highlights-block-1">
                        <img class="image-highlights-1" src="<?php echo bloginfo('template_url'); ?>/assets/img/news14-350x220.jpg">
                     </div>
                     <div class="adding-button">
                        <i class="fas fa-plus svg-highlights-icon"></i>
                     </div> 
                        <div class="content-hightlights-block-2">
                         <a href="#" class="content-hightlights-link"><p class="content-hightlights-text">November 7, 2018</p></a>          
                         <a href="" class="heading-highlights-content-link"><h1 class="heading-highlights-content">On The Challengers Path To The Playoffs</h1></a>
                          <div class="content-highlights-button-news">
                                 <a class="content-highlights-button-link" href="#"><p class="content-highlights-button-text">League News</p></a> 
                          </div>
                          <p class="content-hightlights-text-2">Until building time king’s retired by abandon in that bulk; Want needed like before an not and was armour recently volumes self-interest, but a magnitude, the…</p>
                        </div>  
                        <div class="content-hightlights-block-3">
                                 <div class="main-content-hightlights">
                                   <p class="content-hightlights-text-3"> <i class="fas fa-user svg-highlights-user-icon"></i>CyberSpaceArt</p>
                                   <p class="content-hightlights-text-4"><i class="far fa-eye svg-highlights-user-icon"></i>1067</p>
                                   <p class="content-hightlights-text-5"><i class="fas fa-comments svg-highlights-user-icon"></i>1</p>
                                   <p class="content-hightlights-text-6"><i class="fas fa-tags svg-highlights-user-icon"></i>playoffs,teams</p>
                                 </div>                          
                        </div>     
                                               
                  </div>
               </div> 




               <div class="main-highlights-block-2">

                  <div class="main-highlights-part-3-block">
                     <div class="image-highlights-block-1">
                        <img class="image-highlights-1" src="<?php echo bloginfo('template_url'); ?>/assets/img/news12-350x220.jpg">
                     </div>
                     <div class="adding-button">
                        <i class="fas fa-plus svg-highlights-icon"></i>
                     </div> 
                        <div class="content-hightlights-block-2">
                         <a href="#" class="content-hightlights-link"><p class="content-hightlights-text">November 7, 2018</p></a>          
                         <a href="" class="heading-highlights-content-link"><h1 class="heading-highlights-content">NBA Scores, Updates And Highlights</h1></a>
                          <div class="content-highlights-button-news">
                                 <a class="content-highlights-button-link" href="#"><p class="content-highlights-button-text">League News</p></a> 
                          </div>
                          <p class="content-hightlights-text-2">Some on your it titles as the are space this queen how temple. And have of word impact goddesses, crew a his picture taken to for…</p>
                        </div>  
                        <div class="content-hightlights-block-3">
                                 <div class="main-content-hightlights">
                                   <p class="content-hightlights-text-3"> <i class="fas fa-user svg-highlights-user-icon"></i>CyberSpaceArt</p>
                                   <p class="content-hightlights-text-4"><i class="far fa-eye svg-highlights-user-icon"></i>972</p>
                                   <p class="content-hightlights-text-5"><i class="fas fa-comments svg-highlights-user-icon"></i>0</p>
                                   <p class="content-hightlights-text-6"><i class="fas fa-tags svg-highlights-user-icon"></i>draft</p>
                                 </div>                          
                        </div>

                  </div>




                  <div class="main-highlights-part-4-block"">
                     <div class="image-highlights-block-1">
                        <img class="image-highlights-1" src="<?php echo bloginfo('template_url'); ?>/assets/img/news11-350x220.jpg">
                     </div>
                     <div class="adding-button">
                        <i class="fas fa-plus svg-highlights-icon"></i>
                     </div> 
                        <div class="content-hightlights-block-2">
                         <a href="#" class="content-hightlights-link"><p class="content-hightlights-text">November 6, 2018</p></a>          
                         <a href="" class="heading-highlights-content-link"><h1 class="heading-highlights-content">Our New Online Shop Is Now Open</h1></a>
                          <div class="content-highlights-button-news">
                                 <a class="content-highlights-button-link" href="#"><p class="content-highlights-button-text">Miscellaneous</p></a> 
                          </div>
                          <p class="content-hightlights-text-2">Made can he once sleepiness so have any of recently never watched represent but written, far behave. From concepts everything thought, let even great of history…</p>
                        </div>  
                        <div class="content-hightlights-block-3">
                                 <div class="main-content-hightlights">
                                   <p class="content-hightlights-text-3"> <i class="fas fa-user svg-highlights-user-icon"></i>CyberSpaceArt</p>
                                   <div class="main-content-hightlights-small-block">
                                    <p class="content-hightlights-text-4"><i class="far fa-eye svg-highlights-user-icon"></i>739</p>
                                    <p class="content-hightlights-text-5"><i class="fas fa-comments svg-highlights-user-icon"></i>0</p>
                                    <p class="content-hightlights-text-6"><i class="fas fa-tags svg-highlights-user-icon"></i>shop</p>
                                   </div>
                                 </div>                          
                        </div>

                  </div>
       </div>    





             <div class="main-highlights-block-3">
                   <div class="main-highlights-block-3-part-1">
                        <div class="main-heading-block">
                              <h1 class="heading-text">Leaque Table</h1>
                        </div>
                           <div class="main-second-menu-block">
                                <p class="menu-block-text">Pos</p>
                                <p class="menu-block-text">Team</p>
                                <div class="main-second-text-block">
                                  <p class="menu-block-text">W</p> 
                                  <p class="menu-block-text">L</p>
                                  <p class="menu-block-text">Pct</p>
                                  <p class="menu-block-text">Gb</p>
                                </div>
                           </div>
                           <div class="col-1-main-block-menu">
                             <div class="position-main-block">
                                <p class="position-main-text">1</p>
                             </div>
                             <div class="team-main-block">
                                <img class="league-table-teams-img" src="<?php echo bloginfo('template_url'); ?>/assets/img/logo-m (1).png">
                              <p class="name-team-text">Challengers</p>
                           </div>
                           <div class="main-second-block-scores">
                              <div class="wining-table-block">
                                          <p class="wining-table-text">65</p>                    
                              </div>
                              <div class="loseing-table-block">
                                 <p class="loseing-table-text">17</p>                    
                              </div>
                              <div class="pct-table-block">
                                 <p class="pct-table-text">.793</p>                    
                              </div>
                              <div class="gb-table-block">
                                 <p class="gb-table-text">0.0</p>                    
                              </div>
                              </div>
                           </div>
                           <div class="col-2-main-block-menu">
                              <div class="position-main-block">
                                 <p class="position-main-text">2</p>
                              </div>
                              <div class="team-main-block">
                                 <img class="league-table-teams-img" src="<?php echo bloginfo('template_url'); ?>/assets/img/4-128x128.png">
                               <p class="name-team-text">Blasters</p>
                            </div>
                            <div class="main-second-block-scores">
                               <div class="wining-table-block">
                                           <p class="wining-table-text">59</p>                    
                               </div>
                               <div class="loseing-table-block">
                                  <p class="loseing-table-text">23</p>                    
                               </div>
                               <div class="pct-table-block">
                                  <p class="pct-table-text">.720</p>                    
                               </div>
                               <div class="gb-table-block">
                                  <p class="gb-table-text">0.0</p>                    
                               </div>
                              </div>
                           </div>
                           <div class="col-2-main-block-menu">
                              <div class="position-main-block">
                                 <p class="position-main-text">3</p>
                              </div>
                              <div class="team-main-block">
                                 <img class="league-table-teams-img" src="<?php echo bloginfo('template_url'); ?>/assets/img/7 (2).png">
                               <p class="name-team-text">Hawks</p>
                            </div>
                            <div class="main-second-block-scores">
                               <div class="wining-table-block">
                                           <p class="wining-table-text">52</p>                    
                               </div>
                               <div class="loseing-table-block">
                                  <p class="loseing-table-text">30</p>                    
                               </div>
                               <div class="pct-table-block">
                                  <p class="pct-table-text">.634</p>                    
                               </div>
                               <div class="gb-table-block">
                                  <p class="gb-table-text">7.0</p>                    
                               </div>
                              </div>
                           </div>
                           <div class="col-2-main-block-menu">
                              <div class="position-main-block">
                                 <p class="position-main-text">4</p>
                              </div>
                              <div class="team-main-block">
                                 <img class="league-table-teams-img" src="<?php echo bloginfo('template_url'); ?>/assets/img/kings-128x128.png">
                               <p class="name-team-text">Kings</p>
                            </div>
                            <div class="main-second-block-scores">
                               <div class="wining-table-block">
                                           <p class="wining-table-text">50</p>                    
                               </div>
                               <div class="loseing-table-block">
                                  <p class="loseing-table-text">32</p>                    
                               </div>
                               <div class="pct-table-block">
                                  <p class="pct-table-text">.610</p>                    
                               </div>
                               <div class="gb-table-block">
                                  <p class="gb-table-text">0.0</p>                    
                               </div>
                               </div>
                           </div>
                           <div class="col-2-main-block-menu">
                              <div class="position-main-block">
                                 <p class="position-main-text">5</p>
                              </div>
                              <div class="team-main-block">
                                 <img class="league-table-teams-img" src="<?php echo bloginfo('template_url'); ?>/assets/img/10-128x128.png">
                               <p class="name-team-text">Pirates</p>
                            </div>
                            <div class="main-second-block-scores">
                               <div class="wining-table-block">
                                           <p class="wining-table-text">44</p>                    
                               </div>
                               <div class="loseing-table-block">
                                  <p class="loseing-table-text">38</p>                    
                               </div>
                               <div class="pct-table-block">
                                  <p class="pct-table-text">.537</p>                    
                               </div>
                               <div class="gb-table-block">
                                  <p class="gb-table-text">0.0</p>                    
                               </div>
                               </div>
                           </div>
                           <div class="col-2-main-block-menu">
                              <div class="position-main-block">
                                 <p class="position-main-text">6</p>
                              </div>
                              <div class="team-main-block">
                                 <img class="league-table-teams-img" src="<?php echo bloginfo('template_url'); ?>/assets/img/2-128x128.png">
                               <p class="name-team-text">Fantasy</p>
                            </div>
                            <div class="main-second-block-scores">
                               <div class="wining-table-block">
                                           <p class="wining-table-text">35</p>                    
                               </div>
                               <div class="loseing-table-block">
                                  <p class="loseing-table-text">47</p>                    
                               </div>
                               <div class="pct-table-block">
                                  <p class="pct-table-text">.427</p>                    
                               </div>
                               <div class="gb-table-block">
                                  <p class="gb-table-text">23.0</p>                    
                               </div>
                               </div>
                           </div>
                           <div class="col-2-main-block-menu">
                              <div class="position-main-block">
                                 <p class="position-main-text">7</p>
                              </div>
                              <div class="team-main-block">
                                 <img class="league-table-teams-img" src="<?php echo bloginfo('template_url'); ?>/assets/img/8 (1).png">
                               <p class="name-team-text">Wolves</p>
                            </div>
                            <div class="main-second-block-scores">
                               <div class="wining-table-block">
                                           <p class="wining-table-text">29</p>                    
                               </div>
                               <div class="loseing-table-block">
                                  <p class="loseing-table-text">53</p>                    
                               </div>
                               <div class="pct-table-block">
                                  <p class="pct-table-text">.354</p>                    
                               </div>
                               <div class="gb-table-block">
                                  <p class="gb-table-text">30.0</p>                    
                               </div>
                               </div>
                           </div>
                           <div class="col-2-main-block-menu">
                              <div class="position-main-block">
                                 <p class="position-main-text">8</p>
                              </div>
                              <div class="team-main-block">
                                 <img class="league-table-teams-img" src="<?php echo bloginfo('template_url'); ?>/assets/img/1-128x128.png">
                               <p class="name-team-text">Guardians</p>
                            </div>
                            <div class="main-second-block-scores">
                               <div class="wining-table-block">
                                           <p class="wining-table-text">28</p>                    
                               </div>
                               <div class="loseing-table-block">
                                  <p class="loseing-table-text">54</p>                    
                               </div>
                               <div class="pct-table-block">
                                  <p class="pct-table-text">.341</p>                    
                               </div>
                               <div class="gb-table-block">
                                  <p class="gb-table-text">31.0</p>                    
                               </div>
                               </div>
                           </div>
                            <div class="main-last-block-league">
                                       <a href="" class="heading-last-block-league-link"><h1 class="heading-last-block-league">View Full Table</h1></a>
                            </div>
                   </div>
                   <div class="main-highlights-block-3-part-2">
                     <div class="main-heading-block">
                        <h1 class="heading-text">Next Game</h1>
                  </div>
                     <div class="main-second-menu-block">
                        <p class="second-menu-block-heading"><a href="" class="second-menu-block-heading-link">Challengers vs Hawks</a>(On time)</p>
                     </div>
                     <div class="main-second-menu-block-2">
                        <p class="second-menu-block-heading-2">Primary Leaque</p>
                     </div>
                     
                  </div>
                  <div  class="main-highlights-block-3-part-3">
                     <div class="main-heading-block">
                        <h1 class="heading-text">Follow us</h1>
                  </div>
                      <div class="social-medias-heighlights">
                             <div class="content-social-medias-heighlights">
                                     <img class="social-medias-heighlights-images" src="<?php echo bloginfo('template_url'); ?>/assets/img/facebook.png">
                                     <img class="social-medias-heighlights-images" src="<?php echo bloginfo('template_url'); ?>/assets/img/googleplus.png">
                                     <img class="social-medias-heighlights-images" src="<?php echo bloginfo('template_url'); ?>/assets/img/pinterest.png">
                                     <img class="social-medias-heighlights-images" src="<?php echo bloginfo('template_url'); ?>/assets/img/rss.png">
                                     <img class="social-medias-heighlights-images" src="<?php echo bloginfo('template_url'); ?>/assets/img/twitter.png">
                                     <img class="social-medias-heighlights-images" src="<?php echo bloginfo('template_url'); ?>/assets/img/youtube.png">
                             </div>
                      </div>
                  </div>
            </div>           
            </div>                                                                      
         </div>  
           <div class="bg-players-area">
              <img class="bg-players-area-img"  src="<?php echo bloginfo('template_url'); ?>/assets/img/players-area-bg.jpg">
            </div>


               
           <div class="main-team-media-container">
               <div class="main-heading-team-media-block">
                  <div class="main-heading-team-media">
                     <h1 class="heading-team-media">Team Media</h1>
                  </div>
                  <div class="main-heading-team-media-2">
                         <a href="#" class="main-heading-team-media-link"><p class="main-heading-team-media-text">View All</p></a>
                  </div>
                        <div class="main-heading-team-media-content-block">
                          <div class="main-heading-team-media-content-block-1">
                               <div class="row-content-block-1">
                                         <div class="team-content-block-1">
                                           <img class="hover-img-content-block" src="<?php echo bloginfo('template_url'); ?>/assets/img/media15-1-255x255.jpg">
                                           <div class="photo-img-svg-block">
                                             <i class="fas fa-camera svg-team-media-icon"></i>
                                           </div>
                                           <h1 class="main-team-media-text">Practice makes perfect for Harrel</h1>
                                       </div>
                                        <div class="team-content-block-2">
                                          <img class="hover-img-content-block"  src="<?php echo bloginfo('template_url'); ?>/assets/img/media14-1-255x255.jpg"> 
                                          <div class="photo-img-svg-block">
                                             <i class="fas fa-camera svg-team-media-icon"></i>
                                          </div> 
                                          <h1 class="main-team-media-text" >nba all-strat game draft to be televised in 2019</h1>


                                       </div>
                               </div>      
                                 <div class="columm-content-block-1">
                                     <div class="team-content-block-3">
                                       <img class="hover-img-content-block"  src="<?php echo bloginfo('template_url'); ?>/assets/img/media11-540x255.jpg">
                                       <div class="photo-img-svg-block">
                                          <i class="fas fa-camera svg-team-media-icon"></i>
                                       </div> 
                                       <h1 class="main-team-media-text">Nba 10 Best players</h1>
                                    </div>
                                 </div>             
                          </div>
                          <div class="main-heading-team-media-content-block-2">
                              <div class="row-content-block-2">
                                 <div class="team-content-block-5">
                                    <img class="hover-img-content-block" src="<?php echo bloginfo('template_url'); ?>/assets/img/media13-255x540.jpg">
                                    <div class="photo-img-svg-block">
                                       <i class="fas fa-camera svg-team-media-icon"></i>
                                    </div> 
                                    <h1 class="main-team-media-text">Warner Scores First Points For Minnesota Challengers</h1>
                                 </div>
                              </div>
                              <div class="columm-content-block-2">                      
                                    <div class="team-content-block-2">
                                       <img class="hover-img-content-block" src="<?php echo bloginfo('template_url'); ?>/assets/img/media12-255x255.jpg">
                                       <div class="photo-img-svg-block">
                                         <i class="fas fa-camera svg-team-media-icon"></i>
                                       </div>
                                       <h1 class="main-team-media-text">Practice makes perfect for Harrel</h1>
                                   </div>
                                    <div class="team-content-block-4">
                                      <img class="hover-img-content-block"  src="<?php echo bloginfo('template_url'); ?>/assets/img/media10-1-255x255.jpg"> 
                                      <div class="photo-img-svg-block">
                                         <i class="fas fa-camera svg-team-media-icon"></i>
                                      </div> 
                                      <h1 class="main-team-media-text" >nba all-strat game draft to be televised in 2019</h1>     
                                 </div>
                              </div>
                        </div>
                       </div>
                  </div>
           </div>


            <div class="main-shop-content"> 
              <div class="main-shop-content-block">
               <div class="main-heading-team-media">
                  <h1 class="heading-team-media">Our Shop</h1>
               </div>
               <div class="main-heading-team-media-2">
                      <a href="#" class="main-heading-team-media-link"><p class="main-heading-team-media-text">View shop</p></a>
               </div>
               <div class="content-shop-menu">
               <div class="main-content-shop-menu">
                           <div class="shop-blocks-menu">
                                <div class="block-top-shop-menu">
                                   <img class="product-image" src="img/product10.png">
                                </div>
                                <div class="block-bottom-shop-menu">

                              </div>
                           </div>

                           <div class="shop-blocks-menu">
                                <div class="block-top-shop-menu">
                                   
                                </div>
                           </div>

                           <div class="shop-blocks-menu">
                                <div class="block-top-shop-menu">
                                   
                                </div>
                           </div>

                           <div class="shop-blocks-menu">
                                <div class="block-top-shop-menu">
                                   
                                </div>
                           </div>
                     
                        </div>
                     </div>

              </div>
         
            </div>


            <div class="main-adress-content">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.3692683956046!2d-80.19340028461122!3d25.791388913664957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b6a62571e955%3A0x499f7bdb6190a4ca!2zMTY0NCBORSAybmQgQXZlLCBNaWFtaSwgRkwgMzMxMzIsINCh0KjQkA!5e0!3m2!1sru!2sua!4v1619783748399!5m2!1sru!2sua" width="100%" height="450px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>


            <div class="main-caloboration-content">
              <div class="main-caloboration-content-block">
                   <div>
                     <img class="sponsor-images" src="<?php echo bloginfo('template_url'); ?>/assets/img/sponsor2.png">
                   </div>                             
                   <div>
                     <img class="sponsor-images" src="<?php echo bloginfo('template_url'); ?>/assets/img/sponsor3.png">
                   </div>       
                   <div>
                     <img class="sponsor-images" src="<?php echo bloginfo('template_url'); ?>/assets/img/sponsor5.png">    
                  </div>   
                  <div>
                     <img class="sponsor-images" src="<?php echo bloginfo('template_url'); ?>/assets/img/sponsor6.png">    
                  </div>  
                  <div>
                     <img class="sponsor-images" src="<?php echo bloginfo('template_url'); ?>/assets/img/sponsor3.png">    
                  </div>               
              </div>
            </div>
     </main>
       <footer>
          <div class="main-footer">
             <div class="main-footer-content">
            <div class="main-footer-challengers">
                <img class="logo_footer" src="<?php echo bloginfo('template_url'); ?>/assets/img/logo.png" alt="">
            <p class="main-footer-color_text">Challengers – is professional basketball club playing in Primary League of Main Basketball Association.</p>
            </div>
            <div class="main-footer-challengers-2">
            <h1 class="main-footer-h1">Contacts</h1>
            <p class="main-footer-color_text-2">Made can he once sleepiness so have any of recently never watched represent but written, far behave. From concepts everything thought. Seriously the in it of great the handed.</p>
            <p class="main-footer-color_text-3"><i class="fas fa-map-marker-alt svg-icon"></i>756 11th Ave, New York, NY 10019, USA</p>
            <p class="main-footer-color_text-3"><i class="fas fa-phone-alt svg-icon"></i>1-300-321-4321</p>
            <a href="#" class="main-footer-link_text"><i class="fas fa-envelope svg-icon"></i>example@example.com</a>
            </div>
            <div class="main-footer-challengers-2">
            <h1 class="main-footer-h1">Latest posts</h1>
            <a href="#" class="main-footer-link_text-2"><img class="main-footer-latest-posts-img" src="<?php echo bloginfo('template_url'); ?>/assets/img/news13-65x48.jpg">NBA Draft Starts On Thursday</a>
            <a href="#" class="main-footer-link_text-2"><img class="main-footer-latest-posts-img" src="<?php echo bloginfo('template_url'); ?>/assets/img/news12-65x48.jpg">NBA Scores, Updates And Highlights</a>
            <a href="#" class="main-footer-link_text-2"><img class="main-footer-latest-posts-img" src="<?php echo bloginfo('template_url'); ?>/assets/img/news14-65x48.jpg">On The Challengers Path To The Playoffs</a>
            </div>
            <div class="main-footer-challengers-2">
             <h1 class="main-footer-h1">About us</h1>
             <p class="main-footer-color_text-2">Challengers - is the basketball club playing in Primary League. And have of word impact goddesses, crew a his picture taken to for. Seriously the in it of great the handed that still employed. Some on your it titles as the are space this queen how temple. Follow us on:</p>
             <a href="#"><img class="main-footer-social_networks" src="<?php echo bloginfo('template_url'); ?>/assets/img/facebook.png"></a>
           <a href="#"><img class="main-footer-social_networks" src="<?php echo bloginfo('template_url'); ?>/assets/img/googleplus.png"></a>
           <a href="#"> <img class="main-footer-social_networks" src="<?php echo bloginfo('template_url'); ?>/assets/img/pinterest.png"></a>
            <a href="#"><img class="main-footer-social_networks" src="<?php echo bloginfo('template_url'); ?>/assets/img/rss.png"></a>
               <a href="#"> <img class="main-footer-social_networks" src="<?php echo bloginfo('template_url'); ?>/assets/img/twitter.png"></a>
                  <a href="#"> <img class="main-footer-social_networks" src="<?php echo bloginfo('template_url'); ?>/assets/img/youtube.png"></a>
             </div>
          </div>
         </div>
          <div class="main-footer-2">
            <div class="main-footer-2-content">
                 <div class="main-footer-2-menu">
                    <a href="#"  class="main-footer-2-heading">Home</a>
                 </div>
                 <div class="main-footer-2-menu">
                   <a href="#" class="main-footer-2-heading">Club News</a> 
                </div>
                <div  class="main-footer-2-menu">
                    <a href="#"class="main-footer-2-heading">Leaque Table</a>
                </div>
                <div  class="main-footer-2-menu">
                   <a href="#" class="main-footer-2-heading">Clendar</a> 
                </div>
                <div  class="main-footer-2-menu">
                   <a href="#" class="main-footer-2-heading">Shop</a> 
                </div>
            </div>
          </div>
         <div class="main-footer-3">
              <div class="main-footer-3-content">
                   <p class="main-footer-color_text">(C) Challengers - CyberSpaceArt</p>

              </div>

         </div>
         <div class="back-to-the-top">
        <a href="#anchor" class="svg-icon-link-top"><i class="fas fa-chevron-up svg-icon-top"></i></a>      
      </div>
       </footer>
       <?php 
       wp_footer();
       ?>
    </body>
</html>