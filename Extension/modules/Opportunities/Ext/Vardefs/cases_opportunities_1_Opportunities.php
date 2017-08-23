<?php
// created: 2017-08-23 15:00:12
$dictionary["Opportunity"]["fields"]["cases_opportunities_1"] = array (
  'name' => 'cases_opportunities_1',
  'type' => 'link',
  'relationship' => 'cases_opportunities_1',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'side' => 'right',
  'vname' => 'LBL_CASES_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE',
  'id_name' => 'cases_opportunities_1cases_ida',
  'link-type' => 'one',
);
$dictionary["Opportunity"]["fields"]["cases_opportunities_1_name"] = array (
  'name' => 'cases_opportunities_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_OPPORTUNITIES_1_FROM_CASES_TITLE',
  'save' => true,
  'id_name' => 'cases_opportunities_1cases_ida',
  'link' => 'cases_opportunities_1',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'name',
);
$dictionary["Opportunity"]["fields"]["cases_opportunities_1cases_ida"] = array (
  'name' => 'cases_opportunities_1cases_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_OPPORTUNITIES_1_FROM_OPPORTUNITIES_TITLE_ID',
  'id_name' => 'cases_opportunities_1cases_ida',
  'link' => 'cases_opportunities_1',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
