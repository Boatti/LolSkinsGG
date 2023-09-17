window.onscroll = function() {scrollFunction()};

function scrollFunction() 
{
if ((document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) && outerWidth>820)
	{
    document.getElementById("imglogo").style.transform = "translateX(-58px) translateY(-11px) scale(0.8) ";
    
    document.getElementsByTagName("header")[0].style.height = "100px";
    document.getElementsByTagName("header")[0].style.background = "rgb(2,0,36)";

    document.getElementById("FunFact").style.height = "95px";
    document.getElementById("FunFact").style.width = "95px";
    document.getElementById("FunFact").style.fontSize = "1.2em";

    document.getElementById("FAQ").style.height = "95px";
    document.getElementById("FAQ").style.width = "95px";
    document.getElementById("FAQ").style.fontSize = "1.2em";

    document.getElementById("Stats").style.height = "95px";
    document.getElementById("Stats").style.width = "95px";
    document.getElementById("Stats").style.fontSize = "1.2em";
	}

else 
	{
    document.getElementById("imglogo").style.transform = "";
   
    document.getElementsByTagName("header")[0].style.height = "";
    document.getElementsByTagName("header")[0].style.background = "";

    document.getElementById("FunFact").style.height = "";
    document.getElementById("FunFact").style.width = "";
    document.getElementById("FunFact").style.fontSize = "";

    document.getElementById("FAQ").style.height = "";
    document.getElementById("FAQ").style.width = "";
    document.getElementById("FAQ").style.fontSize = "";
    
    document.getElementById("Stats").style.height = "";
    document.getElementById("Stats").style.width = "";
    document.getElementById("Stats").style.fontSize = "";
    
  
    
	}

}