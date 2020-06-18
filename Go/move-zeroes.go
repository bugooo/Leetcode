//遍历数组 i
//i的值不等于0 交换至j的位置 i的位置置为0
func moveZeroes(nums []int)  {
    j:= 0
    for i:=0;i<len(nums);i++{
        if(nums[i]!=0){
            if(i>j){
                nums[j] = nums[i]
                nums[i] = 0
            }
            j++
        }
    }
}