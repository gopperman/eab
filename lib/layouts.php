<?php

function go_render( $layout ) {
  switch ( $layout ) {
    case 'hero':
      go_hero();
      break;
    case 'three_columns':
      go_three_columns();
      break;
    case 'centered_text':
      go_centered_text();
      break;
    case 'image_break':
      go_image_break();
      break;
    case 'fullscreen_panel':
      go_fullscreen_panel();
      break;
    default:
      echo $layout;
  }
}

function go_hero() { //TODO: Button repeater ?>
  <div class="hero">
    <img src="<?php the_sub_field( 'image' ) ?>" />
    <?php if ( get_sub_field( 'title' ) ) {
      echo '<h2>'.get_sub_field( 'title' ).'</h2>';
    }
    if ( get_sub_field( 'text' ) ) {
      echo '<p>'.get_sub_field( 'text' ).'</p>';
    } ?>
  </div>
<?php }

function go_three_columns() { ?>

  <?php if( have_rows('columns') ) { ?>
    <div class="three-columns container-fluid">
    <?php while ( have_rows('columns') ) {
      the_row(); ?>
      <div class="col-sm-4">
      <?php if ( get_sub_field( 'header' ) ) {
        echo '<h2>'.get_sub_field( 'header' ).'</h2>';
      }
      if ( get_sub_field( 'text' ) ) {
        echo '<p>'.get_sub_field( 'text' ).'</p>';
      } ?>
      </div>
    <?php } ?>
    </div>
  <?php }
}

function go_centered_text() { ?>
  <div class="col-xs-12 centered-text">
  <?php the_sub_field('content'); ?>
  </div>
<?php }

function go_image_break() { ?>
  <div class="image-break">
    <img src="<?php the_sub_field( 'image' ) ?>" />
    <?php if ( get_sub_field( 'text' ) ) {
      echo '<p>'.get_sub_field( 'text' ).'</p>';
    } ?>
  </div>
<?php }

function go_fullscreen_panel() {

}
?>
