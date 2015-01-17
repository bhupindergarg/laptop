<?php
session_start();
if($_SESSION!=null)
{
include_once('adminHeader.php');
include_once('userFooter.php');
headder();
?>
<script type="text/javascript">
function validate()
{
var comp=document.getElementById("comp").value;
if(!(comp.length>0))
{
alert("please enter company name first");
return false;
}

var model=document.getElementById("model").value;
if(!(model.length>0))
{
alert("please enter model details");
return false;
}

var ram=document.getElementById("ram").value;
if(!(ram.length>0))
{
alert("please enter ram details");
return false;
}

var hdd=document.getElementById("hdd").value;
if(!(hdd.length>0))
{
alert("please enter hard disk details");
return false;
}

var display=document.getElementById("display").value;
if(!(display.length>0))
{
alert("please enter display details");
return false;
}

var gcard=document.getElementById("gcard").value;
if(!(gcard.length>0))
{
alert("please enter graphic card details");
return false;
}

var os=document.getElementById("os").value;
if(!(os.length>0))
{
alert("please enter operating system details");
return false;
}

var processor=document.getElementById("processor").value;
if(!(processor.length>0))
{
alert("please enter processor details");
return false;
}

var bluetooth=document.getElementById("bluetooth").value;
if(!(bluetooth.length>0))
{
alert("please enter bluetooth details");
return false;
}

var dvdwriter=document.getElementById("dvdwriter").value;
if(!(dvdwriter.length>0))
{
alert("please enter dvdwriter details");
return false;
}

var wifi=document.getElementById("wifi").value;
if(!(wifi.length>0))
{
alert("please enter wifi details");
return false;
}

var audio=document.getElementById("audio").value;
if(!(audio.length>0))
{
alert("please enter audio details");
return false;
}

var price=document.getElementById("price").value;
if(!(price.length>0))
{
alert("please enter price details");
return false;
}

var webcam=document.getElementById("webcam").value;
if(!(webcam.length>0))
{
alert("please enter webcam details");
return false;
}

}

</script>

<form action="add_product.php" enctype="multipart/form-data" method="post" onsubmit="return validate();">
<table align="center">
<tr>
<td>company name:</td>
<td><input type="text" name="comp" id="comp"/></td>
</tr>
<tr>
<td>model name:</td>
<td><input type="text" name="model" id="model"/></td>
</tr>
<tr>
<td>ram</td>
<td><input type="text" name="ram" id="ram"/></td>
</tr>
<tr>
<td>hard disk</td>
<td><input type="text" name="hdd" id="hdd"/></td>
</tr>
<tr>
<td>display</td>
<td><input type="text" name="display" id="display"/></td>
</tr>
<tr>
<td>graphic card</td>
<td><input type="text" name="gcard" id="gcard"/></td>
</tr>
<tr>
<td>operating system</td>
<td><input type="text" name="os" id="os"/></td>
</tr>
<tr>
<td>processor</td>
<td><input type="text" name="processor" id="processor"/></td>
</tr>
<tr>
<td>bluetooth</td>
<td><input type="text" name="bluetooth" id="bluetooth"/></td>
</tr>
<tr>
<td>webcam</td>
<td><input type="text" name="webcam" id="webcam"/></td>
</tr>
<tr>
<td>dvdwriter</td>
<td><input type="text" name="dvdwriter" id="dvdwriter"/></td>
</tr>
<td>wifi</td>
<td><input type="text" name="wifi" id="wifi"/></td>
</tr>
<td>audio</td>
<td><input type="text" name="audio" id="audio"/></td>
</tr>
<tr>
<td>price</td>
<td><input type="text" name="price" id="price"/></td>
</tr>
<tr>
<td>additional</td>
<td><textarea name="additional" id="additional"></textarea></td>
</tr>
<tr>
<td>image</td>
<td><input type="file" name="fyl" /></td>
</tr>
<tr >
<td colspan="2" align="center"><input type="submit" value="add"/> <input type="reset" value="cancel"/></td>
</tr>

</table>
</form>
<?php
footter();
}
else
{
?>
<script>
alert('please login 1st');
window.location="login.php";
</script>
<?php
}
?>