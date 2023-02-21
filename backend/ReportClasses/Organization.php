<?php

	namespace ReportClasses;

	class Organization
	{
		public $named;
		public $inn;
		public $kpp;
		public $place;
		public $FIO;

		public function __construct(string $named, int $inn, int $kpp, string $place, string $FIO)
		{
			$this->named = $named;
			$this->inn = $inn;
			$this->kpp = $kpp;
			$this->place = $place;
			$this->FIO = trim($FIO);
		}

		public function getNamedOfOrganization() {
			$names = explode(' ', $this->FIO);
			return "Найменування організації <br> (ІПН:$this->inn\КПП:$this->kpp). Директор: " . $names[0] . " " . substr($names[1],0,1) . ". " . substr($names[2],0,1) . ". ";
		}
	}