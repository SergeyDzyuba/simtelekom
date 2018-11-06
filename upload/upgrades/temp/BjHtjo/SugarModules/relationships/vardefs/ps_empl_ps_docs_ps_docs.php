<?php
// created: 2016-05-17 14:14:13
$dictionary["ps_docs"]["fields"]["ps_empl_ps_docs"] = array (
  'name' => 'ps_empl_ps_docs',
  'type' => 'link',
  'relationship' => 'ps_empl_ps_docs',
  'source' => 'non-db',
  'module' => 'ps_empl',
  'bean_name' => 'ps_empl',
  'vname' => 'LBL_PS_EMPL_PS_DOCS_FROM_PS_EMPL_TITLE',
  'id_name' => 'ps_empl_ps_docsps_empl_ida',
);
$dictionary["ps_docs"]["fields"]["ps_empl_ps_docs_name"] = array (
  'name' => 'ps_empl_ps_docs_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_PS_EMPL_PS_DOCS_FROM_PS_EMPL_TITLE',
  'save' => true,
  'id_name' => 'ps_empl_ps_docsps_empl_ida',
  'link' => 'ps_empl_ps_docs',
  'table' => 'ps_empl',
  'module' => 'ps_empl',
  'rname' => 'name',
);
$dictionary["ps_docs"]["fields"]["ps_empl_ps_docsps_empl_ida"] = array (
  'name' => 'ps_empl_ps_docsps_empl_ida',
  'type' => 'link',
  'relationship' => 'ps_empl_ps_docs',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_PS_EMPL_PS_DOCS_FROM_PS_DOCS_TITLE',
);
