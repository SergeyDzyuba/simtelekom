<?php
/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
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


// THIS CONTENT IS GENERATED BY MBPackage.php
$manifest = array (
  0 => 
  array (
    'acceptable_sugar_versions' => 
    array (
      0 => '',
    ),
  ),
  1 => 
  array (
    'acceptable_sugar_flavors' => 
    array (
      0 => 'CE',
      1 => 'PRO',
      2 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => 'ps',
  'author' => '',
  'description' => '',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'Personal',
  'published_date' => '2016-05-18 12:38:02',
  'type' => 'module',
  'version' => 1463575082,
  'remove_tables' => 'prompt',
);


$installdefs = array (
  'id' => 'Personal',
  'beans' => 
  array (
    0 => 
    array (
      'module' => 'ps_empl',
      'class' => 'ps_empl',
      'path' => 'modules/ps_empl/ps_empl.php',
      'tab' => true,
    ),
    1 => 
    array (
      'module' => 'ps_docs',
      'class' => 'ps_docs',
      'path' => 'modules/ps_docs/ps_docs.php',
      'tab' => true,
    ),
    2 => 
    array (
      'module' => 'ps_skills',
      'class' => 'ps_skills',
      'path' => 'modules/ps_skills/ps_skills.php',
      'tab' => true,
    ),
    3 => 
    array (
      'module' => 'ps_vacation',
      'class' => 'ps_vacation',
      'path' => 'modules/ps_vacation/ps_vacation.php',
      'tab' => true,
    ),
  ),
  'layoutdefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/ps_empl_notes_ps_empl.php',
      'to_module' => 'ps_empl',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/ps_empl_ps_docs_ps_empl.php',
      'to_module' => 'ps_empl',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/ps_empl_ps_skills_ps_empl.php',
      'to_module' => 'ps_empl',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/layoutdefs/ps_empl_ps_vacation_ps_empl.php',
      'to_module' => 'ps_empl',
    ),
  ),
  'relationships' => 
  array (
    0 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ps_empl_notesMetaData.php',
    ),
    1 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ps_empl_ps_docsMetaData.php',
    ),
    2 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ps_empl_ps_skillsMetaData.php',
    ),
    3 => 
    array (
      'meta_data' => '<basepath>/SugarModules/relationships/relationships/ps_empl_ps_vacationMetaData.php',
    ),
  ),
  'image_dir' => '<basepath>/icons',
  'copy' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ps_empl',
      'to' => 'modules/ps_empl',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ps_docs',
      'to' => 'modules/ps_docs',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ps_skills',
      'to' => 'modules/ps_skills',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/modules/ps_vacation',
      'to' => 'modules/ps_vacation',
    ),
  ),
  'language' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Notes.php',
      'to_module' => 'Notes',
      'language' => 'en_us',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/Notes.php',
      'to_module' => 'Notes',
      'language' => 'ru_ru',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ps_empl.php',
      'to_module' => 'ps_empl',
      'language' => 'en_us',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ps_empl.php',
      'to_module' => 'ps_empl',
      'language' => 'ru_ru',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ps_docs.php',
      'to_module' => 'ps_docs',
      'language' => 'en_us',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ps_docs.php',
      'to_module' => 'ps_docs',
      'language' => 'ru_ru',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ps_empl.php',
      'to_module' => 'ps_empl',
      'language' => 'en_us',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ps_empl.php',
      'to_module' => 'ps_empl',
      'language' => 'ru_ru',
    ),
    8 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ps_skills.php',
      'to_module' => 'ps_skills',
      'language' => 'en_us',
    ),
    9 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ps_skills.php',
      'to_module' => 'ps_skills',
      'language' => 'ru_ru',
    ),
    10 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ps_empl.php',
      'to_module' => 'ps_empl',
      'language' => 'en_us',
    ),
    11 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ps_empl.php',
      'to_module' => 'ps_empl',
      'language' => 'ru_ru',
    ),
    12 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ps_vacation.php',
      'to_module' => 'ps_vacation',
      'language' => 'en_us',
    ),
    13 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ps_vacation.php',
      'to_module' => 'ps_vacation',
      'language' => 'ru_ru',
    ),
    14 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ps_empl.php',
      'to_module' => 'ps_empl',
      'language' => 'en_us',
    ),
    15 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/language/ps_empl.php',
      'to_module' => 'ps_empl',
      'language' => 'ru_ru',
    ),
    16 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/en_us.lang.php',
      'to_module' => 'application',
      'language' => 'en_us',
    ),
    17 => 
    array (
      'from' => '<basepath>/SugarModules/language/application/ru_ru.lang.php',
      'to_module' => 'application',
      'language' => 'ru_ru',
    ),
  ),
  'vardefs' => 
  array (
    0 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ps_empl_notes_Notes.php',
      'to_module' => 'Notes',
    ),
    1 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ps_empl_notes_ps_empl.php',
      'to_module' => 'ps_empl',
    ),
    2 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ps_empl_ps_docs_ps_docs.php',
      'to_module' => 'ps_docs',
    ),
    3 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ps_empl_ps_docs_ps_empl.php',
      'to_module' => 'ps_empl',
    ),
    4 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ps_empl_ps_skills_ps_skills.php',
      'to_module' => 'ps_skills',
    ),
    5 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ps_empl_ps_skills_ps_empl.php',
      'to_module' => 'ps_empl',
    ),
    6 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ps_empl_ps_vacation_ps_vacation.php',
      'to_module' => 'ps_vacation',
    ),
    7 => 
    array (
      'from' => '<basepath>/SugarModules/relationships/vardefs/ps_empl_ps_vacation_ps_empl.php',
      'to_module' => 'ps_empl',
    ),
  ),
  'layoutfields' => 
  array (
    0 => 
    array (
      'additional_fields' => 
      array (
        'Notes' => 'ps_empl_notes_name',
      ),
    ),
    1 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    2 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
    3 => 
    array (
      'additional_fields' => 
      array (
      ),
    ),
  ),
);