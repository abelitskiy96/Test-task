<?php
	//$currentdt = date("d.m.Y", strtotime($_POST['dt'])); //$_POST['dt'];
	$initdt = new DateTime($_POST['dt']);
	$currentdt = $initdt;
	$summn = $_POST['summn'];
	$term = $_POST['term'];
	$isadd = $_POST['isadd'];
	$summadd = $_POST['summadd'];
	$endt = $currentdt;
	$percent = 0.1;
	date_add($endt, date_interval_create_from_date_string($term.' years'));
	for ($i = 0; $i < $term * 12; $i++) {
		$daysn = 0;
		if ($currentdt == $initdt) {
			$daysn = cal_days_in_month(CAL_GREGORIAN, date_format($currentdt, 'm'), date_format($currentdt, 'Y')) - date_format($currentdt, 'd');
		} else if ($currentdt == $endt) {
			$daysn = date_format($currentdt, 'd');
		} else {
			$daysn = cal_days_in_month(CAL_GREGORIAN, date_format($currentdt, 'm'), date_format($currentdt, 'Y'));
		}
		$dt1 = new DateTime(date_format($currentdt, 'Y').'-01-01');
		$dt2 = new DateTime((date_format($currentdt, 'Y') + 1).'-01-01');
		$interval = date_diff($dt1, $dt2);
		$daysy = $interval->format('%a');
		$add = 0;
		if ($isadd == 'true') {
			$add = ($summn + $summadd) * $daysn * ($percent / $daysy);
		} else {
			$add = $summn * $daysn * ($percent / $daysy);
		}
		$summn += $add;
	}
	$result = array ('sum' => round($summn, 2));
	echo json_encode($result);
?>