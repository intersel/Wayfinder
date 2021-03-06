<?php
/**
 * @package wayfinder
 * @subpackage build
 */
$properties = array(
    array(
        'name' => 'level',
        'desc' => 'prop_wayfinder.level_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '0',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'includeDocs',
        'desc' => 'prop_wayfinder.includeDocs_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '0',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'excludeDocs',
        'desc' => 'prop_wayfinder.excludeDocs_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '0',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'contexts',
        'desc' => 'prop_wayfinder.contexts_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'cacheResults',
        'desc' => 'prop_wayfinder.cacheResults_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'cacheTime',
        'desc' => 'prop_wayfinder.cacheTime_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 3600,
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'ph',
        'desc' => 'prop_wayfinder.ph_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'debug',
        'desc' => 'prop_wayfinder.debug_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'ignoreHidden',
        'desc' => 'prop_wayfinder.ignoreHidden_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'hideSubMenus',
        'desc' => 'prop_wayfinder.hideSubMenus_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'useWeblinkUrl',
        'desc' => 'prop_wayfinder.useWeblinkUrl_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => true,
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'fullLink',
        'desc' => 'prop_wayfinder.fullLink_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'scheme',
        'desc' => 'prop_wayfinder.scheme_desc',
        'type' => 'list',
        'options' => array(
            array('text' => 'prop_wayfinder.relative','value' => ''),
            array('text' => 'prop_wayfinder.absolute','value' => 'abs'),
            array('text' => 'prop_wayfinder.full','value' => 'full'),
        ),
        'value' => '',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'sortOrder',
        'desc' => 'prop_wayfinder.sortOrder_desc',
        'type' => 'list',
        'options' => array(
            array('text' => 'prop_wayfinder.ascending','value' => 'ASC'),
            array('text' => 'prop_wayfinder.descending','value' => 'DESC'),
        ),
        'value' => 'ASC',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'sortBy',
        'desc' => 'prop_wayfinder.sortBy_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'menuindex',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'limit',
        'desc' => 'prop_wayfinder.limit_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '0',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'cssTpl',
        'desc' => 'prop_wayfinder.cssTpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => false,
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'jsTpl',
        'desc' => 'prop_wayfinder.jsTpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => false,
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'rowIdPrefix',
        'desc' => 'prop_wayfinder.rowIdPrefix_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => false,
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'textOfLinks',
        'desc' => 'prop_wayfinder.textOfLinks_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'menutitle',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'titleOfLinks',
        'desc' => 'prop_wayfinder.titleOfLinks_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'pagetitle',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'displayStart',
        'desc' => 'prop_wayfinder.displayStart_desc',
        'type' => 'combo-boolean',
        'options' => '',
        'value' => false,
        'lexicon' => 'wayfinder:properties',
    ),
    /* css classes */
    array(
        'name' => 'firstClass',
        'desc' => 'prop_wayfinder.firstClass_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'first',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'lastClass',
        'desc' => 'prop_wayfinder.lastClass_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'last',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'hereClass',
        'desc' => 'prop_wayfinder.hereClass_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'active',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'parentClass',
        'desc' => 'prop_wayfinder.parentClass_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'rowClass',
        'desc' => 'prop_wayfinder.rowClass_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'outerClass',
        'desc' => 'prop_wayfinder.outerClass_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'innerClass',
        'desc' => 'prop_wayfinder.innerClass_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'levelClass',
        'desc' => 'prop_wayfinder.levelClass_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'selfClass',
        'desc' => 'prop_wayfinder.selfClass_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'webLinkClass',
        'desc' => 'prop_wayfinder.webLinkClass_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'wayfinder:properties',
    ),
    /* templates */
    array(
        'name' => 'outerTpl',
        'desc' => 'prop_wayfinder.outerTpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'rowTpl',
        'desc' => 'prop_wayfinder.rowTpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'parentRowTpl',
        'desc' => 'prop_wayfinder.parentRowTpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'parentRowHereTpl',
        'desc' => 'prop_wayfinder.parentRowHereTpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'hereTpl',
        'desc' => 'prop_wayfinder.hereTpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'innerTpl',
        'desc' => 'prop_wayfinder.innerTpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'innerRowTpl',
        'desc' => 'prop_wayfinder.innerRowTpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'innerHereTpl',
        'desc' => 'prop_wayfinder.innerHereTpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'activeParentRowTpl',
        'desc' => 'prop_wayfinder.activeParentRowTpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'categoryFoldersTpl',
        'desc' => 'prop_wayfinder.categoryFoldersTpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'startItemTpl',
        'desc' => 'prop_wayfinder.startItemTpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'permissions',
        'desc' => 'prop_wayfinder.permissions_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'list',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'hereId',
        'desc' => 'prop_wayfinder.hereId_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'where',
        'desc' => 'prop_wayfinder.where_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'templates',
        'desc' => 'prop_wayfinder.templates_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'wayfinder:properties',
    ),
    array(
        'name' => 'previewUnpublished',
        'desc' => 'prop_wayfinder.previewunpublished_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'wayfinder:properties',
    ),
);
return $properties;