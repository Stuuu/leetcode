<?php
// You are given a string sentence that consist of words separated by spaces. Each word consists of lowercase and uppercase letters only.

// We would like to convert the sentence to "Goat Latin" (a made-up language similar to Pig Latin.) The rules of Goat Latin are as follows:

// If a word begins with a vowel ('a', 'e', 'i', 'o', or 'u'), append "ma" to the end of the word.
// For example, the word "apple" becomes "applema".
// If a word begins with a consonant (i.e., not a vowel), remove the first letter and append it to the end, then add "ma".
// For example, the word "goat" becomes "oatgma".
// Add one letter 'a' to the end of each word per its word index in the sentence, starting with 1.
// For example, the first word gets "a" added to the end, the second word gets "aa" added to the end, and so on.
// Return the final sentence representing the conversion from sentence to Goat Latin.



// Example 1:

$sentence = "I speak Goat Latin";
// Output: "Imaa peaksmaaa oatGmaaaa atinLmaaaaa"
// Example 2:

$sentence = "The quick brown fox jumped over the lazy dog";
// Output: "heTmaa uickqmaaa rownbmaaaa oxfmaaaaa umpedjmaaaaaa overmaaaaaaa hetmaaaaaaaa azylmaaaaaaaaa ogdmaaaaaaaaaa"


// Constraints:

// 1 <= sentence.length <= 150
// sentence consists of English letters and spaces.
// sentence has no leading or trailing spaces.
// All the words in sentence are separated by a single space.

class Solution
{

  /**
   * @param String $sentence
   * @return String
   */
  function toGoatLatin($sentence)
  {
    $sent_parts = explode(' ', $sentence);

    foreach ($sent_parts as $k => &$word) {

      // For example, the word "apple" becomes "applema".
      // For example, the word "goat" becomes "oatgma".
      // For example, the first word gets "a" added to the end, the second word gets "aa" added to the end, and so on.

      $first_letter = strtolower($word[0]);
      if (in_array($first_letter, ['a', 'e', 'i', 'o', 'u'])) {
        // If a word begins with a vowel ('a', 'e', 'i', 'o', or 'u'), append "ma" to the end of the word.
        $word .= 'ma';
      } else {
        // If a word begins with a consonant (i.e., not a vowel), remove the first letter and append it to the end, then add "ma".
        $first_letter = $word[0];
        $word = substr($word, 1) . $first_letter . 'ma';

      }
      // Add one letter 'a' to the end of each word per its word index in the sentence, starting with 1.
      $word .= str_repeat('a', $k + 1);
    }
    // Return the final sentence representing the conversion from sentence to Goat Latin.
    return implode(' ', $sent_parts);
  }
}
echo (new Solution())->toGoatLatin($sentence) . PHP_EOL;
