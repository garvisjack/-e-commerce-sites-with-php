<?php
/**
 * Smarty plugin
 * 
 * @package Smarty
 * @subpackage PluginsModifier
 */

/**
 * Smarty capitalize modifier plugin
 * 
 * Type:     modifier<br>
 * Name:     capitalize<br>
 * Purpose:  capitalize words in the string
 *
 * {@internal {$string|capitalize:true:true} is the fastest option for MBString enabled systems }}
 *
 * @param string  $string    string to capitalize
 * @param boolean $uc_digits also capitalize "x123" to "X123"
 * @param boolean $lc_rest   capitalize first letters, lowercase all following letters "aAa" to "Aaa"
 * @return string capitalized string
 * @author Monte Ohrt <monte at ohrt dot com> 
 * @author Rodney Rehm
 */
function smarty_modifier_tree($arrData,$id=null, $pid=0,$format="")
{
    $format.="|--";
    if(!empty($arrData)) {
        foreach ($arrData as $key => $value) {
            if ($value['pid'] == $pid) {
                if ($value['id'] == $id) {
                    echo "<option value=" . $value['id'] . " selected>" . $format . $value['name'] . "</option>";
                } else {
                    echo "<option value=" . $value['id'] . ">" . $format . $value['name'] . "</option>";
                }

                smarty_modifier_tree($arrData, $id, $value['id'], $format);
            }
        }
    }else{
        return false;
    }
} 

?>