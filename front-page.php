<?php
if ( have_rows( 'layout' ) ) {
  while ( have_rows('layout') ) {
    the_row();
    go_render ( get_row_layout() );
  }
} ?>

<div id="shop-hours">
  <ul id="programs">
    <li class="program">
      <h3>Open Shop</h3>
      <p>Description</p>
      <time>When is it?</time>
    </li>
    <li class="program">
      <h3>Women and Trans Night</h3>
      <p>Description</p>
      <time>When is it?</time>
    </li>
    <li class="program">
      <h3>Kids Shop</h3>
      <p>Description</p>
      <time>When is it?</time>
    </li>
  </ul>
</div>
<div id="volunteer" class="col-sm-6">
  <h2>Get Involved</h2>
  <p>How you can volunteer</p>
</div>
<div id="classes" class="col-sm-6">
  <h2>Take a Class</h2>
  <p>How you can sign up for a special class</p>
</div>
