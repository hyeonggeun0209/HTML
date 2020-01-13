<!DOCTYPE html>
<head>
<title>Recipe</title>
<script>

window.onload=function() {
 document.getElementById("preview").onclick=processText;
}

function processText() {
 var txtBox = document.getElementById("inputbox");
 var lines = txtBox.value.split("\n");
 var txtBox2 = document.getElementById("inputbox2");
 var lines2 = txtBox2.value.split("\n");

 if(lines == "고길동" && lines2 == "또치") {
   var resultString = "싫어함";
   var resultString2 = "좋아함";

   var   blk   = document.getElementById("result");
   blk.innerHTML  =  resultString;
   var   blk2   = document.getElementById("result2");
   blk2.innerHTML  =  resultString2;
 } else {
   var resultString = "";
   var resultString2 = "";

   var   blk   = document.getElementById("result");
   blk.innerHTML  =  resultString;
   var   blk2   = document.getElementById("result2");
   blk2.innerHTML  =  resultString2;
 }
}

</script>

</head>
<body>
<textarea id="inputbox" cols="20" rows="10"></textarea>
<textarea id="inputbox2" cols="20" rows="10"></textarea>
<div><button id="preview">둘리에 대한 호감도</button></div>
<textarea id="result" cols="20" rows="10"></textarea>
<textarea id="result2" cols="20" rows="10"></textarea>
</body>
