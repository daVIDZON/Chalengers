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