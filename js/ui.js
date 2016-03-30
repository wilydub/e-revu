var php = "php/" ;

$("button").click(function(){
  var v = ($(this).html());
  var i = this.id;
  if(i.match(/add/g)){v="Enregistrement "+v;}
  $("#cabView h3").html(v.toUpperCase());
  $.get( php+this.id+".php", function( data ) {
    $("#cabView div").html( data );
    //alert( "Load was performed." );
});

$(".cabinet").show();

});


$("#closeViewCabinet").click(function(){
  $("#cabinet").hide();
})