<?php
// On an 8 x 8 chessboard, there is exactly one white rook 'R' and some number of white bishops 'B', black pawns 'p', and empty squares '.'.

// When the rook moves, it chooses one of four cardinal directions (north, east, south, or west), then moves in that direction until it chooses to stop, reaches the edge of the board, captures a black pawn, or is blocked by a white bishop. A rook is considered attacking a pawn if the rook can capture the pawn on the rook's turn. The number of available captures for the white rook is the number of pawns that the rook is attacking.

// Return the number of available captures for the white rook.



// Example 1:


$board = [[".",".",".",".",".",".",".","."],[".",".",".","p",".",".",".","."],[".",".",".","R",".",".",".","p"],[".",".",".",".",".",".",".","."],[".",".",".",".",".",".",".","."],[".",".",".","p",".",".",".","."],[".",".",".",".",".",".",".","."],[".",".",".",".",".",".",".","."]];
// Output: 3
// Explanation: In this example, the rook is attacking all the pawns.
// Example 2:


$board = [[".",".",".",".",".",".",".","."],[".","p","p","p","p","p",".","."],[".","p","p","B","p","p",".","."],[".","p","B","R","B","p",".","."],[".","p","p","B","p","p",".","."],[".","p","p","p","p","p",".","."],[".",".",".",".",".",".",".","."],[".",".",".",".",".",".",".","."]];
// Output: 0
// Explanation: The bishops are blocking the rook from attacking any of the pawns.
// Example 3:


$board = [[".",".",".",".",".",".",".","."],[".",".",".","p",".",".",".","."],[".",".",".","p",".",".",".","."],["p","p",".","R",".","p","B","."],[".",".",".",".",".",".",".","."],[".",".",".","B",".",".",".","."],[".",".",".","p",".",".",".","."],[".",".",".",".",".",".",".","."]];
// Output: 3
// Explanation: The rook is attacking the pawns at positions b5, d6, and f5.
class Solution
{
    private const ROOK_KEY = 'R';
    private const PAWN_KEY = 'p';
    private const BISHOP_KEY = 'B';
    private const EMPTY_KEY = '.';

    private const DIR_UP    = 'up';
    private const DIR_DOWN  = 'down';
    private const DIR_LEFT  = 'left';
    private const DIR_RIGHT = 'right';

    /**
     * @param String[][] $board
     * @return Integer
     */
    public function numRookCaptures($board)
    {
        $cols = [];
        foreach ($board as $row_num => $row_vals) {
            foreach ($row_vals as $col_num => $col_val) {
                if ($col_val === self::ROOK_KEY) {
                    $rook_location = [
                    'row' => $row_num,
                    'col' => $col_num,
                  ];
                }
                $cols[$col_num][$row_num] = $col_val;
            }
        }

        $possible_pawn_attacks = 0;
        // check up
        if($this->isPawnCapturePossibleForDir($rook_location, $cols[$rook_location['col']], 'up')){
          $possible_pawn_attacks++;
        };
        // check down
        if($this->isPawnCapturePossibleForDir($rook_location, $cols[$rook_location['col']], 'down')){
          $possible_pawn_attacks++;
        };
        // check left
        if($this->isPawnCapturePossibleForDir($rook_location, $board[$rook_location['row']], 'left')){
          $possible_pawn_attacks++;
        };
        //check right
        if($this->isPawnCapturePossibleForDir($rook_location, $board[$rook_location['row']], 'right')){
          $possible_pawn_attacks++;
        };



        return $possible_pawn_attacks;
    }

    private static function isPawnCapturePossibleForDir(
      array $rook_location,
      array $board_row_or_col,
      string $direction
    ){
      switch ($direction) {
        case self::DIR_LEFT :
          for ($i= $rook_location['col']; $i >= 0; $i--) {

            if($board_row_or_col[$i] === self::EMPTY_KEY){
              continue;
            }

            if($board_row_or_col[$i] === self::PAWN_KEY){
              return true;
            }

            if($board_row_or_col[$i] === self::BISHOP_KEY){
              return false;
            }
          }
          return false;
          break;
        case self::DIR_UP :
          for ($i= $rook_location['row']; $i >= 0; $i--) {

            if($board_row_or_col[$i] === self::EMPTY_KEY){
              continue;
            }

            if($board_row_or_col[$i] === self::PAWN_KEY){
              return true;
            }

            if($board_row_or_col[$i] === self::BISHOP_KEY){
              return false;
            }
          }
          return false;
          break;
        case self::DIR_DOWN :
          for ($i = $rook_location['row']; $i <= 7; $i++) {

            if($board_row_or_col[$i] === self::EMPTY_KEY){
              continue;
            }

            if($board_row_or_col[$i] === self::PAWN_KEY){
              return true;
            }

            if($board_row_or_col[$i] === self::BISHOP_KEY){
              return false;
            }
          }
          return false;
          break;
        case self::DIR_RIGHT :
          print_r($board_row_or_col);
          for ($i= $rook_location['col']; $i <= 7; $i++) {

            if($board_row_or_col[$i] === self::EMPTY_KEY){
              continue;
            }

            if($board_row_or_col[$i] === self::PAWN_KEY){
              return true;
            }

            if($board_row_or_col[$i] === self::BISHOP_KEY){
              return false;
            }
          }
          return false;
          break;
      }

    }
}
(new Solution())->numRookCaptures($board);
