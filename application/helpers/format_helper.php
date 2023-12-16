<?php

	function mysql_to_timestamp($time = ''){

		$time = str_replace('-', '', $time);
		$time = str_replace(':', '', $time);
		$time = str_replace(' ', '', $time);
		
		return  mktime(
						substr($time, 8, 2),
						substr($time, 10, 2),
						substr($time, 12, 2),
						substr($time, 4, 2),
						substr($time, 6, 2),
						substr($time, 0, 4)
						);
    }
	
    function mysql_to_normal( $mysql = '' , $time = false , $seconds = false, $format = 'SG' ){

        $unixtime = mysql_to_timestamp( $mysql );
        
        $r  = date('M', $unixtime).' '.date('j', $unixtime).', '.date('Y', $unixtime).' ';

        if( $time ){

            if( $format == 'SG' ){
			    $r .= date('h', $unixtime ).':'.date('i', $unixtime );
    		}else{
	    		$r .= date('H', $unixtime ).':'.date('i', $unixtime );
		    }

            if($seconds){
                $r .= ':'.date('s', $unixtime );
            }

            if( $format == 'SG' ){
                $r .= ' '.date('A', $unixtime );
            }
        }

		return $r;
    }

?>