<?php
    get_header();
    $name = 'kaige';
?>

<container :no-padding="false" name="<?php echo $name; ?>">
    Hello, This is from container
</container>

<?php get_footer(); ?>