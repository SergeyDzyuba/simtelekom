<?php
// created: 2016-05-12 16:13:09
$dictionary["Note"]["fields"]["ps_empl_notes"] = array (
  'name' => 'ps_empl_notes',
  'type' => 'link',
  'relationship' => 'ps_empl_notes',
  'source' => 'non-db',
  'module' => 'ps_empl',
  'bean_name' => false,
  'vname' => 'LBL_PS_EMPL_NOTES_FROM_PS_EMPL_TITLE',
  'id_name' => 'ps_empl_notesps_empl_ida',
);
$dictionary["Note"]["fields"]["ps_empl_notes_name"] = array (
  'name' => 'ps_empl_notes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PS_EMPL_NOTES_FROM_PS_EMPL_TITLE',
  'save' => true,
  'id_name' => 'ps_empl_notesps_empl_ida',
  'link' => 'ps_empl_notes',
  'table' => 'ps_empl',
  'module' => 'ps_empl',
  'rname' => 'name',
);
$dictionary["Note"]["fields"]["ps_empl_notesps_empl_ida"] = array (
  'name' => 'ps_empl_notesps_empl_ida',
  'type' => 'link',
  'relationship' => 'ps_empl_notes',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PS_EMPL_NOTES_FROM_NOTES_TITLE',
);
