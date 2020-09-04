## Nookal Tech Exam

### Installation 

Run through browser

### Project Description/Task
Given a sorted array of integers, sort the array alternatively so that the array alternates max and min variables, so
max variable, then min variable, then second max, and second min, and so on
Example:

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
output: [10, 1, 9, 2, 8, 3, 7, 4, 6, 5]
 
Notes:
1. For this test try to ensure that a space complexity of O(1) is maintained
2. $array will be of minimum length 3, max length 20

### How to use
1. Save file to a local sever - suggest wamp or lamp
2. open the script and see desired results

### Design/ Decisions made
1. Investigated possible solutions that retained the O(1) performance bracket. It was found array pop can be used for this purpose.
2. Thought of ways to check complexity issues - future enhancement would be using php library phploc and performed report to ensure performance.
3. Would have like to use php unit test cases in addition - but needed to limit time spend on project.
4. Assumed user validation if other values were provided in array - these would be ignored and removed.
5. Would have liked to have a composer and group this under a namespace to allow more array functions.

###Conditions tested
1. [1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
2. [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11]
3. [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, '3']




