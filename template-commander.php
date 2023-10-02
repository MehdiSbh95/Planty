<?php
/**
 * Template Name: template Commander
 */
get_header();
?>
<body class="body-commander">

<form id="research">

<div class="quantity-container">
   <div>
  <input type="text" id="quantity" value="1">
  </div>
  <div class="bouton-quantité">
  <button id="plus">+</button>
  <button id="minus">-</button>
  </div>
</div>

<div class="quantity-container1">
   <div>
  <input type="text" id="quantity" value="1">
  </div>
  <div class="bouton-quantité">
  <button id="plus">+</button>
  <button id="minus">-</button>
  </div>
</div>

<div class="quantity-container2">
   <div>
  <input type="text" id="quantity" value="1">
  </div>
  <div class="bouton-quantité">
  <button id="plus">+</button>
  <button id="minus">-</button>
  </div>
</div>

<div class="quantity-container3">
   <div>
  <input type="text" id="quantity" value="1">
  </div>
  <div class="bouton-quantité">
  <button id="plus">+</button>
  <button id="minus">-</button>
  </div>
</div>

</form>
</body>
<?php
get_template_part( 'entry' );
comments_template();

get_template_part( 'nav', 'below' );
get_footer();
?>
