<?php 
/*
Template Name:Shop
*/
?>
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
        <title>Shop</title>
    </head>
<?php
get_header();
?>


<div class="main-content-shop-menu-2">
   <div class="shop-main-header">
   <img class="shop-background-img" src="<?php echo bloginfo('template_url'); ?>/assets/img/Screenshot_4.png">
   <h1 class="shop-main-heading">Shop</h1>
   </div> 
      <div class="shop-menu-cart">
            <div class="catalog-products">
                   <div class="shop-content-wrap">

                

                   </div>


                   <div class="sidebar-block">
                           <div class="sidebar-block-1  simmilar-sidebar-block  ">
                           <div class="main-heading-block">
                        <h1 class="heading-text">Search</h1>
                  </div>
                     <div class="main-second-menu-block-2">
                        
                     </div> 
                           </div>

                            <div class="sidebar-block-2   simmilar-sidebar-block ">
                            <div class="main-heading-block">
                           <h1 class="heading-text">Filter by Price</h1>
                         </div>
                         <div class="main-second-menu-block-2">
                        
                            </div> 
                            </div>

                             <div class="sidebar-block-3  simmilar-sidebar-block  ">
                             <div class="main-heading-block">
                          <h1 class="heading-text">Product Categories</h1>
                                  </div>
                                       <div class="main-second-menu-block-2">
                         
                                          </div> 
                                      </div>

                               <div class="sidebar-block-4   simmilar-sidebar-block">
                               <div class="main-heading-block">
                                    <h1 class="heading-text">Related Products</h1>
                                      </div>
                                    <div class="main-second-menu-block-2">
                        
                                    </div> 
                              </div>

                   </div>
                 
                </div>
            </div>






<?php
get_footer();
?>