<?php
/**
* This file provides the output functions for
*  an interface for reserving resources,
*  viewing other reservations and modifying their own.
* @author Nick Korbel <lqqkout13@users.sourceforge.net>
* @author David Poole <David.Poole@fccc.edu>
* @author Richard Cantzler <rmcii@users.sourceforge.net>
* @version 06-23-07
* @package Templates
*
* Copyright (C) 2003 - 2007 phpScheduleIt
* License: GPL, see LICENSE
*/

// Get Link object
$link = CmnFns::getNewLink();

/**
* Print out week being viewed above schedule tables
* @param array $d array of date information about this schedule
* @param string $title title of schedule
*/
function print_date_span($d, $title) {
    // Print out current week being viewed
    // echo '<h3 align="center">' . $title . '<br/>' . Time::formatDate($d['firstDayTs']) . ' - ' . Time::formatDate($d['lastDayTs']) . '</h3>';
    // AK: Updated version. We want to display current date only.
 	echo '<h3 align="center">'. Time::formatDate($d['todayTs']) .'</h3>';

}

/**
* Prints out a jump menu for the schedules
* @param array $links array of schedule links
*/
function print_schedule_list($links, $currentid) {
?>
<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" style="padding-bottom: 5px;">
<tr><td style="text-align: center; width: 50%;">
<p style="font-weight: bold; text-align: right;"><?php echo translate('View schedule')?></p>
</td>
<td align="left">
<select name="choose_schedule" class="textbox" onchange="javascript: changeSchedule(this);">
<?php
for ($i = 0; $i < count($links); $i++)
    echo '<option value="' . $links[$i]['scheduleid'] . '"' . ($links[$i]['scheduleid'] == $currentid ? ' selected="selected"' : '') . '>' . $links[$i]['scheduletitle'] . "</option>\n";
?>
</select>
</td></tr>
</table>
<?php
}

/**
* Print out a key to identify what the colors mean
* @param none
*/
function print_color_key() {
    global $conf;
?>
<table align="center" cellpadding="5" cellspacing="10">
  <tr style="font-size: 10px; font-weight: bold; text-align: center; vertical-align: center;">
    <td style="width: 75px; height: 38px; background-color:#<?php echo $conf['ui']['my_res'][0]['color']?>; border: 2px #000000 solid;"><?php echo translate('My Reservations')?></td>
  </tr>
  <tr style="font-size: 10px; font-weight: bold; text-align: center; vertical-align: center;">
    <td style="width: 75px; height: 38px; background-color:#<?php echo $conf['ui']['my_past_res'][0]['color']?>; border: 2px #000000 solid;"><?php echo translate('My Past Reservations')?></td>
  </tr> 
 <!-- <tr style="font-size: 10px; font-weight: bold; text-align: center; vertical-align: center;">
    <td style="width: 75px; height: 38px; background-color:#<?php echo $conf['ui']['participant_res'][0]['color']?>; border: 2px #000000 solid;"><?php echo translate('My Participation')?></td>
  </tr> -->
  <!-- <tr style="font-size: 10px; font-weight: bold; text-align: center; vertical-align: center;">
    <td style="width: 75px; height: 38px; background-color:#<?php echo $conf['ui']['participant_past_res'][0]['color']?>; border: 2px #000000 solid; color: #CCCCCC;"><?php echo translate('My Past Participation')?></td>
  </tr> -->
  <tr style="font-size: 10px; font-weight: bold; text-align: center; vertical-align: center;">
	<td style="width: 75px; height: 38px; background-color:#<?php echo $conf['ui']['other_res'][0]['color']?>; border: 2px #000000 solid;"><?php echo translate('Other Reservations')?></td>
  </tr>
  <tr style="font-size: 10px; font-weight: bold; text-align: center; vertical-align: center;">
    <td style="width: 75px; height: 38px; background-color:#<?php echo $conf['ui']['other_past_res'][0]['color']?>; border: 2px #000000 solid;"><?php echo translate('Other Past Reservations')?></td>
  </tr>
  <!-- <tr style="font-size: 10px; font-weight: bold; text-align: center; vertical-align: center;">
	<td style="width: 75px; height: 38px; background-color:#<?php echo $conf['ui']['pending'][0]['color']?>; border: 2px #000000 solid;"><?php echo translate('Pending Approval')?></td>
  </tr> -->
  <tr style="font-size: 10px; font-weight: bold; text-align: center; vertical-align: center;">
	<td style="width: 75px; height: 38px; background-color:#<?php echo $conf['ui']['blackout'][0]['color']?>; border: 2px #000000 solid; color: #CCCCCC;"><?php echo translate('Blacked Out Time')?></td>
  </tr>
</table>
<?php
}

/**
* Start table for one day on schedule
* This function starts the table for each day
* on the schedule, printing out it's date
* and the time value cells
* @param string $displayDate date string to print
*/
function start_day_table($displayDate, $hour_header, $isCurrentDate) {
?>
    <table width="100%" border="0" cellspacing="0" cellpadding="1">
     <tr class="tableBorder">
      <td>
       <table width="100%" border="0" cellspacing="1" cellpadding="0">
        <tr class="scheduleTimes">
         <td rowspan="2" width="15%" class="<?php echo $isCurrentDate ? 'scheduleDateCurrent' : 'scheduleDate' ?>"><?php echo $displayDate ?></td>
<?php
    echo $hour_header ."</tr>\n";
}

/**
* Prints out the navigational calendars
* @param Calendar $prev previous month calendar
* @param Calendar $curr current month calendar
* @param Calendar $next next month calendar
*/
function print_calendars(&$prev, &$curr, &$next, $current_date) {
?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
   <!-- <td align="center" valign="top"><?php $prev->printCalendar($current_date)?></td> -->
    <td align="center" valign="top"><?php $curr->printCalendar($current_date)?></td>
   <!-- <td align="center" valign="top"><?php $next->printCalendar($current_date)?></td> -->
  </tr>
</table>
<?php
}

/**
* Formats and returns the time header of the table (it is the same for every one)
* @param array $th array of time values and their rowspans
* @param int $startDay starting time of day
* @param int $endDay ending time of day
* @param int $timespan time intervals
* @global $conf
*/
function get_hour_header($th, $startDay, $endDay, $timespan, $current_date) {
    global $conf;
    $header = '';

    // Compute total # of cols
    $totCol = intval(($endDay - $startDay) / $timespan);
    $width = (100/$totCol);
	
    // Write out the available times
    $i=0;
	foreach ($th as $time => $cols) {

		if(($current_date + $startDay + ($i*$timespan*60)) > time() + 2*60*60/* - (60*60)*/)
		{
        	$header .= "<td  width=\"$width%\" colspan=\"$cols\">$time</td>";
		}else
		{
			$header .= "<td  width=\"$width%\" colspan=\"$cols\" class=\"scheduleTimePast\">$time</td>";
		}
		$i++;
    }

    // Close row, start next
    $header .= "</tr>\n<tr class=\"scheduleTimes\">\n";


    // Create the fraction hour minute marks
    for ($x = 0; $x < $totCol; $x++)
    {
        $header .= "<td width=\"$width%\">&nbsp;</td>";
    }

    return $header;
}


/**
* Close off table for each day
* This function simply prints out the HTML to close off
* the rows and tables for each day
* @param none
*/
function end_day_table() {
?>
    </table>
   </td>
  </tr>
</table>
<p>&nbsp;</p>
<?php
}


/**
* Prints out the cell containing all the resource information
* @param int $ts timestamp for the current day
* @param string $id id of this resource
* @param string $name name of this resource
* @param boolean $shown whether this resource can be reserved
* @param boolean $is_blackout whether this is a blackout schedule or not
* @param string $scheduleid id of the current schedule
* @param boolean $pending is reservation pending approval
* @param string $color background color of row
*/
function print_name_cell($ts, $id, $name, $shown, $is_blackout, $scheduleid, $pending = false, $color = '', $floor_plan = NULL) {
    global $link;
	global $conf;

    $color = (empty($color)) ? 'cellColor': $color;

    // Start a new row and print out resource name
    echo "<tr class=\"$color\">\n"
           . '<td class="resourceName">';

		if($shown)
		{
			if($floor_plan != NULL && $floor_plan != '')
			{
				
				echo ("<a href=\"javascript:floorPic('" ."img/" .  $floor_plan . "');\">" . $name . "</a>");
				//echo ("<a href=\"javascript:floorPic('" . $conf['app']['floor_plans_dir'] . "/" .  $floor_plan . "');\">" . $name . "</a>");
			}
			else
			{
				echo '<span>' . $name . '</span>';
			}
		}
		else
		{
			echo '<span class="inact">' . $name . '</span>';
		}	
		

/*
    if ($is_blackout) {
    }
    else {
        // If the user is allowed to make reservations on this resource
        // then provide a link
        // Else do not
        if ($shown)
            $link->doLink("javascript: reserve('r','$id','$ts','', '$scheduleid', '0', '$pending');", $name);
        else
            
    }*/
    // Close cell
    echo "</td>";
}

/**
* Prints out blank columns
* @param int $cols number of columns to print out
* @param int $start starting time of the first column printed out
* @param int $span time span of the schedule
* @param int $ts timestamp for the reservation start date
* @param string $machid id of the resource on this table row
* @param string $scheduleid id of the current schedule
* @param int $scheduleType type of the current schedule
* @param bool $clickable if this row can be clicked
* @param string $color class of column background
*/
function print_blank_cols($cols, $start, $span, $ts, $machid, $scheduleid, $scheduleType, $clickable, $class = '') {
    $is_blackout = intval($scheduleType == BLACKOUT_ONLY);
	

    for ($i = 0; $i <= $cols; $i++) {
	    $js = '';
		$class = '';
        if ($scheduleType != READ_ONLY && $clickable/*&& ($clickable || $is_blackout)*/) {
            $tstart = $start + ($i * $span);
            $tend = $tstart + $span;
			
			//checking if cell is for the past time. it should not be clickable
			if (($ts + (($tstart+$span)*60)) > time() + 3*60*60/*Time::getAdjustedTime(mktime())*/)
			{
            	$js = "onmouseover=\"blankOver(this);\" onmouseout=\"blankOut(this, '$class');\" onclick=\"reserve('r','$machid','$ts','','$scheduleid',$is_blackout,'','',$tstart,$tend);\"";
			}
		 	else
			{
				$class = "class = \"inactiveCell\"";
				$js = "onmouseover=\"showDescription('timeslotinfo','time_past');\" onmouseout=\"hideDescription('timeslotinfo');\"";
			}
        }
		else
		{
			$class = "class = \"inactiveCell\"";
			$js = "onmouseover=\"showDescription('timeslotinfo','time_future');\" onmouseout=\"hideDescription('timeslotinfo');\"";
		}
        echo "<td $class $js>&nbsp;</td>";
    }
}

/**
* Prints the closing tr tag
* @param none
*/
function print_closing_tr() {
    echo "</tr>\n";
}

/**
* Writes out the reservation cell
* @param int $colspan column span of this reservation
* @param string $color_select array identifier for which color to use
* @param string $mod_view indentifying character for javascript reserve function to mod or view reservation
* @param string $resid id of this reservation
* @param Summary $summary summary for this reservation
* @param string $viewable whether the user can click on this reservation and bring up a details box
* @param int $read_only whether this is a read only schedule
* @param boolean $pending is this reservation pending approval
*/
function write_reservation($colspan, $color_select, $mod_view, $resid, $summary = '', $viewable = false, $read_only = false, $pending = 0) 
{
    global $conf;

    $js = '';
    $color = '#' . $conf['ui'][$color_select][0]['color'];
    $hover = '#' . $conf['ui'][$color_select][0]['hover'];
    $text  = '#' . $conf['ui'][$color_select][0]['text'];
	$image = $conf['ui'][$color_select][0]['image'];
    $chars = ($colspan > 1) ? 4 * $colspan : 0;

    $read_only = intval($read_only);

 	/*AK: $mod_view work around. This is required to make reservations of other users not clickable*/
	$mod_view_wa = false;
	if ($mod_view == 'm'){
		$mod_view_wa = true;
	}
	/*--------------------------------------------------------------------------------------------*/

    if ($viewable && $mod_view_wa) {
        $js = "onclick=\"reserve('$mod_view','','','$resid','','0','$read_only','$pending');\" ";
        if ($summary->isVisible()) {
            $js .= "onmouseover=\"showDescription('timeslotinfo', '$color_select'); resOver(this, '$hover'); showsummary('summary', event, '" . preg_replace("/[\n\r]+/", '<br/>', addslashes($summary->toScheduleHover())) . "');\" onmouseout=\"hideDescription('timeslotinfo'); resOut(this, '$color', '$image'); hideSummary('summary');\" onmousemove=\"moveSummary('summary', event);\"";
		}
        else {
            $js .="onmouseover=\"showDescription('timeslotinfo', '$color_select'); resOver(this, '$hover');\" onmouseout=\"hideDescription('timeslotinfo'); resOut(this, '$color', '$image');\"";
		}
    }
    else {
        if ($summary->isVisible()) {
            $js = "onmouseover=\"showsummary('summary', event, '" . preg_replace("/[\n\r]+/", '<br/>', addslashes($summary->toScheduleHover())) . "');\" onmouseout=\"hideSummary('summary');\" onmousemove=\"moveSummary('summary', event);\"";
		}
		else{
			$js .="onmouseover=\"showDescription('timeslotinfo', '$color_select'); resOver(this, '$hover');\" onmouseout=\"hideDescription('timeslotinfo'); resOut(this, '$color', '$image');\"";
		}
    }

    $summary_text = $summary->toScheduleCell();

	switch ($color_select)
	{
		case "my_res":
			$boxed_summary_text = "Your current reservation.";
			break;
		case "my_past_res":
			$boxed_summary_text = "Your past reservation.";
			break;
		case "other_past_res":
			$boxed_summary_text = "Past reservation of another person.";
		 	break;
		case "other_res":
			$boxed_summary_text = "Reservation of another person.";
	}

    echo "<td colspan=\"$colspan\" style=\"color: $text; background-color: $color; background-image: 
	url($image); background-repeat: repeat\" $js><div class=\"boxedSummary\"><div class=\"inlineSummary\">$summary_text</div></div></td>";
}

/**
* Writes out the blackout cell
* @param int $colspan column span of the blackout
* @param bool $edit if the user can edit it
* @param string $blackoutid id of this blackout
* @param string $summary blackout summary text
* @param int $showsummary whether to show the summary or not
*/
function write_blackout($colspan, $viewable, $blackoutid, $summary = '', $showsummary = 0) {
    global $conf;
    $color = '#' . $conf['ui']['blackout'][0]['color'];
    $hover = '#' . $conf['ui']['blackout'][0]['hover'];
    $text  = '#' . $conf['ui']['blackout'][0]['text'];
    $chars = 4 * $colspan;
    $js = '';

    if ($viewable) {
        $js = "onclick=\"reserve('m','','','$blackoutid','','1');\" ";
        if ($showsummary && $summary->isVisible())
            $js .= "onmouseover=\"resOver(this, '$hover'); showsummary('summary', event, '" . preg_replace("/[\n\r]+/", '<br/>', addslashes($summary->toScheduleHover())) . "');\" onmouseout=\"resOut(this, '$color'); hideSummary('summary');\" onmousemove=\"moveSummary('summary', event);\"";
        else
            $js .="onmouseover=\"resOver(this, '$hover');\" onmouseout=\"resOut(this, '$color');\"";
    }
    else {
        if ($showsummary != 0 && $summary->isVisible())
            $js = "onmouseover=\"showsummary('summary', event, '" . preg_replace("/[\n\r]+/", '<br/>', addslashes($summary->toScheduleHover())) . "');\" onmouseout=\"hideSummary('summary');\" onmousemove=\"moveSummary('summary', event);\"";
    }

    $summary_text = $summary->toScheduleCell();

    echo "<td colspan=\"$colspan\" style=\"color: $text; background-color: $color;\" $js ><div class=\"inlineSummary\">$summary_text</div></td>";
}

/**
* Writes out a div to be used for reservation summary mouseovers
* @param none
*/
function print_summary_div() {
?>
<div id="summary" class="summary_div" style="width: 150px;"></div>
<?php
}

/**
* Writes out a div to be used for time slots mouseovers
* @param none
*/
function print_timeslotinfo()
{
?>
	<div id="timeslotinfo"> Select a time-slot to make a reservation.</div>
<?php
}

function startNavCalTable() {
?>
	<table id="navcaltable" width="100%" border="0" cellpadding="0" cellspacing="0" style= "padding-top:5px;">
	<tr>
	<!--<td style="vertical-align:top; width:16%; border:solid 1px #36648B; background-color:#FFFFFF;">-->
	    <td style="vertical-align:top; width:16%; border:solid 1px #8799A9; background-color:#FFFFFF;">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
		  <tr>
		    <td>
		      <table width="100%" border="0" cellspacing="0" cellpadding="0">
		        <tr>
		          <td class="tableTitle" style="background-color:#A2B5CD; padding-left: 8px;">
				   <?php echo translate('Calendar')?>
				  </td>
		        </tr>
		      </table>
<?php
}

function endNavCalTable() {
	?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
<?php
}


/**
* Print links to jump to new dates
* This function prints out the HTML links to allow
*  users to navigate back/forward one week.
* It also prints the form for users to jump to
*  any given week.
* @param int $_date timestamp of first day of week on schedule
* @param bool $printAllCols whether or not to print the 5 column jump
*/
function print_jump_links($_date, $viewdays, $printAllCols) {
    global $link;
    global $dates;

    if (isset($_GET['scheduleid']))
        $scheduleid = $_GET['scheduleid'];
    else
        $scheduleid = '';

    $scheduleid = 'scheduleid=' . $scheduleid;        // Make querystring part

    $date = getdate($_date);
    $m = $date['mon'];
    $d = $date['mday'];
    $y = $date['year'];
    $boxes = $dates['jumpbox'];

    // Write out the previous, today and next links and the form to jump to a date
?>

    <table width="100%" border="0" cellspacing="0" cellpadding="5" align="center">
     <tr>
      <td align="center"><h5><?php $link->doLink($_SERVER['PHP_SELF'] . '?date=' . date('m-d-Y',mktime(0,0,0,$m, $d - 7, $y)) . "&amp;$scheduleid", translate('Prev Week'), '', '', translate('Jump 1 week back')) ?></h5></td>

      <?php if ($printAllCols) { ?>
      <td align="center"><h5><?php $link->doLink($_SERVER['PHP_SELF'] . '?date=' . date('m-d-Y',mktime(0,0,0,$m, $d - $viewdays, $y)) . "&amp;$scheduleid", translate('Prev days', array($viewdays)), '', '', translate('Previous days', array($viewdays))) ?></h5></td>
      <?php } ?>
      <?php if ($printAllCols) { ?>
	<td align="center"><h5><?php $link->doLink($_SERVER['PHP_SELF'] . '?date=' . date('m-d-Y') . "&amp;$scheduleid", translate('Today'), '', '', translate('Jump to today')) ?></h5></td>
	  <?php } else {?>	 
	<td align="center"><h5><?php $link->doLink($_SERVER['PHP_SELF'] . "?$scheduleid", translate('This Week'), '', '', translate('Jump to this week')) ?></h5></td> <?php } ?>
	  	
      <?php if ($printAllCols) { ?>
      <td align="center"><h5><?php $link->doLink($_SERVER['PHP_SELF'] . '?date=' . date('m-d-Y',mktime(0,0,0,$m, $d + $viewdays, $y)) . "&amp;$scheduleid", translate('Next days', array($viewdays))) ?></h5></td>
      <?php } ?>
      <td align="center"><h5><?php $link->doLink($_SERVER['PHP_SELF'] . '?date=' . date('m-d-Y',mktime(0,0,0,$m, $d + 7, $y)) . "&amp;$scheduleid", translate('Next Week'), '', '', 'Jump 1 week ahead') ?></h5></td>
     </tr>
     <tr>
<!--      <td align="center" colspan="<?php echo ($printAllCols) ? '5' : '3';?>">
      <div name="jumpWeek" id="jumpWeek">
         <?php
         $boxes = str_replace('%m', '<input type="text" name="jumpMonth" id="jumpMonth" value="' . translate('mm') . '" class="textbox" size="3" maxlength="2" onclick="this.value = \'\';" />', $boxes);
         $boxes = str_replace('%d', '<input type="text" name="jumpDay" id="jumpDay" value="' . translate('dd') . '" class="textbox" size="3" maxlength="2" onclick="this.value = \'\';" />', $boxes);
         $boxes = str_replace('%Y', '<input type="text" name="jumpYear" id="jumpYear" value="' . translate('yyyy') . '" class="textbox" size="5" maxlength="4" onclick="this.value = \'\';" />', $boxes);
         echo $boxes;
         ?>
         <input name="jumpForm" type="button" value="<?php echo translate('Jump To Date')?>" class="button" onclick="checkDate();"/>
       </div>
      </td>
     </tr>
    </table>
    <h5 align="center"><?php $link->doLink("javascript: window.open('popCalendar.php?$scheduleid','calendar','width=260,height=250,scrollbars=no,location=no,menubar=no,toolbar=no,resizable=yes'); void(0);", translate('View Monthly Calendar'), '', '', translate('Open up a navigational calendar'))?></h5> -->
<?php
}

/**
* Print links to jump to new dates in calendar view navigation
* This function prints out the HTML links to allow
*  users to navigate back/forward one month.
* @param int $_date timestamp of first day of week on schedule
* @param bool $printAllCols whether or not to print the 5 column jump
*/
function print_calendar_jump_links($_date) {
	global $link;
	global $months_full;
	
	if (isset($_GET['scheduleid']))
        $scheduleid = $_GET['scheduleid'];
    else
        $scheduleid = '';

    $scheduleid = 'scheduleid=' . $scheduleid;        // Make querystring part
	
	$date = getdate($_date);
    $m = $date['mon'];
    $d = $date['mday'];
    $y = $date['year'];
	$date_string = $months_full[$m-1] . ' ' . $y

?>
	<br/><h4 align="center">	
	<?php $link->doLink($_SERVER['PHP_SELF'] . '?date=' . date('m-d-Y', mktime(0,0,0, $m - 1, $d, $y)) . "&amp;$scheduleid", '&lt;');
	
	echo "&nbsp;&nbsp;&nbsp;$date_string&nbsp;&nbsp;&nbsp;";
	
	$link->doLink($_SERVER['PHP_SELF'] . '?date=' . date('m-d-Y', mktime(0,0,0, $m + 1, $d, $y)) . "&amp;$scheduleid", '&gt;'); ?>
	</h4>
<?php 	
}
?>
