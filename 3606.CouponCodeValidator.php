<?php
// You are given three arrays of length n that describe the properties of n coupons: code, businessLine, and isActive. The ith coupon has:

// code[i]: a string representing the coupon identifier.
// businessLine[i]: a string denoting the business category of the coupon.
// isActive[i]: a boolean indicating whether the coupon is currently active.
// A coupon is considered valid if all of the following conditions hold:

// code[i] is non-empty and consists only of alphanumeric characters (a-z, A-Z, 0-9) and underscores (_).
// businessLine[i] is one of the following four categories: "electronics", "grocery", "pharmacy", "restaurant".
// isActive[i] is true.
// Return an array of the codes of all valid coupons, sorted first by their businessLine in the order: "electronics", "grocery", "pharmacy", "restaurant", and then by code in lexicographical (ascending) order within each category.



// Example 1:

$code = ["SAVE20", "", "PHARMA5", "SAVE@20"];
$businessLine = ["restaurant", "grocery", "pharmacy", "restaurant"];
$isActive = [true, true, true, true];

// Output: ["PHARMA5","SAVE20"]

// Explanation:

// First coupon is valid.
// Second coupon has empty code (invalid).
// Third coupon is valid.
// Fourth coupon has special character @ (invalid).
// Example 2:

$code = ["GROCERY15", "ELECTRONICS_50", "DISCOUNT10"];
$businessLine = ["grocery", "electronics", "invalid"];
$isActive = [false, true, true];

// Output: ["ELECTRONICS_50"]

// Explanation:

// First coupon is inactive (invalid).
// Second coupon is valid.
// Third coupon has invalid business line (invalid).


// Constraints:

// n == code.length == businessLine.length == isActive.length
// 1 <= n <= 100
// 0 <= code[i].length, businessLine[i].length <= 100
// code[i] and businessLine[i] consist of printable ASCII characters.
// isActive[i] is either true or false.

class Solution
{
	private const VALID_BUSINESS_LINES = [
		"electronics" => 1,
		"grocery" => 1,
		"pharmacy" => 1,
		"restaurant" => 1,
	];

	private const VALID_CHARS = [
		"a" => 1,
		"b" => 1,
		"c" => 1,
		"d" => 1,
		"e" => 1,
		"f" => 1,
		"g" => 1,
		"h" => 1,
		"i" => 1,
		"j" => 1,
		"k" => 1,
		"l" => 1,
		"m" => 1,
		"n" => 1,
		"o" => 1,
		"p" => 1,
		"q" => 1,
		"r" => 1,
		"s" => 1,
		"t" => 1,
		"u" => 1,
		"v" => 1,
		"w" => 1,
		"x" => 1,
		"y" => 1,
		"z" => 1,
		"A" => 1,
		"B" => 1,
		"C" => 1,
		"D" => 1,
		"E" => 1,
		"F" => 1,
		"G" => 1,
		"H" => 1,
		"I" => 1,
		"J" => 1,
		"K" => 1,
		"L" => 1,
		"M" => 1,
		"N" => 1,
		"O" => 1,
		"P" => 1,
		"Q" => 1,
		"R" => 1,
		"S" => 1,
		"T" => 1,
		"U" => 1,
		"V" => 1,
		"W" => 1,
		"X" => 1,
		"Y" => 1,
		"Z" => 1,
		"0" => 1,
		"1" => 1,
		"2" => 1,
		"3" => 1,
		"4" => 1,
		"5" => 1,
		"6" => 1,
		"7" => 1,
		"8" => 1,
		"9" => 1,
		"_" => 1,
	];

	/**
	 * @param String[] $code
	 * @param String[] $businessLine
	 * @param Boolean[] $isActive
	 * @return String[]
	 */
	function validateCoupons($code, $businessLine, $isActive)
	{
		$valid_coupons = [];
		foreach ($code as $code_key => $code_value) {
			if ($isActive[$code_key] === false) continue;
			if (isset(self::VALID_BUSINESS_LINES[$businessLine[$code_key]]) === false) continue;
			if ($code_value === "") continue;

			for ($i = 0; $i < strlen($code_value); $i++) {
				if (isset(self::VALID_CHARS[$code_value[$i]]) !== true) {
					continue 2;
				}
			}

			$valid_coupons[$businessLine[$code_key]][$code_key] = $code_value;
		}

		$results = [];
		foreach (self::VALID_BUSINESS_LINES as $business_line => $exsist) {
			if (isset($valid_coupons[$business_line]) === false) continue;
			sort($valid_coupons[$business_line]);
			$results = array_merge($results, $valid_coupons[$business_line]);
		}
		return $results;
	}
}

print_r((new Solution())->validateCoupons($code, $businessLine, $isActive));
