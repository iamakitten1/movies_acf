<?php
    function printFooter() : void {
        $rights = [
            [
                'copy' => '&copy;',
                'span' => 'displayYear',
                'text'=> "All Rights Reserved By",
                'link' => 'https://html.design/',
                'template' => "Free Html Templates",
            ]
        ];

        foreach ($rights as $right) {
            echo '<footer class="footer_section">
                    <div class="container">
                    <p>
                        ' . $right['copy'] .' <span id="' . $right['span'] .'"></span> ' . $right['text'] .'
                        <a href="' . $right['link'] .'">' . $right['template'] .'</a>
                    </p>
                    </div>
                </footer>';
        }
    }