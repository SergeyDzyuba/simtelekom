<?php

$dictionary["Contact"]["fields"]["contact_appeals"] =
  array (
    'name' => 'contact_appeals',
    'type' => 'link',
    'relationship' => 'contact_appeals',
    'module'=>'Appeal',
    'bean_name'=>'Appeal',
    'source'=>'non-db',
    'vname'=>'LBL_APPEAL',
  );


$dictionary['Contact']['relationships']['contact_appeals'] =
  array (
  	'lhs_module'=> 'Contacts',
  	'lhs_table'=> 'contacts',
  	'lhs_key' => 'id',
  	'rhs_module'=> 'Appeal',
  	'rhs_table'=> 'appeal',
  	'rhs_key' => 'contact_id',
  	'relationship_type'=>'one-to-many'
  );