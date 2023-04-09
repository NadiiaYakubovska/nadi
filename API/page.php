<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student info</title>
</head>
<body>
 <header>
    <h1>Student info</h1>
    <button id="btn">get information</button>
 </header>


 <div id="student-info"></div>


 <script> 
 var btn=document.getElementById('btn');
  var content=document.getElementById('student-info')


 btn.addEventListener('click',(e)=>
 {
   var ourRequest=new XMLHttpRequest();
ourRequest.open('GET','http://localhost/API/api_fetch_all.php');
ourRequest.onload=function()
{
   
   var ourdata=JSON.parse(ourRequest.responseText);
  
   renderHTML(ourdata);
};
 ourRequest.send();
});


function renderHTML(data)
{


var htmlstring=" ";



for(i=0;i<data.length;i++)
{
htmlstring +="<p>"+ data[i].name+ " is "+data[i].age + " from "+data[i].city + ".</p>";
}
content.insertAdjacentHTML('beforeend',htmlstring)
}
</script>


 </body>
</html>
