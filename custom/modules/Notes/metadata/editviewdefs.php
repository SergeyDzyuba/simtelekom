<?php
$viewdefs ['Notes'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'enctype' => 'multipart/form-data',
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'javascript' => '{sugar_getscript file="include/javascript/dashlets.js"}
<script>
function deleteAttachmentCallBack(text)
	{literal} { {/literal}
	if(text == \'true\') {literal} { {/literal}
		document.getElementById(\'new_attachment\').style.display = \'\';
		ajaxStatus.hideStatus();
		document.getElementById(\'old_attachment\').innerHTML = \'\';
	{literal} } {/literal} else {literal} { {/literal}
		document.getElementById(\'new_attachment\').style.display = \'none\';
		ajaxStatus.flashStatus(SUGAR.language.get(\'Notes\', \'ERR_REMOVING_ATTACHMENT\'), 2000);
	{literal} } {/literal}
{literal} } {/literal}
</script>
<script>toggle_portal_flag(); function toggle_portal_flag()  {literal} { {/literal} {$TOGGLE_JS} {literal} } {/literal} </script>',
    ),
    'panels' => 
    array (
      'lbl_note_information' => 
      array (
        0 => 
        array (
          0 => 'contact_name',
          1 => 'parent_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'size' => 60,
            ),
          ),
        ),
        2 => 
        array (
          0 => 'filename',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_NOTE_STATUS',
          ),
          1 => 
          array (
            'name' => 'ccu_agents_notes_name',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'ccu2_agents3_notes_name',
            'label' => 'LBL_CCU2_AGENTS3_NOTES_FROM_CCU2_AGENTS3_TITLE',
          ),
          1 => 
          array (
            'name' => 'ccu2_agents3_notes_name',
            'label' => 'LBL_CCU2_AGENTS3_NOTES_FROM_CCU2_AGENTS3_TITLE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'ps_empl_notes_name',
            'label' => 'LBL_PS_EMPL_NOTES_FROM_PS_EMPL_TITLE',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
    ),
  ),
);
?>
