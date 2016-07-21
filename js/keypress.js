function numbersonly(myfield, e, dec)
{ var key; 
var keychar; 
if (window.event) 
	key = window.event.keyCode; 
else if (e) 
	key = e.which; 
else 
	return true; 
keychar = String.fromCharCode(key); 
// control keys 
if ((key==null) || (key==0) || (key==8) || (key==9) || (key==13) || (key==27) ) return true; 
// numbers 
else if ((("0123456789").indexOf(keychar) > -1)) return true; 
// decimal point jump 
else if (dec && (keychar == "."))
	{ 
myfield.form.elements[dec].focus(); 
return false; 
} 
else 
	return false;
}

function lettersonly(myfield, e, dec)
{ var key; 
var keychar; 
if (window.event) 
	key = window.event.keyCode; 
else if (e) 
	key = e.which; 
else 
	return true; 
keychar = String.fromCharCode(key); 
// control keys 
if ((key==null) || (key==0) || (key==8) || (key==9) || (key==13) || (key==27) ) return true; 
// numbers 
else if ((("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ").indexOf(keychar) > -1)) return true; 
// decimal point jump 
else if (dec && (keychar == "."))
	{ 
myfield.form.elements[dec].focus(); 
return false; 
} 
else 
	return false;
}
		
function doubleonly(myfield, e, dec)
{ var key; 
var keychar; 
if (window.event) 
	key = window.event.keyCode; 
else if (e) 
	key = e.which; 
else 
	return true; 
keychar = String.fromCharCode(key); 
// control keys 
if ((key==null) || (key==0) || (key==8) || (key==9) || (key==13) || (key==27) ) return true; 
// numbers 
else if ((("0123456789.").indexOf(keychar) > -1)) return true; 
// decimal point jump 
else if (dec && (keychar == "."))
	{ 
myfield.form.elements[dec].focus(); 
return false; 
} 
else 
	return false;
}

function noneonly(myfield, e, dec)
{ var key; 
var keychar; 
if (window.event) 
	key = window.event.keyCode; 
else if (e) 
	key = e.which; 
else 
	return true; 
keychar = String.fromCharCode(key); 
// control keys 
if ((key==null) || (key==0) || (key==8) || (key==9) || (key==13) || (key==27) ) return true; 
// numbers 
else if ((("").indexOf(keychar) > -1)) return true; 
// decimal point jump 
else if (dec && (keychar == "."))
	{ 
myfield.form.elements[dec].focus(); 
return false; 
} 
else 
	return false;
}