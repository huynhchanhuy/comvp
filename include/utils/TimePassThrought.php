<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class TimePassThrought{
	private $start;
	public function __construct() {
		$time = microtime();
		$time = explode(' ', $time);
		$time = $time[1] + $time[0];
		$this->start = $time;
	}

	public function TimeMeasured($echo)
	{
		$time = microtime();
		$time = explode(' ', $time);
		$time = $time[1] + $time[0];
		$finish = $time;
		$total_time = round(($finish - $this->start), 4);
		if($echo == true)
		{
			echo 'Page generated in '.$total_time.' seconds.';
		}
		else
		{
			return $total_time;
		}
	}
}