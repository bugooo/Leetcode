/*
 * @lc app=leetcode.cn id=11 lang=java
 *
 * [11] 盛最多水的容器
 */

// @lc code=start
class Solution {
    public int maxArea(int[] height) {
        int area=0;
        int left=0;
        int right=height.length-1;
        while(left<right){
            area=Math.max((right-left)*Math.min(height[right],height[left]),area);
            if(height[right]<height[left]){
                right--;
            }else{
                left++;
            }

        }
        return area;
    }
}
// @lc code=end

