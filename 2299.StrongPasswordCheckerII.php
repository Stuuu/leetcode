<?php
// A password is said to be strong if it satisfies all the following criteria:

//   It has at least 8 characters.
//   It contains at least one lowercase letter.
//   It contains at least one uppercase letter.
//   It contains at least one digit.
//   It contains at least one special character. The special characters are the characters in the following string: "!@#$%^&*()-+".
//   It does not contain 2 of the same character in adjacent positions (i.e., "aab" violates this condition, but "aba" does not).
//   Given a string password, return true if it is a strong password. Otherwise, return false.



//   Example 1:

$password = "IloveLe3tcode!";
//   Output: true
//   Explanation: The password meets all the requirements. Therefore, we return true.
//   Example 2:

// $password = "Me+You--IsMyDream";
//   Output: false
//   Explanation: The password does not contain a digit and also contains 2 of the same character in adjacent positions. Therefore, we return false.
//   Example 3:

// $password = "1aB!";
//   Output: false
//   Explanation: The password does not meet the length requirement. Therefore, we return false.

// 1 <= password.length <= 100
// password consists of letters, digits, and special characters: "!@#$%^&*()-+".
class Solution
{

  private const REQ_CHARS = [
    '!',
    '@',
    '#',
    '$',
    '%',
    '^',
    '&',
    '*',
    '(',
    ')',
    '-',
    '+',
  ];

  /**
   * @param String $password
   * @return Boolean
   */
  function strongPasswordCheckerII($password)
  {
    $fail_reasons = [];
    $p_parts = str_split($password);

    //   It has at least 8 characters.
    if (count($p_parts) < 8) {
      $fail_reasons[] = 'to short';
      return false;
    }

    // It contains at least one lowercase letter.
    if (count(array_intersect(range('a', 'z'), $p_parts)) === 0) {
      $fail_reasons[] = 'no lower';
      return false;
    };




    //   It contains at least one uppercase letter.
    if (count(array_intersect(range('A', 'Z'), $p_parts)) === 0) {
      $fail_reasons[] = 'no upper';
      return false;
    };
    //   It contains at least one digit.
    if (count(array_intersect(range('0', '9'), $p_parts)) === 0) {
      $fail_reasons[] = 'no digit';
      return false;
    };
    //   It contains at least one special character. The special characters are the characters in the following string: "!@#$%^&*()-+".
    if (count(array_intersect(self::REQ_CHARS, $p_parts)) === 0) {
      $fail_reasons[] = 'no char';
      return false;
    };


    //   It does not contain 2 of the same character in adjacent positions (i.e., "aab" violates this condition, but "aba" does not)
    foreach ($p_parts as $k => $part) {
      if ($part === $p_parts[$k - 1]) {
        $fail_reasons[] = 'repeater';
        return false;
      }
    }

    return true;
  }
}
(new Solution())->strongPasswordCheckerII($password);
