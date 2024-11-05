<?php
/*Given an unsorted array of integers nums, return the length of the longest consecutive elements sequence.

You must write an algorithm that runs in O(n) time.



Example 1:

Input: nums = [100,4,200,1,3,2]
Output: 4
Explanation: The longest consecutive elements sequence is [1, 2, 3, 4]. Therefore its length is 4.
Example 2:

Input: nums = [0,3,7,2,5,8,4,6,0,1]
Output: 9*/

class Solution
{

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestConsecutive($nums)
    {
        $numSet = array_flip($nums);
        $longestStreak = 0;
        foreach ($nums as $num) {
            if (!isset($numSet[$num - 1])) {
                $currentNum = $num;
                $currentStreak = 1;
                while (isset($numSet[$currentNum + 1])) {
                    $currentNum++;
                    $currentStreak++;
                }
                $longestStreak = max($longestStreak, $currentStreak);
            }
        }
        return $longestStreak;
    }
}