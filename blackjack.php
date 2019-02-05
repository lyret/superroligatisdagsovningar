<?php
session_start();
class GamblingFunctions {
    function generateCardNumber() {
        $randNum = rand(1,13);
        return $randNum;
    }
    function calculateWinnings($hand) {
        if ($hand > 21) {
            return 0;
        } else if ($hand == 21) {
            return 89;
        } else if ($hand == 20) {
            return 77;
        } else if ($hand > 18) {
            return 63;
        } else if ($hand > 16) {
            return 50;
        } else if ($hand > 14) {
            return 40;   
        } else if ($hand > 10) {
            return 25;
        } else {
            return 15;
        }
    }
    function checkIfWon($winningPercentage) {
        $roll = rand(1,100);
        if ($roll < $winningPercentage) {
            return true;
        } else {
            return false;
        }

    } 
}


class BlackJack extends GamblingFunctions {
    public $hand = 0;
    function setHand($handVal) {
        $this->hand = $handVal;
    }
    function getHand() {
        return $this->hand;
    }
    function hitMe() {
        $toAdd = $this->generateCardNumber();
        $this->hand = $this->hand + $toAdd;
        $_SESSION['blackJackHand'] = $this->hand;
    }
    function stop() {
        $winPercentage = $this->calculateWinnings($this->hand);
        unset($_SESSION['blackJackHand']);
        if ($this->checkIfWon($winPercentage) == true) {
            echo 'Du vann';
        } else {
            echo 'Du förlorade';
        }
    }
}
if (isset($_POST['hitme'])) {
    $blackJack = new BlackJack();
    if (isset($_SESSION['blackJackHand'])) {
        $blackJack->setHand($_SESSION['blackJackHand']);
        $blackJack->hitMe();
        echo 'Du har ' . $blackJack->getHand();
    } else {
        $blackJack->hitMe();
        echo 'Du har ' . $blackJack->getHand();
    }
    
} else if (isset($_POST['stop'])) {
    $blackJack = new BlackJack();
    if (isset($_SESSION['blackJackHand'])) {
        $blackJack->setHand($_SESSION['blackJackHand']);
        $blackJack->stop();
    } else {
        echo 'Du måste ta ett kort';
    }

}
?>
<form action="blackjack.php" method="post">
    <input type="submit" value="Hit me"name="hitme" id="hitMeBtn">
    <input type="submit" value="Stop" name="stop" id="stopBtn">
</form>