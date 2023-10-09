Algorithm Explanation:

I start by initializing a count variable to 0, which will keep track of the number of occurrences of the pattern.

I iterate through the input text character by character using a for loop. I stop at a position where the remaining characters in the text are greater than or equal to the length of the pattern.

For each starting position in the text, I initialize a variable $j to 0. This variable will be used to iterate through both the text and the pattern.

I enter a while loop that continues until either the end of the pattern is reached or a character mismatch is encountered between the text and the pattern.

Inside the loop, I compare each character of the text and the pattern at the current position. If they match, I increment $j and continue comparing the next characters.

If the loop completes without any character mismatches (i.e., $j equals the length of the pattern), I have found a complete occurrence of the pattern in the text, so I increment the count variable.

Finally, I return the count, which represents the total number of occurrences of the pattern in the text.

This algorithm works by systematically comparing the text and the pattern character by character, and it counts the occurrences whenever a complete match is found.
