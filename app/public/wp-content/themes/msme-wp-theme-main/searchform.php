<?php
/**
 * Template for displaying search forms in Custom Theme
 *
 * @package WordPress
 * @subpackage CoopBank
 */

?>
<div class="row">
<h1 class="text-center bs-title text-white">To search, enter the keywords below</h1>
</div>
<div class="row mx-auto py-2">
  <div class="col-md-12">
  <div class="d-flex justify-content-center my-4">
 
  <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="search" value="<?php echo get_search_query(); ?>" name="s" class="py-4 textbox" placeholder="Search" >
    <input title="Search" value="Search" type="submit" class="button fas fa-search ">
  </form>
</div>

  </div>
</div>

