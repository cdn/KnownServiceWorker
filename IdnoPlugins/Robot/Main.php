<?php

namespace IdnoPlugins\Robot {

    class Main extends \Idno\Common\Plugin {

	function registerPages() {

	    // Robot (serviceworker) init code
	    \Idno\Core\Idno::site()->template()->extendTemplate('shell/footer', 'robot/shell/footer');
	    // Service worker javascript file to be copied to site root directory

            // Need to find the slot for this post–content for permalink URLs
            //\Idno\Core\Idno::site()->template()->extendTemplate('entity/shell|wrapper', 'robot/shell/wrapper');

            // Augment 404 as a quick /offline [not post-content]
            //\Idno\Core\Idno::site()->template()->extendTemplate('pages/404', 'robot/pages/offline');

            // The full page route
            \Idno\Core\Idno::site()->addPageHandler('/offline/?', '\IdnoPlugins\Robot\Pages\Offline');

	}

    }

}
