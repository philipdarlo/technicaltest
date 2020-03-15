Ctrl Hub Techincal Test Assignment B

Assignment B 

Reverse an arbitrary length string without using off the shelf or language native libraries, i.e. you must not use
strrev(), array_reverse(), etc. if using PHP. You must not use array, set, map, list, etc. reversing
libraries/functions/ADTs either. Your solution must show the reversing algorithm.

E.g. Given the string:
“The cat sat on the mat.”

The solution must return the string:
“.tam eht no tas tac ehT”

Please express your solution as a function.

------

My solution

I started by thinking what is a simple elegant solution that can meet the specs listed above.

I defined the initial string is.

Then created a function which passed that string.

I then returned the original string straight back to test the function.

Once I had that basic down I thought without using any off the shelf solutions how could I achieve my aim, I decided one way would be to get the character length of the string.
Once I had the length of the string I then returned it back from the solution to test it. 
Then I created a simple while loop that would go through run for the character length of the string i.e. 22.
Then I took a substring of the one before last character i.e. 21 to the next position, i.e. "."
Then I removed 1 from the character length loop so now the last character to be checked would be 20 instead of 21. 
Then continued until all characters were done.
Then returned the new string. 

Although this solution has it all in one page, it could easily be transferred into a controller or some other function caller for use in any production application.