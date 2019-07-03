<?php

function status_car($status)
{
	return $status == 1 ? 'Active' : 'Not Active';
}
function status_tran($status)
{
	switch ($status) {
		case '1':
			return 'Waiting Approval Lead';
			break;
		case '2':
			return 'Admin Process';
			break;
		case '3':
			return 'Reserved';
			break;
		case '4':
			return 'Complete';
			break;
		case '5':
			return 'Canceled';
			break;
		case '6':
			return 'Rejected';
			break;
		default:
			return 'Undefined';
			break;
	}
}