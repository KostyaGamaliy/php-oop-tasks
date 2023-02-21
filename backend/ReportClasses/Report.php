<?php

namespace ReportClasses;

abstract class Report
{
	protected $report_number;
	protected $title;
	protected $text;
	protected $author_name;
	protected $date_generated;
	protected $revision_number;
	protected $date_last_revision;
	protected Organization $organization ;

	public function __construct(Organization $organization, int $report_number, string $title, $text = '', $author_name = '') {
		$this->report_number = $report_number;
		$this->title = $title;
		$this->text = trim($text); // Remove spaces at beginning and end
		$this->author_name = $author_name;
		$this->date_generated = date("Y-m-d");
		$this->revision_number = 1;
		$this->date_last_revision = date("Y-m-d");
		$this->organization = $organization;
	}

	public function getAuthorFullName() {
		$names = explode(' ', $this->author_name);
		return $names[0] . " " . substr($names[1],0,1) . ". " . substr($names[2],0,1) . ".";
	}

	// Get report header in upper case
	public function getHeaderUpperCase() {
		return strtoupper($this->title);
	}

	// Save report and update revision and date
	public function save() {
		$this->revision_number++;
		$this->date_last_revision = date("Y-m-d");
	}

	// Render method to replace anchors with passed values
	public function render($values) {
		foreach ($values as $key => $value) {
			$this->text = str_replace('{'.$key.'}', $value, $this->text);
		}
	}

	public function getInfo() {
		return $this->organization->getNamedOfOrganization();
	}
}