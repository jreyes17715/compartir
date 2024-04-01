<?php 
    $query_history = new WP_Query( array( 'pagename' => 'inicio/seccion-descubre' ) ); 
?>

<?php if ($query_history->have_posts()): ?>
<?php while ($query_history->have_posts()): $query_history->the_post(); ?>

<!-------------------------DIRECTIVOS------------------------------->

<input type="hidden" value="<?php the_field('folleto_documento_email_') ?>" id="folleto_documento_email">
<input type="hidden" value="<?php the_field('folleto_documento_whatsapp') ?>" id="folleto_documento_whatsapp">
<input type="hidden" value="<?php the_field('presentacion_documento_email') ?>" id="presentacion_documento_email">
<input type="hidden" value="<?php the_field('presentacion_documento_Whatsapp') ?>" id="presentacion_documento_Whatsapp">
<input type="hidden" value="<?php the_field('Video-Link-Email') ?>" id="video_documento_email">
<input type="hidden" value="<?php the_field('Video-Link-WhatsApp') ?>" id="video_documento_whatsapp">


<!-------------------------DIRECTIVOS------------------------------->



<!-------------------------DOCENTES------------------------------->

<input type="hidden" value="<?php the_field('docentes_-_folleto_documento_email') ?>" id="docentes_folleto_email">
<input type="hidden" value="<?php the_field('docentes_-_folleto_documento_whatsapp') ?>"id="docentes_folleto_whatsapp">
<input type="hidden" value="<?php the_field('docentes_-_presentacion_documento_email') ?>" id="docentes_presentacion_documento_email">
<input type="hidden" value="<?php the_field('docentes_-_presentacion_documento_whatsapp') ?>" id="docentes_presentacion_whatsapp">
<input type="hidden" value="<?php the_field('docentes_-_video_link_email') ?>" id="docentes_video_link_email">
<input type="hidden" value="<?php the_field('docentes_-_video_link_whatsapp') ?>" id="docentes_video_whatsapp">


<!-------------------------DOCENTES------------------------------->




<!-------------------------FAMILIAS------------------------------->

<input type="hidden" value="<?php the_field('familias_-_folleto_documento_email') ?>" id="familias_folleto_documento">
<input type="hidden" value="<?php the_field('familias_-_folleto_documento_whatsapp') ?>" id="familias_folletos_whatsapp">
<input type="hidden" value="<?php the_field('familias_-_presentacion_documento_email') ?>" id="familias_presentacion_email">
<input type="hidden" value="<?php the_field('presentacion_documento_Whatsapp') ?>" id="familias_presentacion_whatsapp">
<input type="hidden" value="<?php the_field('familias_-_video_link_email') ?>" id="familias_video_link_email">
<input type="hidden" value="<?php the_field('familias_-_video_link__whatsapp') ?>" id="familias_video_whatsapp">


<!-------------------------FAMILIAS------------------------------->
<?php endwhile; ?>

<?php endif; ?>

<?php wp_reset_postdata(); ?>





<?php 
    $query_history = new WP_Query( array( 'pagename' => 'inicio/seccion-evaluar-para-aprender' ) ); 
?>

<?php if ($query_history->have_posts()): ?>
<?php while ($query_history->have_posts()): $query_history->the_post(); ?>

<input type="hidden" value="<?php the_field('modelo_de_reportes_documento_email') ?>" 
id="modelo_de_reportes_documento_email">

<input type="hidden" value="<?php the_field('modelo_de_reportes_documento_whatsapp') ?>" 
id="modelo_de_reportes_documento_whatsapp">


<?php endwhile; ?>

<?php endif; ?>

<?php wp_reset_postdata(); ?>







<?php 
    $query_history = new WP_Query( array( 'pagename' => 'inicio/acompanamiento' ) ); 
?>

<?php if ($query_history->have_posts()): ?>
<?php while ($query_history->have_posts()): $query_history->the_post(); ?>

<input type="hidden" value="<?php the_field('Transforma-documento-email') ?>" 
id="Transforma-documento-email">

<input type="hidden" value="<?php the_field('transforma_documento_whatsapp') ?>" 
id="transforma_documento_whatsapp">


<?php endwhile; ?>

<?php endif; ?>

<?php wp_reset_postdata(); ?>