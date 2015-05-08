<!DOCTYPE html>
<html lang="uk">
	<head>
		<title>ZIPOUT - Classes</title>
		<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<!--[if lte IE 8]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!--[if lt IE 8]>
			<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE8.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="css/bxslider.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/fullcalendar.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/fullcalendar.print.css" media='print' />
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/selectric.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/adaptive.css" media="screen" />
		
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/jquery.selectric.min.js"></script>
		<script type="text/javascript" src="js/moment.min.js"></script>
		<script type="text/javascript" src="js/fullcalendar.min.js"></script>
		<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<script>
			$(document).ready(function() {
				
				$('#calendar').fullCalendar({
					header: {
						left: 'prev',
						center: 'title',
						right: 'next'
					},
					axisFormat: 'HH:mm',
					minTime: '08:00:00',
					maxTime: '22:00:00',
					defaultView: 'agendaWeek',
					defaultDate: '2015-05-04',
					firstDay: 1,
					slotDuration: '01:00:00',
					columnFormat: 'dddd',
					allDaySlot: false,
					editable: false, // Ã�Â§Ã�Â¸ Ã�Â¼Ã�Â¾Ã�Â¶Ã�Â½Ã�Â° Ã�Â¿Ã�ÂµÃ‘â‚¬Ã�ÂµÃ‘â€šÃ‘ï¿½Ã�Â³Ã‘Æ’Ã�Â²Ã�Â°Ã‘â€šÃ�Â¸
					eventLimit: false, // allow "more" link when too many events
					events: [
						{
							title: 'CurvIt',
							start: '2015-04-09T08:00:00',
							end: '2015-04-09T10:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-yoga'
						},
						{
							title: 'CurvIt',
							start: '2015-04-12T09:00:00',
							end: '2015-04-12T11:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-yoga'
						},
						{
							title: 'CurvIt',
							start: '2015-04-14T10:00:00',
							end: '2015-04-14T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-yoga'
						},
						{
							title: 'CurvIt',
							start: '2015-05-10T15:00:00',
							end: '2015-05-10T17:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-yoga'
						},
						{
							title: 'CurvIt',
							start: '2015-05-17T15:00:00',
							end: '2015-05-17T17:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-yoga'
						},
						{
							title: 'CurvIt',
							start: '2015-05-24T15:00:00',
							end: '2015-05-24T17:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-yoga'
						},
						{
							title: 'CurvIt',
							start: '2015-05-31T15:00:00',
							end: '2015-05-31T17:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-yoga'
						},
						{
							title: 'CurvIt',
							start: '2015-06-07T15:00:00',
							end: '2015-06-07T17:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-yoga'
						},
						{
							title: 'CurvIt',
							start: '2015-06-14T15:00:00',
							end: '2015-06-14T17:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-yoga'
						},
						{
							title: 'CurvIt',
							start: '2015-06-21T15:00:00',
							end: '2015-06-21T17:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-yoga'
						},
						{
							title: 'CurvIt',
							start: '2015-06-28T15:00:00',
							end: '2015-06-28T17:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-yoga'
						},
						
						{
							title: 'Belly Dance',
							start: '2015-04-13T08:00:00',
							end: '2015-04-13T09:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-cardio-fitness'
						},
						{
							title: 'Belly Dance',
							start: '2015-04-11T14:00:00',
							end: '2015-04-11T15:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-cardio-fitness'
						},
						{
							title: 'Belly Dance',
							start: '2015-04-14T15:00:00',
							end: '2015-04-14T16:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-cardio-fitness'
						},
						{
							title: 'Belly Beginner',
							start: '2015-05-11T16:00:00',
							end: '2015-05-11T17:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-cardio-fitness'
						},
						{
							title: 'Belly Beginner',
							start: '2015-05-13T16:00:00',
							end: '2015-05-13T17:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-cardio-fitness'
						},
						{
							title: 'Belly Beginner',
							start: '2015-05-09T10:00:00',
							end: '2015-05-09T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-cardio-fitness'
						},
						{
							title: 'Bollywood',
							start: '2015-04-10T16:00:00',
							end: '2015-04-10T18:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Bollywood',
							start: '2015-04-13T12:00:00',
							end: '2015-04-13T14:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Salsa',
							start: '2015-04-11T10:00:00',
							end: '2015-04-11T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-pilates'
						},
						{
							title: 'Salsa',
							start: '2015-04-13T18:00:00',
							end: '2015-04-13T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-pilates'
						},
						{
							title: 'Salsa',
							start: '2015-04-15T13:00:00',
							end: '2015-04-15T15:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-pilates'
						},
						{
							title: 'Salsa',
							start: '2015-05-12T19:00:00',
							end: '2015-05-12T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-pilates'
						},
						{
							title: 'Salsa',
							start: '2015-05-19T19:00:00',
							end: '2015-05-19T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-pilates'
						},
						{
							title: 'Salsa',
							start: '2015-05-26T19:00:00',
							end: '2015-05-26T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-pilates'
						},
						{
							title: 'Salsa',
							start: '2015-06-02T19:00:00',
							end: '2015-06-02T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-pilates'
						},
						{
							title: 'Salsa',
							start: '2015-07-09T19:00:00',
							end: '2015-07-09T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-pilates'
						},
						{
							title: 'Salsa',
							start: '2015-07-16T19:00:00',
							end: '2015-07-16T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-pilates'
						},
						{
							title: 'Salsa',
							start: '2015-05-10T12:00:00',
							end: '2015-05-10T14:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-pilates'
						},
						{
							title: 'Salsa',
							start: '2015-05-17T12:00:00',
							end: '2015-05-17T14:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-pilates'
						},
						{
							title: 'Salsa',
							start: '2015-05-24T12:00:00',
							end: '2015-05-24T14:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-pilates'
						},
						{
							title: 'Salsa',
							start: '2015-05-31T12:00:00',
							end: '2015-05-31T14:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-pilates'
						},
						{
							title: 'Salsa',
							start: '2015-06-07T12:00:00',
							end: '2015-06-07T14:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-pilates'
						},
						{
							title: 'Salsa',
							start: '2015-06-14T12:00:00',
							end: '2015-06-14T14:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-pilates'
						},
						{
							title: 'Salsa',
							start: '2015-06-21T12:00:00',
							end: '2015-06-21T14:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-pilates'
						},
						{
							title: 'Salsa',
							start: '2015-06-28T12:00:00',
							end: '2015-06-28T14:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-pilates'
						},
						
						{
							title: 'Spinning',
							start: '2015-04-09T13:00:00',
							end: '2015-04-09T14:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-spinning'
						},
						{
							title: 'Spinning',
							start: '2015-04-12T17:00:00',
							end: '2015-04-12T18:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-spinning'
						},
						{
							title: 'Spinning',
							start: '2015-04-15T09:00:00',
							end: '2015-04-15T10:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-spinning'
						},
						{
							title: 'Spinning',
							start: '2015-04-16T13:00:00',
							end: '2015-04-16T14:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-spinning'
						},
						{
							title: 'Spinning',
							start: '2015-04-18T17:00:00',
							end: '2015-04-18T18:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-spinning'
						},
						{
							title: 'Spinning',
							start: '2015-04-19T09:00:00',
							end: '2015-04-19T10:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-spinning'
						},
						{
							title: 'Salsa',
							start: '2015-04-17T10:00:00',
							end: '2015-04-17T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-pilates'
						},
						{
							title: 'Salsa',
							start: '2015-04-21T11:00:00',
							end: '2015-04-21T13:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-pilates'
						},
						{
							title: 'Bollywood',
							start: '2015-04-22T16:00:00',
							end: '2015-04-22T18:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Bollywood',
							start: '2015-04-19T13:00:00',
							end: '2015-04-19T15:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Bollywood',
							start: '2015-04-19T13:00:00',
							end: '2015-04-19T15:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Bollywood',
							start: '2015-05-05T18:00:00',
							end: '2015-05-05T19:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Bollywood',
							start: '2015-05-07T18:00:00',
							end: '2015-05-07T19:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Bollywood',
							start: '2015-04-12T18:00:00',
							end: '2015-04-12T19:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Bollywood',
							start: '2015-05-14T18:00:00',
							end: '2015-05-14T19:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Bollywood',
							start: '2015-05-19T18:00:00',
							end: '2015-05-19T19:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Bollywood',
							start: '2015-05-21T18:00:00',
							end: '2015-05-21T19:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Bollywood',
							start: '2015-05-26T18:00:00',
							end: '2015-05-26T19:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Bollywood',
							start: '2015-05-28T18:00:00',
							end: '2015-05-28T19:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},

						{
							title: 'Bollywood',
							start: '2015-06-04T18:00:00',
							end: '2015-06-04T19:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Bollywood',
							start: '2015-06-02T18:00:00',
							end: '2015-06-02T19:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},

						{
							title: 'Bollywood',
							start: '2015-06-09T18:00:00',
							end: '2015-06-09T19:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Bollywood',
							start: '2015-06-11T18:00:00',
							end: '2015-06-11T19:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},


						{
							title: 'Bollywood',
							start: '2015-06-16T18:00:00',
							end: '2015-06-16T19:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Bollywood',
							start: '2015-06-18T18:00:00',
							end: '2015-06-18T19:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},

						{
							title: 'Bollywood',
							start: '2015-06-23T18:00:00',
							end: '2015-06-23T19:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Bollywood',
							start: '2015-06-25T18:00:00',
							end: '2015-06-25T19:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},

						{
							title: 'Bollywood',
							start: '2015-06-30T18:00:00',
							end: '2015-06-30T19:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						
						
						
						
						{
							title: 'Bollywood',
							start: '2015-05-11T19:00:00',
							end: '2015-05-11T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Bollywood',
							start: '2015-05-13T19:00:00',
							end: '2015-05-13T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Bollywood',
							start: '2015-05-18T19:00:00',
							end: '2015-05-18T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Bollywood',
							start: '2015-05-25T19:00:00',
							end: '2015-05-25T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Bollywood',
							start: '2015-05-27T19:00:00',
							end: '2015-05-27T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Bollywood',
							start: '2015-04-11T19:00:00',
							end: '2015-04-11T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Bollywood',
							start: '2015-04-13T19:00:00',
							end: '2015-04-13T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Bollywood Kids',
							start: '2015-05-11T17:00:00',
							end: '2015-05-11T18:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-bkids'
						},
						{
							title: 'Bollywood Kids',
							start: '2015-05-13T17:00:00',
							end: '2015-05-13T18:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-bkids'
						},
						{
							title: 'Bollywood Kids',
							start: '2015-05-18T17:00:00',
							end: '2015-05-18T18:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-bkids'
						},
						{
							title: 'Bollywood Kids',
							start: '2015-05-20T17:00:00',
							end: '2015-05-20T18:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-bkids'
						},
						{
							title: 'Bollywood Kids',
							start: '2015-05-25T17:00:00',
							end: '2015-05-25T18:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-bkids'
						},
						{
							title: 'Bollywood Kids',
							start: '2015-05-27T17:00:00',
							end: '2015-05-27T18:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-bkids'
						},
						{
							title: 'Bollywood Kids',
							start: '2015-06-01T17:00:00',
							end: '2015-06-01T18:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-bkids'
						},
						{
							title: 'Bollywood Kids',
							start: '2015-06-08T17:00:00',
							end: '2015-06-08T18:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-bkids'
						},
						{
							title: 'Bollywood Kids',
							start: '2015-06-15T17:00:00',
							end: '2015-06-15T18:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-bkids'
						},
						{
							title: 'Bollywood Kids',
							start: '2015-06-22T17:00:00',
							end: '2015-06-22T18:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-bkids'
						},

						{
							title: 'Bollywood Kids',
							start: '2015-06-29T17:00:00',
							end: '2015-06-29T18:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-bkids'
						},
						
						
						
						{
							title: 'Ballet',
							start: '2015-05-09T17:30:00',
							end: '2015-05-09T18:30:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Ballet',
							start: '2015-05-10T11:00:00',
							end: '2015-05-10T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Ballet',
							start: '2015-05-16T17:30:00',
							end: '2015-05-16T16:30:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Ballet',
							start: '2015-05-17T11:00:00',
							end: '2015-05-17T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Ballet',
							start: '2015-05-23T17:30:00',
							end: '2015-05-23T18:30:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Ballet',
							start: '2015-06-06T17:30:00',
							end: '2015-06-06T18:30:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Ballet',
							start: '2015-06-13T17:30:00',
							end: '2015-06-13T18:30:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Ballet',
							start: '2015-06-20T17:30:00',
							end: '2015-06-20T18:30:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Ballet',
							start: '2015-06-27T17:30:00',
							end: '2015-06-27T18:30:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						
						{
							title: 'Ballet',
							start: '2015-05-24T11:00:00',
							end: '2015-05-24T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Ballet',
							start: '2015-05-10T11:00:00',
							end: '2015-05-10T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Ballet',
							start: '2015-05-31T11:00:00',
							end: '2015-05-31T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},

						{
							title: 'Ballet',
							start: '2015-06-07T11:00:00',
							end: '2015-06-07T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Ballet',
							start: '2015-06-14T11:00:00',
							end: '2015-06-14T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},

						{
							title: 'Ballet',
							start: '2015-06-21T11:00:00',
							end: '2015-06-21T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Ballet',
							start: '2015-06-28T11:00:00',
							end: '2015-06-28T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-aerobics'
						},
						{
							title: 'Contemporary',
							start: '2015-05-09T18:30:00',
							end: '2015-05-09T17:30:00',
							url: 'enroll-classes.php',
							className: 'fc-event-contemporary'
						},
						{
							title: 'Contemporary',
							start: '2015-05-10T18:30:00',
							end: '2015-05-10T17:30:00',
							url: 'enroll-classes.php',
							className: 'fc-event-contemporary'
						},
						{
							title: 'Contemporary',
							start: '2015-05-16T18:30:00',
							end: '2015-05-16T17:30:00',
							url: 'enroll-classes.php',
							className: 'fc-event-contemporary'
						},
						{
							title: 'Contemporary',
							start: '2015-05-17T18:30:00',
							end: '2015-05-17T17:30:00',
							url: 'enroll-classes.php',
							className: 'fc-event-contemporary'
						},
						{
							title: 'Contemporary',
							start: '2015-05-12T18:00:00',
							end: '2015-05-12T17:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-contemporary'
						},
						{
							title: 'Contemporary',
							start: '2015-05-14T18:00:00',
							end: '2015-05-14T17:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-contemporary'
						},
						{
							title: 'Contemporary',
							start: '2015-05-18T18:00:00',
							end: '2015-05-18T17:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-contemporary'
						},
						{
							title: 'Contemporary',
							start: '2015-05-21T18:00:00',
							end: '2015-05-21T17:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-contemporary'
						},
						
						{
							title: 'Zumba',
							start: '2015-05-11T19:00:00',
							end: '2015-05-11T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zumba'
						},
					
						{
							title: 'Zumba',
							start: '2015-05-25T19:00:00',
							end: '2015-05-25T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zumba'
						},
						{
							title: 'Zumba',
							start: '2015-06-01T19:00:00',
							end: '2015-06-01T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zumba'
						},
						{
							title: 'Zumba',
							start: '2015-06-18T19:00:00',
							end: '2015-06-18T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zumba'
						},
						{
							title: 'Zumba',
							start: '2015-06-25T19:00:00',
							end: '2015-06-25T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zumba'
						},
						{
							title: 'Zumba',
							start: '2015-05-08T19:00:00',
							end: '2015-05-08T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zumba'
						},
						{
							title: 'Zumba',
							start: '2015-05-15T19:00:00',
							end: '2015-05-15T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zumba'
						},

						{
							title: 'Zumba',
							start: '2015-05-29T19:00:00',
							end: '2015-05-29T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zumba'
						},
						{
							title: 'Zumba',
							start: '2015-06-05T19:00:00',
							end: '2015-06-05T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zumba'
						},

						

						{
							title: 'Zumba',
							start: '2015-06-12T19:00:00',
							end: '2015-06-12T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zumba'
						},

						{
							title: 'Zumba',
							start: '2015-06-19T19:00:00',
							end: '2015-06-19T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zumba'
						},
						{
							title: 'Zumba',
							start: '2015-06-08T19:00:00',
							end: '2015-06-08T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zumba'
						},

						{
							title: 'Zumba',
							start: '2015-06-15T19:00:00',
							end: '2015-06-15T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zumba'
						},

						{
							title: 'Zumba',
							start: '2015-06-22T19:00:00',
							end: '2015-06-22T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zumba'
						},

						{
							title: 'Zumba',
							start: '2015-06-29T19:00:00',
							end: '2015-06-29T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zumba'
						},

						
						{
							title: 'Zipout Divas Batch',
							start: '2015-05-05T11:00:00',
							end: '2015-05-05T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zipoutdivas'
						},

						{
							title: 'Zipout Divas Batch',
							start: '2015-05-12T11:00:00',
							end: '2015-05-12T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zipoutdivas'
						},

						{
							title: 'Zipout Divas Batch',
							start: '2015-05-19T11:00:00',
							end: '2015-05-19T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zipoutdivas'
						},
						{
							title: 'Zipout Divas Batch',
							start: '2015-05-26T11:00:00',
							end: '2015-05-26T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zipoutdivas'
						},
						{
							title: 'Zipout Divas Batch',
							start: '2015-06-02T11:00:00',
							end: '2015-06-02T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zipoutdivas'
						},
						{
							title: 'Zipout Divas Batch',
							start: '2015-06-09T11:00:00',
							end: '2015-06-09T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zipoutdivas'
						},

						{
							title: 'Zipout Divas Batch',
							start: '2015-06-16T11:00:00',
							end: '2015-06-16T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zipoutdivas'
						},
						{
							title: 'Zipout Divas Batch',
							start: '2015-06-23T11:00:00',
							end: '2015-06-23T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zipoutdivas'
						},
						{
							title: 'Zipout Divas Batch',
							start: '2015-05-07T11:00:00',
							end: '2015-05-07T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zipoutdivas'
						},

						{
							title: 'Zipout Divas Batch',
							start: '2015-05-14T11:00:00',
							end: '2015-05-14T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zipoutdivas'
						},

						{
							title: 'Zipout Divas Batch',
							start: '2015-05-21T11:00:00',
							end: '2015-05-21T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zipoutdivas'
						},
						{
							title: 'Zipout Divas Batch',
							start: '2015-05-28T11:00:00',
							end: '2015-05-28T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zipoutdivas'
						},
						{
							title: 'Zipout Divas Batch',
							start: '2015-06-04T11:00:00',
							end: '2015-06-04T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zipoutdivas'
						},
						{
							title: 'Zipout Divas Batch',
							start: '2015-06-11T11:00:00',
							end: '2015-06-11T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zipoutdivas'
						},

						{
							title: 'Zipout Divas Batch',
							start: '2015-06-18T11:00:00',
							end: '2015-06-18T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zipoutdivas'
						},
						{
							title: 'Zipout Divas Batch',
							start: '2015-06-25T11:00:00',
							end: '2015-06-25T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-zipoutdivas'
						},
						{
							title: 'Belly Improvers',
							start: '2015-05-05T19:00:00',
							end: '2015-05-05T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-belly-improvers'
						},

						{
							title: 'Belly Improvers',
							start: '2015-05-12T19:00:00',
							end: '2015-05-12T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-belly-improvers'
						},

						{
							title: 'Belly Improvers',
							start: '2015-05-19T19:00:00',
							end: '2015-05-19T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-belly-improvers'
						},
						{
							title: 'Belly Improvers',
							start: '2015-05-26T19:00:00',
							end: '2015-05-26T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-belly-improvers'
						},
						{
							title: 'Belly Improvers',
							start: '2015-06-02T19:00:00',
							end: '2015-06-02T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-belly-improvers'
						},
						{
							title: 'Belly Improvers',
							start: '2015-06-09T19:00:00',
							end: '2015-06-09T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-belly-improvers'
						},

						{
							title: 'Belly Improvers',
							start: '2015-06-16T19:00:00',
							end: '2015-06-16T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-belly-improvers'
						},
						{
							title: 'Belly Improvers',
							start: '2015-06-23T19:00:00',
							end: '2015-06-23T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-belly-improvers'
						},
						{
							title: 'Belly Improvers',
							start: '2015-05-07T19:00:00',
							end: '2015-05-07T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-belly-improvers'
						},

						{
							title: 'Belly Improvers',
							start: '2015-05-14T19:00:00',
							end: '2015-05-14T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-belly-improvers'
						},

						{
							title: 'Belly Improvers',
							start: '2015-05-21T19:00:00',
							end: '2015-05-21T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-belly-improvers'
						},
						{
							title: 'Belly Improvers',
							start: '2015-05-28T19:00:00',
							end: '2015-05-28T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-belly-improvers'
						},
						{
							title: 'Belly Improvers',
							start: '2015-06-04T19:00:00',
							end: '2015-06-04T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-belly-improvers'
						},
						{
							title: 'Belly Improvers',
							start: '2015-06-11T19:00:00',
							end: '2015-06-11T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-belly-improvers'
						},

						{
							title: 'Belly Improvers',
							start: '2015-06-18T19:00:00',
							end: '2015-06-18T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-belly-improvers'
						},
						{
							title: 'Belly Improvers',
							start: '2015-06-25T19:00:00',
							end: '2015-06-25T20:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-belly-improvers'
						},

						{
							title: 'Belly Improvers',
							start: '2015-05-10T10:00:00',
							end: '2015-05-10T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-belly-improvers'
						},
						{
							title: 'Belly Improvers',
							start: '2015-05-17T10:00:00',
							end: '2015-05-17T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-belly-improvers'
						},
						{
							title: 'Belly Improvers',
							start: '2015-05-24T10:00:00',
							end: '2015-05-24T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-belly-improvers'
						},
						{
							title: 'Belly Improvers',
							start: '2015-05-31T10:00:00',
							end: '2015-05-31T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-belly-improvers'
						},
						{
							title: 'Belly Improvers',
							start: '2015-06-07T10:00:00',
							end: '2015-06-07T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-belly-improvers'
						},
						{
							title: 'Belly Improvers',
							start: '2015-06-14T10:00:00',
							end: '2015-06-14T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-belly-improvers'
						},
						
						{
							title: 'Belly Improvers',
							start: '2015-06-21T10:00:00',
							end: '2015-06-21T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-belly-improvers'
						},
						{
							title: 'Belly Improvers',
							start: '2015-06-28T10:00:00',
							end: '2015-06-28T12:00:00',
							url: 'enroll-classes.php',
							className: 'fc-event-belly-improvers'
						},
						

						

						

						

						

						
						
						
						
						
					]
				});
				
			});

		</script>
		
	</head>
<body class="classes">
	<header id="header" class="clear">
		<?php 
			require('main_menu.php');
		?>
	</header>
	<section class="container">
		<div class="pageHeader" style="background-image: url(images/content/bg-parallax3.jpg);">
			<h1>choose your classes</h1>
		</div>
		<div class="contentWrap">
			<div class="pagePanel clear">
				<ul class="productFilter classesFilter clear">
					<li><a class="active" data-filter="all" href="#">All </a></li>
					<li><a data-filter="fc-event-yoga" href="#">CurvIt</a></li>
					<li><a data-filter="fc-event-pilates" href="#">Salsa</a></li>
					<li><a data-filter="fc-event-aerobics" href="#">Bollywood</a></li>
					<li><a data-filter="fc-event-spinning" href="#">Spinning</a></li>
					<li><a data-filter="fc-event-cardio-fitness" href="#">Belly Dance</a></li>
				</ul>
			</div>
			<div class="classesCallendar">
				<div id='calendar'></div>
			</div>
		</div>
	</section>
    
	<?php
		require('main_footer.php');
	
	?>
</body>
</html>
<?php include 'widget.php'?>
<?php include 'google_analytics.php'?>

<?php include 'google_analytics.php'?>