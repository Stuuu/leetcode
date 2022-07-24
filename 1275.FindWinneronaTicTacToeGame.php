<?php
// Tic-tac-toe is played by two players A and B on a 3 x 3 grid. The rules of Tic-Tac-Toe are:

// Players take turns placing characters into empty squares ' '.
// The first player A always places 'X' characters, while the second player B always places 'O' characters.
// 'X' and 'O' characters are always placed into empty squares, never on filled ones.
// The game ends when there are three of the same (non-empty) character filling any row, column, or diagonal.
// The game also ends if all squares are non-empty.
// No more moves can be played if the game is over.
// Given a 2D integer array moves where moves[i] = [rowi, coli] indicates that the ith move will be played on grid[rowi][coli]. return the winner of the game if it exists (A or B). In case the game ends in a draw return "Draw". If there are still movements to play return "Pending".

// You can assume that moves is valid (i.e., it follows the rules of Tic-Tac-Toe), the grid is initially empty, and A will play first.



// Example 1:


$moves = [[0,0],[2,0],[1,1],[2,1],[2,2]];
// Output: "A"
// Explanation: A wins, they always play first.
// Example 2:


$moves = [[0,0],[1,1],[0,1],[0,2],[1,0],[2,0]];
// Output: "B"
// Explanation: B wins.
// Example 3:


$moves = [[0,0],[1,1],[2,0],[1,0],[1,2],[2,1],[0,1],[0,2],[2,2]];
// Output: "Draw"
// Explanation: The game ends in a draw since there are no moves to make.


// Constraints:

// 1 <= moves.length <= 9
// moves[i].length == 2
// 0 <= rowi, coli <= 2
// There are no repeated elements on moves.
// moves follow the rules of tic tac toe.
class Solution
{

  /**
   * @param Integer[][] $moves
   * @return String
   */
    public function tictactoe($moves)
    {
        $board = [];
        for ($i=0; $i < 3; $i++) {
            $board[$i]= array_fill(0, 3, '-');
        }
        foreach ($moves as $k => $move) {
            $player = ($k % 2 === 0) ? 'A' : 'B';
            $row = $move[0];
            $col = $move[1];
            $board[$row][$col] = $player;

            if($k > 2){
              if(self::didPlayerWin($board, $player)){
                return $player;
              };
            }
        }

        return (count($moves) < 9) ? 'Pending' : 'Draw';

    }

    public static function didPlayerWin(array $board, string $player)
    {
        $win_string = str_repeat($player, 3);
        $cols = [];
        // horizontal check
        foreach ($board as $row => $row_vals) {
            if(self::implodeMatch($row_vals, $win_string)) {
                return true;
            };
            foreach ($row_vals as $col_num => $val){
              $cols[$col_num][$row] = $val;
            }

        }
        // vertical check
        foreach($cols as $k => $col_vals){
          if(self::implodeMatch($col_vals, $win_string)) {
            return true;
        };
        }

        //diagonal checks
        $left_to_right = [
          $board[0][0],
          $board[1][1],
          $board[2][2],
        ];
        if(self::implodeMatch($left_to_right, $win_string)) {
          return true;
        }
        $right_to_left = [
          $board[0][2],
          $board[1][1],
          $board[2][0],
        ];
        if(self::implodeMatch($right_to_left, $win_string)) {
          return true;
        }

        return false;
    }

    public static function implodeMatch(
      array $vals,
      string $win_string
      ): bool {
        return implode('', $vals) === $win_string;
    }
}
echo (new Solution())->tictactoe($moves);
