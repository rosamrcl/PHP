<?php
    if ($_SERVER["REQUEST_METHOD"] === 'POST' ){
        $nome=$_POST['nome'];
        $nota=$_POST['nota'];
        $alunos =[];
        $soma =0;
        $maiorNota=-1;
        $alunoMaiornota="";
        

            for ($i = 0; $i < 10; $i++){
                $alunos[] =[
                    'nome' => $nome[$i],
                    'nota' => $nota[$i]
                ];
                
            
            $soma+=$nota[$i];
            
            if ($nota[$i]>$maiorNota){
                $maiorNota=$nota[$i];
                $alunoMaiornota=$nome[$i];
            }
        }
            $media=$soma/$i;

            echo "Média da turma: " . $media . "<br>";
            echo "Maior nota: " . $alunoMaiornota;













    }
?>