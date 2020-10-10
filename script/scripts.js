<script>
//username
$(".dropdown-username").hide();

// navigation bar
$(".dropdown-nav1").hide();
$(".dropdown-nav2").hide();
$(".dropdown-nav3").hide();
$(".dropdown-nav4").hide();
$(".dropdown-nav5").hide();
$(".dropdown-nav6").hide();

$("#dlgbox").hide();
$("#dlg-bg").hide();

var soacount = 1;
var rcount = 1;
var omcount = 1;
var mntcount = 1;
var ccount = 1;
var gscount = 1;

function dropdown(bar) {

	if(document.getElementById(bar).className != "active") {
	document.getElementById(bar).className = "active";
	}else{
	document.getElementById(bar).className = "";
	}
    
	switch(bar) {

	case 'soa':
    $(".dropdown-nav1").slideToggle();
    $(".dropdown-nav1-show").slideToggle(); 

    $(".dropdown-nav2").slideUp();
    $(".dropdown-nav3").slideUp();
    $(".dropdown-nav4").slideUp();
    $(".dropdown-nav5").slideUp();
    $(".dropdown-nav6").slideUp();
    $(".dropdown-nav2-show").slideUp();
    $(".dropdown-nav3-show").slideUp();
    $(".dropdown-nav4-show").slideUp();
    $(".dropdown-nav5-show").slideUp();
    $(".dropdown-nav6-show").slideUp();
    
    $('#mBarTrianglesoa').css({"transform" : "rotate(" + (180 * soacount) + "deg)"});
    $('#mBarTrianglesoa').css({"-webkit-transition" : "0.5s ease-in-out"});
    $('#mBarTrianglesoa').css({"-moz-transition" : "0.5s ease-in-out"});
    $('#mBarTrianglesoa').css({"-o-transition" : "0.5s ease-in-out"});
    $('#mBarTrianglesoa').css({"transition" : "0.5s ease-in-out"});
    
    soacount++;
    if(soacount == 3){
        soacount = 1;
    }
            
    if(rcount == 2){
        $('#mBarTriangler').css({"transform" : "rotate(" + (180 * rcount) + "deg)"});
        $('#mBarTriangler').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTriangler').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTriangler').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTriangler').css({"transition" : "0.5s ease-in-out"});
        rcount = 1;
    }     
    if(omcount == 2){
        $('#mBarTriangleom').css({"transform" : "rotate(" + (180 * omcount) + "deg)"});
        $('#mBarTriangleom').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTriangleom').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTriangleom').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTriangleom').css({"transition" : "0.5s ease-in-out"});
        omcount = 1;
    }       
    if(mntcount == 2){
        $('#mBarTrianglemnt').css({"transform" : "rotate(" + (180 * mntcount) + "deg)"});
        $('#mBarTrianglemnt').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglemnt').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglemnt').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglemnt').css({"transition" : "0.5s ease-in-out"});
        mntcount = 1;
    }     
    if(ccount == 2){
        $('#mBarTrianglec').css({"transform" : "rotate(" + (180 * ccount) + "deg)"});
        $('#mBarTrianglec').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglec').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglec').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglec').css({"transition" : "0.5s ease-in-out"});
        ccount = 1;
    }     
    if(gscount == 2){
        $('#mBarTrianglegs').css({"transform" : "rotate(" + (180 * gscount) + "deg)"});
        $('#mBarTrianglegs').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglegs').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglegs').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglegs').css({"transition" : "0.5s ease-in-out"});
        gscount = 1;
    }

	break;

	case 'r':
    $(".dropdown-nav2").slideToggle(); 
	$(".dropdown-nav2-show").slideToggle(); 

    $(".dropdown-nav1").slideUp();
    $(".dropdown-nav3").slideUp();
    $(".dropdown-nav4").slideUp();
    $(".dropdown-nav5").slideUp();
    $(".dropdown-nav6").slideUp();
    $(".dropdown-nav1-show").slideUp();
    $(".dropdown-nav3-show").slideUp();
    $(".dropdown-nav4-show").slideUp();
    $(".dropdown-nav5-show").slideUp();
    $(".dropdown-nav6-show").slideUp();
    
    $('#mBarTriangler').css({"transform" : "rotate(" + (180 * rcount) + "deg)"});
    $('#mBarTriangler').css({"-webkit-transition" : "0.5s ease-in-out"});
    $('#mBarTriangler').css({"-moz-transition" : "0.5s ease-in-out"});
    $('#mBarTriangler').css({"-o-transition" : "0.5s ease-in-out"});
    $('#mBarTriangler').css({"transition" : "0.5s ease-in-out"});
    
    rcount++;
    if(rcount == 3){
        rcount = 1;
    }
            
    if(soacount == 2){
        $('#mBarTrianglesoa').css({"transform" : "rotate(" + (180 * soacount) + "deg)"});
        $('#mBarTrianglesoa').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglesoa').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglesoa').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglesoa').css({"transition" : "0.5s ease-in-out"});
        soacount = 2;
    }     
    if(omcount == 2){
        $('#mBarTriangleom').css({"transform" : "rotate(" + (180 * omcount) + "deg)"});
        $('#mBarTriangleom').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTriangleom').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTriangleom').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTriangleom').css({"transition" : "0.5s ease-in-out"});
        omcount = 1;
    }       
    if(mntcount == 2){
        $('#mBarTrianglemnt').css({"transform" : "rotate(" + (180 * mntcount) + "deg)"});
        $('#mBarTrianglemnt').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglemnt').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglemnt').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglemnt').css({"transition" : "0.5s ease-in-out"});
        mntcount = 1;
    }     
    if(ccount == 2){
        $('#mBarTrianglec').css({"transform" : "rotate(" + (180 * ccount) + "deg)"});
        $('#mBarTrianglec').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglec').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglec').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglec').css({"transition" : "0.5s ease-in-out"});
        ccount = 1;
    }     
    if(gscount == 2){
        $('#mBarTrianglegs').css({"transform" : "rotate(" + (180 * gscount) + "deg)"});
        $('#mBarTrianglegs').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglegs').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglegs').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglegs').css({"transition" : "0.5s ease-in-out"});
        gscount = 1;
    }
            
	break;
 
	case 'om':
	$(".dropdown-nav3").slideToggle();
	$(".dropdown-nav3-show").slideToggle(); 

    $(".dropdown-nav1").slideUp();
    $(".dropdown-nav2").slideUp();
    $(".dropdown-nav4").slideUp();
    $(".dropdown-nav5").slideUp();
    $(".dropdown-nav6").slideUp();
    $(".dropdown-nav1-show").slideUp();
    $(".dropdown-nav2-show").slideUp();
    $(".dropdown-nav4-show").slideUp();
    $(".dropdown-nav5-show").slideUp();
    $(".dropdown-nav6-show").slideUp();
    
    $('#mBarTriangleom').css({"transform" : "rotate(" + (180 * omcount) + "deg)"});
    $('#mBarTriangleom').css({"-webkit-transition" : "0.5s ease-in-out"});
    $('#mBarTriangleom').css({"-moz-transition" : "0.5s ease-in-out"});
    $('#mBarTriangleom').css({"-o-transition" : "0.5s ease-in-out"});
    $('#mBarTriangleom').css({"transition" : "0.5s ease-in-out"});
    
    omcount++;
    if(omcount == 3){
        omcount = 1;
    }
            
    if(rcount == 2){
        $('#mBarTriangler').css({"transform" : "rotate(" + (180 * rcount) + "deg)"});
        $('#mBarTriangler').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTriangler').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTriangler').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTriangler').css({"transition" : "0.5s ease-in-out"});
        rcount = 1;
    }     
    if(soacount == 2){
        $('#mBarTrianglesoa').css({"transform" : "rotate(" + (180 * soacount) + "deg)"});
        $('#mBarTrianglesoa').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglesoa').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglesoa').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglesoa').css({"transition" : "0.5s ease-in-out"});
        soacount = 1;
    }       
    if(mntcount == 2){
        $('#mBarTrianglemnt').css({"transform" : "rotate(" + (180 * mntcount) + "deg)"});
        $('#mBarTrianglemnt').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglemnt').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglemnt').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglemnt').css({"transition" : "0.5s ease-in-out"});
        mntcount = 1;
    }       
    if(ccount == 2){
        $('#mBarTrianglec').css({"transform" : "rotate(" + (180 * ccount) + "deg)"});
        $('#mBarTrianglec').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglec').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglec').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglec').css({"transition" : "0.5s ease-in-out"});
        ccount = 1;
    }     
    if(gscount == 2){
        $('#mBarTrianglegs').css({"transform" : "rotate(" + (180 * gscount) + "deg)"});
        $('#mBarTrianglegs').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglegs').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglegs').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglegs').css({"transition" : "0.5s ease-in-out"});
        gscount = 1;
    }
            
	break;

  case 'mnt':
    $(".dropdown-nav4").slideToggle();
    $(".dropdown-nav4-show").slideToggle(); 

    $(".dropdown-nav1").slideUp();
    $(".dropdown-nav2").slideUp();
    $(".dropdown-nav3").slideUp();
    $(".dropdown-nav5").slideUp();
    $(".dropdown-nav6").slideUp();
    $(".dropdown-nav1-show").slideUp();
    $(".dropdown-nav2-show").slideUp();
    $(".dropdown-nav3-show").slideUp();
    $(".dropdown-nav5-show").slideUp();
    $(".dropdown-nav6-show").slideUp();
    
    $('#mBarTrianglemnt').css({"transform" : "rotate(" + (180 * mntcount) + "deg)"});
    $('#mBarTrianglemnt').css({"-webkit-transition" : "0.5s ease-in-out"});
    $('#mBarTrianglemnt').css({"-moz-transition" : "0.5s ease-in-out"});
    $('#mBarTrianglemnt').css({"-o-transition" : "0.5s ease-in-out"});
    $('#mBarTrianglemnt').css({"transition" : "0.5s ease-in-out"});
    
    mntcount++;
    if(mntcount == 3){
        mntcount = 1;
    }
            
    if(rcount == 2){
        $('#mBarTriangler').css({"transform" : "rotate(" + (180 * rcount) + "deg)"});
        $('#mBarTriangler').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTriangler').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTriangler').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTriangler').css({"transition" : "0.5s ease-in-out"});
        rcount = 1;
    }     
    if(omcount == 2){
        $('#mBarTriangleom').css({"transform" : "rotate(" + (180 * omcount) + "deg)"});
        $('#mBarTriangleom').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTriangleom').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTriangleom').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTriangleom').css({"transition" : "0.5s ease-in-out"});
        omcount = 1;
    }       
    if(soacount == 2){
        $('#mBarTrianglesoa').css({"transform" : "rotate(" + (180 * soacount) + "deg)"});
        $('#mBarTrianglesoa').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglesoa').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglesoa').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglesoa').css({"transition" : "0.5s ease-in-out"});
        soacount = 1;
    }       
    if(ccount == 2){
        $('#mBarTrianglec').css({"transform" : "rotate(" + (180 * ccount) + "deg)"});
        $('#mBarTrianglec').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglec').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglec').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglec').css({"transition" : "0.5s ease-in-out"});
        ccount = 1;
    }     
    if(gscount == 2){
        $('#mBarTrianglegs').css({"transform" : "rotate(" + (180 * gscount) + "deg)"});
        $('#mBarTrianglegs').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglegs').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglegs').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglegs').css({"transition" : "0.5s ease-in-out"});
        gscount = 1;
    }
            
  break;

	case 'c':
	$(".dropdown-nav5").slideToggle();
	$(".dropdown-nav5-show").slideToggle(); 

    $(".dropdown-nav1").slideUp();
    $(".dropdown-nav2").slideUp();
    $(".dropdown-nav3").slideUp();
    $(".dropdown-nav4").slideUp();
    $(".dropdown-nav6").slideUp();
    $(".dropdown-nav1-show").slideUp();
    $(".dropdown-nav2-show").slideUp();
    $(".dropdown-nav3-show").slideUp();
    $(".dropdown-nav4-show").slideUp();
    $(".dropdown-nav6-show").slideUp();
    
    $('#mBarTrianglec').css({"transform" : "rotate(" + (180 * ccount) + "deg)"});
    $('#mBarTrianglec').css({"-webkit-transition" : "0.5s ease-in-out"});
    $('#mBarTrianglec').css({"-moz-transition" : "0.5s ease-in-out"});
    $('#mBarTrianglec').css({"-o-transition" : "0.5s ease-in-out"});
    $('#mBarTrianglec').css({"transition" : "0.5s ease-in-out"});
    
    ccount++;
    if(ccount == 3){
        ccount = 1;
    }
            
    if(rcount == 2){
        $('#mBarTriangler').css({"transform" : "rotate(" + (180 * rcount) + "deg)"});
        $('#mBarTriangler').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTriangler').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTriangler').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTriangler').css({"transition" : "0.5s ease-in-out"});
        rcount = 1;
    }     
    if(omcount == 2){
        $('#mBarTrianglesoa').css({"transform" : "rotate(" + (180 * omcount) + "deg)"});
        $('#mBarTrianglesoa').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglesoa').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglesoa').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglesoa').css({"transition" : "0.5s ease-in-out"});
        omcount = 1;
    }       
    if(soacount == 2){
        $('#mBarTrianglesoa').css({"transform" : "rotate(" + (180 * soacount) + "deg)"});
        $('#mBarTrianglesoa').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglesoa').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglesoa').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglesoa').css({"transition" : "0.5s ease-in-out"});
        soacount = 1;
    }       
    if(mntcount == 2){
        $('#mBarTrianglemnt').css({"transform" : "rotate(" + (180 * mntcount) + "deg)"});
        $('#mBarTrianglemnt').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglemnt').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglemnt').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglemnt').css({"transition" : "0.5s ease-in-out"});
        mntcount = 1;
    }     
    if(gscount == 2){
        $('#mBarTrianglegs').css({"transform" : "rotate(" + (180 * gscount) + "deg)"});
        $('#mBarTrianglegs').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglegs').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglegs').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglegs').css({"transition" : "0.5s ease-in-out"});
        gscount = 1;
    }
            
	break;

	case 'gs':
	$(".dropdown-nav6").slideToggle();
	$(".dropdown-nav6-show").slideToggle(); 

    $(".dropdown-nav1").slideUp();
    $(".dropdown-nav2").slideUp();
    $(".dropdown-nav3").slideUp();
    $(".dropdown-nav4").slideUp();
    $(".dropdown-nav5").slideUp();
    $(".dropdown-nav1-show").slideUp();
    $(".dropdown-nav2-show").slideUp();
    $(".dropdown-nav3-show").slideUp();
    $(".dropdown-nav4-show").slideUp();
    $(".dropdown-nav5-show").slideUp();
    
    $('#mBarTrianglegs').css({"transform" : "rotate(" + (180 * gscount) + "deg)"});
    $('#mBarTrianglegs').css({"-webkit-transition" : "0.5s ease-in-out"});
    $('#mBarTrianglegs').css({"-moz-transition" : "0.5s ease-in-out"});
    $('#mBarTrianglegs').css({"-o-transition" : "0.5s ease-in-out"});
    $('#mBarTrianglegs').css({"transition" : "0.5s ease-in-out"});
    
    gscount++;
    if(gscount == 3){
        gscount = 1;
    }
            
    if(rcount == 2){
        $('#mBarTriangler').css({"transform" : "rotate(" + (180 * rcount) + "deg)"});
        $('#mBarTriangler').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTriangler').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTriangler').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTriangler').css({"transition" : "0.5s ease-in-out"});
        rcount = 1;
    }     
    if(omcount == 2){
        $('#mBarTriangleom').css({"transform" : "rotate(" + (180 * omcount) + "deg)"});
        $('#mBarTriangleom').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTriangleom').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTriangleom').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTriangleom').css({"transition" : "0.5s ease-in-out"});
        omcount = 1;
    }       
    if(soacount == 2){
        $('#mBarTrianglesoa').css({"transform" : "rotate(" + (180 * soacount) + "deg)"});
        $('#mBarTrianglesoa').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglesoa').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglesoa').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglesoa').css({"transition" : "0.5s ease-in-out"});
        soacount = 1;
    }        
    if(ccount == 2){
        $('#mBarTrianglec').css({"transform" : "rotate(" + (180 * ccount) + "deg)"});
        $('#mBarTrianglec').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglec').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglec').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglec').css({"transition" : "0.5s ease-in-out"});
        ccount = 1;
    }     
    if(mntcount == 2){
        $('#mBarTrianglemnt').css({"transform" : "rotate(" + (180 * mntcount) + "deg)"});
        $('#mBarTrianglemnt').css({"-webkit-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglemnt').css({"-moz-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglemnt').css({"-o-transition" : "0.5s ease-in-out"});
        $('#mBarTrianglemnt').css({"transition" : "0.5s ease-in-out"});
        mntcount = 1;
    }
            
	break;	

	case 'username':
		$(".dropdown-username").slideToggle();
	break;
	}
}

function sideNavArrow(){
    mBar = document.getElementById("mBarSess").value;
    if (mBar == 'r'){
        $('#mBarTriangler').css({"transform" : "rotate(" + (180 * rcount) + "deg)"});
        rcount++;        
    } else if (mBar == 'om'){
        $('#mBarTriangleom').css({"transform" : "rotate(" + (180 * omcount) + "deg)"});
        omcount++;        
    } else if (mBar == 'mnt'){
        $('#mBarTrianglemnt').css({"transform" : "rotate(" + (180 * mntcount) + "deg)"});
        mntcount++;        
    } else if (mBar == 'c'){
        $('#mBarTrianglec').css({"transform" : "rotate(" + (180 * ccount) + "deg)"});
        ccount++;        
    } else if (mBar == 'soa'){
        $('#mBarTrianglesoa').css({"transform" : "rotate(" + (180 * soacount) + "deg)"});
        soacount++;        
    } else if (mBar == 'gs'){
        $('#mBarTrianglegs').css({"transform" : "rotate(" + (180 * gscount) + "deg)"});
        gscount++;        
    }
}

function searchBar() {
    var input;
    
    input = document.getElementById("myInput");
    
    input.style.borderColor = "#15C8FF";
    input.style.color = "#15C8FF"; 
    
    input.addEventListener('blur', function(){
    input.style.borderColor = "#fff";
    input.style.color = "#fff"; 
    });  
}

function searchFilterEmail() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("dataTable");
  tr = table.getElementsByTagName("tr");
  for (i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }

}

function searchFilterName() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("dataTable");
  tr = table.getElementsByTagName("tr");
  for (i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
    
}

function searchFilterDocument() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("dataTable");
  tr = table.getElementsByTagName("tr");
  for (i = 1; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[3];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
    
}

function sorting() {
	$("#tbody").each(function(elem,index) {
		var arr = $.makeArray($("tr",this).detach());
		arr.reverse();
		$(this).append(arr);
	});
}

function delay(callback, ms) {
  var timer = 0;
  return function() {
    var context = this, args = arguments;
    clearTimeout(timer);
    timer = setTimeout(function () {
      callback.apply(context, args);
    }, ms || 0);
  };
} 

//all inputs typing effects excluding profile and login//
function onTyping($getVar) {
  var Input = document.getElementById(""+$getVar+"Input");
  var Lbl = document.getElementById(""+$getVar+"Lbl");
  var Lgd = document.getElementById(""+$getVar+"Lgd");
  var Pic = document.getElementById(""+$getVar+"Pic");

  Input.style.color = "#15C8FF";
  Lbl.style.borderColor = "#15C8FF";
  Lgd.style.color = "#15C8FF";

  switch($getVar) {
  case 'email':
      Pic.src = "../images/user.png";
    break;
          
  case 'pword':
      Pic.src = "../images/lock.png";
    break;
	
  case 'EMCmail':           
  case 'mail':
      Pic.src = "../images/IPMS UI Output 3 (10-01-20)-59.png";
    break;
	
  case 'EMCadd':
  case 'add':
  {
      Pic.src = "../images/IPMS UI Output 3 (10-01-20)-69.png";
    break;
  }
  case 'emc':
      Pic.src = "../images/IPMS UI Output 3 (10-01-20)-74.png";
    break;

  case 'phone':
      Pic.src = "../images/IPMS UI Output 3 (10-01-20)-71.png";
    break;

  case 'ic':
      Pic.src = "../images/IPMS UI Output 3 (10-01-20)-65.png";
    break;
          
  case 'EMCname':
  case 'name':
      Pic.src = "../images/IPMS UI Output 3 (10-01-20)-62.png";
    break;

  case 'nob':
      Pic.src = "../images/IPMS UI Output 3 (10-01-20)-86.png";
    break;

  case 'deve':
    Pic.src = "../images/IPMS UI Output 3 (10-01-20)-69.png";
  break;

  case 'blk':
    Pic.src = "../images/IPMS UI Output 3 (10-01-20)-69.png";
  break;

  case 'unit':
      Pic.src = "../images/IPMS UI Output 3 (10-01-20)-69.png";
    break;

  case 'flrno':
      Pic.src = "../images/IPMS UI Output 3 (10-01-20)-91.png";
    break;

  case 'unitno':
      Pic.src = "../images/IPMS UI Output 3 (10-01-20)-95.png";
    break;

  default:
      Pic.src = "../images/IPMS UI Output 3 (10-01-20)-86.png";
    break;

  }
  
  Input.addEventListener('blur', function(){
      if(Input.value.length == 0){
            Input.style.color = "#A3A5A8"; 
            Lbl.style.borderColor = "#A3A5A8";
            Lgd.style.color = "#A3A5A8";

          switch($getVar) {
          case 'email':
              Pic.src = "../images/user_gray.png";
            break;
                  
          case 'pword':
              Pic.src = "../images/lock_gray.png";
            break;
          
		  case 'EMCmail':	
          case 'mail':
              Pic.src =  "../images/IPMS UI Output 3 (10-01-20)-61.png";
            break;
			
		  case 'EMCadd':
          case 'add':
		  {
              Pic.src = "../images/IPMS UI Output 3 (10-01-20)-85.png";
            break;
		  }

          case 'emc':
              Pic.src = "../images/IPMS UI Output 3 (10-01-20)-76.png";
            break;

          case 'phone':
              Pic.src = "../images/IPMS UI Output 3 (10-01-20)-73.png";
            break;

          case 'ic':
              Pic.src = "../images/IPMS UI Output 3 (10-01-20)-67.png";
            break;

		  case 'EMCname':
          case 'name':
		  {
              Pic.src = "../images/IPMS UI Output 3 (10-01-20)-82.png";
            break;
		  }
                  
          case 'nob':
              Pic.src = "../images/IPMS UI Output 3 (10-01-20)-88.png";
            break;

          case 'deve':
              Pic.src = "../images/IPMS UI Output 1 (24-09-19)-34.png";
            break;

          case 'blk':
              Pic.src = "../images/IPMS UI Output 1 (24-09-19)-34.png";
            break;

          case 'unit':
              Pic.src = "../images/IPMS UI Output 1 (24-09-19)-34.png";
            break;

          case 'flrno':
              Pic.src = "../images/IPMS UI Output 3 (10-01-20)-92.png";
            break;

          case 'unitno':
              Pic.src = "../images/IPMS UI Output 3 (10-01-20)-96.png";
            break;

          default:
              Pic.src = "../images/IPMS UI Output 3 (10-01-20)-88.png";
            break;

          }
        } else {
            Input.style.color = "#fff";
            Lbl.style.borderColor = "#fff";
            Lgd.style.color = "#fff";

          switch($getVar) {
          case 'email':
              Pic.src = "../images/user_white.png";
            break;
                  
          case 'pword':
              Pic.src = "../images/lock_white.png";
            break;
          case 'mail':
              Pic.src =  "../images/IPMS UI Output 3 (10-01-20)-60.png";
            break;

          case 'add':
              Pic.src = "../images/IPMS UI Output 1 (24-09-19)-34.png";
            break;

          case 'emc':
              Pic.src = "../images/IPMS UI Output 3 (10-01-20)-75.png";
            break;

          case 'phone':
              Pic.src = "../images/IPMS UI Output 3 (10-01-20)-72.png";
            break;

          case 'ic':
              Pic.src = "../images/IPMS UI Output 3 (10-01-20)-66.png";
            break;

          case 'name':
              Pic.src = "../images/IPMS UI Output 3 (10-01-20)-63.png";
            break;

          case 'nob':
              Pic.src = "../images/IPMS UI Output 3 (10-01-20)-87.png";
            break;

          case 'deve':
              Pic.src = "../images/IPMS UI Output 1 (24-09-19)-34.png";
            break;

          case 'blk':
              Pic.src = "../images/IPMS UI Output 1 (24-09-19)-34.png";
            break;

          case 'unit':
              Pic.src = "../images/IPMS UI Output 1 (24-09-19)-34.png";
            break;

          case 'flrno':
              Pic.src = "../images/IPMS UI Output 3 (10-01-20)-92.png";
            break;

          case 'unitno':
              Pic.src = "../images/IPMS UI Output 3 (10-01-20)-96.png";
            break;

          default:
              Pic.src = "../images/IPMS UI Output 3 (10-01-20)-87.png";
            break;

          }
        }
  });  
}

function onTypingflrNo($getVar) {
  var Input = document.getElementById(""+$getVar+"Input");
  var Lbl = document.getElementById(""+$getVar+"Lbl");
  var Lgd = document.getElementById(""+$getVar+"Lgd");
  var Pic = document.getElementById(""+$getVar+"Pic");
  var label = document.getElementById(""+$getVar+"label");

  Input.style.color = "#15C8FF";
  Lbl.style.borderColor = "#15C8FF";
  Lgd.style.color = "#15C8FF";
  label.style.color = "#15C8FF";

  switch($getVar) {
    default:
      Pic.src = "../images/IPMS UI Output 3 (10-01-20)-91.png";
    break;
  }
  
  Input.addEventListener('blur', function(){
      if(Input.value.length == 0){
            Input.style.color = "#A3A5A8"; 
            Lbl.style.borderColor = "#A3A5A8";
            Lgd.style.color = "#A3A5A8";
            label.style.color = "#A3A5A8";

          switch($getVar) {
            default:
              Pic.src = "../images/IPMS UI Output 3 (10-01-20)-92.png";
            break;
          }
        } else {
            Input.style.color = "#fff";
            Lbl.style.borderColor = "#fff";
            Lgd.style.color = "#fff";
            label.style.color = "#fff";

          switch($getVar) {
            default:
              Pic.src = "../images/IPMS UI Output 3 (10-01-20)-92.png";
            break;
          }
        }
  });  
}

function onTypingflrName($getVar) {
  var Input = document.getElementById(""+$getVar+"Input");
  var Lbl = document.getElementById(""+$getVar+"Lbl");
  var Pic = document.getElementById(""+$getVar+"Pic");

  Input.style.color = "#15C8FF";
  Lbl.style.borderColor = "#15C8FF";

  switch($getVar) {
    default:
      Pic.src = "../images/IPMS UI Output 3 (10-01-20)-91.png";
    break;
  }
  
  Input.addEventListener('blur', function(){
      if(Input.value.length == 0){
            Input.style.color = "#A3A5A8"; 
            Lbl.style.borderColor = "#A3A5A8";

          switch($getVar) {
            default:
              Pic.src = "../images/IPMS UI Output 3 (10-01-20)-92.png";
            break;
          }
        } else {
            Input.style.color = "#fff";
            Lbl.style.borderColor = "#fff";

          switch($getVar) {
            default:
              Pic.src = "../images/IPMS UI Output 3 (10-01-20)-92.png";
            break;
          }
        }
  });  
}

function onTypingunitNo($getVar) {
  var Input = document.getElementById(""+$getVar+"Input");
  var Lbl = document.getElementById(""+$getVar+"Lbl");
  var Lgd = document.getElementById(""+$getVar+"Lgd");
  var Pic = document.getElementById(""+$getVar+"Pic");
  var label = document.getElementById(""+$getVar+"label");

  Input.style.color = "#15C8FF";
  Lbl.style.borderColor = "#15C8FF";
  Lgd.style.color = "#15C8FF";
  label.style.color = "#15C8FF";

  switch($getVar) {
    default:
      Pic.src = "../images/IPMS UI Output 3 (10-01-20)-95.png";
    break;
  }
  
  Input.addEventListener('blur', function(){
      if(Input.value.length == 0){
            Input.style.color = "#A3A5A8"; 
            Lbl.style.borderColor = "#A3A5A8";
            Lgd.style.color = "#A3A5A8";
            label.style.color = "#A3A5A8";

          switch($getVar) {
            default:
              Pic.src = "../images/IPMS UI Output 3 (10-01-20)-96.png";
            break;
          }
        } else {
            Input.style.color = "#fff";
            Lbl.style.borderColor = "#fff";
            Lgd.style.color = "#fff";
            label.style.color = "#fff";

          switch($getVar) {
            default:
              Pic.src = "../images/IPMS UI Output 3 (10-01-20)-96.png";
            break;
          }
        }
  });  
}

function onTypingSetting($getVar) {
  var Input = document.getElementById(""+$getVar+"Input");
  var Lbl = document.getElementById(""+$getVar+"Lbl");
  var Lgd = document.getElementById(""+$getVar+"Lgd");
  var Pic = document.getElementById(""+$getVar+"Pic");

  Input.style.color = "transparent";
  Input.style.textShadow = "0 0 0 #15C8FF";
  Lbl.style.borderColor = "#15C8FF";
  Lgd.style.color = "#15C8FF";
  
  Input.addEventListener('blur', function(){
      if(Input.value.length == 0){
            Input.style.color = "transparent";
            Input.style.textShadow = "0 0 0 #A3A5A8"; 
            Lbl.style.borderColor = "#A3A5A8";
            Lgd.style.color = "#A3A5A8";
        } else {
            Input.style.color = "transparent";
            Input.style.textShadow = "0 0 0 #fff";
            Lbl.style.borderColor = "#fff";
            Lgd.style.color = "#fff";
        }
  });  
}

function onTypingSettingDlg($getVar) {
  var Input = document.getElementById(""+$getVar+"Input");
  var Lbl = document.getElementById(""+$getVar+"Lbl");

  Input.style.color = "#15C8FF";
  Lbl.style.borderColor = "#15C8FF";
  
  Input.addEventListener('blur', function(){
      if(Input.value.length == 0){
            Input.style.color = "#A3A5A8"; 
            Lbl.style.borderColor = "#A3A5A8";
        } else {
            Input.style.color = "#fff";
            Lbl.style.borderColor = "#fff";
        }
  });  
}

//profile input typing effects//
function onTypingP($getVar) {
  var Input = document.getElementById(""+$getVar+"Input");    
  var Lbl = document.getElementById(""+$getVar+"Lbl");
    
  Input.style.borderColor = "#15C8FF";
  Input.style.color = "#15C8FF";
  Lbl.style.color = "#15C8FF";

  Input.addEventListener('blur', function(){
    Input.style.borderColor = "#fff";
    Input.style.color = "#fff"; 
    Lbl.style.color = "#fff";
  });  
} 

// navigation bar hover effects//
$(document).ready(function(){
    sideNavHover();
    devThreePadding();
    devFourPadding();
    devFivePadding();
    colorChange();
    prevEnter();
    readonlyregSix();
    printInv();
    sideNavArrow();
    regSixResetNum();
});

function compareDate() {
    var datetime_of_visit = document.getElementById("datetime_of_visit").value;
    var datetime_of_exit = document.getElementById("datetime_of_exit").value;

    if(datetime_of_visit > datetime_of_exit)
    {
      alert("'Date of Exit' must be later than 'Date of Visit'"); 
      $("input[id=datetime_of_exit]").val("");
    }
}

function checkPhoneFormat($phoneInput) 
{
  var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
  var phoneInput = document.getElementById($phoneInput).value;

  if(phoneInput.match(phoneno))
  {
    return true;      
  }
   else
  {
  alert("Not a valid Phone Number");
  return $("input[id="+$phoneInput+"]").val("");
  }
}

function autoEntryNum($nob){
    var btnNum = document.getElementById("btnNum");
    var btnAlp = document.getElementById("btnAlp");
    
    btnNum.style.color = "#FFF";
    btnNum.style.borderColor = "#15C8FF";
    btnNum.style.fontWeight = "bold";

    btnAlp.style.color = "#A3A5A8";
    btnAlp.style.borderColor = "#A3A5A8";
    btnAlp.style.fontWeight = "normal";
    
    $(document).on({
    mouseenter: function () {
    btnNum.style.color = "#FFF";
    },
    mouseleave: function () {
    btnNum.style.color = "#15C8FF";
    }
    }, "#btnNum");
    
    $(document).on({
    mouseenter: function () {
    btnAlp.style.color = "#FFF";
    },
    mouseleave: function () {
    btnAlp.style.color = "#A3A5A8";
    }
    }, "#btnAlp");
    
    var i = 0;
    for(i = 0; i < $nob; i++){
        var Input = document.getElementById("addblk"+i+"Input");
        var Lbl = document.getElementById("addblk"+i+"Lbl");
        var Lgd = document.getElementById("addblk"+i+"Lgd");
        var Pic = document.getElementById("addblk"+i+"Pic");
        Lbl.style.borderColor = "#fff";
        Lgd.style.color = "#fff";
        Pic.src = "../images/IPMS UI Output 3 (10-01-20)-87.png";
        Input.value = i + 1;
    }
}

function autoEntryAlp($nob){
    var btnNum = document.getElementById("btnNum");
    var btnAlp = document.getElementById("btnAlp");
    
    btnAlp.style.color = "#FFF";
    btnAlp.style.borderColor = "#15C8FF";
    btnAlp.style.fontWeight = "bold";

    btnNum.style.color = "#A3A5A8";
    btnNum.style.borderColor = "#A3A5A8";
    btnNum.style.fontWeight = "normal";
    
    $(document).on({
    mouseenter: function () {
    btnAlp.style.color = "#FFF";
    },
    mouseleave: function () {
    btnAlp.style.color = "#15C8FF";
    }
    }, "#btnAlp");
    
    $(document).on({
    mouseenter: function () {
    btnNum.style.color = "#FFF";
    },
    mouseleave: function () {
    btnNum.style.color = "#A3A5A8";
    }
    }, "#btnNum");
    
    var alp = document.createElement("alp");
    var count = 0;
    var rep = 0;
    var alpCounter = 0;
    for(i = 0; i < $nob; i++){
        var Input = document.getElementById("addblk"+i+"Input");
        var Lbl = document.getElementById("addblk"+i+"Lbl");
        var Lgd = document.getElementById("addblk"+i+"Lgd");
        var Pic = document.getElementById("addblk"+i+"Pic");
        Lbl.style.borderColor = "#fff";
        Lgd.style.color = "#fff";
        Pic.src = "../images/IPMS UI Output 3 (10-01-20)-87.png";
        alp = (count+10).toString(36).toUpperCase();
        Input.value = alp;
        count++;
        for (j = 0; j < rep; j++){
            Input.value += alp;
        }
        alpCounter++;
        if (alpCounter == 26){
            alpCounter = 0;
            rep++;
            count = 0;
        }
    }
}

function showDialog($dialog){

    switch($dialog) {
        case 'devTwo':
            var dlgbg = document.getElementById("dlg-bg");
            var dlg = document.getElementById("dlgbox");
            dlgbg.style.display = "block";
            dlg.style.display = "block";

            var winWidth = window.innerWidth;
            var winHeight = window.innerHeight;

            dlg.style.left = (winWidth/2) - 350 + "px";
            dlg.style.top = "150px";
        break;
        case 'devFour':
            var dlgbg = document.getElementById("dlg-bg");
            var dlg = document.getElementById("dlgbox");
            dlgbg.style.display = "block";
            dlg.style.display = "block";

            var winWidth = window.innerWidth;
            var winHeight = window.innerHeight;

            dlg.style.left = (winWidth/2) - 350 + "px";
            dlg.style.bottom = "150px";
        break;
        case 'devSix':
            var dlgbg = document.getElementById("dlg-bg");
            var dlg = document.getElementById("dlgbox");
            dlgbg.style.display = "block";
            dlg.style.display = "block";

            var winWidth = window.innerWidth;
            var winHeight = window.innerHeight;

            dlg.style.left = (winWidth/2) - 350 + "px";
        break;
        case 'devDetSecurity':
            var dlgbg = document.getElementById("dlg-bg");
            var dlg = document.getElementById("dlgbox-security");
            dlgbg.style.display = "block";
            dlg.style.display = "block";

            var winWidth = window.innerWidth;
            var winHeight = window.innerHeight;

            dlg.style.left = (winWidth/2) - 350 + "px";
            dlg.style.bottom = "180px";
        break;
        case 'devDetManager':
            var dlgbg = document.getElementById("dlg-bg");
            var dlg = document.getElementById("dlgbox-manager");
            dlgbg.style.display = "block";
            dlg.style.display = "block";

            var winWidth = window.innerWidth;
            var winHeight = window.innerHeight;

            dlg.style.left = (winWidth/2) - 350 + "px";
            dlg.style.bottom = "180px";
        break;
        case 'devDetStaff':
            var dlgbg = document.getElementById("dlg-bg");
            var dlg = document.getElementById("dlgbox-staff");
            dlgbg.style.display = "block";
            dlg.style.display = "block";

            var winWidth = window.innerWidth;
            var winHeight = window.innerHeight;

            dlg.style.left = (winWidth/2) - 350 + "px";
            dlg.style.bottom = "180px";
        break;
        case 'blkDetFac':
            var selectFloor = document.getElementById("selectFloorF");
            selectFloor.options[0].selected = true;
            selectFloor.options.length = 1;
            var floorArray = arguments[1];
            for(var i=0; i < floorArray.length; i++)
            {
              floorArray[i] = new Option(floorArray[i][3], floorArray[i][0]);
              selectFloor.append(floorArray[i]);
            }
            
            var dlgbg = document.getElementById("dlg-bg");
            var dlg = document.getElementById("dlgbox-facility");
            dlgbg.style.display = "block";
            dlg.style.display = "block";

            modalWidth = dlg.offsetWidth;
            modalHeight = dlg.offsetHeight;

            var winWidth = window.innerWidth;
            var winHeight = window.innerHeight;

            dlg.style.left = (winWidth-modalWidth)/2 + "px";
            dlg.style.top = (winHeight-modalHeight)/2 + "px";
        break;
        case 'blkDetAsset':
            var selectFloor = document.getElementById("selectFloor");
            selectFloor.options[0].selected = true;
            selectFloor.options.length = 1;
            var floorArray = arguments[1];
            for(var j = 0; j < floorArray.length; j++)
            {
              floorArray[j] = new Option(floorArray[j][3], floorArray[j][0]);
              selectFloor.append(floorArray[j]);
            }
            
            var dlgbg = document.getElementById("dlg-bg");
            var dlg = document.getElementById("dlgbox-asset");
            dlgbg.style.display = "block";
            dlg.style.display = "block";

            modalWidth = dlg.offsetWidth;
            modalHeight = dlg.offsetHeight;

            var winWidth = window.innerWidth;
            var winHeight = window.innerHeight;

            dlg.style.left = (winWidth-modalWidth)/2 + "px";
            dlg.style.top = (winHeight-modalHeight)/2 + "px";
        break;
        case 'viewUser':
            var dlgbg = document.getElementById("dlg-bg");
            var dlg = document.getElementById("dlgbox-addInCharge");
            dlgbg.style.display = "block";
            dlg.style.display = "block";

            modalWidth = dlg.offsetWidth;
            modalHeight = dlg.offsetHeight;

            var winWidth = window.innerWidth;
            var winHeight = window.innerHeight;

            dlg.style.left = (winWidth-modalWidth)/2 + "px";
            dlg.style.top = (winHeight-modalHeight)/2 + "px";
        break;
        case 'chargeDialog':
            var dlgbg = document.getElementById("dlg-bg");
            var dlg = document.getElementById("dlgbox-charges");
            dlgbg.style.display = "block";
            dlg.style.display = "block";

            var winWidth = window.innerWidth;
            var winHeight = window.innerHeight;

            modalWidth = dlg.offsetWidth;
            modalHeight = dlg.offsetHeight;

            dlg.style.left = (winWidth-modalWidth)/2 + "px";
            dlg.style.top = (winHeight-modalHeight)/2 + "px";
        break;
        case 'due_dialog':
            var dlgbg = document.getElementById("dlg-bg");
            var dlg = document.getElementById("dlgbox-due");
            dlgbg.style.display = "block";
            dlg.style.display = "block";

            var winWidth = window.innerWidth;
            var winHeight = window.innerHeight;

            modalWidth = dlg.offsetWidth;
            modalHeight = dlg.offsetHeight;

            dlg.style.left = (winWidth-modalWidth)/2 + "px";
            dlg.style.top = (winHeight-modalHeight)/2 + "px";
        break;
        case 'password':
            var dlgbg = document.getElementById("dlg-bg");
            var dlg = document.getElementById("dlgbox-password");
            dlgbg.style.display = "block";
            dlg.style.display = "block";

            var winWidth = window.innerWidth;
            var winHeight = window.innerHeight;

            modalWidth = dlg.offsetWidth;
            modalHeight = dlg.offsetHeight;

            dlg.style.left = (winWidth-modalWidth)/2 + "px";
            dlg.style.top = (winHeight-modalHeight)/2 + "px";
        break;
    }
}

function dlgSubmit(){
    if ($("input:invalid").length) {
        var dlgbg = document.getElementById("dlg-bg");
        var dlg = document.getElementById("dlgbox");
        dlgbg.style.display = "none";
        dlg.style.display = "none";
    }
}

function dlgSubmit($dlg){
    var dlgbg = document.getElementById("dlg-bg");
    var dlgSecurity = document.getElementById("dlgbox-security");
    var dlgManager = document.getElementById("dlgbox-manager");
    var dlgStaff = document.getElementById("dlgbox-staff");
    var dlgFac = document.getElementById("dlgbox-facility");
    var dlgAsset = document.getElementById("dlgbox-asset");
    var dlgInCharge = document.getElementById("dlgbox-addInCharge");
    var dlg_due = document.getElementById("dlgbox-due");
    var dlgpass = document.getElementById("dlgbox-password");


    switch($dlg) {
        case 'devDetSecurity':
            if ($("input:invalid").length) {
                dlgbg.style.display = "none";
                dlgSecurity.style.display = "none";
            }
        break;
        case 'devDetManager':
            if ($("input:invalid").length) {
                dlgbg.style.display = "none";
                dlgManager.style.display = "none";
            }
        break;
        case 'devDetStaff':
            if ($("input:invalid").length) {
                dlgbg.style.display = "none";
                dlgStaff.style.display = "none";
            }
        break;
        case 'blkDetFac':
            if ($("input:invalid").length) {
                dlgbg.style.display = "none";
                dlgFac.style.display = "none";
            }
        break;
        case 'blkDetAsset':
            if ($("input:invalid").length) {
                dlgbg.style.display = "none";
                dlgAsset.style.display = "none";
            }
        break;
        case 'viewUser':
            if ($("input:invalid").length) {
                dlgbg.style.display = "none";
                dlgAsset.style.display = "none";
            }
        break;
        case 'due_soon':
            dlgbg.style.display = "none";
            dlg_due.style.display = "none";
        break;
        case 'cancelSecurity':
            $("#nameInput").val('');
            $("#compInput").val('');
            $("#dateInput").val('');
            dlgbg.style.display = "none";
            dlgSecurity.style.display = "none";
        break;
        case 'cancelManager':
          $("#hiddenMan").val('');
          $("#inputListM").val('');
          $("#selectBlkM").val('');
            dlgbg.style.display = "none";
            dlgManager.style.display = "none";
        break;
        case 'cancelStaff':
          $("#hiddenStaff").val('');
          $("#inputListS").val('');
          $("#selectBlkS").val('');
            dlgbg.style.display = "none";
            dlgStaff.style.display = "none";
      break;
      case 'cancelFacility':
          $("#new_fac").val('');
          $("#cat_fac").val('');
          $("#selectUnitF").val('');
            dlgbg.style.display = "none";
            dlgFac.style.display = "none";
      break;
      case 'cancelAsset':
          $("#new_asset").val('');
          $("#cat_asset").val('');
          $("#selectUnitA").val('');
          $("#spec").val('');
          $("#quan").val('');
          $("#purchase").val('');
          $("#remark").val('');
            dlgbg.style.display = "none";
            dlgAsset.style.display = "none";
      break;
      case 'cancelView':
          $("#selectDev").val('');
          $("#selectBlk").val('');
          $("#selectUnit").val('');
            dlgbg.style.display = "none";
            dlgInCharge.style.display = "none";
      break;
      case 'cancelPass':
            dlgbg.style.display = "none";
            dlgpass.style.display = "none";
      break;
    }
}

function formDialog($userID){
	$("#send-to").val($userID);
    $("#approvalForm")
	var dlgbg = document.getElementById("dlg-bg");
            var dlg = document.getElementById("dlgbox");
            dlgbg.style.display = "block";
            dlg.style.display = "block";

            var winWidth = window.innerWidth;
            var winHeight = window.innerHeight;

            dlg.style.left = (winWidth/2) - 350 + "px";
            dlg.style.top = "150px";
}//permission dialog



function sideNavHover(){
    var dshPic = document.getElementById("dshPic");
    var rPic = document.getElementById("rPic");
    var omPic = document.getElementById("omPic");
    var mntPic = document.getElementById("mntPic");
    var cPic = document.getElementById("cPic");
    var soaPic = document.getElementById("soaPic");
    var gsPic = document.getElementById("gsPic");
    var usrPic = document.getElementById("usrPic");
    
    $(document).on({
    mouseenter: function () {
    dshPic.src = "../images/IPMS UI Output 3 (10-01-20)-30.png";
    },
    mouseleave: function () {
    dshPic.src = "../images/IPMS UI Output 3 (10-01-20)-31.png";
    }
    }, "#dshPicLink");

    $(document).on({
    mouseenter: function () {
    rPic.src = "../images/IPMS UI Output 3 (10-01-20)-34.png";
    },
    mouseleave: function () {
    rPic.src = "../images/IPMS UI Output 3 (10-01-20)-35.png";
    }
    }, "#r");
    
    $(document).on({
    mouseenter: function () {
    omPic.src = "../images/IPMS UI Output 3 (10-01-20)-36.png";
    },
    mouseleave: function () {
    omPic.src = "../images/IPMS UI Output 3 (10-01-20)-37.png";
    }
    }, "#om");

    $(document).on({
    mouseenter: function () {
    mntPic.src = "../images/IPMS UI Output 3 (10-01-20)-38.png";
    },
    mouseleave: function () {
    mntPic.src = "../images/IPMS UI Output 3 (10-01-20)-39.png";
    }
    }, "#mnt");

    $(document).on({
    mouseenter: function () {
    cPic.src = "../images/IPMS UI Output 3 (10-01-20)-40.png";
    },
    mouseleave: function () {
    cPic.src = "../images/IPMS UI Output 3 (10-01-20)-41.png";
    }
    }, "#c");

    $(document).on({
    mouseenter: function () {
    soaPic.src = "../images/IPMS UI Output 3 (10-01-20)-32.png";
    },
    mouseleave: function () {
    soaPic.src = "../images/IPMS UI Output 3 (10-01-20)-33.png";
    }
    }, "#soa");

    $(document).on({
    mouseenter: function () {
    gsPic.src = "../images/IPMS UI Output 3 (10-01-20)-42.png";
    },
    mouseleave: function () {
    gsPic.src = "../images/IPMS UI Output 3 (10-01-20)-43.png";
    }
    }, "#gs");

    $(document).on({
    mouseenter: function () {
    usrPic.src = "../images/IPMS UI Output 3 (10-01-20)-52.png";
    },
    mouseleave: function () {
    usrPic.src = "../images/IPMS UI Output 3 (10-01-20)-50.png";
    }
    }, "#username");
}

function devThreePadding(){
    $(".labels").css("padding-right", "15%");
}

function devFourPadding(){
    $(".regFourSpace").css({"padding-top": "10%", "padding-bottom": "10%", "padding-left": "8%", "padding-right": "15%"});
}

function devFivePadding(){
    $(".regFiveSpace").css({"padding-top": "10%", "padding-bottom": "10%", "padding-left": "8%", "padding-right": "15%"});
}

function colorChange(){
    if(document.getElementById("addInput") !=null && 
    document.getElementById("addLbl") !=null && 
    document.getElementById("addLgd") !=null && 
    document.getElementById("addPic") !=null){
        var addInput = document.getElementById("addInput");
        var addLbl = document.getElementById("addLbl");
        var addLgd = document.getElementById("addLgd");
        var addPic = document.getElementById("addPic");

        if(addInput.value.length > 0){
            addLbl.style.borderColor = "#fff";
            addLgd.style.color = "#fff";
            addPic.src = "../images/IPMS UI Output 1 (24-09-19)-34.png";
        }
    }
    
    if(document.getElementById("nameInput") !=null && 
    document.getElementById("nameLbl") !=null && 
    document.getElementById("nameLgd") !=null && 
    document.getElementById("namePic") !=null){
        var nameInput = document.getElementById("nameInput");
        var nameLbl = document.getElementById("nameLbl");
        var nameLgd = document.getElementById("nameLgd");
        var namePic = document.getElementById("namePic");

        if(nameInput.value.length > 0){
            nameLbl.style.borderColor = "#fff";
            nameLgd.style.color = "#fff";
            namePic.src = "../images/IPMS UI Output 3 (10-01-20)-63.png";
        }
    }
    
    if(document.getElementById("nobInput") !=null && 
    document.getElementById("nobLbl") !=null && 
    document.getElementById("nobLgd") !=null && 
    document.getElementById("nobPic") !=null){
        var nobInput = document.getElementById("nobInput");
        var nobLbl = document.getElementById("nobLbl");
        var nobLgd = document.getElementById("nobLgd");
        var nobPic = document.getElementById("nobPic");

        if(nobInput.value.length > 0){
            nobLbl.style.borderColor = "#fff";
            nobLgd.style.color = "#fff";
            nobPic.src = "../images/IPMS UI Output 3 (10-01-20)-87.png";
        }
    }
    
    if(document.getElementById("unitformatInput") !=null && 
    document.getElementById("unitformatLbl") !=null && 
    document.getElementById("unitformatLgd") !=null){
        var unitformatInput = document.getElementById("unitformatInput");
        var unitformatLbl = document.getElementById("unitformatLbl");
        var unitformatLgd = document.getElementById("unitformatLgd");

        if(unitformatInput.value.length > 0){
            unitformatInput.style.fontWeight = "bold";
            unitformatLbl.style.borderColor = "#fff";
            unitformatLgd.style.color = "#fff";
        }
    }
    
    if(document.getElementById("nobSess") !=null){
        var nobSess = document.getElementById("nobSess").value;
        for (i=0; i < nobSess; i++){
            if(document.getElementById("addblk"+i+"Input") !=null && 
            document.getElementById("addblk"+i+"Lbl") !=null){
                var addblkInput = document.getElementById("addblk"+i+"Input");
                var addblkLbl = document.getElementById("addblk"+i+"Lbl"); 
                if(addblkInput.value.length > 0){
                    addblkLbl.style.borderColor = "#fff";
                    addblkLbl.style.color = "#fff";
                }
            }
            else if(document.getElementById("flrno"+i+"Input") !=null && 
            document.getElementById("flrno"+i+"Lbl") !=null){
                var flrnoInput = document.getElementById("flrno"+i+"Input");
                var flrnoLbl = document.getElementById("flrno"+i+"Lbl"); 
                if(flrnoInput.value.length > 0){
                    flrnoLbl.style.borderColor = "#fff";
                    flrnoLbl.style.color = "#fff";
                }
            }
        }
    }
}

var unitArray = [];
function unitSettings($settings, $regTwo){
    var nobSess = document.getElementById("nobSess").value;
    if (nobSess <= 5){
        var nobVal = nobSess;
    } else if (nobSess > 5){
        var nobVal = 5;
    }
    var unitformatInput = document.getElementById("unitformatInput");
    var unitformatLbl = document.getElementById("unitformatLbl");
    var unitformatLgd = document.getElementById("unitformatLgd");
    unitformatInput.style.fontWeight = "bold";
    unitformatInput.style.color = "#fff";
    unitformatLbl.style.borderColor = "#fff";
    unitformatLbl.style.color = "#fff";
    unitformatLgd.style.color = "#fff";
    var input = document.getElementById("dlgunitInput").value;
    var dlgbg = document.getElementById("dlg-bg");
    var dlg = document.getElementById("dlgbox");
    var dlgunitLbl = document.getElementById("dlgunitLbl");
    switch($settings) {
        case 'blkno':
            unitArray.push('{Block Name}');
            break;
        case 'flrno':
            unitArray.push('{Floor Name}');
            break; 
        case 'abc':
            unitArray.push('{A,B,C...}');
            break;
        case '123':
            unitArray.push('{1,2,3...}');
            break;
        case 'input':
            if(input == ""){
            alert("Input field cannot be empty");
            break;
            } else {
            unitArray.push(input);
            $("#dlgunitInput").val("");
            dlgbg.style.display = "none";
            dlg.style.display = "none";
            dlgunitLbl.style.borderColor = "#A3A5A8";
            break;
            }
        case 'cancel':
            $("#dlgunitInput").val("");
            dlgbg.style.display = "none";
            dlg.style.display = "none";
            dlgunitLbl.style.borderColor = "#A3A5A8";
            break; 
        case 'backspace':
            unitArray.pop(); 
            break;  
    }
    
    switch($regTwo) {
        case '1':
            var unitDisp = "";
            var flrno = document.getElementById("flrno").value;
            
            for(i=0; i<nobVal; i++){
                for(j=0; j<flrno; j++){
                    $("#cell"+i+j).text("");
                }
            }
            
            for(m=0; m<unitArray.length; m++){
                unitDisp = unitDisp + unitArray[m];
                for(i=0; i<nobVal; i++){
                    var blkname = document.getElementById("blkname"+i).value;
                    var count = 0;
                    var rep = 1;
                    var alpCounter = 0;
                    for(j=0; j<flrno; j++){
                        if(unitArray[m] == '{Block Name}'){
                            $("#cell"+i+j).append(blkname);
                        } else if(unitArray[m] == '{Floor Name}'){
                            var flrname = document.getElementById("flrname"+i+j).value;
                            $("#cell"+i+j).append(flrname);
                        } else if(unitArray[m] == '{A,B,C...}'){
                            var chr = String.fromCharCode(65 + count);
                            count++;
                            for (k=0; k<rep; k++){
                                $("#cell"+i+j).append(chr); 
                            }
                            alpCounter++;
                            if (alpCounter == 26){
                                alpCounter = 0;
                                rep++;
                                count = 0;
                            }
                        } else if(unitArray[m] == '{1,2,3...}'){
                            $("#cell"+i+j).append(j+1);
                        } else {
                            $("#cell"+i+j).append(unitArray[m]);
                        }
                    }
                }
            }
            $("#unitformatInput").val(unitDisp);
            
            break;
        case '2':
            var unitDisp = "";
            
            for(i=0; i<nobVal; i++){
                var flrno = document.getElementById("flrno"+i).value;
                for(j=0; j<flrno; j++){
                    $("#cell"+i+j).text("");
                }
            }
            
            for(m=0; m<unitArray.length; m++){
                unitDisp = unitDisp + unitArray[m];
                for(i=0; i<nobVal; i++){
                    var blkname = document.getElementById("blkname"+i).value;
                    var flrno = document.getElementById("flrno"+i).value;
                    var count = 0;
                    var rep = 1;
                    var alpCounter = 0;
                    for(j=0; j<flrno; j++){
                        if(unitArray[m] == '{Block Name}'){
                            $("#cell"+i+j).append(blkname);
                        } else if(unitArray[m] == '{Floor Name}'){
                            var flrname = document.getElementById("flrname"+i+j).value;
                            $("#cell"+i+j).append(flrname);
                        } else if(unitArray[m] == '{A,B,C...}'){
                            var chr = String.fromCharCode(65 + count);
                            count++;
                            for (k=0; k<rep; k++){
                                $("#cell"+i+j).append(chr); 
                            }
                            alpCounter++;
                            if (alpCounter == 26){
                                alpCounter = 0;
                                rep++;
                                count = 0;
                            }
                        } else if(unitArray[m] == '{1,2,3...}'){
                            $("#cell"+i+j).append(j+1);
                        } else {
                            $("#cell"+i+j).append(unitArray[m]);
                        }
                    }
                }
            }
            $("#unitformatInput").val(unitDisp);
            break;
    }
    var resetNum = document.getElementById("resetNum");
    var input = document.getElementById("unitformatInput").value;
    var num = "{Floor Name}";
    var cbResetNum = document.getElementById("cbResetNum");
    
    if(input.includes(num)){
        resetNum.style.display = "block";
    } else {
        resetNum.style.display = "none";
        cbResetNum.checked = false;
    }
}

function prevEnter(){
    $('#devTwoForm').keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
    });
    
    $('#devFourForm').keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
    });
    
    $('#devSixForm').keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
    });
    
    $('#devDet').keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
    });
}

function readonlyregSix(){
    $('#unitformatInput').keypress(function(e) {
        e.preventDefault();
    });
}

function printInv(){
    $('#printInv').click(function(){
        var grid = document.getElementById('tbody');
        var checkBoxes = grid.getElementsByTagName('INPUT');
		
		for (var i = 0; i < checkBoxes.length; i++) {
			if(checkBoxes[i].checked == false){
				var row = checkBoxes[i].parentNode.parentNode;
				row.style.display = "none";
			}
		}
        
        var delHead = document.getElementById('lastColHead');
        var del = document.getElementsByClassName('lastCol');
        var inv = document.getElementsByClassName('invoice');
        delHead.style.display = "none";
        for(var i=0; i<del.length; i++){
        del[i].style.display = "none";
        }
        for(var i=0; i<inv.length; i++){
        inv[i].style.display = "table-row";
        }
        var printme = document.getElementById('dataTableInv');
        var wme = window.open("","","width=900,height=700");
        wme.document.write(printme.outerHTML);
        wme.document.close();
        delHead.style.display = "table-cell";
        for(var i=0; i<del.length; i++){
        del[i].style.display = "table-cell";
        }
        for(var i=0; i<inv.length; i++){
        inv[i].style.display = "none";
        }
        wme.focus();
        wme.print();
        wme.close();
        location.reload();
    })
}


 function readURL(input) {
	if (input.files && input.files[0]) {
		var reader = new FileReader();

		reader.onload = function (e) {
			$('#image')
				.attr('src', e.target.result)
				.width(150)
				.height(200);
		};

		reader.readAsDataURL(input.files[0]);
	}
}

function checkAll(source) {
	checkboxes = document.getElementsByName('check');
	for(var i = 0; i < checkboxes.length; i++)
	{
		checkboxes[i].checked = source.checked;
	}
}

function compareDateMnT() { //for Service Contract - Vaneesha 
    var start_date = document.getElementById("start_date").value;
    var expiry_date = document.getElementById("expiry_date").value;

    if(start_date > expiry_date)
    {
      alert("'Expiry Date' must be later than 'Start Date'"); 
      $("input[id=expiry_date]").val("");
    }
}

//SEARCH

var $rows = $('#tbody tr');
$('#search').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
    
    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});

function regSixResetNum(){
    $("#resetNum").css("display", "none");
}

function convertDate(d) {
	var len = d.split(/[\s:-]+/).length -1;
	var p = d.split(/[\s:-]+/);
	if(len <= 3)
	{
		return +(p[2]+p[1]+p[0]);
	}
	else if(len = 4)
	{
		return +(p[2]+p[1]+p[0]+p[3]+p[4]);
	}
	else
		return +(p[2]+p[1]+p[0]+p[3]+p[4]+p[5]);
}

var asc = true;

function sortByDateAsc(loc) {
	var tbody = document.querySelector("#dataTable tbody");
	var rows = [].slice.call(tbody.querySelectorAll("tr"));

	rows.sort(function(a,b) {
	return convertDate(a.cells[loc].innerHTML) - convertDate(b.cells[loc].innerHTML);
	});

	rows.forEach(function(v) {
	tbody.append(v);
	});
	asc = false;
}

function sortByDateDsc(loc) {
	var tbody = document.querySelector("#dataTable tbody");
	var rows = [].slice.call(tbody.querySelectorAll("tr"));

	rows.sort(function(a,b) {
	return convertDate(b.cells[loc].innerHTML) - convertDate(a.cells[loc].innerHTML);
	});

	rows.forEach(function(v) {
	tbody.append(v);
	});
	asc = true;
}

function toggleSort(loc)
{
	asc ? sortByDateAsc(loc) : sortByDateDsc(loc);
}

//SORT FILE LINK NAME
function sortNameWFile(tableClass, n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;

  table = document.getElementsByClassName(tableClass)[0];
  switching = true;
  dir = "asc";
  while (switching) {
      switching = false;
      rows = table.getElementsByTagName("TR");
      for (i = 1; i < (rows.length - 1); i++) {
          shouldSwitch = false;
          x = rows[i].getElementsByTagName("A")[0];
          y = rows[i + 1].getElementsByTagName("A")[0];
          var xContent = (isNaN(x.innerHTML)) 
              ? (x.innerHTML.toLowerCase() === '-')
                    ? 0 : x.innerHTML.toLowerCase()
              : parseFloat(x.innerHTML);
          var yContent = (isNaN(y.innerHTML)) 
              ? (y.innerHTML.toLowerCase() === '-')
                    ? 0 : y.innerHTML.toLowerCase()
              : parseFloat(y.innerHTML);
          if (dir == "asc") {
              if (xContent > yContent) {
                  shouldSwitch= true;
                  break;
              }
          } else if (dir == "desc") {
              if (xContent < yContent) {
                  shouldSwitch= true;
                  break;
              }
          }
      }
      if (shouldSwitch) {
          rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
          switching = true;
          switchcount ++;      
      } else {
          if (switchcount == 0 && dir == "asc") {
              dir = "desc";
              switching = true;
          }
      }
   }
}

var TableLastSortedColumn = -1;
function sortTable() {
	var TableIDvalue = arguments[0];
	var sortColumn = parseInt(arguments[1]);
	var type = arguments.length > 2 ? arguments[2] : 'T';
	var dateformat = arguments.length > 3 ? arguments[3] : '';
	var table = document.getElementById(TableIDvalue);
	var tbody = table.getElementsByTagName("tbody")[0];
	var rows = tbody.getElementsByTagName("tr");
	var arrayOfRows = new Array();
	type = type.toUpperCase();
	dateformat = dateformat.toLowerCase();
	for(var i=0, len=rows.length; i<len; i++) {
		arrayOfRows[i] = new Object;
		arrayOfRows[i].oldIndex = i;
		var celltext = rows[i].getElementsByTagName("td")[sortColumn].innerHTML.replace(/<[^>]*>/g,"");
		if( type=='D' ) { arrayOfRows[i].value = GetDateSortingKey(dateformat,celltext); }
		else {
			var re = type=="N" ? /[^\.\-\+\d]/g : /[^a-zA-Z0-9]/g;
			arrayOfRows[i].value = celltext.replace(re,"").substr(0,25).toLowerCase();
			}
		}
	if (sortColumn == TableLastSortedColumn) { arrayOfRows.reverse(); }
	else {
		TableLastSortedColumn = sortColumn;
		switch(type) {
			case "N" : arrayOfRows.sort(CompareRowOfNumbers); break;
			case "D" : arrayOfRows.sort(CompareRowOfNumbers); break;
			default  : arrayOfRows.sort(CompareRowOfText);
			}
		}
	var newTableBody = document.createElement("tbody");
	for(var i=0, len=arrayOfRows.length; i<len; i++) {
		newTableBody.appendChild(rows[arrayOfRows[i].oldIndex].cloneNode(true));
    }
  table.replaceChild(newTableBody,tbody);
  newTableBody.setAttribute("id", "tbody");
}

function CompareRowOfText(a,b) {
	var aval = a.value;
	var bval = b.value;
	return( aval == bval ? 0 : (aval > bval ? 1 : -1) );
}

function CompareRowOfNumbers(a,b) {
	var aval = /\d/.test(a.value) ? parseFloat(a.value) : 0;
	var bval = /\d/.test(b.value) ? parseFloat(b.value) : 0;
	return( aval == bval ? 0 : (aval > bval ? 1 : -1) );
}

function GetDateSortingKey(format,text) {
	if( format.length < 1 ) { return ""; }
	format = format.toLowerCase();
	text = text.toLowerCase();
	text = text.replace(/^[^a-z0-9]*/,"");
	text = text.replace(/[^a-z0-9]*$/,"");
	if( text.length < 1 ) { return ""; }
	text = text.replace(/[^a-z0-9]+/g,",");
	var date = text.split(",");
	if( date.length < 3 ) { return ""; }
	var d=0, m=0, y=0;
	for( var i=0; i<3; i++ ) {
		var ts = format.substr(i,1);
		if( ts == "d" ) { d = date[i]; }
		else if( ts == "m" ) { m = date[i]; }
		else if( ts == "y" ) { y = date[i]; }
		}
	d = d.replace(/^0/,"");
	if( d < 10 ) { d = "0" + d; }
	if( /[a-z]/.test(m) ) {
		m = m.substr(0,3);
		switch(m) {
			case "jan" : m = String(1); break;
			case "feb" : m = String(2); break;
			case "mar" : m = String(3); break;
			case "apr" : m = String(4); break;
			case "may" : m = String(5); break;
			case "jun" : m = String(6); break;
			case "jul" : m = String(7); break;
			case "aug" : m = String(8); break;
			case "sep" : m = String(9); break;
			case "oct" : m = String(10); break;
			case "nov" : m = String(11); break;
			case "dec" : m = String(12); break;
			default    : m = String(0);
			}
		}
	m = m.replace(/^0/,"");
	if( m < 10 ) { m = "0" + m; }
	y = parseInt(y);
	if( y < 100 ) { y = parseInt(y) + 2000; }
	return "" + String(y) + "" + String(m) + "" + String(d) + "";
}

function compareDateIns() { //for Service Contract - Vaneesha 
  var service_date = document.getElementById("service_date").value;
  var expiry_date = document.getElementById("expiry_date").value;

  if(service_date > expiry_date)
  {
    alert("'Expiry Date' must be later than 'Service Date'"); 
    $("input[id=end_date]").val("");
  }
}

function compareDateAgr() { //for Service Contract - Vaneesha 
  var start_date = document.getElementById("start_date").value;
  var expiry_date = document.getElementById("expiry_date").value;

  if(start_date > expiry_date)
  {
    alert("'Expiry Date' must be later than 'Start Date'"); 
    $("input[id=end_date]").val("");
  }
}

function compareDateLie() { //for Service Contract - Vaneesha 
  var commence_date = document.getElementById("commence_date").value;
  var expiry_date = document.getElementById("expiry_date").value;

  if(commence_date > expiry_date)
  {
    alert("'Expiry Date' must be later than 'Commence Date'"); 
    $("input[id=end_date]").val("");
  }
}

function getDataValue(txt_input, data_list_options, hidden_input) 
{
  var shownVal = document.getElementById(txt_input).value;
  var value2send = document.querySelector("#" + data_list_options + " option[value='" + shownVal + "']").dataset.value;
  $('#' + hidden_input).val(value2send);
}


$(function(){
    $('#selectCat').on('change', function(){
        var val = $(this).val();
        var sub = $('#selectFac');
		if(val === 'Pick')
		{
			$('#facLbl').parent().hide();
		}
		else
		{
			$('#facLbl').parent().show();
			$('option', sub).filter(function(){
				if ($(this).attr('data-group') === val) 
				{
				  if ($(this).parent('span').length) 
				  {
					$(this).unwrap();
				  }
				} else {
				  if (!$(this).parent('span').length) 
				  {
					$(this).wrap( "<span>" ).parent().hide();
				  }
				}
			});
		}
    });
    $('#selectCat').trigger('change');
});

function toggleFloor(id)
{
  $('#floor-' + id).slideToggle();
  $("div[id*='floor']").not('#floor-'+ id).slideUp();
}

$(document).ready(function () {
  $("div[id*='floor']").slideUp();
});

//Location List

$(function(){
  $('#selectFlrA').on('change', function(){
      var val = $('#selectDev').val();
      var sub = $('#selectLoc');
      
  if(val === '')
  {
    $('#locLbl').parent().hide();
  }
  else
  {
    $('#locLbl').parent().show();
    $('option', sub).filter(function(){
      if ($(this).attr('data-group') === val || $(this).attr('data-group') === '') 
      {
        if ($(this).parent('span').length) 
        {
        $(this).unwrap();
        }
      } else {
        if (!$(this).parent('span').length) 
        {
        $(this).wrap( "<span>" ).parent().hide();
        }
      }
    });
  }
  });
  $('#selectFlrA').trigger('change');
});

$(function(){
  $(document).ready(function(){
      var val = $('#cDev').val();
      var sub = $('#selectLoc');
      
  if(val === '')
  {
    $('#locLbl').parent().hide();
  }
  else
  {
    $('#locLbl').parent().show();
    $('option', sub).filter(function(){
      if ($(this).attr('data-group') === val || $(this).attr('data-group') === '') 
      {
        if ($(this).parent('span').length) 
        {
        $(this).unwrap();
        }
      } else {
        if (!$(this).parent('span').length) 
        {
        $(this).wrap( "<span>" ).parent().hide();
        }
      }
    });
  }
  });
  $('#selectFlrA').trigger('change');
});

$('#selectLoc').change(function() {

    var floor = $('#selectFlrA').val();
    var location = $('#selectLoc').val();
    var code = document.getElementById('#loc');

    code.val(floor + '-' + location);

});


function locationCode() {
    var selectedFloor = $('#selectFlrA').find(':selected');
    var floor = selectedFloor.html();
    var selectedLocation = $('#selectLoc').find(':selected');
    var location = selectedLocation.attr("data-code");

    if(selectedFloor.value = '')
    {
      document.getElementById('loc').value = '';
    }
    else{
      document.getElementById('loc').value = floor + '-' + location;

    }

}

function locationCodeDetail() {
  var selectedFloor = $('#selectFloor').find(':selected');
  var floor = selectedFloor.html();
  var selectedLocation = $('#selectLoc').find(':selected');
  var location = selectedLocation.attr("data-code");

  if(selectedFloor.value = '')
  {
    document.getElementById('loc').value = '';
  }
  else{
    document.getElementById('loc').value = floor + '-' + location;

  }

}

function performDialog(id){
	$("#item-id").val(id);
    $("#performForm")
	var dlgbg = document.getElementById("dlg-bg");
  var dlg = document.getElementById("dlgbox");
  dlgbg.style.display = "block";
  dlg.style.display = "block";

  var modalWidth = dlg.offsetWidth;
  var modalHeight = dlg.offsetHeight;

  var winWidth = window.innerWidth;
  var winHeight = window.innerHeight;

  dlg.style.left = (winWidth-modalWidth)/2 + "px";
  dlg.style.bottom = (winHeight-modalHeight)/2 + "px";
}

function replyDialog(id, reply){
  $("#feed-id").val(id);
  $("#reply").val(reply);
    $("#replyForm")
	var dlgbg = document.getElementById("dlg-bg");
  var dlg = document.getElementById("dlgbox");
  dlgbg.style.display = "block";
  dlg.style.display = "block";

  var modalWidth = dlg.offsetWidth;
  var modalHeight = dlg.offsetHeight;

  var winWidth = window.innerWidth;
  var winHeight = window.innerHeight;

  dlg.style.left = (winWidth-modalWidth)/2 + "px";
  dlg.style.bottom = (winHeight-modalHeight)/2 + "px";
}

function worDialog(id, reply, sId, sName, quot, photo, pay){
  $("#wor-id").val(id);
  $("#remark").val(reply);
  $('#inputListS').val(sName);
  $('#currentId').val(sId);
  $('#quotation').val(quot);
  $('photo').val(photo);
  $('paystatus').val(pay);
    $("#worForm")
	var dlgbg = document.getElementById("dlg-bg");
  var dlg = document.getElementById("dlgbox-wor");
  dlgbg.style.display = "block";
  dlg.style.display = "block";

  var modalWidth = dlg.offsetWidth;
  var modalHeight = dlg.offsetHeight;

  var winWidth = window.innerWidth;
  var winHeight = window.innerHeight;

  dlg.style.left = (winWidth-modalWidth)/2 + "px";
  dlg.style.top = (winHeight-modalHeight)/2 + "px";
}

function editDetails()
{
  $('#editButton').css("display","none");
  $('#submitButton').css("display","block");
  $('#nameSpan').css("display", "none");
  $('#addSpan').css("display", "none");
  $('#devName').css("display","block");
  $('#devAdd').css("display","block");
}

function closeEdit()
{
  $('#editButton').css("display","block");
  $('#submitButton').css("display","none");
  $('#nameSpan').css("display", "block");
  $('#addSpan').css("display", "block");
  $('#devName').css("display","none");
  $('#devAdd').css("display","none");
}

;( function ( document, window, index )
{
	var inputs = document.querySelectorAll( '.inputfile' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				label.querySelector( 'span' ).innerHTML = fileName;
			else
				label.innerHTML = labelVal;
		});

		// Firefox bug fix
		input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
		input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
	});
}( document, window, 0 ));

function close()
{
  $('#remark').val("");
  $('#dlg-bg').css("display","none");
  $('#dlgbox-wor').css("display","none");
}

function alloc(flag) {
  if(flag == '0')
  {
    $('#allocUnits').attr("readonly", "readonly");
    $('#allocUnits').removeAttr('required');

  } else if (flag == '1')
  {
    $('#allocUnits').removeAttr('readonly');
    $('#allocUnits').attr("required", "required");
  }
}

  
function editShare()
{
  $('#editButton').css("display","none");
  $('#submitButton').css("display","block");

  $('#showDiv').css("display","none");
  $('#hideDiv').css("display","block");
}

function closeShare()
{
  $('#editButton').css("display","block");
  $('#submitButton').css("display","none");

  $('#showDiv').css("display","block");
  $('#hideDiv').css("display","none");
}

$(document).ready(function() {
  $("input[name$='entry']").click(function() {
    if($(this).val() == "Loading Bay")
    {
      $('#carreg').show();
    } else
    {
      $('#carreg').hide();
    }
    
  })
})

$(document).ready(function(){  

  var i = $('#charge-setup-table tr').length - 1;

  $('#add').click(function(){ 
        lastRow = $('#charge-setup-table tr:last').find('input[id*="to-"]').val();
        rowVal = parseInt(lastRow) + 1;
        if(isNaN(rowVal))
        {
          newRowVal = "";
        }
        else {
          newRowVal = rowVal;
        }
       $('#charge-setup-table').append('<tr id="row'+i+'"><td><input type="text" value="'+newRowVal+'" name="from[]" id="from-'+i+'" placeholder="From" class="allInput" /></td><td><input type="text" name="to[]" id="to-'+i+'" placeholder="To" oninput="nextValue(this)" class="allInput" /></td><td><input type="text" name="rate[]" id="rate-'+i+'" placeholder="Rate" class="allInput" /></td><td><button type="button" name="remove" id="'+i+'" class="btn_remove"><img src="../images/trash.png" class="smicon" /></button></td></tr>');  
       i++;

  });  
  $(document).on('click', '.btn_remove', function(){  
       var button_id = $(this).attr("id");   
       $('#row'+button_id+'').remove();
  });  
  $('#submit_water').click(function(){            
    $.ajax({  
         url:"water_setup.php",  
         method:"POST",  
         data:$('#ew_charges').serialize(),  
         success:function(data)  
         {  
          if(data == "")
          {
           document.location.href = 'charges_setup.php';
          }
           else {
             alert(data);
           }  
        } 
    });  
}); 
}); 

$(document).ready(function(){  

  var i = $('#tax-setup-table tr').length - 1;
  var u = $('#ucat-setup-table tr').length - 1;
  var p = $('#perform-log-table tr').length - 1;

  $('#add').click(function(){
       $('#tax-setup-table').append('<tr id="row'+i+'"><td><input type="text" value="'+newRowVal+'" name="name[]" id="name-'+i+'" placeholder="Name" class="allInput" required/></td><td><input type="text" name="code[]" id="code-'+i+'" placeholder="Code" class="allInput" required/></td><td><input type="number" name="rate[]" id="rate-'+i+'" placeholder="Rate" class="allInput" required/></td><td><button type="button" name="remove" id="'+i+'" class="btn_remove"><img src="../images/trash.png" class="smicon" /></button></td></tr>');
       $('#ucat-setup-table').append('<tr id="row'+u+'"><td><input type="text" value="'+newRowVal+'" name="name[]" id="name-'+u+'" placeholder="Name" class="allInput" required/></td><td><input type="text" name="code[]" id="code-'+u+'" placeholder="Code" class="allInput" required/></td><td><button type="button" name="remove" id="'+u+'" class="btn_remove"><img src="../images/trash.png" class="smicon" /></button></td></tr>');  
       $('#perform-log-table').append('<tr id="row'+p+'"> <td><input type="date" name="datevisit[]" class="allInput" required></td><td> <select name="perform[]" class="allInput allSelect" required> <option value="">Select an option</option> <option>No</option> <option>Yes</option> </select> </td><td><input type="text" class="allInput" name="remarks[]" placeholder="Remarks"></td><td><button type="button" name="remove" id="'+p+'" class="btn_remove"><img src="../images/trash.png" class="smicon" /></button></td></tr>');  
       u++;
       i++;
       p++;

  });  
  $(document).on('click', '.btn_remove', function(){  
       var button_id = $(this).attr("id");   
       $('#row'+button_id+'').remove();
  });  
});


function nextValue(obj) {
  var nextFrom = $(obj).closest('tr').next('tr').find('input[id*="from-"]');
  newValue = parseInt(obj.value) + 1;
  nextFrom.val(newValue);
}

function displayBlocks(devid)
{
  $.ajax({
    type: 'post',
    url: 'get_dev.php',
    data: {
     dev_id:devid
    },
    success: function (response) {
     document.getElementById("display-block").innerHTML=response;
     document.getElementById("container-none").style.display = 'block'; 
    }
    });
}

$(document).ready(function () {
  $('#checkBtn').click(function() {
    checked = $("input[type=checkbox]:checked").length;

    if(!checked) {
      alert("You must check at least one checkbox.");
      return false;
    }

  });
});

function get_unit(blockid)
{
  $.ajax({
    type: 'post',
    url: 'get_unit.php',
    data: {
     block_id:blockid
    },
    success: function (response) {
     document.getElementById("selectUnit").innerHTML=response;
     document.getElementById("selectUnitTo").innerHTML=response;
    }
    });
}

function get_electric_multiple(catid)
{
  var blockid = $('#selectBlk').val();
  var unit_from = $('#selectUnit').val();
  var unit_to = $('#selectUnitTo').val();

  $.ajax({
    type: 'post',
    url: 'get_electric_multiple.php',
    data: {
      catid:catid,
     from:unit_from,
     to:unit_to,
     block_id:blockid
    },
    success: function (response) {
     document.getElementById("meter_details_all").innerHTML=response;
    }
    });
}

function showElectric(unitid, catid)
{
  $.ajax({
    type: 'post',
    url: 'get_electric_single.php',
    data: {
      catid:catid,
     unit_id:unitid
    },
    success: function (response) {
     document.getElementById("meter_details").innerHTML=response;
    }
    });
}

function calculateCost(obj, from, to, rate, min) {
  var tax = $('#selTax').find(':selected').data('value');
  var nextConsumed = $(obj).closest('td').next('td').find('input[id^="consumed"]');
  var prevMeter = $(obj).closest('td').prev('td').find('input[id^="prev_meter"]');
  var cost = $(obj).closest('td').next('td').next('td').find('input[id^="cost"]');
  var total = $(obj).closest('td').next('td').next('td').next('td').find('input[id^="total"]');

  consumedVal = $(obj).val() - prevMeter.val();
  nextConsumed.val(consumedVal);

  var totalcost = 0;
  var newConsumed = 0;
  var totalall = 0;

  if($(obj).val() == '')
  {
    nextConsumed.val('');
    cost.val('');
  } else {
    for(i = 0; i < from.length; i++)
    {
      if(from[i] == 0)
      {
        currentrange = to[i] - from[i];
      } else {
        currentrange = to[i] - from[i] + 1;
      }
  
      if(consumedVal >= currentrange)
      {
        subtotal = currentrange * rate[i];
        consumedVal = consumedVal - currentrange;
      } else {
        subtotal = consumedVal * rate[i];
        consumedVal = 0;
      }
  
      totalcost = totalcost + subtotal;
  
    }
    
    if(totalcost < min)
    {
      totalall = min + (min*(tax/100));
      cost.val(min.toFixed(2));
      total.val(totalall.toFixed(2));
    } else {
      totalall = totalcost + (totalcost*(tax/100));
      cost.val(totalcost.toFixed(2));
      total.val(totalall.toFixed(2));
    }
  }
}

function get_water_multiple(catid)
{
  var blockid = $('#selectBlk').val();
  var unit_from = $('#selectUnit').val();
  var unit_to = $('#selectUnitTo').val();

  $.ajax({
    type: 'post',
    url: 'get_water_multiple.php',
    data: {
      catid:catid,
     from:unit_from,
     to:unit_to,
     block_id:blockid
    },
    success: function (response) {
     document.getElementById("meter_details_all").innerHTML=response;
    }
    });
}

function showWater(unitid, catid)
{
  $.ajax({
    type: 'post',
    url: 'get_water_single.php',
    data: {
      catid:catid,
     unit_id:unitid
    },
    success: function (response) {
     document.getElementById("meter_details").innerHTML=response;
    }
    });
}

function show_fee(unitid, type, count)
{
  var blockid = $('#selectBlk').val();
  var unit_from = $('#selectUnit').val();
  var unit_to = $('#selectUnitTo').val();

  $.ajax({
    type: 'post',
    url: 'get_unit_table.php',
    data: {
      type:type,
      count:count,
     blockid:blockid,
     from:unit_from,
      to:unit_to,
      unit_id:unitid
    },
    success: function (response) {
     document.getElementById("unit_table").innerHTML=response;
    }
    });
}

function calculate_fee(obj)
{
  var tax = $('#selTax').find(':selected').data('value');
  var amount = $(obj).val();
  var total = $(obj).closest('td').next('td').find('input[id^="total"]');

  calc = (amount*(tax/100)) + parseFloat(amount);

  if(amount == '')
  {
    total.val('');
  } else {
    total.val(calc.toFixed(2));
  }

}

function lead(n, width, z) {
  z = z || '0';
  n = n + '';
  return n.length >= width ? n : new Array(width - n.length + 1).join(z) + n;
}

function invEx(obj)
{
  var row = $(obj).closest('tr');
  var code = row.find('input[id^="code"]').val();
  var trail = row.find('input[id^="trail"]').val();
  var example = row.find('input[id^="example"]');

  example.val(code + lead(1, trail));

}

function allocUnit(total)
{
  $('#allocUnits').val(total);
}

function changeCharge(category, type, loc)
{

  if(type == 'electric')
  {
    $('#electric_edit').attr('href', 'edit_electric_charge.php?cat='+category);
  } else if (type == 'water')
  {
    $('#water_edit').attr('href', 'edit_water_charge.php?cat='+category);
  }

  $.ajax({
    type: 'post',
    url: (loc == 'rate') ? 'change_rate.php' : 'change_charge.php',
    data: {
     cat:category,
     type:type
    },
    success: function (response) {
      if(type == 'electric')
      {
        document.getElementById("echarge-container").innerHTML=response;
      }
     else if(type == 'water')
     {
      document.getElementById("wcharge-container").innerHTML=response;
     }
    }
    });
}

function displayLPCBlocks(devid)
{

  var type = document.getElementById("single");
  var cat = document.getElementById("cat-block");
  
  type = type.checked ? "single" : "multiple";
  cat = cat.checked ? "block" : "unit";

  $.ajax({
    type: 'post',
    url: 'select_block.php',
    data: {
     dev_id:devid
    },
    success: function (response) {
      document.getElementById("block").innerHTML=response;
      document.getElementById("block-from").innerHTML=response;
      document.getElementById("block-to").innerHTML=response;
      if((type == "single" && cat == "block") || (type == "multiple" && cat == "unit") || (type == "single" && cat == "unit"))
      {
        document.getElementById("container-block").style.display = 'block'; 
        document.getElementById("container-block-multiple").style.display = 'none';
        document.getElementById("block").setAttribute("required", "");
        document.getElementById("block-from").removeAttribute("required");
        document.getElementById("block-to").removeAttribute("required");
      } else if (type == "multiple" && cat == "block") {
        document.getElementById("container-block").style.display = 'none'; 
        document.getElementById("container-block-multiple").style.display = 'block';
        document.getElementById("block").removeAttribute("required");
        document.getElementById("block-from").setAttribute("required", "");
        document.getElementById("block-to").setAttribute("required", ""); 
      } else {
        document.getElementById("container-block").style.display = 'none'; 
        document.getElementById("container-block-multiple").style.display = 'none';
        document.getElementById("block").removeAttribute("required");
        document.getElementById("block-from").removeAttribute("required");
        document.getElementById("block-to").removeAttribute("required");
      }
      
    }
    });
}


function getlpcunit()
{
  var type = document.getElementById("single");
  var cat = document.getElementById("cat-block");
  
  type = type.checked ? "single" : "multiple";
  cat = cat.checked ? "block" : "unit";

  var block = document.getElementById("block").value;


  $.ajax({
    type: 'post',
    url: 'select_unit.php',
    data: {
     block:block
    },
    success: function (response) {
      document.getElementById("unit").innerHTML=response;
      document.getElementById("unit-from").innerHTML=response;
      document.getElementById("unit-to").innerHTML=response;
      if(type == "single" && cat == "unit")
      {
        document.getElementById("container-unit").style.display = 'block';
        document.getElementById("container-unit-multiple").style.display = 'none';
        document.getElementById("unit").setAttribute("required", "");
        document.getElementById("unit-from").removeAttribute("required");
        document.getElementById("unit-to").removeAttribute("required");
      } else if(type == "multiple" && cat == "unit") {
        document.getElementById("container-unit").style.display = 'none';
        document.getElementById("container-unit-multiple").style.display = 'block';
        document.getElementById("unit").removeAttribute("required");
        document.getElementById("unit-from").setAttribute("required", "");
        document.getElementById("unit-to").setAttribute("required", "");
      } else {
        document.getElementById("container-unit").style.display = 'none';
        document.getElementById("container-unit-multiple").style.display = 'none';
        document.getElementById("unit").removeAttribute("required");
        document.getElementById("unit-from").removeAttribute("required");
        document.getElementById("unit-to").removeAttribute("required");
      }
    }
    });
}

function displaySelectBlocks(devid)
{
  $.ajax({
    type: 'post',
    url: 'select_block.php',
    data: {
     dev_id:devid
    },
    success: function (response) {
      document.getElementById("block").innerHTML=response;
      document.getElementById("container-block").style.display = "block";
    }
    });
}


function displayUnits(block)
{
  $.ajax({
    type: 'post',
    url: 'select_unit.php',
    data: {
     block:block
    },
    success: function (response) {
      document.getElementById("unit").innerHTML=response;
      document.getElementById("container-unit").style.display = "block";
    }
    });
}

function displayUnitLPC(unit)
{
  $.ajax({
    type: 'post',
    url: 'unit_lpc.php',
    data: {
     unit:unit
    },
    success: function (response) {
      document.getElementById("lpc-body").innerHTML=response;
    }
  });
}

function reportReq(type)
{
  var dev = document.getElementById("dev");
  var blk = document.getElementById("block");
  var unit = document.getElementById("unit");

  if(type == "development")
  {
    dev.setAttribute("required", "required");
    blk.removeAttribute("required");
    unit.removeAttribute("required");
  } else if(type == "block")
  {
    dev.setAttribute("required", "required");
    blk.setAttribute("required", "required");
    unit.removeAttribute("required");
  } else if(type == "unit")
  {
    dev.setAttribute("required", "required");
    blk.setAttribute("required", "required");
    unit.setAttribute("required", "required");
  }

}

function enlarge_pic(notice_id) {

  var modal = document.getElementById("notice_modal");
  var img = document.getElementById(notice_id);
  var modalImg = document.getElementById("img");
  var captionText = document.getElementById("notice-caption");

  modal.style.display = "block";
  modalImg.src = img.src;
  captionText.innerHTML = img.alt;
}

function close_notice_modal()
{
  var modal = document.getElementById("notice_modal");
  var span = document.getElementsByClassName("close-notice-modal")[0];
  modal.style.display = "none";
}

function getAssets(location)
{
  var floor = document.getElementById("selectFlrA");
  var id = floor.value + "-" + location;
  var assets = document.getElementsByClassName("assetOption");

  for(i = 0; i < assets.length; i++)
  {
    if(assets[i].getAttribute("data-value") == id)
    {
      assets[i].style.display = "block";
    } else {
      assets[i].style.display = "none";
    }
  }
}

function displayAssetCat()
{
  var asset = document.getElementById("nameSelect");
  var datacat = asset.options[asset.selectedIndex].getAttribute("data-cat");
  var cat = document.getElementById("category");

  cat.value = datacat;
}

function setOtherVal(otherval, otherid)
{
  var other = document.getElementById(otherid);
  other.value = otherval;
}

function openform(flag)
{
  var form = document.getElementById("chargeable-form");
  var charge = document.getElementById("chargeable");
  var button = document.getElementById("chargeable-button");
  var submit = document.getElementById("chargeable-submit");
  var back = document.getElementById("chargeable-back");
  var box = document.getElementById("chargeable-box");
  

  if(flag == 1)
  {
    form.style.display = "block";
    charge.style.display = "none";
    button.style.display = "none";
    submit.style.display = "block";
    back.style.display = "block";
    box.style.display = "flex";
  } else {
    form.style.display = "none";
    charge.style.display = "block";
    button.style.display = "block";
    submit.style.display = "none";
    back.style.display = "none";
    box.style.display = "none";
  }
}

function openPartsForm(flag)
{
  var partform = document.getElementById("partsForm");
  var partbox = document.getElementById("parts");
  if(flag == 1)
  {
    partform.style.display = "block";
    partbox.setAttribute("required", "required");
  } else {
    partform.style.display = "none";
    partbox.removeAttribute("required");
  }
}

function sortbymonth(month)
{
  var rows = document.getElementsByClassName("rows");
  Array.prototype.forEach.call(rows, function(element) {
    if(month == "")
    {
      element.style.display = "table-row";
    } else {
      if(element.dataset.month != month)
      {
        element.style.display = "none";
      } else {
        element.style.display = "table-row";
      }
    }
  });
}

function enablePermission(flag)
{
  var permissions = document.querySelectorAll(".permission-check");
  var editbutton = document.getElementById("permission-button");
  var savebutton = document.getElementById("save-button");
  
  if(flag == 0)
  {
    editbutton.classList.add("d-none");
    savebutton.classList.remove("d-none");

    permissions.forEach(element => {
    
      element.disabled = false;
      
      element.style.filter = "none";
    });
  } else {

    editbutton.classList.remove("d-none");
    savebutton.classList.add("d-none");

    permissions.forEach(element => {
    
      element.disabled = true;
      
      element.style.filter = "invert()";
    });
  }
}

function removeAllPerm(type)
{
  var inputs = document.getElementsByName(type);

  
}

function checkTabcontent() {
  var tab = document.getElementsByClassName("tabcontent")[0];

  var _80vh = window.innerHeight * (80/100);

  var _73vh = window.innerHeight * (73/100);
  
  if(tab.offsetHeight > _80vh)
  {
    tab.style.overflowY = "scroll";
  }

  if(tab.children[0] == "[object HTMLTableElement]")
  {
  	  if(tab.offsetHeight > _73vh)
	  {
		tab.style.overflowY = "scroll";
		tab.style.maxHeight = _73vh + "px";
	  }
  }
}

window.onload = checkTabcontent();

if (window.addEventListener) {
  window.addEventListener('load', function() {
    if(typeof populateDevDropdown !== 'undefined')
    {
      populateDevDropdown()
    }
  }, false);
} else if (window.attachEvent) { // IE < 9
  window.attachEvent('onload', function() {
    if(typeof populateDevDropdown !== 'undefined')
    {
      populateDevDropdown()
    }
  });
}

</script>
