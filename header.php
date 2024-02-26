<?php
    function printContact () : void {
        $contacts = [
            [
                'class' => 'fa fa-phone',
                'icon' => 'aria-hidden="true"',
                'info' => 'Call : +01 123455678990',
            ],
            [
                'class' => 'fa fa-envelope',
                'icon' => 'aria-hidden="true"',
                'info' => 'Email : demo@gmail.com',
            ],
            [
                'class' => 'fa fa-map-marker',
                'icon' => 'aria-hidden="true"',
                'info' => 'Location',
            ],
        ];

        foreach ($contacts as $contact) {
            echo '<div class="contact_nav">
            <a href="">
              <i class="' . $contact['class'] . '"' . $contact['icon'] . '"></i>
              <span>
              ' . $contact['info'] . '
              </span>
            </a>
          </div>';
        }
    }
    function printHeader() : void {
        $categories = [
            [
                'link' => '/Mico/index.php',
                'name' => 'HOME',
            ],
            [
                'link' => '/Mico/about.php',
                'name' => 'ABOUT',
            ],
            [
                'link' => '/Mico/treatment.php',
                'name' => 'TREATMENT',
            ],
            [
                'link' => '/Mico/doctor.php',
                'name' => 'DOCTORS',
            ],
            [
                'link' => '/Mico/testimonial.php',
                'name' => 'TESTIMONIAL',
            ],
            [
                'link' => '/Mico/contact.php',
                'name' => 'CONTACT US',
            ],
        ];

        foreach ($categories as $category) {
            echo '<div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                    <li class="nav-item active">
                        <a class="nav-link" href="' . $category['link'] . '">' . $category['name'] . ' <span class="sr-only">(current)</span></a>
                    </li>
                    </ul>
                </div>';
        }
    }