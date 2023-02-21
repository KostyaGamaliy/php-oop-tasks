<?php

namespace ReportClasses;

class ReportYear extends Report
{
	private $year;

	public function __construct($report_number, $title, $year, $text = '', $author_name = '')
	{
		parent::__construct($report_number, $title, $text, $author_name);
		$this->year = $year;
	}

	public function getYear() {
		return $this->year;
	}
}