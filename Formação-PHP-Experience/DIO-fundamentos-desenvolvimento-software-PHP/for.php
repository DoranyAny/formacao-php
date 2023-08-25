<?php
        $arr= [1,5,3,0];
        $qtd_elementos_array = count($array);
        // $i = 0
        // $posicaoAtual = 0
        
        for($i=0; $i<$qtd_elementos_array -1; $i++){ //4 -1 //3
        
            for ($posiçãoAtual = 0; $posicaoAtual<$qtd_elementos_array - $i -1; $posicaoAtual++){
                
            $proximaPosicao = $posicaoAtual+1; 
            
                if ($arr[$proximaPosicao] < $arr[$posiçãoAtual]) {
                $auxiliar = $arr[$posicaoAtual];
                $arr [$posicaoAtual] = $arr[$proximaPosicao];
                $arr [$proximaPosicao] = $auxiliar;
            }
            }
        }
        print_r($arr) . "\n";
?>