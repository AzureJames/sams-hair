<?php /*Template Name: ServicesPage */


get_header();
?>

<div class="testing">

    <h1>SERVICES</h1>
    <p>Whaddya Need?</p>


    <div>
        <h2>Cutting</h2>
        <p>Custom Clipper - $<?php the_field('custom_clipper'); ?> For current clients only, I'll recommend this service if your haircut is quick or short.</p>
        <p>Signature Scissor - $<?php the_field('signature_clipper'); ?> For new guests, guests with long or thick hair, or if you are looking for a new style.</p>
    </div>

    <div>
        <h2>Coloring</h2>
        <p>Solid Color - $<?php the_field('solid_color'); ?>+ Color is applied from root to ends to achieve a glossy, fresh result.</p>
        <p>Regrowth Touch Up - $<?php the_field('regrowth_touch_up'); ?> Color is applied to the roots only.</p>
        <p>Highlights/Lowlights (Partial) - $<?php the_field('highlights_partial'); ?>+ Color or lightener is applied in foils around the face and crown areas.</p>
        <p>Highlights/Lowlights (Full) - $<?php the_field('highlights_full'); ?>+ Color or lightener is applied in foils throughout your hair for maximum effect.</p>
        <p>Hair Painting/ Balayage - $<?php the_field('hair_painting'); ?>+ Service encompasses techniques and looks including balayage. ombre, or foilayage.</p>
        <p>Color Transformation - $<?php the_field('color_transformation'); ?>+ service is inclusive of any treatments or product. This is ideal for the guest that wants a big change or something creative and bright.</p>
    </div>

    <div>
        <h2>Extension</h2>
        <p>A consultation is required to ensure color matching and an appropriate maintenance schedule that will fit your lifestyle. </p>
        <p>A 50% deposit is required to order the extensions once the consultation is complete.</p>
    </div>





</div>


<?php

get_footer();
