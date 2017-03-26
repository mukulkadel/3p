/* This script and many more are available free online at
The JavaScript Source!! http://www.javascriptsource.com
Created by: Shaun Bailey | http://www.sbwebdevelopment.co.uk */
// set up variables
var monthsArray = new Array("January","February","March","April","May","June","July","August","September","October","November","December");
var daysArray = new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
var prevYears = 10;	// number of years before current date
var futureYears = 10;	// number of years after current date
var today = new Date();
var nowMonth = today.getMonth();
var nowYear = today.getFullYear();
var curMonth = nowMonth;
var curYear = nowYear;
var monthEvents;
today.setDate(1);	// set to first day of the month

var eventsArray = new Array();
// format: dd,mm,yyyy,"event","frequency (Annual/Monthly/Weekly)" - Delete frequency for once-time occurrences
eventsArray[0] = new newEvent(25,12,2006,"Christmas Day","Annual");
eventsArray[1] = new newEvent(1,1,2006,"First Day of Month","Monthly");
eventsArray[2] = new newEvent(24,12,2006,"Christmas Eve","Annual");
eventsArray[3] = new newEvent(12,3,2007,"Meeting");
eventsArray[4] = new newEvent(21,3,2017,"Hello Bhanu");
eventsArray[5] = new newEvent(12,9,2007,"My Birthday","Annual");


// create event object
function newEvent(day, month, year, memo, occurrence) {
	this.day = day;
	this.month = month;
	this.year = year;
	this.memo = memo;
	this.occurrence = occurrence;
	this.createMonth = createMonth;
}

// creates calendar for the current month
function createMonth() {
	var startDay = today.getDay();	// first day of the month
	var monLength = monthLength();	// number of days in month
	var lastDay = startDay+monLength-1;	// last day of the month
	monthEvents = new Array();	// array to hold events for current month

	// search through events for current month
	for(i=0;i<eventsArray.length;i++) {
		if(eventsArray[i].month == (curMonth+1) && (eventsArray[i].year == curYear || eventsArray[i].occurrence == "Annual")) {
			monthEvents[monthEvents.length] = i;
		}
		else if(eventsArray[i].occurrence == "Monthly" || eventsArray[i].occurrence == "Weekly") {
			monthEvents[monthEvents.length] = i;
		}
	}

	var content = "<table class=\"calendar\" cellspacing=\"0\">\n";
	// create headers
	content += "<tr>\n<th><a class=\"button\" href=\"javascript:void(prev())\">Previous</a></th>\n";
	content += "<th colspan=\"5\">" + monthsArray[curMonth] + " " + curYear + "</th>\n";
	content += "<th><a class=\"button\" href=\"javascript:void(next())\">Next</a></th>\n</tr><tr>\n";
	for(i=0;i<7;i++) {
		content += "<th>" + daysArray[i] + "</th>\n";
	}
	content += "</tr>\n<tr>\n";

	// create main content of calendar
	for(i=0;i<42;i++) {
		var occ = "";
		var occContent = "";
		var curDay = i+1-startDay;
		// check day against months events
		for(j=0;j<monthEvents.length;j++) {
				var occDate = new Date();
				occDate.setDate(eventsArray[monthEvents[j]].day);
				occDate.setMonth(eventsArray[monthEvents[j]].month);
				occDate.setFullYear(eventsArray[monthEvents[j]].year);

				if(curDay == eventsArray[monthEvents[j]].day && eventsArray[monthEvents[j]].occurrence != "Weekly") {	// deal with day, monthly and annual events
					occ = " class=\"occassion\"";
					fullContent = eventsArray[monthEvents[j]].memo;
					if(eventsArray[monthEvents[j]].memo.length > 14) {
						occContent = fullContent.substr(0,13) + "...";
						break;
					}
					else {
						occContent = fullContent;
						break;
					}
				}
				else if(occDate.getDate() == (i%7) && eventsArray[monthEvents[j]].occurrence == "Weekly") {	// deal with weekly events
					occ = " class=\"occassion\"";
						fullContent = eventsArray[monthEvents[j]].memo;
					if(eventsArray[monthEvents[j]].memo.length > 14) {
						occContent = fullContent.substr(0,13) + "...";
						break;
					}
					else {
						occContent = fullContent;
						break;
					}
				}
		}
		if(i>lastDay && i==35) {	// do not show last row if not needed
			break;
		}
		if(i<startDay || i>lastDay) {	// show blank cells before and after month
			content += "<td class=\"blank\"> </td>\n";
		}
		else {
			if(!(i%7) || !((i+1)%7) ) {	// get days of the weekend
				if(!(i%7)&& i>0) {
					content += "</tr>\n<tr>\n";
				}
				content += "<td" + occ + "><span class=\"weekend\">"+curDay+"</span><br /><a href=\"javascript:void(alert('"+fullContent+"'));s\">"+occContent+"</a></td>\n";
			}
			else {
				content += "<td" + occ + ">"+curDay+"<br /><a href=\"javascript:void(alert('"+fullContent+"'));\">"+occContent+"</a></td>\n";
			}
		}
	}
	content += "</tr></table>\n";

	return content;
}

// get length of month
function monthLength() {
	monLength = 31;
	if(curMonth == 3 || curMonth == 5 || curMonth == 8 || curMonth == 10) monLength = 30;
	if(curMonth == 1) {
		if(curYear%4) {
			monLength = 28;
		}
		else {
			monLength = 29;
		}
	}
	return monLength;
}

function droplists() {
	content = "<form name=\"calNav\" method=\"post\" action=\"\">\n";
	content += "<select name=\"month\">\n";
	for(i=0;i<12;i++) {
		content += "<option value=\""+i +"\"";
		if(i == curMonth) {
			content += " selected=\"selected\"";
		}
		content += ">" + monthsArray[i] + "</option>\n";
	}
	content += "</select> <select name=\"year\">\n";
	for(i=(nowYear-prevYears);i<=(nowYear+futureYears);i++) {
		content += "<option value=\""+i +"\"";
		if(i == curYear) {
			content += " selected=\"selected\"";
		}
		content += ">" + i + "</option>\n";
	}
	content += "</select>\n<input type=\"button\" value=\"Go\" onclick=\"newMonth()\" />\n";
	content += "</form>\n";
	return content;
}

function newMonth() {
	var mon = document.calNav.month.selectedIndex;
	curMonth = parseInt(document.calNav.month.options[mon].value);
	var yr = document.calNav.year.selectedIndex;
	curYear = parseInt(document.calNav.year.options[yr].value);
	today.setMonth(curMonth);
	today.setFullYear(curYear);
	document.getElementById("showCal").innerHTML = droplists() + createMonth();
}

// goto previous month
function prev() {
	curMonth -= 1;
	if(curMonth<0) {
		curMonth=11;
		if(curYear>(nowYear-prevYears)) {
			curYear -= 1;
		}
	}
	today.setMonth(curMonth);
	today.setFullYear(curYear);
	document.getElementById("showCal").innerHTML = droplists() + createMonth();
}

// goto next month
function next() {
	curMonth += 1;
	if(curMonth>11) {
		curMonth=0;
		if(curYear<(nowYear+futureYears)) {
			curYear += 1;
		}
	}
	today.setMonth(curMonth);
	today.setFullYear(curYear);
	document.getElementById("showCal").innerHTML = droplists() + createMonth();
}
