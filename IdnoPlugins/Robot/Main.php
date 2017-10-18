<?php

namespace IdnoPlugins\Robot {

    class Main extends \Idno\Common\Plugin {

	function registerPages() {

	    // Robot (serviceworker) init code
	    \Idno\Core\Idno::site()->template()->extendTemplate('shell/footer', 'robot/shell/footer');
	    // Service worker javascript file to be copied to site root directory

            // Need to find the slot for this post–content for localStorage of metadata for permalink URLs
            //\Idno\Core\Idno::site()->template()->extendTemplate('content/end', 'robot/content/end');
            //\Idno\Core\Idno::site()->template()->extendTemplate('content/syndication/links', 'robot/content/end');
            // Unsuitable given repeated in a list of entities

            \Idno\Core\Idno::site()->template()->extendTemplate('entity/annotations/comment/main', 'robot/entity/anno_comm_main');

            // The full page route
            \Idno\Core\Idno::site()->addPageHandler('/offline/?', '\IdnoPlugins\Robot\Pages\Offline');

	}

    }

}
