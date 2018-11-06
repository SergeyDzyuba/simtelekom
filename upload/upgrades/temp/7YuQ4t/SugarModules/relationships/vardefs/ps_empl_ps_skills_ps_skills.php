<?php
// created: 2016-05-17 14:33:56
$dictionary["ps_skills"]["fields"]["ps_empl_ps_skills"] = array (
  'name' => 'ps_empl_ps_skills',
  'type' => 'link',
  'relationship' => 'ps_empl_ps_skills',
  'source' => 'non-db',
  'module' => 'ps_empl',
  'bean_name' => 'ps_empl',
  'vname' => 'LBL_PS_EMPL_PS_SKILLS_FROM_PS_EMPL_TITLE',
  'id_name' => 'ps_empl_ps_skillsps_empl_ida',
);
$dictionary["ps_skills"]["fields"]["ps_empl_ps_skills_name"] = array (
  'name' => 'ps_empl_ps_skills_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PS_EMPL_PS_SKILLS_FROM_PS_EMPL_TITLE',
  'save' => true,
  'id_name' => 'ps_empl_ps_skillsps_empl_ida',
  'link' => 'ps_empl_ps_skills',
  'table' => 'ps_empl',
  'module' => 'ps_empl',
  'rname' => 'name',
);
$dictionary["ps_skills"]["fields"]["ps_empl_ps_skillsps_empl_ida"] = array (
  'name' => 'ps_empl_ps_skillsps_empl_ida',
  'type' => 'link',
  'relationship' => 'ps_empl_ps_skills',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PS_EMPL_PS_SKILLS_FROM_PS_SKILLS_TITLE',
);
