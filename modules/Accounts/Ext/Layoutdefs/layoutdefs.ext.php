<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Layoutdefs/customsubpanel.php

$layout_defs['Accounts']['subpanel_setup']['opp_closed_lost'] =
        array('order' => 49,
            'module' => 'Opportunities',
            'subpanel_name' => 'ForAccounts',
            'get_subpanel_data' => 'function:get_closed_lost_closed_won_opportunities',
            'generate_select' => true,
            'title_key' => 'LBL_OPPORTUNITIES_WITH_CLOSED_LOST',
            'top_buttons' => array(),
            'function_parameters' => array(
                'import_function_file' => 'custom/modules/Accounts/customOpportunitiesSubpanel.php',
                'sales_stage' => 'Closed Lost',
                'account_id' => $this->_focus->id,
                'return_as_array' => 'true'
            ),
);
$layout_defs['Accounts']['subpanel_setup']['opp_closed_won'] =
        array('order' => 50,
            'module' => 'Opportunities',
            'subpanel_name' => 'ForAccounts',
            'get_subpanel_data' => 'function:get_closed_lost_closed_won_opportunities',
            'generate_select' => true,
            'title_key' => 'LBL_OPPORTUNITIES_WITH_CLOSED_WON',
            'top_buttons' => array(),
            'function_parameters' => array(
                'import_function_file' => 'custom/modules/Accounts/customOpportunitiesSubpanel.php',
                'sales_stage' => 'Closed Won',
                'account_id' => $this->_focus->id,
                'return_as_array' => 'true'
            ),
);

?>
