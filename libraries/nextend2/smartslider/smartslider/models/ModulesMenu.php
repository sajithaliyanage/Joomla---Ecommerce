<?php
/**
* @author    Roland Soos
* @copyright (C) 2015 Nextendweb.com
* @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
**/
defined('_JEXEC') or die('Restricted access');
?><?php

class N2SmartsliderModulesMenuModel extends NextendModel
{

    public function __construct() {
        parent::__construct();

        $this->db->setTableName("modules_menu");
    }

} 