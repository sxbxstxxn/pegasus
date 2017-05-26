function ticken(){
	
  today = new Date();
  var hours = today.getHours();
  var minutes = today.getMinutes();
  var seconds = today.getSeconds();
  
  var hoursStr = ((hours < 10) ? "0" + hours : hours);
  var minutesStr = ((minutes < 10) ? "0" + minutes : minutes);
  var secondsStr = ((seconds < 10) ? "0" + seconds : seconds);
  
  var clock = hoursStr+':'+minutesStr+':'+secondsStr;
  
  $('#clock').html('<div class="clock">'+clock+'</div>');
 
  window.setTimeout("ticken();", 1000);
  
}
 
window.onload = ticken;