<?php
/**
 * The template generates your search form
 *
 * @package blm_basic
 */
?>

<form action="<?php echo home_url(); ?>" id="searchform" method="get">
	<label for="s" class="screen-reader-text"></label>
    <input  type="text" id="s" name="s" value="" />
    <input type="submit" value="" id="searchsubmit" />
</form>