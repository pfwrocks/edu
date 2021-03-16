<?php


function isDiagonal($width, $tile)
{
    $curr_row = 0;
    while (1) {
        $diagonal_tile = $curr_row*$width + $curr_row;
        if ($diagonal_tile == $tile-1) {
            return true;
        }
        if ($diagonal_tile > $tile-1) {
            return false;
        }
        $curr_row = $curr_row + 1;
    }
}

function isEdge($width, $height, $tile)
{
    // ensure valid tile
    if ($tile<=0 || $tile>=$width*$height+1) {
        return false;
    }

    $row = intdiv(($tile - 1), $width);	// intdev() returns int quotient of division of dividend by divisor
    $col = fmod(($tile - 1), $width);	// fmod() returns the remainder of the division
    if ($row == 0 || $row == $height-1) {
        return true;
    }
    if ($col == 0 || $col==$width-1) {
        return true;
    }
    return false;
}

function computeAvg($p1, $p2, $p3, $p4, $p5, $p6, $drop_option)
{
    $data = [100*$p1/30, $p2, $p3, $p4, 100*$p5/50, $p6];
    $total = array_sum($data);
    $min = min($data);
    echo "total: " . $total;

    if ($drop_option == true) {
        return ($total-$min)/5;
    }
    return $total/6;
}



# TESTS

echo "-- Test isDiagonal(width, tile) function -- <br/>";

echo "isDiagonal(7, 1): you got " . isDiagonal(7, 1) . " : expected 1 <br/>";            // expected 1
echo "isDiagonal(7, 25): you got " . isDiagonal(7, 25) . " : expected 1 <br/>";          // expected 1
echo "isDiagonal(7, 41): you got " . isDiagonal(7, 41) . " : expected 1 <br/>";          // expected 1
echo "isDiagonal(7, 42): you got " . isDiagonal(7, 42) . " : expected \"\" <br/>";       // expected ""
echo "isDiagonal(7, 24): you got " . isDiagonal(7, 24) . " : expected \"\" <br/>";       // expected ""
echo "isDiagonal(7, 26): you got " . isDiagonal(7, 26) . " : expected \"\" <br/>";       // expected ""
echo "isDiagonal(7, 48): you got " . isDiagonal(7, 26) . " : expected \"\" <br/>";       // expected ""
echo "isDiagonal(7, 50): you got " . isDiagonal(7, 50) . " : expected \"\" <br/>";       // expected ""
echo "isDiagonal(7, 0): you got " . isDiagonal(7, 0) . " : expected \"\" <br/>";          // expected ""

echo "<br/><br/>-- Test isDiagonal(width, tile) function -- <br/>";

echo "isDiagonal(3, 1): you got " . isDiagonal(3, 1) . " : expected 1 <br/>";          // expected 1
echo "isDiagonal(3, 2): you got " . isDiagonal(3, 2) . " : expected \"\" <br/>";       // expected ""
echo "isDiagonal(3, 3): you got " . isDiagonal(3, 3) . " : expected \"\" <br/>";       // expected ""
echo "isDiagonal(3, 4): you got " . isDiagonal(3, 4) . " : expected \"\" <br/>";       // expected ""
echo "isDiagonal(3, 5): you got " . isDiagonal(3, 5) . " : expected 1 <br/>";          // expected 1
echo "isDiagonal(3, 6): you got " . isDiagonal(3, 6) . " : expected \"\" <br/>";       // expected ""
echo "isDiagonal(3, 8): you got " . isDiagonal(3, 8) . " : expected \"\" <br/>";       // expected ""
echo "isDiagonal(3, 9): you got " . isDiagonal(3, 9) . " : expected 1 <br/>";          // expected 1



echo "<br/><br/>-- Test isEdge(width, height, tile) function -- <br/>";

echo "isEdge(7, 8, 1): you got " . isEdge(7, 8, 1) . " : expected 1 <br/>";            // expected 1
echo "isEdge(7, 8, 5): you got " . isEdge(7, 8, 5) . " : expected 1 <br/>";            // expected 1
echo "isEdge(7, 8, 43): you got " . isEdge(7, 8, 43) . " : expected 1 <br/>";          // expected 1
echo "isEdge(7, 8, 50): you got " . isEdge(7, 8, 50) . " : expected 1 <br/>";          // expected 1
echo "isEdge(7, 8, 28): you got " . isEdge(7, 8, 28) . " : expected 1 <br/>";          // expected 1
echo "isEdge(7, 8, 56): you got " . isEdge(7, 8, 56) . " : expected 1 <br/>";          // expected 1
echo "isEdge(7, 8, 13): you got " . isEdge(7, 8, 13) . " : expected \"\" <br/>";       // expected ""
echo "isEdge(7, 8, 25): you got " . isEdge(7, 8, 25) . " : expected \"\" <br/>";       // expected ""
echo "isEdge(7, 8, 44): you got " . isEdge(7, 8, 44) . " : expected \"\" <br/>";       // expected ""
echo "isEdge(7, 8, 57): you got " . isEdge(7, 8, 57) . " : expected \"\" <br/>";       // expected ""
echo "isEdge(7, 8, 0): you got " . isEdge(7, 8, 0) . " : expected \"\" <br/>";         // expected ""


echo "<br/><br/>-- Test isEdge(width, height, tile) function -- <br/>";

echo "isEdge(3, 3, 1): you got " . isEdge(3, 3, 1) . " : expected 1 <br/>";            // expected 1
echo "isEdge(3, 3, 2): you got " . isEdge(3, 3, 2) . " : expected 1 <br/>";            // expected 1
echo "isEdge(3, 3, 3): you got " . isEdge(3, 3, 3) . " : expected 1 <br/>";            // expected 1
echo "isEdge(3, 3, 4): you got " . isEdge(3, 3, 4) . " : expected 1 <br/>";            // expected 1
echo "isEdge(3, 3, 5): you got " . isEdge(3, 3, 5) . " : expected \"\" <br/>";         // expected ""
echo "isEdge(3, 3, 6): you got " . isEdge(3, 3, 6) . " : expected 1 <br/>";            // expected 1
echo "isEdge(3, 3, 8): you got " . isEdge(3, 3, 8) . " : expected 1 <br/>";            // expected 1
echo "isEdge(3, 3, 9): you got " . isEdge(3, 3, 9) . " : expected 1 <br/>";            // expected 1


echo "<br/><br/>-- Test computeAvg() function -- <br/>";
echo "computeAvg(15, 55, 55, 55, 25, 55, true) : you got " . computeAvg(15, 55, 55, 55, 25, 55, true) . " : expected 54 <br/>";
echo "computeAvg(15, 55, 55, 55, 25, 55, false) : you got " . computeAvg(15, 55, 55, 55, 25, 55, false) . " : expected 53.33 <br/>";
echo "computeAvg(15, 55, 55, 55, 27.5, 50, true) : you got " . computeAvg(15, 55, 55, 55, 27.5, 50, true) . " : expected 54 <br/>";
echo "computeAvg(15, 55, 55, 55, 27.5, 50, false) : you got " . computeAvg(15, 55, 55, 55, 27.5, 50, false) . " : expected 53.33 <br/>";

?> 