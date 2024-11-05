<?php
/*You are given an m x n integer matrix with the following two properties:

Each row is sorted in non-decreasing order.
The first integer of each row is greater than the last integer of the previous row.
Given an integer target, return true if target is in matrix or false otherwise.

You must write a solution in O(log(m * n)) time complexity.

Example 1:
Input: matrix = [[1,3,5,7],[10,11,16,20],[23,30,34,60]], target = 3
Output: true

Input: matrix = [[1,3,5,7],[10,11,16,20],[23,30,34,60]], target = 13
Output: false
*/

class Solution
{

    /**
     * @param Integer[][] $matrix
     * @param Integer $target
     * @return Boolean
     */
    function searchMatrix($matrix, $target)
    {
        $rows = count($matrix);
        $columns = count($matrix[0]);
        $left = 0;
        $right = $rows * $columns - 1;
        while ($left <= $right) {
            $mid = (int)(($left + $right) / 2);
            $row = (int)($mid / $columns);
            $col = $mid % $columns;
            $midValue = $matrix[$row][$col];
            if ($midValue == $target) {
                return true;
            } elseif ($midValue < $target) {
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }
        return false;
    }
}