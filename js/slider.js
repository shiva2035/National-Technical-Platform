jQuery(document).ready(function($) {
	$('#banner-fade').bjqs({
        height      : 120,
        width       : 620,
        responsive  : true
        });
	});
function display(sel)
{
var value = sel.options[sel.selectedIndex].value;
if( value==1){
window.open("categories/all_categories/index.php?id="+value,'_parent');
}
if( value==2){
window.open("http://www.google.co.in/?id="+value,'_parent');
}
if( value==3){
window.open("www.facebook.com",'_parent');
}
if( value==4){
window.open("www.dealwithus.co.in",'_parent');
}
}