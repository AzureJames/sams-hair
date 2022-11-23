<?php /*Template Name: ServicesPage */


get_header();
?>

<div class="page-container">

    <h1>SERVICES</h1>
    <div class="h1-border"></div>
    <p class="whaddya">Whaddya Need?</p>

    <div class="card">
        <div class="sml-col">
            <div class="card-top">
                <h2 class="h2one">Cutting</h2>
            </div>
        </div>

        <div class="service-card">
            <img src="http://samlebel.web.dmitcapstone.ca/wp-content/uploads/2022/11/hair-cuts-e1668644382959.jpg" alt="Image of golden hair stylist equipment.">
            <ul>
                <li>
                    <p><span>Custom Clipper - $<?php the_field('custom_clipper'); ?></span> For current clients only, I'll recommend this service if your haircut is quick or short.</p>
                </li>
                <li>
                    <p><span>Signature Scissor - $<?php the_field('signature_clipper'); ?></span> For new guests, guests with long or thick hair, or if you are looking for a new style.</p>
                </li>
            </ul>
        </div>
    </div>

    <div class="card">
        <div class="card-top">
            <h2 class="h2two">Coloring</h2>
        </div>
        <div class="service-card reverse">
            <img src="http://samlebel.web.dmitcapstone.ca/wp-content/uploads/2022/11/hair-color-e1668644628593.jpg" alt="Image of clients new hair color.">
            <ul>
                <li>
                    <p><span>Solid Color - $<?php the_field('solid_color'); ?></span>+ Color is applied from root to ends to achieve a glossy, fresh result.</p>
                </li>
                <li>
                    <p><span>Regrowth Touch Up - $<?php the_field('regrowth_touch_up'); ?></span> Color is applied to the roots only.</p>
                </li>
                <li>
                    <p><span>Highlights/Lowlights (Partial) - $<?php the_field('highlights_partial'); ?></span>+ Color or lightener is applied in foils around the face and crown areas.</p>
                </li>
                <li>
                    <p><span>Highlights/Lowlights (Full) - $<?php the_field('highlights_full'); ?></span>+ Color or lightener is applied in foils throughout your hair for maximum effect.</p>
                </li>
                <li>
                    <p><span>Hair Painting/ Balayage - $<?php the_field('hair_painting'); ?></span>+ Service encompasses techniques and looks including balayage. ombre, or foilayage.</p>
                </li>
                <li>
                    <p><span>Color Transformation - $<?php the_field('color_transformation'); ?></span>+ service is inclusive of any treatments or product. This is ideal for the guest that wants a big change or something creative and bright.</p>
                </li>
            </ul>
        </div>

    </div>

    <div class="card">
        <div class="sml-col">
            <div class="card-top">
                <h2 class="h2three">Extension</h2>
            </div>

        </div>
        <div class="service-card">
            <img src="http://samlebel.web.dmitcapstone.ca/wp-content/uploads/2022/11/hair-extensions-e1668644796694.jpg" alt="two ladies hugging on sidewalk in the sun.">
            <ul>
                <li>
                    <p>A consultation is required to ensure color matching and an appropriate maintenance schedule that will fit your lifestyle. </p>
                </li>
                <li>
                    <p>A 50% deposit is required to order the extensions once the consultation is complete.</p>
                </li>
            </ul>
        </div>
    </div>
</div>


<?php

get_footer();
