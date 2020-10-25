<?php

$lang = $argv[1];
    // echo "lang: $lang";
    // include "../language/english/main.php";
    if (file_exists('../language/' . $lang . '/main.php')) {
        include '../language/' . $lang . '/main.php';
    } else {
        include '../language/english/main.php';
    }
?>



<!-- START OF TREND MICRO VIRUS INFO FEED -->
<script language="JavaScript">
<!--
// *********************************
// WEBMASTERS: YOU MAY CHANGE THE FOLLOWING VALUES TO CUSTOMIZE
// THE APPEARANCE OF TREND MICRO VIRUS INFO FEED ON YOUR SITE
var showAlert='automatic' // 'automatic' OR 'never'
var topCount=3 // NUMBER (0 to 10)
var advisoryCount=3   // NUMBER (0 to 20)
var showRisk=true
var showUpdated=false
var showPattern=false
var showPatternLink=true
var showEngineLink=true
var showFreeScanLink=false
var showFreeAlertsLink=false
var showHoaxesLink=false
var showMapLink=false
var showSearch=false
var bgColor='white' // COLOR NAME OR HEX VALUE (i.e., '#ffffff')
var textColor='black'
var linkColor='blue'
var fontSize=1
var fontName='Verdana, Arial, Helvetica, sans-serif'
var linkTarget='_blank'
// YOU MAY TRANSLATE THE FOLLOWING LABELS TO YOUR OWN LANGUAGE
var saStr='<?php echo _AG_VIRUSINFO_URL?>'
var mrStr='<?php echo _AG_VIRUSINFO_MEDIUM_RISK?>'
var hrStr='<?php echo _AG_VIRUSINFO_HIGH_RISK?>'
var tvStr='<?php echo _AG_VIRUSINFO_TOP?>'
var vaStr='<?php echo _AG_VIRUSINFO_ADVISORIES?>'
var rlStr='<?php echo _AG_VIRUSINFO_RELATE?>'
var fvStr='FREE virus scan'
var faStr='FREE email alerts'
var hoStr='Hoaxes'
var rtStr='Real-time virus map'
var vsStr='Virus&nbsp;Search'
var goStr='go'
// *********************************


var ct='http://www.trendmicro.com/syndication/vinfo/click.asp?go='
var veURL=ct+'<?php echo _AG_VIRUSINFO_URL ?>'
veURL+='/pc-cillin/vinfo/virusencyclo/default5.asp?VName='
var moreURL=ct+'http://www.trendmicro.com/pc-cillin/vinfo/default.asp?advis=more'
var ptnURL=ct+'http://www.trendmicro.com/pc-cillin/download/pattern.asp'
var engURL=ct+'http://www.trendmicro.com/pc-cillin/download/pattern.asp'
var hcURL=ct+'http://housecall.antivirus.com/pc_housecall/'
var subURL=ct+'http://www.trendmicro.com/pc-cillin/vinfo/subscription.asp'
var hxURL=ct+'http://www.trendmicro.com/pc-cillin/vinfo/hoaxes/hoax.asp'
var wtcURL=ct+'http://wtc.trendmicro.com/wtc/pcc_wmap.html'
r1=showHoaxesLink;r2=showFreeScanLink;r3=showFreeAlertsLink
r4=showMapLink;r5=showPatternLink;r6=showEngineLink
lt=' target="'+linkTarget+'"'
var lti=' title="go to www.trendmicro.com"'
var ft='<font face="'+fontName+'" size="'+fontSize+'" '
ft+='color="'+textColor+'">'
var lft='<font face="'+fontName+'" size="'+fontSize+'" '
lft+='color="'+linkColor+'">'

function mainTable() {
// INITIALIZE
p+='<table border="0" cellspacing="0" cellpadding="'+(fontSize-1)+'">'

// start ALERTS
if (showAlert == 'automatic' && alertLevel == 'medium') {
p+='<tr><td colspan="'+rowCount+'" bgcolor="#FFFF00">'
p+='<table border="0" cellspacing="0" cellpadding="5" width="100%">'
p+='<tr><td align="center">'
p+='<font face="'+fontName+'" size="'+(fontSize-1)+'" color="#000000">'
p+='<b>**&nbsp;'+saStr+'&nbsp;**</b><br>'
p+='<font size="'+(fontSize+1)+'">'
p+='<a href="'+veURL+VName+'"'+lti+lt+'>'
p+='<font color="blue"><b><u>'+VName+'</u></b></font></a></font><br>'
p+='<font size="'+fontSize+'">'+virusDescription+'</font><br><b>'
p+='**&nbsp;'+mrStr+'&nbsp;**</b></font></td></tr></table></td>'
p+='</tr><tr><td colspan="'+rowCount+'">'+ft+'&nbsp;</font></td></tr>'
}
if (showAlert == 'automatic' && alertLevel == 'high') {
p+='<tr><td colspan="'+rowCount+'" bgcolor="#CC0000">'
p+='<table border="0" cellspacing="0" cellpadding="5" width="100%"><tr>'
p+='<td align="center">'
p+='<font face="'+fontName+'" size="'+(fontSize-1)+'" color="#FFFFFF">'
p+='<b>**&nbsp;'+saStr+'&nbsp;**</b><br>'
p+='<font size="'+(fontSize+1)+'">'
p+='<a href="'+veURL+VName+'"'+lti+lt+'>'
p+='<font color="white"><b><u>'+VName+'</u></b></font></a></font><br>'
p+='<font size="'+fontSize+'">'+virusDescription+'</font><br><b>'
p+='**&nbsp;'+hrStr+'&nbsp;**</b></font></td></tr></table></td>'
p+='</tr><tr><td colspan="'+rowCount+'">'+ft+'&nbsp;</font></td></tr>'
}
// end ALERTS

// start TOP 10
if (topCount > 0 && topCountOK) {
p+='<tr><td colspan="'+rowCount+'">'+ft+'<b>'+tvStr+'</b></font></td></tr>'
if (showUpdated || showPattern) {
wide=true
}else{
wide=false
}
if (topCount == 10 && advisoryCount > 0 && showRisk && wide) {
p+='<tr><td colspan="'+rowCount+'">'
p+='<table border="0" cellspacing="0" cellpadding="0">'
for (var i=0; i < 5; i++) {
p+='<tr><td align="right">'+ft+(i+1)+'.&nbsp;</td><td nowrap>'+ft
p+='<a href="'+veURL+top10[i]+'"'+lti+lt+'>'
p+=lft+top10[i]+'</font></a></font></td>'
p+='<td align="right">'+ft+'&nbsp;&nbsp;'+(i+6)+'.&nbsp;</td>'
p+='<td nowrap>'+ft
p+='<a href="'+veURL+top10[i+5]+'"'+lti+lt+'>'
p+=lft+top10[i+5]+'</font></a></font></td></tr>'
}
p+='</table></td></tr>'
} else {
if (topCount>0 && topCount<11) {
for (var i=0;i<topCount;i++) {
p+='<tr><td align="right">'+ft+(i+1)+'.&nbsp;</td>'
p+='<td colspan="'+(rowCount-1)+'" nowrap>'+ft
p+='<a href="'+veURL+top10[i]+'"'+lti+lt+'>'
p+=lft+top10[i]+'</font></a></font></td></tr>'
}
}
}
p+='<tr><td colspan="'+rowCount+'">'+ft+'&nbsp;</td></tr>'
}
// end TOP 10

// start ADVISORIES
if (advisoryCount > 0) {
p+='<tr><td colspan="2">'+ft+'<b>'+vaStr+'</b></font></td>'
if (advisoryCountOK) {
if (showRisk) {
p+='<td align="center" nowrap>'
p+='<font size="1" face="'+fontName+'" color="'+textColor+'">'
p+='&nbsp;-risk-&nbsp;</font></td>'
}
if (showUpdated) {
p+='<td nowrap align="center">'
p+='<font size="1" face="'+fontName+'" color="'+textColor+'">'
p+='&nbsp;-updated on-&nbsp;</font></td>'
}
if (showPattern) {
p+='<td nowrap align="center">'
p+='<font size="1" face="'+fontName+'" color="'+textColor+'">'
p+='&nbsp;-pattern-&nbsp;</font></td>'
}
p+='</tr>'
if (advisories.length < advisoryCount) {
tempCount=advisories.length
} else {
tempCount=advisoryCount
}
for (var i=0; i < tempCount; i++) {
if (advisories[i].risk == "low") {
riskBgColor=''; riskColor=textColor; riskStr='&nbsp;low&nbsp;';
riskBullet='<font face="Arial">&#149;&nbsp;</font>'
}
if (advisories[i].risk == "medium") {
riskBgColor=' bgcolor="#FFFF00"'; riskColor='#000000';
riskStr='<b>&nbsp;medium&nbsp;</b>';
riskBullet='<font face="Verdana"><b>&nbsp;!&nbsp;</b></font>'
}
if (advisories[i].risk == "high") {
riskBgColor=' bgcolor="#CC0000"'; riskColor='#FFFFFF';
riskStr='<b>&nbsp;high&nbsp;</b>'
riskBullet='<font face="Verdana"><b>&nbsp;!&nbsp;</b></font>'
}
p+='<tr><td align="right" valign="bottom" '+riskBgColor+'>'
p+='<font face="'+fontName+'" size="'+fontSize+'" '
p+=' color="'+riskColor+'">'+riskBullet+'</font></td>'
p+='<td valign="bottom">'+ft
p+='<a href="'+veURL+advisories[i].name+'" title="'+advisories[i].risk
p+=' risk, updated '+advisories[i].updated+'"'+lt+'>'
p+=lft+advisories[i].name+'</font></a>&nbsp;</td>'
if (showRisk) {
p+='<td align="center" '+riskBgColor+'><font face="'+fontName+'"'
p+=' size="'+fontSize+'" color="'+riskColor+'">&nbsp;'+riskStr+'&nbsp;'
p+='</font></td>'
}
if (showUpdated) {
p+='<td align="right" nowrap>'+ft+'&nbsp;'+advisories[i].updated
p+='&nbsp;</font></td>'
}
if (showPattern) {
p+='<td align="center" nowrap>'+ft+'&nbsp;<a '
p+='href="'+ptnURL+'"'+lt
p+='style="text-decoration:none;"'+lti+'>'
p+=lft+'<font color="'+textColor+'">&nbsp;'+advisories[i].pattern
p+='&nbsp;</font></font></a></td>'
}
p+='</tr>'
}
p+='<tr><td align="right">'+ft
p+='<font face="Arial">&#149;&nbsp;</font></td><td '
p+='colspan="'+(rowCount-1)+'">'+ft+'<a href="'+moreURL+'"'+lt
p+='title="go to www.trendmicro.com">'+lft+'more...'
p+='</font></a></font></td></tr><tr><td colspan="'+rowCount+'">'+ft
p+='&nbsp;</font></td></tr>'
}
}
// end ADVISORIES

// start RELATED LINKS
if (r1||r2||r3||r4||r5||r6) {
tmp1='<tr><td align="right" valign="top">'+ft+'<font face="Arial">'
tmp1+='&#149;&nbsp;</font></td><td colspan="'+(rowCount-1)+'">'+ft
p+='<tr><td colspan="'+rowCount+'">'+ft+'<b>'+rlStr+'</b></font></td></tr>'
if(r1){
p+=tmp1+'<a href="'+hxURL+'"'+lt+'>'
p+=lft+hoStr+'</font></a></font></td></tr>'
}
if(r2){
p+=tmp1+'<a href="'+hcURL+'"'+lt+'>'
p+=lft+fvStr+'</font></a></font></td></tr>'
}
if(r3){
p+=tmp1+'<a href="'+subURL+'"'+lt+'>'
p+=lft+faStr+'</font></a></font></td></tr>'
}
if(r4){
p+=tmp1+'<a href="'+wtcURL+'"'+lt+'>'
p+=lft+rtStr+'</font></a></font></td></tr>'
}
if(r5){
p+=tmp1+'<a href="'+ptnURL+'"'+lt+'>'
p+=lft+'Pattern '+strCurPtn+'</font></a></font></td></tr>'
}
if(r6){
p+=tmp1+'<a href="'+engURL+'"'+lt+'>'
p+=lft+'Scan engine '+strCurEng+'</font></a></font></td></tr>'
}
p+='<tr><td colspan="'+rowCount+'">'+ft+'&nbsp;</font></td></tr>'
}
// end RELATED LINKS

// start SEARCH
if (showSearch) {
p+='<form'+lt+' action="'
p+='http://www.trendmicro.com/vinfo/virusencyclo/BuildClauseCgi.asp" '
p+='method="post" name="VirusEncyclo03"><tr><td colspan="'+rowCount+'">'
p+=ft+'<b>'+vsStr+' </b></font>'
p+='<input name="hidOK" type="hidden" value="0">'
p+='<input name="hidChoice" type="hidden" value="3">'
p+='<input type="text" name="keyword" size="12">&nbsp;'
p+='<input type="submit" value="'+goStr+'"></td></tr></form>'
}
// end SEARCH

p+='</table>'
}
// --></script>


<?php

   $filename = 'http://www.trendmicro.com/syndication/vinfo/vinfo_data_js2.asp';
   $handle = fopen($filename, 'rb');
   if ($handle) {
       $contents = '';

       while (!feof($handle)) {
           $buffer = fgets($handle, 4096);

           $contents .= $buffer;
       }

       fclose($handle);

       // Parser

       $pattern = "/p\+\=\'<table border(.|\n|\t)*/";

       $replace = 'mainTable(p); document.write(p); ';

       $contents = preg_replace($pattern, $replace, $contents);

       echo "<script language=\"JavaScript1.1\"> $contents </script>";
   } else {
       $contents = "Can't connected!!";

       echo $contents;
   }

// <script language="JavaScript1.1"
// SRC="http://www.trendmicro.com/syndication/vinfo/vinfo_data_js2.asp"></SCRIPT>

?>

<!-- v2.02, released July 31, 2001 -->
<!-- Copyright 2001 Trend Micro, Inc. -->
<!-- END TREND MICRO VIRUS INFO FEED -->
	          
