<?php
class OpportunitiesForCaseLink extends Link2 {
    protected $db;
    public function __construct($linkName, $bean, $linkDef = false)
    {
        $this->focus = $bean;
        $this->name = $linkName;
        $this->db = DBManagerFactory::getInstance();
        if (empty($linkDef)) {
            $this->def = $bean->field_defs[$linkName];
        } else {
            $this->def = $linkDef;
        }
    }
    /**
     * Returns false if no relationship was found for this link
     *
     * @return bool
     */
    public function loadedSuccesfully()
    {
        // this link always loads successfully
        return true;
    }
    /**
     * @see Link2::getRelatedModuleName()
     */
    public function getRelatedModuleName()
    {
        // Be sure the plural form of the related module is returned here
        return 'Opportunities';
    }
    /**
     * @see Link2::getRelatedModuleLinkName()
     */
    public function getRelatedModuleLinkName()
    {
        // this is one-side link, other side (Emails) won't have the link
        return false;
    }
    /**
     * @see Link2::getType()
     */
    public function getType()
    {
        return "many";
    }
    /**
     * @see Link2::getSide()
     */
    public function getSide()
    {
        return REL_LHS;
    }
    /**
     * @see Link2::is_self_relationship()
     */
    public function is_self_relationship()
    {
        return false;
    }
    /**
     * @see Link2::isParentRelationship()
     */
    public function isParentRelationship()
    {
        return false;
    }
    /**
     * If there are any relationship fields, we need to figure out the mapping
     * from the relationship fields to the
     * fields in the module vardefs
     */
    public function getRelationshipFieldMapping(SugarBean $seed = null)
    {
        return array();
    }
    /**
     * use this function to create link between 2 objects
     */
    public function add($rel_keys, $additional_values = array())
    {
        // cannot add to this relationship as it is implicit
        return false;
    }
    /**
     * Marks the relationship deleted for this given record pair.
     */
    public function delete($id, $related_id = '')
    {
        // cannot delete from this relationship as it is implicit
        return false;
    }
    /**
     *
     * @see Link2::buildJoinSugarQuery()
     */
    public function buildJoinSugarQuery($sugar_query, $options = array())
    {
        $joinParams = array('joinType' => isset($options['joinType']) ? $options['joinType'] : 'INNER');
        $jta = 'cases_opportunities_1';
        if (!empty($options['joinTableAlias'])) {
            $jta = $joinParams['alias'] = $options['joinTableAlias'];
        }
        $sugar_query->joinRaw($this->getCustomJoin($options), $joinParams);
        return $sugar_query->join[$jta];
    }
    /**
     * This is the method where you would put your custom query against the related
     * module.  All this method does is to create an SQL string that adds a JOIN to
     * a table subquery.  The idea is to use a regular old SQL SELECT to select all
     * the ids which fit the criteria you're interested in.  The main query then joins
     * to this subquery thus limiting the results to only what you want.
     */
    protected function getCustomJoin($params = array())
    {
        $sql = " JOIN (";
        // Give me every opportunity
        $sql .= <<<MYCUSTOMQUERY
SELECT
    opportunities.id AS my_custom_id
    FROM
        opportunities
MYCUSTOMQUERY;
        $sql .= ") opportunities_to_show ON opportunities_to_show.my_custom_id = opportunities.id";
        return $sql;
    }
}
