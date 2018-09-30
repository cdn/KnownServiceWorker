<?php

namespace IdnoPlugins\Robot\Pages {
    class Offline extends \Idno\Common\Page
    {
        // Page handling content

        function getContent()
        {
            $t = \Idno\Core\Idno::site()->template();
            $t->body  = $t->draw('robot/pages/offline');
            $t->title = 'Offline page';
            $t->drawPage();
        }

    }
}

