<?php
/**
 (C) 2014 DJERROUD Halim.

 This file is part of pwit.

 Pwit is free software: you can redistribute it and/or modify
 it under the terms of the GNU General Public License as published by
 the Free Software Foundation, either version 3 of the License, or
 (at your option) any later version.

 Pwit is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 GNU General Public License for more details.

 You should have received a copy of the GNU General Public License
 along with Pwit.  If not, see <http://www.gnu.org/licenses/>.
 */
class PwPDF extends FPDF {
	function Header() {
		// Logo
		// $this->Image('../rsrc/img/logoIland.jpg',10,6,30);
		// Arial bold 15
		// $this->SetFont('Arial','B',15);
		// Move to the right
		// $this->Cell(80);
		// Title
		// $this->Cell(100,10,'iland odo',1,0,'C');
		// Line break
		$this->SetFont ( 'Arial', 'I', 7 );
		$this->Cell ( 80, 6, 'COSEA/SGI', 0, 'C' );
		$this->Cell ( 80, 6, 'PLANTATION', 0, 'C' );
		$this->Cell ( 80, 6, 'PHASE: PLAN EXE', 0, 'R' );
		
		$this->Ln ( 10 );
	}
	function Footer() {
		// Position at 1.5 cm from bottom
		$this->SetY ( - 15 );
		// Arial italic 8
		$this->SetFont ( 'Arial', 'I', 8 );
		// Page number
		$this->Cell ( 0, 10, 'BE: Iland  -  Page ' . $this->PageNo () . '/{nb}', 0, 0, 'C' );
	}
}
