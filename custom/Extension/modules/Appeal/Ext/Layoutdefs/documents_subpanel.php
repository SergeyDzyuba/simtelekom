<?php
$layout_defs['Appeal']['subpanel_setup']['appeal_documents'] = array (
    'order' => 0,
    'module' => 'Documents',
    'subpanel_name' => 'default',
    'sort_order' => 'desc',
    'sort_by' => 'date_entered',
    'title_key' => 'LBL_SUBPANEL_APPEAL_DOCUMENTS_TITLE',
    'get_subpanel_data' => 'documents', //имя поля link
    'top_buttons' =>
        array (
            0 =>
                array (
                    'widget_class' => 'SubPanelTopSelectButton',
                ),
        ),
);