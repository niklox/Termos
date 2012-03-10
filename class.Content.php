<?
/*
mysql> desc PageContent;
+-------------------------+-------------+------+-----+---------+-------+
| Field                   | Type        | Null | Key | Default | Extra |	NUI = Not In Use
+-------------------------+-------------+------+-----+---------+-------+
| PageContentID           | int(11)     | YES  |     | NULL    |       |
| PageContentPageID       | int(11)     | YES  |     | NULL    |       |	Node default
| PageContentCreatedDate  | datetime    | YES  |     | NULL    |       |
| PageContentTitleTextID  | varchar(20) | YES  |     | NULL    |       |	Title
| PageContentBodyTextID   | varchar(20) | YES  |     | NULL    |       |	
| PageContentArchiveFlag  | int(11)     | YES  |     | NULL    |       |	NIU
| PageContentAuthorID     | int(11)     | YES  |     | NULL    |       |	
| PageContentArchiveDate  | datetime    | YES  |     | NULL    |       |
| PageContentPosition     | int(11)     | YES  |     | NULL    |       |	! stored in PageContentPages !
| PageContentIntroTextID  | varchar(20) | YES  |     | NULL    |       |	Tags
| PageContentTypeID       | int(11)     | YES  |     | NULL    |       |	TemplateID
| PageContentExtraTextID  | varchar(20) | YES  |     | NULL    |       |	Permalink
| PageContentFlag         | int(11)     | YES  |     | NULL    |       |	flag // Commentable
| PageContentFlagII       | int(11)     | YES  |     | NULL    |       |	Counter
| PageContentExternalID   | varchar(50) | YES  |     | NULL    |       |	NIU
| PageContentValue        | varchar(20) | YES  |     | NULL    |       |	NIU
| PageContentNumericValue | varchar(20) | YES  |     | NULL    |       |	NIU pris
| PageContentStatus       | int(11)     | YES  |     | NULL    |       |	NIU
| PageContentStartDate    | datetime    | YES  |     | NULL    |       |
| PageContentEndDate      | datetime    | YES  |     | NULL    |       |
+-------------------------+-------------+------+-----+---------+-------+
20 rows in set (0.01 sec)

Associera artiklar (subjectclass ?)
Kommentera artiklar (Discussions ?)
Eller nåt liknande
*/

class Content {
	
	var $contentid = 0;
	var $defaultnodeid = 0;
	var $createddate = "";
	var	$titletextid = "";
	var $contenttextid = "";
	var $archiveflag = "";
	var $authorid = 0;
	var $archivedate = "";
	var $position = "";
	var $tagstextid = "";
	var $templateid = 0;
	var $permalinktextid = "";
	var $flag = 0;
	var $counter = "";
	var $externalid = "";
	var $value = "";
	var $numericvalue = "";
	var $status = 0;
	var $startdate = "";
	var $enddate = "";
	
	var $dbrows;

	function getID(){return $this->contentid;}
	function setID($value){$this->contentid = $value;}

	function getDefaultNodeID(){return $this->defaultnodeid;}
	function setDefaultNodeID($value){$this->defaultnodeid = $value;}

	function getCreatedDate(){return $this->createddate;}
	function setCreatedDate($value){$this->createddate = $value;}

	function getTitleTextID(){return $this->titletextid;}
	function setTitleTextID($value){$this->titletextid = $value;}

	function getContentTextID(){return $this->contenttextid;}
	function setContentTextID($value){$this->contenttextid = $value;}

	function getArchiveFlag(){return $this->archiveflag;}
	function setArchiveFlag($value){$this->archiveflag = $value;} 

	function getAuthorID(){return $this->authorid;}
	function setAuthorID($value){$this->authorid = $value;} 

	function getArchiveDate(){return $this->archivedate;}
	function setArchiveDate($value){$this->archivedate = $value;} 

	function getPosition(){return $this->position;}
	function setPosition($value){$this->position = $value;} 

	function getTagsTextID(){return $this->tagstextid;}
	function setTagsTextID($value){$this->tagstextid = $value;} 
	
	function getTemplateID(){return $this->templateid;}
	function setTemplateID($value){$this->templateid = $value;} 

	function getPermalinkTextID(){return $this->permalinktextid;}
	function setPermalinkTextID($value){$this->permalinktextid = $value;} 

	function getFlag(){return $this->flag;}
	function setFlag($value){$this->flag = $value;} 

	function getCounter(){return $this->counter;}
	function setCounter($value){$this->counter = $value;} 

	function getExternalID(){return $this->externalid;}
	function setExternalID($value){$this->externalid = $value;} 

	function getValue(){return $this->value;}
	function setValue($value){$this->value = $value;} 

	function getNumericValue(){return $this->numericvalue;}
	function setNumericValue($value){$this->numericvalue = $value;} 

	function getStatus(){return $this->status;}
	function setStatus($value){$this->status = $value;} 

	function getStartDate(){return $this->startdate;}
	function setStartDate($value){$this->startdate = $value;} 

	function getEndDate(){return $this->enddate;}
	function setEndDate($value){$this->enddate = $value;}

	function getDBrows(){return $this->dbrows;}
	function setDBrows($value){$this->dbrows = $value;}
	
	function getTitle(){
		return MTextGet($this->getTitleTextID());
	}

	function getContentText(){
		return MTextGet($this->getContentTextID());
	}

	function getTags(){
		return MTextGet($this->getTagsTextID());
	}

	function getPermalink(){
		return MTextGet($this->getPermalinkTextID());
	}

	function getText($pos){
		$ctext = ContentTextGet($this->getID(), $pos);
		$textcontent = MTextGet($ctext->getTextID());
		
		if( $textcontent == "hide text" || $textcontent == "<p>hide text</p>" )
			return;
		else
			print $textcontent; 
	}

	function getTextID($pos){
		$ctext = ContentTextGet($this->getID(), $pos);
		print $ctext->getTextID();
	}

	function printText($pos){
		$ctext = ContentTextGet($this->getID(), $pos);
		$textcontent = MTextGet($ctext->getTextID());
		
		if( $textcontent == "hide text" || $textcontent == "<p>hide text</p>" )
			return;
		else
			return $textcontent; 
	}

	function printTextID($pos){
		$ctext = ContentTextGet($this->getID(), $pos);
		return $ctext->getTextID();
	}


}

class ContentText {

	var $contentid = 0;
	var $contenttextid = "";
	var $contenttextposition = "";
	var $dbrows;

	function getContentID(){return $this->contentid;}
	function setContentID($value){$this->contentid = $value;}

	function getTextID(){return $this->contenttextid;}
	function setTextID($value){$this->contenttextid = $value;}

	function getPosition(){return $this->contenttextposition;}
	function setPosition($value){$this->contenttextposition = $value;}

	function getDBrows(){return $this->dbrows;}
	function setDBrows($value){$this->dbrows = $value;}

	function getText(){
		$textcontent = MTextGet($this->getTextID());
		if($textcontent == "hide text" || $textcontent == "<p>hide text</p>")
			return;
		else
			return $textcontent; 
	}

}

/*

mysql> desc PageContentTypes; // Templates
+---------------------------+----------+------+-----+---------+-------+
| Field                     | Type     | Null | Key | Default | Extra |
+---------------------------+----------+------+-----+---------+-------+
| PageContentTypeID         | int(11)  | YES  |     | NULL    |       |
| PageContentTypeNameTextID | char(20) | YES  |     | NULL    |       |
+---------------------------+----------+------+-----+---------+-------+
PageContentTypeDescTextID ca
PageContentTexts	int(11)
PageContentImages
PageContentImageHandle
PageContentStatus
*/

class Template {

	var $templateid = 0;
	var $templatename = "";
	var $templatedescription = "";
	var $texts = 0;
	var $images = 0;
	var $templateimg = "";
	var $templatestatus = 0;

	var $dbrows;

	function getID(){return $this->templateid;}
	function setID($value){$this->templateid = $value;}

	function getNameTextID(){return $this->templatename;}
	function setNameTextID($value){$this->templatename = $value;}

	function getDescriptionTextID(){return $this->templatedescription;}
	function setDescriptionTextID($value){$this->templatedescription = $value;}

	function getTexts(){return $this->texts;}
	function setTexts($value){$this->texts = $value;}

	function getImages(){return $this->images;}
	function setImages($value){$this->images = $value;}

	function getImageHandle(){return $this->templateimg;}
	function setImageHandle($value){$this->templateimg = $value;}
	
	function getStatus(){return $this->templatestatus;}
	function setStatus($value){$this->templatestatus = $value;}

	function getDBrows(){return $this->dbrows;}
	function setDBrows($value){$this->dbrows = $value;}

	function getName(){
		return MTextGet($this->getNameTextID());
	}

	function getDescription(){
		return MTextGet($this->getDescriptionTextID());
	}

}


/*
2 rows in set (0.00 sec)

mysql> desc PageContentImages;
+---------------+----------+------+-----+---------+-------+
| Field         | Type     | Null | Key | Default | Extra |
+---------------+----------+------+-----+---------+-------+
| PageContentID | int(11)  | YES  |     | NULL    |       |
| ImageHandle   | char(20) | YES  |     | NULL    |       |
| Position      | int(11)  | YES  |     | 1       |       |
| Language      | int(11)  | YES  |     | 0       |       |
+---------------+----------+------+-----+---------+-------+
4 rows in set (0.00 sec)

mysql> desc PageContentTexts;
+------------------------------+----------+------+-----+---------+-------+
| Field                        | Type     | Null | Key | Default | Extra |
+------------------------------+----------+------+-----+---------+-------+
| PageContentTextPageContentID | int(11)  | YES  |     | NULL    |       |
| PageContentTextTextID        | char(20) | YES  |     | NULL    |       |
| PageContentTextPosition      | int(11)  | YES  |     | NULL    |       |
+------------------------------+----------+------+-----+---------+-------+

mysql> desc PageContentAttributes;
+--------------------------------+----------+------+-----+---------+-------+
| Field                          | Type     | Null | Key | Default | Extra |
+--------------------------------+----------+------+-----+---------+-------+
| PageContentAttributeID         | int(11)  | YES  |     | NULL    |       |
| PageContentAttributeHandle     | char(20) | YES  |     | NULL    |       |
| PageContentAttributeTextID     | char(20) | YES  |     | NULL    |       |
| PageContentAttributeHiddenFlag | int(11)  | YES  |     | NULL    |       |
| PageContentAttributePosition   | int(11)  | YES  |     | NULL    |       |
+--------------------------------+----------+------+-----+---------+-------+
5 rows in set (0.01 sec)
*/


class Attributes {
	var $attributeid;

}

/*
mysql> desc PageContentImageLink;
+---------------+--------------+------+-----+---------+-------+
| Field         | Type         | Null | Key | Default | Extra |
+---------------+--------------+------+-----+---------+-------+
| PageContentID | int(11)      | YES  |     | NULL    |       |
| ImagePosition | int(11)      | YES  |     | NULL    |       |
| Target        | int(11)      | YES  |     | NULL    |       |
| URL           | varchar(250) | YES  |     | NULL    |       |
| Language      | int(11)      | YES  |     | NULL    |       |
+---------------+--------------+------+-----+---------+-------+
5 rows in set (0.00 sec)
*/

class ContentImageLink {
	var $contentid = 0;
	var $imageposition = 0;
	var $target = 0;
	var $url = "";
	var $title = "";
	var $language = 0;

	var $dbrows;

	function getContentID(){return $this->contentid;}
	function setContentID($value){$this->contentid = $value;}

	function getPosition(){return $this->imageposition;}
	function setPosition($value){$this->imageposition = $value;}

	function getTarget(){return $this->target;}
	function setTarget($value){$this->target = $value;}

	function getURL(){return $this->url;}
	function setURL($value){$this->url = $value;}

	function getTitle(){return $this->title;}
	function setTitle($value){$this->title = $value;}

	function getLanguage(){return $this->language;}
	function setLanguage($value){$this->language = $value;}

	function getDBrows(){return $this->dbrows;}
	function setDBrows($value){$this->dbrows = $value;}
}

/*

Ny PageContentAttribute options 


    *  __FILE__ would give something like: "/home/httpd/html/modules/Your_Account/index.php"
    * dirname(__FILE__) gives "/home/httpd/html/modules/Your_Account"
    * basename(dirname(__FILE__)) gives "Your_Account".

*/
/*



*/
?>