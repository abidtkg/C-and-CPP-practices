# this function work as
# sum_in_array(your array variable in the parameter)
def sum_in_array(num_arr):
    summed = 0
    for nums in num_arr:
        summed += nums
    return summed

# let calcualte the price of 10 books
book_prices = [250, 123, 320, 232, 123, 321,346, 543, 232, 122]
print(sum_in_array(book_prices), " Tk")
