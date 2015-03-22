/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
	$(function () {
            $("#today").html($("#today").html()+getDateTime());
        });
});

function getDateTime() {
    var now     = new Date(); 
    var year    = now.getFullYear();
    var month   = now.getMonth()+1; 
    var day     = now.getDate();
    var hour    = now.getHours();
    var minute  = now.getMinutes();
    var second  = now.getSeconds();
    var dayofweek = now.getDay();
    
    if(month.toString().length == 1) {
        var month = '0'+month;
    }
    if(day.toString().length == 1) {
        var day = '0'+day;
    }   
    if(hour.toString().length == 1) {
        var hour = '0'+hour;
    }
    if(minute.toString().length == 1) {
        var minute = '0'+minute;
    }
    if(second.toString().length == 1) {
        var second = '0'+second;
    }
    
    switch (new Date().getDay()) {
    case 0:
        dayofweek = "Chủ nhật";
        break;
    case 1:
        dayofweek = "Thứ hai";
        break;
    case 2:
        dayofweek = "Thứ ba";
        break;
    case 3:
        dayofweek = "Thứ tư";
        break;
    case 4:
        dayofweek = "Thứ năm";
        break;
    case 5:
        dayofweek = "Thứ sáu";
        break;
    case 6:
        dayofweek = "Thứ bảy";
        break;
    }
    
    var dateTime = dayofweek + ", " + day + "/" + month + "/" + year +" | "+hour+":"+minute+":"+second;
     return dateTime;
}