<?php
    $links = array(
        array("class" => "active", "text" => "Home", "link" => "index.php"),
        array("class" => "", "text" => "About", "link" => "about.php"),
        array("class" => "", "text" => "Treatment", "link" => "treatment.php"),
        array("class" => "", "text" => "Doctors", "link" => "doctor.php"),
        array("class" => "", "text" => "Testimonial", "link" => "testimonial.php"),
        array("class" => "", "text" => "Contact us", "link" => "contact.php")
    );

function printUsefulLinks($links) {
    echo '<div class="info_links_menu">';
    echo '<div class="info-links">';
    echo '<div class="info_links_menu">';

    foreach ($links as $link) {
        echo '<a class="' . $link['class'] . '" href="' . $link['link'] . '">' . $link['text'] . '</a>';
    }
    
    echo '</div>';
    echo '</div>';
    echo '</div>';
}
