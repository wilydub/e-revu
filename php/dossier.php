
<script>
//**/console.log(exe.getConfFormDossier());
exe.bindTypeClient();
</script>
<div class="section affaire" style="padding-top:2%" >
    <div class="container" >
     <form>
 <div class="row">
<div class="six columns">
      <label for="exampleRecipientInput">Type client</label>
      <select class="u-full-width" id="typeClient">
        <option value="Option 1">Personne physique</option>
        <option value="Option 2">Personne Morale</option>
        <option value="Option 3">Administration</option>
      </select>
    </div>
    </div>

  <div class="row">
    <div class="six columns">
      <label for="name">Nom</label>
      <input class="u-full-width" type="text" placeholder="" id="name">
    </div>
    <div class="six columns">
      <label for="firstname">Prénom</label>
      <input class="u-full-width" type="text" placeholder="" id="firstname">
    </div>
     
  </div>
  <label for="adresse">Adresse</label>
  <textarea class="u-full-width" placeholder="" id="adresse"></textarea>
  <label class="example-send-yourself-copy">
    <input type="checkbox">
    <span class="label-body">Send a copy to yourself</span>
  </label>
  <input class="button-primary" type="submit" value="Submit">
</form> 
      </div>
    </div> 
  </div>

  <form action="" method="" id=""> 
  	<fieldset>
  			<input type="hidden" value="0" name="id"><input type="hidden" value="" name="id_client"><input type="hidden" value="" name="id_affaire"><input type="hidden" value="" name="id_tache"><fieldset class="i" id="Information_Société"><legend class="i">Information Société</legend><div class="rangee">
			<label class="i" for="raison_sociale" id="labelraison_sociale"><span class="obligatoire">* </span>Raison sociale</label><span class="element"><input class="i" type="text" value="" name="raison_sociale" id="raison_sociale"></span>
			<label class="i" for="forme" id="labelforme">Forme juridique</label><span class="element"><input class="i" type="text" value="" name="forme" id="forme"></span>
			
			<label class="i" for="siret" id="labelsiret">SIRET</label><span class="element"><input class="i" type="text" value="" name="siret" id="siret"></span>
			
			<label class="i" for="capital" id="labelcapital">Capital</label><span class="element"><input class="i" type="text" value="" name="capital" id="capital"></span>
	   </fieldset>
		<fieldset>
			<legend class="i">Coordonnées</legend>

		<label class="i" for="adresse" id="labeladresse">Adresse</label><span class="element"> <textarea class="i" rows="4" cols="10" name="adresse" id="adresse"></textarea></span></div><div class="rangee"><label for="cp" class="i">Code postal</label>
      		<input name="cp" class="i" id="cp" value="" onkeyup="getCommune(this.value);" type="text" size="5" maxlength="5"></div>	<span id="msg_cp"></span> <div class="rangee"> <label for="commune" class="i">Commune</label>
     	 	<select class="i" name="no_commune" id="commune"><option value=""></option></select>	
			</div><div class="rangee">
			<label class="i" for="telephone" id="labeltelephone">Téléphone</label><span class="element"><input class="i" type="text" value="" name="telephone" id="telephone"></span>
			</div><div class="rangee">
			<label class="i" for="fax" id="labelfax">Fax</label><span class="element"><input class="i" type="text" value="" name="fax" id="fax"></span>
			</div><div class="rangee">
			<label class="i" for="Portable" id="labelPortable">Portable</label><span class="element"><input class="i" type="text" value="" name="Portable" id="Portable"></span>
			</div><div class="rangee"><label class="i" for="mail" id="labelmail">E-mail</label><span class="element"> <input class="i" type="text" onblur="control_mail(this.id,'er_mailmail');" value="" name="mail" id="mail"></span>&nbsp;<span id="er_mailmail" style="display:none;" class="error"></span></div><div class="rangee">
			<label class="i" for="www" id="labelwww">Site web</label><span class="element"><input class="i" type="text" value="" name="www" id="www"></span>
			</div></fieldset><fieldset class="i" id="Représentant_légal"><legend class="i">Représentant légal</legend><label class="i" id="labelcivilite">Titre de civilité</label><input type="radio" name="civilite" id="madame" value="Madame"><label for="madame">Mme</label>&nbsp;&nbsp;<input type="radio" name="civilite" id="mademoiselle" value="Mademoiselle"><label for="mademoiselle">Melle</label>&nbsp;&nbsp;<input type="radio" name="civilite" id="monsieur" value="Monsieur"><label for="monsieur">M</label>&nbsp;&nbsp;<input type="radio" name="civilite" id="Maître" value="Maître"><label for="Maître">Me</label>&nbsp;&nbsp;<input type="radio" name="civilite" id="Docteur" value="Docteur"><label for="Docteur">Dr</label><div class="rangee">
			<label class="i" for="nom_representant" id="labelnom_representant">Nom</label><span class="element"><input class="i" type="text" value="" name="nom_representant" id="nom_representant"></span>
			</div><div class="rangee">
			<label class="i" for="prenom_representant" id="labelprenom_representant">Prénom</label><span class="element"><input class="i" type="text" value="" name="prenom_representant" id="prenom_representant"></span>
			</div>
		</fieldset>
		<fieldset class="i" id="">
		<legend class="i"></legend>
				<div class="rangee">
		<label class="i" for="commentaires" id="labelcommentaires">Commentaires</label><span class="element"> <textarea class="i" rows="4" cols="10" name="commentaires" id="commentaires"></textarea></span></div></fieldset><span id="ERREUR"></span><input type="submit" class="i" value=" " name="close_">
		</form>