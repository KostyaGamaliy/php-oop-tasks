<?php

namespace ReportClasses;

class ReportWeek extends Report
{
	private $year;
	private $week;

	public function __construct(Organization $organization, $report_number, $title, $week, $year, $text = '', $author_name = '')
	{
		parent::__construct($organization, $report_number, $title, $text, $author_name);
		$this->week = $week;
		$this->year = $year;
	}

	public function getWeek() {
		return $this->week;
	}
}