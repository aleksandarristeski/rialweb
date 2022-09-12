jQuery(document).ready(function() {
//++++++Update--Text++++++++++++++++++++++++++++++++++++++++++++++++++++
  let edit = () => {
    $(".edit").click(function(){
      $(this).addClass("editMode");
    });
    $(".edit").focusout(function(){
      $(this).removeClass("editMode");
      let id = this.id;	
      // console.log(id);
      let teilenId = id.split("-");
      // console.log(teilenId);
      let feldName = teilenId[0];
      let feldId = teilenId[1];
      let value = $(this).text();
      // console.log(value);  
      $.ajax({
        url: "auth/update.php",
        type: "post", 
        dataType: "text",
        data: {spalteName: feldName, spalteWert: value, produktId: feldId}
      });//ende $.ajax
    });//ende focusout
  }//ende editieren
  edit();
//++++++Update--Checkbox++++++++++++++++++++++++++++++++++++++++++++++++++++
  let cedit = () => {
    $(".cedit").change(function(){
      let idChbox = this.id;	
      valueC = ""
      let teilenCid = idChbox.split("-");
      let feldCname = teilenCid[0];
      let feldCid = teilenCid[1];
      if(this.checked){
        valueC = "ja"
      } 
      else {
        valueC = "nein"
      }                 
      $.ajax({
        url: "auth/update.php",
        type: "post", 
        dataType: "text",
        data: {spalteName: feldCname, spalteWert: valueC, produktId: feldCid}
      });
      location.reload()
    });
  }
  cedit()
})//ende ready