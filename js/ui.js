
var erevu = (function() {

/*Dir path php file*/
var php = "php/" ;

var id = {'contact':0,'affaire':0};

var confFormDossier = {
	name :'',
	firstname:'',
	adress:''
}

var uiFn = {
	initialize : function (){
		this.loadAgenda();
		this.bindButtons();	
		this.bindCloseSectionView()	;
		this.bindTypeClient()	;
	},
	loadAgenda : function(){
		$.get( php+"agenda.php", function( data ) {
				$("#cabView div").html( data );
				//console.log(data)
				$(".cabinet").show();
			});
	},
	bindButtons : function(){
			$("button").unbind('click').click(function(){
				$("button").removeAttr('disabled')
				$(this).attr('disabled',true);
				var v = $(this).html();
				var i = this.id;
				$("#cabView h3").html(v.toUpperCase());
				$.get( php+this.id+".php", function( data ) {
				$("#cabView div").html( data );
				$(".cabinet").show();
			});
		})
	},
	bindCloseSectionView : function(){
		$("#closeViewCabinet").unbind('click').click(function(){
  			$("#cabinet").hide();
		})
	},
	bindTypeClient : function(){
		$("#typeClient").unbind('change').change(function(){
			console.log($(this).val());
		});
	},
	getConfFormDossier : function (){
		return confFormDossier;
	}
};



return uiFn;

});





//});


 

//Implementation
var exe = new erevu();
exe.initialize();
