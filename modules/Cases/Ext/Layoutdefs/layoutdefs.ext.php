<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Layoutdefs/cases_opportunities_1_Cases.php

 // created: 2017-08-23 15:00:12
$layout_defs["Cases"]["subpanel_setup"]['cases_opportunities_1'] = array (
  'order' => 100,
  'module' => 'Opportunities',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CASES_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'get_subpanel_data' => 'cases_opportunities_1',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

?>
<?php
// Merged from custom/Extension/modules/Cases/Ext/Layoutdefs/_overrideCase_subpanel_cases_opportunities_1.php

//auto-generated file DO NOT EDIT
$layout_defs['Cases']['subpanel_setup']['cases_opportunities_1']['override_subpanel_name'] = 'Case_subpanel_cases_opportunities_1';

?>
