<?
/*
+----------------+--------------+------+-----+---------+-------+
| Field          | Type         | Null | Key | Default | Extra |
+----------------+--------------+------+-----+---------+-------+
| AddressID      | int(11)      | YES  |     | NULL    |       |
| RegionCode     | varchar(10)  | YES  |     | NULL    |       |
| CompanyName    | varchar(100) | YES  |     | NULL    |       |
| URL            | varchar(255) | YES  |     | NULL    |       |
| EMail          | varchar(100) | YES  |     | NULL    |       |
| Address1       | varchar(100) | YES  |     | NULL    |       |
| Address2       | varchar(100) | YES  |     | NULL    |       |
| Zip            | varchar(20)  | YES  |     | NULL    |       |
| City           | varchar(50)  | YES  |     | NULL    |       |
| CountryID      | int(11)      | YES  |     | NULL    |       |
| Tel            | varchar(50)  | YES  |     | NULL    |       |
| Fax            | varchar(50)  | YES  |     | NULL    |       |
| Contact        | varchar(50)  | YES  |     | NULL    |       |
| ExternalID     | varchar(50)  | YES  |     | NULL    |       |
| AdditionalInfo | text         | YES  |     | NULL    |       |
| Flag           | int(11)      | YES  |     | NULL    |       |
+----------------+--------------+------+-----+---------+-------+
could this be the thing
*/

class Address {

	var $addressid = 0;
	var $regioncode = "";
	var $companyname = "";
	var $url = "";
	var $email = "";
	var $address1 = "";
	var $address2 = "";
	var $zip = "";
	var	$city = "";
	var $countryid = 0;
	var $tel = "";
	var $fax = "";
	var $contact = "";
	var $externalid = "";
	var $additionalinfo = "";
	var $flag = 0;
	
	var $dbrows;

	function getID(){return $this->addressid;}
	function setID($value){$this->addressid = $value;}

	function getRegionCode(){return $this->regioncode;}
	function setRegionCode($value){$this->regioncode = $value;}

	function getCompanyName(){return $this->companyname;}
	function setCompanyName($value){$this->companyname = $value;}

	function getUrl(){return $this->url;}
	function setUrl($value){$this->url = $value;}

	function getEMail(){return $this->email;}
	function setEMail($value){$this->email = $value;}
	
	function getAddress1(){return $this->address1;}
	function setAddress1($value){$this->address1 = $value;}

	function getAddress2(){return $this->address2;}
	function setAddress2($value){$this->address2 = $value;}

	function getZip(){return $this->zip;}
	function setZip($value){$this->zip = $value;}

	function getCity(){return $this->city;}
	function setCity($value){$this->city = $value;}

	function getCountryID(){return $this->countryid;}
	function setCountryID($value){$this->countryid = $value;}

	function getTel(){return $this->tel;}
	function setTel($value){$this->tel = $value;}

	function getFax(){return $this->fax;}
	function setFax($value){$this->fax = $value;}

	function getContact(){return $this->contact;}
	function setContact($value){$this->contact = $value;}

	function getExternalID(){return $this->externalid;}
	function setExternalID($value){$this->externalid = $value;}

	function getAdditionalInfo(){return $this->additionalinfo;}
	function setAdditionalInfo($value){$this->additionalinfo = $value;}

	function getFlag(){return $this->flag;}
	function setFlag($value){$this->flag = $value;}

	function getDBrows(){return $this->dbrows;}
	function setDBrows($value){$this->dbrows = $value;}

}

class AddressAttribute {
	
	var $attributeid = 0;
	var $attributehandle = "";
	var $attributenametextid = "";
	var $attributeposition = 0;

	var $dbrows;

	function getID(){return $this->attributeid;}
	function setID($value){$this->attributeid = $value;}

	function getAttributeHandle(){return $this->attributehandle;}
	function setAttributeHandle($value){$this->attributehandle = $value;}

	function getAttributeNameTextID(){return $this->attributenametextid;}
	function setAttributeNameTextID($value){$this->attributenametextid = $value;}

	function getAttributePosition(){return $this->attributeposition;}
	function setAttributePosition($value){$this->attributeposition = $value;}

	function getDBrows(){return $this->dbrows;}
	function setDBrows($value){$this->dbrows = $value;}

}

?>






