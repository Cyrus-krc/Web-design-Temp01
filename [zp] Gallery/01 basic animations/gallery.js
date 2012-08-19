Math.rnd = Math.random;
Math.random = function (a,b){
	return (!a && !b) ? Math.rnd() : Math.floor(Math.rnd()*(b-a+1))+a;
}

$(function(){
	// kh kh kh 
})
