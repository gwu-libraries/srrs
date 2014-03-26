<?php
/**
* Blackout Scheduler Application
* Manage blackout times from this file
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @version 06-24-04
* @package phpScheduleIt
*
* Copyright (C) 2003 - 2007 phpScheduleIt
* License: GPL, see LICENSE
*/
list($s_sec, $s_msec) = explode(' ', microtime());	// Start execution timer
/**
* Include Template class
*/
include_once('lib/Template.class.php');
/**
* Include scheduler-specific output functions
*/
include_once('lib/Schedule.class.php');
/**
* Include Reservation DB class
*/
include_once('lib/db/ResourceDB.class.php');

$t = new Template(translate('Manage Blackout Times'));
$s = new Schedule((isset($_GET['scheduleid']) ? $_GET['scheduleid'] : null), BLACKOUT_ONLY);
$r = new ResourceDB();
$default_id = $r->get_default_id(); 


// Print HTML headers
$t->printHTMLHeader();

// Check that the admin is logged in
if (!Auth::isAdmin()) {
    CmnFns::do_error_box(translate('This is only accessable to the administrator') . '<br />'
        . '<a href="ctrlpnl.php">' . translate('Back to My Control Panel') . '</a>');
}

// Print welcome box
$t->printWelcome();

// Begin main table
$t->startMain();

$t->startNavLinkTable();
$t->showNavLinksTable(Auth::isAdmin());
$t->endNavLinkTable();
$t->splitTable();

//$s->print_schedule();
?>
<form name="addBlackout" method="get" action="reserve.php" target="_blank">
<table width="100%" border="0" cellspacing="0" cellpadding="1" align="center">
  <tr>
    <td class="tableBorder">
      <table width="100%" border="0" cellspacing="1" cellpadding="0">
        <tr>
          <td  class="formNames"><?php echo translate('Room'); ?></td>
          <td class="cellColor">
	      <select name="machid[]"  id="machids" multiple="multiple"/>
	      <?php $results = $r->get_all_resources();
	      foreach ($results as $key => $value){
              echo "<option value = \"$key\"> $value </option>";
	      }
              ?>
              </select>
              
          </td>
        </tr>
	
<tr>
<td class="formNames" >
<?php echo 'Start Date'; ?></td>
<td class="cellColor">
<input  type="text" id="start_date" readonly="readonly"/>
</td>
</tr>


<input type="hidden" name="resid" value="">
<input type="hidden" name="scheduleid" value=<?php echo "$default_id"; ?>>
<input type="hidden" name="type" value="r" >
<input type="hidden" name="is_blackout" value="1" >
<input type="hidden" name="readonly" value="" >
<input type="hidden" name="pending" value="" >
<input type="hidden" id="end" name="end_date"/>
<input type="hidden" id="start" name="start_date"/>


<tr>
<td class="formNames" >
<?php echo 'End Date'; ?></td>
<td class="cellColor">
<input type="text" id="end_date" readonly="readonly"/>
</td>
</tr>


<tr>
<td class="formNames" >
<?php echo 'Start Time'; ?></td>
<td class="cellColor">
<select name="starttime" class="textbox">
<option value="0">12am</option>
<option value="60">1am</option>
<option value="120">2am</option>
<option value="180">3am</option>
<option value="240">4am</option>
<option value="300">5am</option>
<option value="360">6am</option>
<option value="420">7am</option>
<option value="480">8am</option>
<option value="540">9am</option>
<option value="600">10am</option>
<option value="660">11am</option>
<option value="720">12pm</option>
<option value="780">1pm</option>
<option value="840">2pm</option>
<option value="900">3pm</option>
<option value="960">4pm</option>
<option value="1020">5pm</option>
<option value="1080">6pm</option>
<option value="1140">7pm</option>
<option value="1200">8pm</option>
<option value="1260">9pm</option>
<option value="1320">10pm</option>
<option value="1380">11pm</option>
<option value="1440">12am</option>
</select>
</td>
</tr>



<tr>
<td class="formNames">
<?php echo 'End Time'; ?></td>
<td class="cellColor">
<select name="endtime" class="textbox">
<!--<option value="0">12am</option> ---changed by krunal-- -->
<option value="60">1am</option>
<option value="120">2am</option>
<option value="180">3am</option>
<option value="240">4am</option>
<option value="300">5am</option>
<option value="360">6am</option>
<option value="420">7am</option>
<option value="480">8am</option>
<option value="540">9am</option>
<option value="600">10am</option>
<option value="660">11am</option>
<option value="720" >12pm</option>
<option value="780">1pm</option>
<option value="840">2pm</option>
<option value="900">3pm</option>
<option value="960">4pm</option>
<option value="1020">5pm</option>
<option value="1080">6pm</option>
<option value="1140">7pm</option>
<option value="1200">8pm</option>
<option value="1260">9pm</option>
<option value="1320">10pm</option>
<option value="1380">11pm</option>
<option value="1440">12am</option>
</select>
</td>
</tr>

          </table>
</td>
</tr>

          </table>

<?php

        // Print out correct buttons
        
            echo submit_button(translate('Add Blackout'))
                        . ' <input type="reset" name="reset" value="' . translate('Clear') . '" class="button" />' . "\n";
        
                echo "</form>\n";
                print_jscalendar_setup($start_date_ok ? $rs['start_datetime'] : null, $end_date_ok ? $rs['end_datetime'] : null);               // Set up the javascript calendars
                // Unset variables
function submit_button($value, $get_value = '') {
        return '<input type="submit" name="submit" value="' . $value . '" class="button" />' . "\n"
                        . '<input type="hidden" name="get" value="' . $get_value  . '" />' . "\n";
}

                




// Print out links to jump to new date
//$s->print_jump_links();

// End main table
$t->endMain();

list($e_sec, $e_msec) = explode(' ', microtime());		// End execution timer
$tot = ((float)$e_sec + (float)$e_msec) - ((float)$s_sec + (float)$s_msec);
echo '<!--Schedule printout time: ' . sprintf('%.16f', $tot) . ' seconds-->';
// Print HTML footer
$t->printHTMLFooter();
?>
