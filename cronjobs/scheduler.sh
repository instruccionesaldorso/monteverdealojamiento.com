#! /bin/bash
env -i TYPO3_CONTEXT='Production' /usr/local/bin/php7-72LATEST-CLI -f $HOME/htdocs/vendor/bin/typo3cms scheduler:run

