<?php

namespace ReportClasses;

class ReportMonth extends Report
{
	private $year;
	private $month;

	public function __construct($report_number, $title, $year, $month, $text = '', $author_name = '')
	{
		parent::__construct($report_number, $title, $text, $author_name);
		$this->month = $month;
		$this->year = $year;
	}

	public function getMonth() {
		return $this->month;
	}
}