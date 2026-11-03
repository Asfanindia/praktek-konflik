<?php

function calculatePrice($basePrice, $taxRate) {
    return $basePrice + ($basePrice * $taxRate);
}

?>