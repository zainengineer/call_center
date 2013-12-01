<?php
$zSERVERNAME = $_SERVER["SERVER_NAME"];
if($zSERVERNAME =='localhost')
$localrunning=true;
else
$localrunning=false;
//$localrunning=true;
$special_returnvalues="";
global $special_returnvalues;
global $HandleErrors;
if((isset($HandleErrors)) && (!$HandleErrors))
{
}
else
{
$IgnoreErrorHanadler=IgnoreErrorHandler();
}
function GetInsertQueryWithEscape($Table, $array, $ReplaceNow = true, $EscapeString = true)
{
$comma = "";
$fields = "";
	$values = "";
foreach($array as $field=>$value)
{
if($EscapeString)
{
$value = mysql_escape_string($value);
}		
$fields .= $comma ." $field";
$values .= $comma . "'$value'";
$comma = " , ";
}
$sql  = "INSERT INTO $Table ($fields) VALUES ($values) ";
if($ReplaceNow)
{
$sql = str_replace("'now()'", "now()", $sql);
}
return $sql;
}
function GetInsertQuery($Table, $array, $ReplaceNow = true)
{
$sql  = "INSERT INTO $Table";
// implode keys of $array...
 $sql .= " (`".implode("`, `", array_keys($array))."`)";
// implode values of $array...
$sql .= " VALUES('".implode("', '", $array)."') ";
if($ReplaceNow)
{
$sql = str_replace("'now()'","now()", $sql);
}
return $sql;
}
function GetUpdateQuery($Table, $array, $where, $ReplaceNow = true, $EscapeString = false)
{
$sql  = "UPDATE $Table SET ";
$comma = "";
foreach($array as $field => $value)
{
if($EscapeString)
{
$value = mysql_escape_string($value);
}
$sql .= $comma . " $field = '$value'";
$comma = ",";
}
if($where)
{
$where = " WHERE " . $where;
}	 
if($ReplaceNow)
{
$sql = str_replace("'now()'","now()", $sql);
}
$sql .= $where;
return $sql;
}
function GetUSStatesArray($AddSelect = true)
{
if($AddSelect) $arrstate[""] = "Select your state";
    $arrstate["AL"] ="Alabama";
    $arrstate["AK"] = "Alaska";
    $arrstate["AS"] = "American Samoa";
    $arrstate["AZ"] = "Arrizona";
    $arrstate["AR"] = "Arkansas";
    $arrstate["CA"] = "California";
    $arrstate["CO"] = "Colorado";
    $arrstate["CT"] = "Connecticut";
    $arrstate["DE"] = "Delaware";
    $arrstate["DC"] = "Washington DC";
    $arrstate["FM"] = "Fsm";
    $arrstate["FL"] = "Florida";
    $arrstate["GA"] = "Georgia";
    $arrstate["GU"] = "Guam";
    $arrstate["HI"] = "Hawaii";
    $arrstate["ID"] = "Idaho";
    $arrstate["IL"] = "Illinois";
    $arrstate["IN"] = "Indiana";
    $arrstate["IA"] = "Iowa";
    $arrstate["KS"] = "Kansas";
    $arrstate["KY"] = "Kentucky";
    $arrstate["LA"] = "Louisiana";
    $arrstate["ME"] = "Maine";
    $arrstate["MH"] = "Marshall Islands";
    $arrstate["MD"] = "Maryland";
    $arrstate["MA"] = "Massachusetts";
    $arrstate["MI"] = "Michigan";
    $arrstate["MN"] = "Minnesota";
    $arrstate["MS"] = "Mississippi";
    $arrstate["MO"] = "Missouri";
    $arrstate["MT"] = "Montanna";
    $arrstate["NE"] = "Nebraska";
    $arrstate["NV"] = "Nevada";
    $arrstate["NH"] = "New Hampshire";
    $arrstate["NJ"] = "New Jersey";
    $arrstate["NM"] = "New Mexico";
    $arrstate["NY"] = "New York";
    $arrstate["NC"] = "North Carolina";
    $arrstate["ND"] = "North Dakota";
    $arrstate["MP"] = "Nmi";
    $arrstate["OH"] = "Ohio";
    $arrstate["OK"] = "Oklahoma";
    $arrstate["OR"] = "Oregon";
    $arrstate["PW"] = "Palau";
    $arrstate["PA"] = "Penssylvania";
    $arrstate["PR"] = "Puerto Rico";
    $arrstate["RI"] = "Rhode Island";
    $arrstate["SC"] = "South Carolina";
    $arrstate["SD"] = "South Dakota";
    $arrstate["TN"] = "Tennessee";
    $arrstate["TX"] = "Texas";
    $arrstate["UT"] = "Utah";
    $arrstate["VT"] = "Vermont";
    $arrstate["VI"] = "Virgin Islands";
    $arrstate["VA"] = "Virginia";
    $arrstate["WA"] = "Washington";
    $arrstate["WV"] = "West Virginia";
    $arrstate["WI"] = "Wisconsin";
    $arrstate["WY"] = "Wyoming";
return $arrstate;
}
function ShowSelect($selectname,$arrOptions, $selected, $id = "!UseSameAsName", $UseKeysForBoth = false, $UseValuesForBoth = false)
{
if($id=="!UseSameAsName")
{
$id = $selectname;
}
?>
<select id = "<?=$id?>" name="<?=$selectname ?> ">
<?php
foreach($arrOptions as $selectkey => $selectvalue)
{		
if($selected==$selectkey) $selectshow = " selected "; else $selectshow="";
$optionkey = $selectkey;
$optionvalue = $selectvalue;
if($UseKeysForBoth)
{
$optionvalue = $selectkey;
}
if($UseValuesForBoth)
{
$optionkey = $optionvalue;
}
?>
<option value = "<?= $optionkey ?> " <?= $selectshow ?>> <?= $optionvalue ?>
</option>
<?php
}
?>
</select>
<?php
}
function ShowStateCombo($name, $selectedcode)
{
$states = GetUSStatesArray();
ShowSelect($name, $states, $selectedcode);
}
function printr($object, $name = '')
{
$bt = debug_backtrace();    
$file = $bt[0]['file'];
print '<div style = "background: #FFFBD6">';
$nameLine = '';
    if($name) $nameLine = '<b> <span style="font-size:18px;">' . $name . '</span></b> printr:<br/>';
print '<span style="font-size:12px;">' . $nameLine . ' ' . $file . ' on line ' . $bt[0]['line'] . '</span>';
print '<div style="border:1px solid #000;">';
print ('<pre>');
if(is_array($object))
{
print_r($object);
}
else
{
var_dump($object);
}
print ('</pre>');
echo "</div></div><hr/>";
}
function createRandomPassword()
{
$chars = "abcdefghijkmnopqrstuvwxyz023456789";
srand((double)microtime() *1000000);
$i = 0;
    $pass = '' ;
while($i <= 7)
{
$num = rand() % 33;
$tmp = substr($chars, $num, 1);
$pass = $pass . $tmp;
$i++;
}
return $pass;
}
function ShowMonthSelect($selectname, $selected = "")
{
for($i=1;$i<=12;$i++)
{
$SelectList[$i] = $i;
}
ShowSelect($selectname, $SelectList, $selected);
}
function ShowYearSelect($selectname, $selected = "", $StartYear = 2005, $EndYear = 2012)
{
for($i = $StartYear; $i <= $EndYear; $i++)
{
$SelectList[$i] = $i;
}
ShowSelect($selectname, $SelectList, $selected);
}
function GetQuerySS($url)
{
//Get QueryString Seperator
$result = strpos($url, "?");
if(($result===false) and (!$result))
{
return "?";
}else{
return "&";
}	
}
function ValidEmail($email)
{
// First, we check that there's one @ symbol, and that the lengths are right
if(!ereg("^[^@]{1,64}@[^@]{1,255}$", $email))
{
// Email invalid because wrong number of characters in one section, or wrong number of @ symbols.
return false;
}
// Split it into sections to make life easier
$email_array = explode("@", $email);
$local_array = explode(".", $email_array[0]);
for($i = 0; $i < sizeof( $local_array); $i++)
{
if(!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$", $local_array[$i]))
{
return false;
}
}  
if(!ereg("^\[?[0-9\.]+\]?$", $email_array[1]))
{ // Check if domain is IP. If not, it should be valid domain name
$domain_array = explode(".", $email_array[1]);
if(sizeof($domain_array) < 2)
{
return false; // Not enough parts to domain
}
for($i = 0; $i < sizeof($domain_array); $i++)
{
if(!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|([A-Za-z0-9]+))$", $domain_array[$i]))
{
return false;
}
}
}
return true;
}
function QueryError($sql)
{
global $localrunning;
if($localrunning)
{
$msg = "Error Running Query <br/>'".$sql."'<br/> Error was <br/>" . mysql_error();
}
else
{
$msg = "Error in Query.  Please contact WebMaster.";
}
echo "<br/> $msg <br/>";
}
function GetFormGet($VarName)
{
if(isset($_GET[$VarName]))
{
return $_GET[$VarName];
}
else
{
return false;
}
}
function GetFileFromBuffer($filename)
{
ob_start();
include $filename;
$buffer = ob_get_contents();
ob_clean();
return $buffer;
}
function CreateURLParams($List, $FirstSeperatedChar = "")
{
$return = "";
foreach($List as $key => $value)
{
$encodedkey=urlencode($key);
$encodedvalue = urlencode($value);
$return .= $FirstSeperatedChar . $encodedkey . "=" . $encodedvalue;
$FirstSeperatedChar = "&";
}
return $return;
}
function IgnoreErrorHandler()
{
$dirname = dirname(__FILE__);
$filename = $dirname . '/DetectServer/IgnoreErrorHandler.txt';
if(file_exists($filename))
{
return true;		
}
else
{
return false;
}
}
?>