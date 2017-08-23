<?php
function get_closed_lost_closed_won_opportunities($params) {
    $args = func_get_args();
    $opportunitiesSalesStage = $args[0]['sales_stage'];
    $accountId = $args[0]['account_id'];
    $return_array['select'] = " SELECT opportunities.*";
    $return_array['from'] = " FROM opportunities ";
    $return_array['where'] = " WHERE opportunities.deleted = '0' AND opportunities.sales_stage = '" . $opportunitiesSalesStage . "'";
    $return_array['join'] = " INNER JOIN accounts_opportunities ON accounts_opportunities.opportunity_id = opportunities.id AND accounts_opportunities.deleted = '0' INNER JOIN accounts ON accounts.id = accounts_opportunities.account_id AND accounts.deleted = '0' AND accounts.id = '" . $accountId . "'";
    $return_array['join_tables'] = '';
    return $return_array;
}
