<?php
// Given a string paragraph and a string array of the banned words banned, return the most frequent word that is not banned. It is guaranteed there is at least one word that is not banned, and that the answer is unique.

// The words in paragraph are case-insensitive and the answer should be returned in lowercase.



// Example 1:

$paragraph = "Bob hit a ball, the hit BALL flew far after it was hit."; $banned = ["hit"];
// Output: "ball"
// Explanation:
// "hit" occurs 3 times, but it is a banned word.
// "ball" occurs twice (and no other word does), so it is the most frequent non-banned word in the paragraph.
// Note that words in the paragraph are not case sensitive,
// that punctuation is ignored (even if adjacent to words, such as "ball,"),
// and that "hit" isn't the answer even though it occurs more because it is banned.
// Example 2:

$paragraph = "a."; $banned = [];
// Output: "a"


// Constraints:

// 1 <= paragraph.length <= 1000
// paragraph consists of English letters, space ' ', or one of the symbols: "!?',;.".
// 0 <= banned.length <= 100
// 1 <= banned[i].length <= 10
// banned[i] consists of only lowercase English letters.
class Solution
{

  /**
   * @param String $paragraph
   * @param String[] $banned
   * @return String
   */
    public function mostCommonWord($paragraph, $banned)
    {
        // remove symbols
        $paragraph = preg_replace('/[^\p{L}\p{N}\s]/u', ' ', $paragraph);
        // add empty space to banned words since we're using that to remove symbols
        $banned[] = "";
        $p_parts = explode(' ', $paragraph);

        $non_banned_words = [];
        foreach ($p_parts as $k => $word) {
            $lword = strtolower($word);
            if (in_array($lword, $banned)) {
                continue;
            }
            $non_banned_words[] = $lword;
        }
        $non_banned_words = array_count_values($non_banned_words);

        return array_search(max($non_banned_words), $non_banned_words);
    }
}
$paragraph = "a, a, a, a, b,b,b,c, c";
$banned = ["a"];
echo (new Solution())->mostCommonWord($paragraph, $banned) . PHP_EOL;
