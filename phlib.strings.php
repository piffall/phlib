<?php
##########################################################################
#                                                                        #
# Cristòfol Torrens Morell <piffall@gmail.com>                           #
#                                                                        #
# Released under the GNU General Public License WITHOUT ANY WARRANTY.    #
# See LICENSE file for more information                                  #
#                                                                        #
##########################################################################

/**
 * Convert from underscore to UpperCamelCase
 * @param $varname String
 * @return String
 */
function pl_get_var_name($varname) {
    function phlib_downscore_to_upper($arr) {
        return str_replace('_','',strtoupper($matches[0]));
    }
    return  ucfirst( trim( preg_replace_callback( '/_(.){1}/' , 'phlib_downscore_to_upper' , $varname ) ) );
}

/**
 * Convert from underscore to lowerCamelCase
 * @param $varname String
 * @return String
 */
function pl_get_function_name($varname) {
    return lcfirst(phlib_get_var_name($varname));
}

?>
