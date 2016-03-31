
<div class="section calendar" style="padding-top:2%;">
  <div class="container">
  <div class="row" style="margin-top:2%" >
    <div id="calendar"></div>
  </div>
</div>
</div>
<script>
    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
    
header: {
				left: 'prev, today, next',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			editable: false,
			eventLimit: true, 
			events: [
				{
					title: 'All Day Event',
					start: '2016-03-01'
				},
				{
					title: 'Long Event',
					start: '2016-01-07',
					end: '2016-03-10'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2016-03-09T16:00:00'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2016-03-16T16:00:00'
				},
				{
					title: 'Conference',
					start: '2016-01-11',
					end: '2016-01-13'
				},
				{
					title: 'Audience - crud / slash',
					start: '2016-03-12T10:30:00',
					end: '2016-03-12T12:30:00',
					description: 'long description'
				},
				{
					title: 'Lunch',
					start: '2016-01-12T12:00:00'
				},
				{
					title: 'Meeting',
					start: '2016-01-12T14:30:00'
				},
				{
					title: 'Happy Hour',
					start: '2016-01-12T17:30:00'
				},
				{
					title: 'Dinner',
					start: '2016-01-12T20:00:00'
				},
				{
					title: 'Birthday Party',
					start: '2016-01-13T07:00:00'
				},
				
			],
			eventRender: function(event, element) { 
            element.find('.fc-title').append("<br/>" + event.description); 
        } ,


    dayClick: function() {
        
    }

});

</script>




