<?php

	unset($out);
	unset($result);
	$patient = "1018@hotmail.com";
	exec("Rscript kmeans.R $patient", $out);

	$length = count($out);
	for ($i = 0; $i < $length; $i++)
		foreach (explode("\n", $out[$i]) as $row)
		{
			if (strpos($row, ']') !== false)
				$numbersAsStr = substr($row, strpos($row, ']') + 1);
			else
				$numbersAsStr = $row;
			foreach (explode(' ', $numbersAsStr) as $potentialNumber)
			{
				if ($potentialNumber !== '')
				{
					$potentialNumber = trim($potentialNumber, '"');
					$result[] = $potentialNumber;
				}
			}
		}

	var_dump($result);

?>
