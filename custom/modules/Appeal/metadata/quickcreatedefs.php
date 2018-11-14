<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

$module_name = 'Appeal';
$viewdefs[$module_name]['QuickCreate'] = array(
    'templateMeta' => array(
        'maxColumns' => '2',
        'widths' => array(
            array('label' => '10', 'field' => '30'),
            array('label' => '10', 'field' => '30')
        ),
        'form' => array (
            'hidden' => array (
              '<input type="hidden" id="source_val" value="{$fields.source.value}">',
              '<input type="hidden" id="type_val" value="{$fields.type.value}">',
              '<input type="hidden" id="theme_val" value="{$fields.theme.value}">',
              '<input type="hidden" id="subtheme_val" value="{$fields.subtheme.value}">',
            ),
        ),
        'javascript' => '{sugar_getscript file="custom/modules/Home/js/linked.js"}',
    ),


 'panels' =>array (
  'default' => array (

    array (
        array (
            'name' => 'code',
            'fields' => array (
              array (
                'name' => 'code',
              ),
              array (
                'name' => 'source',
                'customCode' => 'Источник: @@FIELDS@@',
              ),
              array (
                'name' => 'type',
              ),
              array (
                'name' => 'theme',
              ),
              array (
                'name' => 'subtheme',
              ),
            ),
        ),
    ),
    array (
        'assigned_user_name',
        'state',
    ),
    array (
        'date_entered',
        'date_modified',
    ),
    array (
        'contact_name',
        'comment',
    ),
      array(
          array('name' => 'webim_appeal_source', 'type' => 'readonly'),
          ''
      ),
      array(
          array('name' => 'webim_appeal_history', 'type' => 'readonly'),
      ),
  ),

),

);
?>