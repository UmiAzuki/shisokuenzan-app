
<?php

    $left = 0;
    $right = 0;
    $symbol = 0;

    if(isset($_POST["button_sum"])){
        $left = $_POST["left"];
        $right = $_POST["right"];
        $symbol = $_POST["symbol"];
    }

    class culculate
    {
        readonly private int $ll;
        readonly private int $rr;
    
        /**
         * @param int $ll 左項
         * @param int $rr 右項
         **/
        public function __construct($ll, $rr) {
            $this->ll = $ll;
            $this->rr = $rr;
        }
    
        /**
         * 計算結果 を返却
         * @return int
         */

        public function pp(): int {
            return $this->ll + $this->rr;
        }
    
        public function mm(): int {
            return $this->ll - $this->rr;
        }

        public function ml(): int {
            return $this->ll * $this->rr;
        }

        public function de(): int {
            return $this->ll / $this->rr;
        }

        /**
         * getter
         * @return array
         */
        public function getter(): array {
            $returnArray = [
                'll' => $this->ll,
                'rr' => $this->rr,
            ];
            return $returnArray;
        }
    }
    
    $answer = 0;
    if ($symbol == 'plus') {
        $plus = new culculate($left, $right);
        $answer = $plus->pp();
    }

    elseif ($symbol == 'minus') {
        $minus = new culculate($left, $right);
        $answer = $minus->mm();
    }

    elseif ($symbol == 'multiplied') {
        $multiplied = new culculate($left, $right);
        $answer = $multiplied->ml();
    }

    else {
        $divided = new culculate($left, $right);
        $answer = $divided->de();
    }
