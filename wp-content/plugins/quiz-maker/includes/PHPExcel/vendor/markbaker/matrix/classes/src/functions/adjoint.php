<?php

/**
 *
 * Function code for the matrix adjoint() function
 *
 * @copyright  Copyright (c) 2018 Mark Baker (https://github.com/MarkBaker/PHPMatrix)
 * @license    https://opensource.org/licenses/MIT    MIT
 */
namespace Matrix;

/**
 * Returns the adjoint of a matrix or an array.
 *
 * @param     Matrix|array     $matrix    Matrix or an array to treat as a matrix.
 * @return    Matrix           The new matrix
 * @throws    Exception        If argument isn't a valid matrix or array.
 */
if( !function_exists('adjoint') ){
    function adjoint($matrix)
    {
        if (!is_object($matrix) || !($matrix instanceof Matrix)) {
            $matrix = new Matrix($matrix);
        }

        return Functions::adjoint($matrix);
    }
}