<?php

function relative_time($timestamp)
{
	global $lang_latest_posts;
	
	$l = $lang_latest_posts;
	
	$d = time() - $timestamp;
	if ($d < 60)
		return sprintf($l['Time string'], $d, (($d==1) ? $l['Second'] : $l['Seconds']));
	else
	{
		$d = floor($d / 60);
		if($d < 60)
			return sprintf($l['Time string'], $d, (($d==1) ? $l['Minute'] : $l['Minutes']));
		else
		{
			$d = floor($d / 60);
			if($d < 24)
				return sprintf($l['Time string'], $d, (($d==1) ? $l['Hour'] : $l['Hours']));
			else
			{
				$d = floor($d / 24);
				if($d < 7)
					return sprintf($l['Time string'], $d, (($d==1) ? $l['Day'] : $l['Days']));
				else
				{
					$d = floor($d / 7);
					if($d < 4)
						return sprintf($l['Time string'], $d, (($d==1) ? $l['Week'] : $l['Weeks']));
				}//Week
			}//Day
		}//Hour
	}//Minute
	
	return format_time($timestamp);
}