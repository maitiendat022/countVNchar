<?php
    function countVNchar($inputString) {
        $telexCharacters = array('aw', 'aa', 'dd', 'ee', 'oo', 'ow', 'w');
        $count = 0;
        $array = array();
        
        for ($i = 0; $i < strlen($inputString); $i++) {
            $char = $inputString[$i]; 
            
            if ($char == "w") {
                $count++;
                array_push($array,$char);  
            }else{
                $char = substr($inputString, $i , 2); 
                if(in_array($char, $telexCharacters)){
                    $count++;
                    array_push($array,$char);
                    $i++;
                }
                
            }
        }
    
        return array($count,$array);
    }
    
    $inputString = 'hfdawhwhcoomdd';
    $result = countVNchar($inputString);
    $array = implode(', ', $result[1]);
    echo $result[0] . " (".  $array . ")" ;
?>

