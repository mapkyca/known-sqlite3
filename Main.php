<?php

namespace IdnoPlugins\SQLite3 {
    
    class Main extends \Idno\Common\Plugin
    {

        function registerPages()
        {
	    
        }

        function registerTranslations()
        {

            \Idno\Core\Idno::site()->language()->register(
                new \Idno\Core\GetTextTranslation(
                    'sqlite3', dirname(__FILE__) . '/languages/'
                )
            );
        }
	
	function registerEventHooks() {
	    

	}

    }

}
