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

$dictionary['Appeal'] = array(
    'table'=>'appeal',
    'audited'=>true,
    'duplicate_merge'=>true,
    'fields'=>array (
        'code' => array (  // ID
            'name' => 'code',
            'vname' => 'LBL_CODE',
            'type' => 'int',
        ),

        'source' => array (  //источник
            'name' => 'source',
            'vname' => 'LBL_SOURCE',
            'type' => 'enum',
            'required' => true,
        ),

        'type' => array (  //тип
            'name' => 'type',
            'vname' => 'LBL_TYPE',
            'type' => 'enum',
            'required' => true,
        ),

        'theme' => array (//тема
            'name' => 'theme',
            'vname' => 'LBL_THEME',
            'type' => 'enum',
            'required' => true,
        ),

        'subtheme' => array (//подтема
            'name' => 'subtheme',
            'vname' => 'LBL_SUBTHEME_A',
            'type' => 'enum',
            'required' => true,
        ),

        'comment' => array (//Комментарии
            'name' => 'comment',
            'vname' => 'LBL_COMMENT',
            'type' => 'text',
        ),

        'state' => array (//Статус
            'name' => 'state',
            'vname' => 'LBL_STATE',
            'type' => 'enum',
            'required' => true,
            'options' => 'state_list',
        ),



        'contact_id' =>  array (
            'required' => false,
            'name' => 'contact_id',
            'vname' => '',
            'type' => 'id',
            'massupdate' => 0,
            'importable' => 'true',
            'audited' => 0,
            'len' => 36,
        ),
        'contact_name' =>  array (
            'required' => false,
            'source' => 'non-db',
            'name' => 'contact_name',
            'vname' => 'LBL_CONTACT_NAME',
            'type' => 'relate',
            'massupdate' => 0,
            'comments' => '',
            'help' => '',
            'audited' => 1,
            'len' => '100',
            'id_name' => 'contact_id',
            'ext2' => 'Contacts',
            'module' => 'Contacts',
            'rname' => 'name',
            'studio' => 'visible',
        ),

    ),

    'relationships'=>array (


    ),

    'optimistic_locking'=>true,
            'unified_search'=>true,
    );

if (!class_exists('VardefManager')){
        require_once('include/SugarObjects/VardefManager.php');
}

VardefManager::createVardef('Appeal','Appeal', array('basic','assignable'));