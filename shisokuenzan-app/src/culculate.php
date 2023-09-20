
<?php

    $left = 0;
    $right = 0;
    $symbol = 0;

    if(isset($_POST["button_sum"])){
        $left = $_POST["left"];
        $right = $_POST["right"];
        $symbol = $_POST["symbol"];
    }

    class plus
    {
        readonly private int $ll;
        readonly private int $rr;
    
        /**
         * @param int $ll 左辺
         * @param int $rr 右辺
         **/
        public function __construct($ll, $rr) {
            $this->ll = $ll;
            $this->rr = $rr;
        }
    
        /**
         * 左辺 + 右辺 を返却
         * @return int
         */
        public function pp(): int {
            return $this->ll + $this->rr;
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
        $plus = new plus($left, $right);
        $answer = $plus->pp();
    }

    // $left + $right