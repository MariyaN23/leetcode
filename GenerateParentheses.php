<?php

/*Given n pairs of parentheses, write a function to generate all combinations of well-formed parentheses.



Example 1:

Input: n = 3
Output: ["((()))","(()())","(())()","()(())","()()()"]
Example 2:

Input: n = 1
Output: ["()"]*/
class Solution
{

    /**
     * @param Integer $n
     * @return String[]
     */
    function generateParenthesis($n)
    {
        $result = [];
        $this->setParenthesis($n, $n, '', $result);
        return $result;
    }

    function setParenthesis($left, $right, $current, &$result)
    {
        if ($left == 0 && $right == 0) {
            $result[] = $current;
            return;
        }
        if ($left > 0) {
            $this->setParenthesis($left - 1, $right, $current . '(', $result);
        }
        if ($right > $left) {
            $this->setParenthesis($left, $right - 1, $current . ')', $result);
        }
    }
}