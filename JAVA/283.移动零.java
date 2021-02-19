/*
 * @lc app=leetcode.cn id=283 lang=java
 *
 * [283] 移动零
 */

// @lc code=start
class Solution {
    public void moveZeroes(int[] nums) {
        int len=nums.length;
        if(len<2){
            return;
        }
        int i=0;
        int j=1;
        while(j<len){
            if(nums[i]==0 && nums[j]!=0){
                nums[i] = nums[j];
                nums[j] = 0;
            }
            if(nums[i]!=0){
                i++;
            }
            j++;     
        }
    }
}
// @lc code=end

