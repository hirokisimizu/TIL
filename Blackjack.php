<?php

function winnerBlackjack(array $playerCards, array $houseCards): bool {
    $playerScore = calculateScore($playerCards);
    $houseScore = calculateScore($houseCards);

    // プレイヤーがバストした場合
    if ($playerScore > 21) {
        return false;
    }
    // ディーラーがバストした場合、またはプレイヤーのスコアがディーラーより高い場合
    if ($houseScore > 21 || $playerScore > $houseScore) {
        return true;
    }
    // ドローまたはディーラーのスコアがプレイヤーより高い場合
    return false;
}

function cardValue($card) {
    $value = substr($card, 1);
    switch ($value) {
        case 'A': return 1;
        case 'J': return 11;
        case 'Q': return 12;
        case 'K': return 13;
        default: return intval($value);
    }
}

function calculateScore($cards) {
    $score = 0;
    foreach ($cards as $card) {
        $score += cardValue($card);
    }
    return $score;
}

// テストケース
var_dump(winnerBlackjack(["♣4", "♥7", "♥7"], ["♠Q", "♣J"])); // true
