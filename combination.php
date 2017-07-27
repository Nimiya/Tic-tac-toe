<?php
#####################################################################
## Function for any combo of 'n' terms generates n! permutations   ##
## Set init to allocate more execution time                        ##
#####################################################################

ini_set('memory_limit','-1');
function wordcombos ($words) {
        if ( count($words) <= 1 ) {
				$result = $words;
        } else {
			$i = 0;
            $result = array();
            for ( $i = 0; $i < count($words); ++$i ) {
                $firstword = $words[$i];
                $remainingwords = array();
                for ( $j = 0; $j < count($words); ++$j ) {
                    if ( $i != $j ) $remainingwords[] = $words[$j];
                }
                $combos = wordcombos($remainingwords);
                for ( $j = 0; $j < count($combos); ++$j ) {
                    $result[] = $firstword." ".$combos[$j];
                }
            }
        }
        return $result;
    }
  $FinalData = array();
  ## Generate Permutations for X1
	$Comb = wordcombos (array("X1","*",'*','*','*','*','*','*','*'));
	$Comb_U = array_unique($Comb);
  $FinalData = array_merge($FinalData, $Comb_U);

  ## Generate Permutations for X1 O1
	$Comb = wordcombos (array("X1","O1",'*','*','*','*','*','*','*'));
	$Comb_U = array_unique($Comb);
  $FinalData = array_merge($FinalData, $Comb_U);

  ## Generate Permutations for X1 O1 X2
	$Comb = wordcombos (array("X1","O1",'X2','*','*','*','*','*','*'));
	$Comb_U = array_unique($Comb);
  $FinalData = array_merge($FinalData, $Comb_U);

  ## Generate Permutations for X1 O1 X2 O2
	$Comb = wordcombos (array("X1","O1",'X2','O2','*','*','*','*','*'));
	$Comb_U = array_unique($Comb);
  $FinalData = array_merge($FinalData, $Comb_U);

  ## Generate Permutations for X1 O1 X2 O2 X3
	$Comb = wordcombos (array("X1","O1",'X2','O2','X3','*','*','*','*'));
	$Comb_U = array_unique($Comb);
  $FinalData = array_merge($FinalData, $Comb_U);

  ## Generate Permutations for X1 O1 X2 O2 X3 O3
	$Comb = wordcombos (array("X1","O1",'X2','O2','X3','O3','*','*','*'));
	$Comb_U = array_unique($Comb);
  $FinalData = array_merge($FinalData, $Comb_U);

  ## Generate Permutations for X1 O1 X2 O2 X3 O3 X4
	$Comb = wordcombos (array("X1","O1",'X2','O2','X3','O3','X4','*','*'));
	$Comb_U = array_unique($Comb);
  $FinalData = array_merge($FinalData, $Comb_U);

  ## Generate Permutations for X1 O1 X2 O2 X3 O3 X4 O4
	$Comb = wordcombos (array("X1","O1",'X2','O2','X3','O3','X4','O4','*'));
	$Comb_U = array_unique($Comb);
  $FinalData = array_merge($FinalData, $Comb_U);

  ## Generate Permutations for X1 O1 X2 O2 X3 O3 X4 O4 X5
	$Comb = wordcombos (array("X1","O1",'X2','O2','X3','O3','X4','O4','X5'));
	$Comb_U = array_unique($Comb);
  $FinalData = array_merge($FinalData, $Comb_U);

  //Eliminating Repetitions
  $FinalData = array_unique($FinalData);

	foreach ($FinalData as $value)
	{
    echo $value."<br/>";
  }
?>