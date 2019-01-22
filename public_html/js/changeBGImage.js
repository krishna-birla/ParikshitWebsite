var i = 0;
var myVar= setInterval(changeImage, 1000);
function changeImage()
{
	document.getElementById("starryskyimg").removeAttribute("src");
	document.getElementById("starryskyimg").setAttribute("src","uploads/starry_sky"+i+".jpg");
	i++;
	if(i == 7)
		i = 1;
}