<?php
// created: 2016-05-18 15:38:03
$dictionary["ps_vacation"]["fields"]["ps_empl_ps_vacation"] = array (
  'name' => 'ps_empl_ps_vacation',
  'type' => 'link',
  'relationship' => 'ps_empl_ps_vacation',
  'source' => 'non-db',
  'module' => 'ps_empl',
  'bean_name' => 'ps_empl',
  'vname' => 'LBL_PS_EMPL_PS_VACATION_FROM_PS_EMPL_TITLE',
  'id_name' => 'ps_empl_ps_vacationps_empl_ida',
);
$dictionary["ps_vacation"]["fields"]["ps_empl_ps_vacation_name"] = array (
  'name' => 'ps_empl_ps_vacation_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PS_EMPL_PS_VACATION_FROM_PS_EMPL_TITLE',
  'save' => true,
  'id_name' => 'ps_empl_ps_vacationps_empl_ida',
  'link' => 'ps_empl_ps_vacation',
  'table' => 'ps_empl',
  'module' => 'ps_empl',
  'rname' => 'name',
);
$dictionary["ps_vacation"]["fields"]["ps_empl_ps_vacationps_empl_ida"] = array (
  'name' => 'ps_empl_ps_vacationps_empl_ida',
  'type' => 'link',
  'relationship' => 'ps_empl_ps_vacation',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PS_EMPL_PS_VACATION_FROM_PS_VACATION_TITLE',
);
