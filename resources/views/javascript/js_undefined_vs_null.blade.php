<!DOCTYPE html>
<html>
<body>

<p id="demo"></p>

<script>
document.getElementById("demo").innerHTML =
typeof undefined + "<br>" +
typeof null + "<br>" +
(null === undefined) + "<br>" +
(null == undefined);
</script>

</body>
</html> 
