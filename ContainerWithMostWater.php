<?php
/*You are given an integer array height of length n. There are n vertical lines drawn such that the two endpoints of the ith line are (i, 0) and (i, height[i]).

Find two lines that together with the x-axis form a container, such that the container contains the most water.

Return the maximum amount of water a container can store.

Notice that you may not slant the container.

Example 1:
Input: height = [1,8,6,2,5,4,8,3,7]
Output: 49
Explanation: The above vertical lines are represented by array [1,8,6,2,5,4,8,3,7]. In this case, the max area of water (blue section) the container can contain is 49.

Example 2:
Input: height = [1,1]
Output: 1
*/

class Solution
{
    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height)
    {
        $left = 0;
        $right = count($height) - 1;
        $maxArea = 0;
        while ($left < $right) {
            $width = $right - $left;
            $currentHeight = min($height[$left], $height[$right]);
            $currentArea = $width * $currentHeight;
            $maxArea = max($maxArea, $currentArea);
            if ($height[$left] < $height[$right]) {
                $left++;
            } else {
                $right--;
            }
        }
        return $maxArea;
    }
}