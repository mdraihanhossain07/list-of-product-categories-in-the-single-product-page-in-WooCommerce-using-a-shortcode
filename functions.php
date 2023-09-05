function product_categories_shortcode() {
  global $product;
  $html = "";
  $terms = get_the_terms( $product->ID, 'product_cat' );
  foreach ($terms as $term) {
    $html .= '<li><a href="' . get_term_link($term->slug, 'product_cat') . '">' . $term->name . '</a></li>';
  }
  return $html;
}
add_shortcode( 'product_cats', 'product_categories_shortcode' );
