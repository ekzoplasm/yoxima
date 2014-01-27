<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of YoximaPercentUtil
 *
 * @author Fabrice
 */
namespace yoxima\BlogBundle\PercentUtil;

class YoximaPercentUtil {
    
    public function getPercentReduction($originalValue,$deductedValue){
        if(is_numeric($originalValue) && is_numeric($deductedValue)){
            return $deductedValue*100/$originalValue;
        }
        return false;
    }
}

