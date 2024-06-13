<?php
/*
Plugin Name: Order Form 
Description: Order Form For Students.
Version: 1.0
Author: Hassan Hanif
*/

function student_order_form() {
    ob_start();
    ?>

<link rel="stylesheet" href="<?php echo esc_url( plugins_url( 'assets/order.css', __FILE__ ) ); ?>">


<?php echo do_shortcode('[contact-form-7 id="ff091ed" title="Order Form"]');?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="<?php echo esc_url( plugins_url( 'assets/order.js', __FILE__ ) ); ?>"></script>

<?php
    return ob_get_clean();
}
add_shortcode('order_form', 'student_order_form');
?>