<?php
/*
 * Copyright 2018 GPLv3, Zillexplorer by Mike Kilday: http://DragonFrugal.com
 */
?>
      
      <h3><b>DS Block #<?=$_GET['dsblock']?></b></h3>
      <h5><!-- <span class="label label-danger">Lorem</span> --> <span class="label label-primary">DS Block</span></h5>
      
      <div class="col-xs-12 col-md-auto border-rounded no-padding zebra-stripe relative-table">

			<div style="padding: 7px;"><h4>DS Block</h4></div>
  		
      <?php

		$dsblock_request = json_request('GetDsBlock', array( $_GET['dsblock'] ) );
      $dsblock_results = json_decode( @get_data('array', $dsblock_request), TRUE );
      //var_dump( $dsblock_results ); // DEBUGGING

		if ( $dsblock_results['result']['header']['timestamp'] == 0 ) {
		?>
		<div class="stats-row"><b>Block #<?=$_GET['dsblock']?> does not exist.</b></div>
		<?php
		}
		else {
      
      
      	foreach ( $dsblock_results as $key => $value ) {
      	
      		if ( $key == 'result' ) {
      			
    				$i = 0;
      			foreach ( $value as $key2 => $value2 ) { // Results arrays depth 0
      				
      			// Doesn't reset pointer in foreach loop
      			$num_items = sizeof($value);
    				$i = $i + 1;
      				if($i == $num_items) {
    					$last = 1;
  						}
    				//echo $i.'!';
      				
      				if ( is_array($value2) ) {			
      				?>
      	
  						<div class="stats-row"><b><?=ucfirst($key2)?>: </b></div>
  		
  						<?php
      					
    						$i2 = 0;
      					foreach ( $value2 as $key3 => $value3 ) { // Results arrays depth 1
      					
      					// Doesn't reset pointer in foreach loop
      					$num_items2 = sizeof($value2);
    						$i2 = $i2 + 1;
      						if($i2 == $num_items2) {
    							$last2 = 1;
  								}
    						//echo $i2.'!';

							
      						if ( is_array($value3) ) {			
      						echo 'Code array parsing needed here.';
      						}
      						else {
					      	
					      	 	if ( strtolower($key3) == 'timestamp' ) {
      							?>
      					
      							<div class="stats-row is-1deep"><b> &equals;&gt;&nbsp; <?=ucfirst($key3)?>:</b> <?=$value3?> (<?=date('M jS, Y @ H:i:s T', substr($value3, 0, 10))?>)</div>
      					
      							<?php
      							}
					      	 	else {
      							?>
      					
      							<div class="stats-row is-1deep"><b> &equals;&gt;&nbsp; <?=ucfirst($key3)?>:</b> <?=$value3?></div>
      					
      							<?php
      							}
		      				}
      				
      					}
      					$last2 = NULL;
      					
      				}
      				else {
      				?>
      					
      				<div class="stats-row"><b><?=ucfirst($key2)?>:</b> <?=$value2?></div>
      				
      				<?php
      				}
      		
      			}
      			$last = NULL;
      			
      		}
      	
      	}
      	
      	
      }
      	?>
      
      </div>