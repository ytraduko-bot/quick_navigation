<?php
/**
 * This file is part of the Quick Navigation package.
 *
 * @author (c) Friends Of REDAXO
 * @author <friendsof@redaxo.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/* Addon Parameter */

// Addonrechte (permissions) registieren
if (rex::isBackend() && is_object(rex::getUser())) {
    rex_perm::register('quick_navigation[]');
    rex_perm::register('quick_navigation[idinput]');
    rex_perm::register('quick_navigation[history]');
    rex_perm::register('quick_navigation[own_articles]');   
}

if (rex::isBackend() && rex::getUser() && rex::getUser()->hasPerm('quick_navigation[]')) {
    rex_extension::register('PAGE_TITLE', 'QuickNavigation::get');
    rex_view::addCssFile($this->getAssetsUrl('quicknavi.css?v=' . $this->getVersion()));
    rex_view::addJsFile($this->getAssetsUrl('quicknavi.js?v=' . $this->getVersion()));
}
