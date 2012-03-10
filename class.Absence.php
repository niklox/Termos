<?
/*
mysql> desc AbsenceReport;                                                                                    
+------------------+----------+------+-----+---------+-------+
| Field            | Type     | Null | Key | Default | Extra |
+------------------+----------+------+-----+---------+-------+
| AbsenceReportID  | int(11)  | YES  |     | NULL    |       |
| AbsenceID        | int(11)  | YES  |     | NULL    |       |
| UserID           | int(11)  | YES  |     | NULL    |       |
| AddressID        | int(11)  | YES  |     | NULL    |       |
| AbsenceDate      | date     | YES  |     | NULL    |       |
| RegistrationDate | datetime | YES  |     | NULL    |       |
| AbsenceCause     | tinytext | YES  |     | NULL    |       |
| AbsenceStatus    | int(11)  | YES  |     | NULL    |       |
+------------------+----------+------+-----+---------+-------+
8 rows in set (0.00 sec)
*/

class Absence {

	var $absencereportid = 0;
	var $absenceid = 0;
	var $userid = 0;
	var $addressid = 0;
	var $absencedate = "";
	var $registrationdate = "";
	var $absencecause = "";
	var $absencestatus = 0;

	var $dbrows;
	

	public function getAbsenceReportID(){return $this->absencereportid;}
	public function setAbsenceReportID($value){$this->absencereportid = $value;}

	public function getAbsenceID(){return $this->absenceid;}
	public function setAbsenceID($value){$this->absenceid = $value;}

	public function getUserID(){return $this->userid;}
	public function setUserID($value){$this->userid = $value;}

	public function getAddressID(){return $this->addressid;}
	public function setAddressID($value){$this->addressid = $value;}

	public function getAbsenceDate(){return $this->absencedate;}
	public function setAbsenceDate($value){$this->absencedate = $value;}

	public function getRegistrationDate(){return $this->registrationdate;}
	public function setRegistrationDate($value){$this->registrationdate = $value;}

	public function getCause(){return $this->absencecause;}
	public function setCause($value){$this->absencecause = $value;}

	public function getStatus(){return $this->absencestatus;}
	public function setStatus($value){$this->absencestatus = $value;}

	public function getDBrows(){return $this->dbrows;}
	public function setDBrows($value){$this->dbrows = $value;}


};


?>

