<?php
// You are given the strings key and message, which represent a cipher key and a secret message, respectively. The steps to decode message are as follows:

// Use the first appearance of all 26 lowercase English letters in key as the order of the substitution table.
// Align the substitution table with the regular English alphabet.
// Each letter in message is then substituted using the table.
// Spaces ' ' are transformed to themselves.
// For example, given key = "happy boy" (actual key would have at least one instance of each letter in the alphabet), we have the partial substitution table of ('h' -> 'a', 'a' -> 'b', 'p' -> 'c', 'y' -> 'd', 'b' -> 'e', 'o' -> 'f').
// Return the decoded message.



// Example 1:


$key = "the quick brown fox jumps over the lazy dog";
$message = "vkbs bs t suepuv";

// Output: "this is a secret"
// Explanation: The diagram above shows the substitution table.
// It is obtained by taking the first appearance of each letter in "the quick brown fox jumps over the lazy dog".
// Example 2:


// $key = "eljuxhpwnyrdgtqkviszcfmabo";
// $message = "zwx hnfx lqantp mnoeius ycgk vcnjrdb";
// Output: "the five boxing wizards jump quickly"
// Explanation: The diagram above shows the substitution table.
// It is obtained by taking the first appearance of each letter in "eljuxhpwnyrdgtqkviszcfmabo".


// Constraints:

// 26 <= key.length <= 2000
// key consists of lowercase English letters and ' '.
// key contains every letter in the English alphabet ('a' to 'z') at least once.
// 1 <= message.length <= 2000
// message consists of lowercase English letters and ' '.
class Solution
{

  /**
   * @param String $key
   * @param String $message
   * @return String
   */
  function decodeMessage($key, $message)
  {
    $keys = str_replace(' ', '', $key);

    $k_parts = str_split($keys);
    $k_parts = array_count_values($k_parts);
    $k_parts = array_keys($k_parts);

    $alpha = array_flip(range('a', 'z'));

    foreach ($alpha as $k => &$index) {
      $alpha[$k] =  $k_parts[$index];
    }

    $alpha = array_flip($alpha);

    $m_parts = str_split($message);

    $ans = '';
    foreach ($m_parts as $key => $value) {
      if ($value === "" || $value === " ") {
        $ans .= $value;
        continue;
      }
      $ans .= $alpha[$value];
    }

    return $ans;
  }
}

(new Solution())->decodeMessage($key, $message);
