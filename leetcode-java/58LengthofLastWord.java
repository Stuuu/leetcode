// Given a string s consisting of words and spaces, return the length of the last word in the string.

// A word is a maximal 
// substring
//  consisting of non-space characters only.

// Example 1:

// Input: s = "Hello World"
// Output: 5
// Explanation: The last word is "World" with length 5.
// Example 2:

// Input: s = "   fly me   to   the moon  "
// Output: 4
// Explanation: The last word is "moon" with length 4.
// Example 3:

// Input: s = "luffy is still joyboy"
// Output: 6
// Explanation: The last word is "joyboy" with length 6.
class Solution {

    public static void main(String[] args) {
        String s = "luffy is still joyboy";
        System.out.println(new Solution().lengthOfLastWord(s));
    }

    public int lengthOfLastWord(String s) {
        s = s.stripTrailing(); 
        String[] s_parts = s.split(" ");
        return s_parts[s_parts.length - 1].length(); 
    }
    
    
    // First solution 
    // public int lengthOfLastWord(String s) {
        
    //     String[] parts = s.split(" ");
    //     int last_word_length = 0;
    //     for (String part : parts) {
    //         int part_length = part.length();
    //         if (part_length > 0) {
    //             last_word_length = part_length;
    //         }
    //     }
    //     return last_word_length;
    // }
}