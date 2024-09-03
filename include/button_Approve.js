
Runner.buttonEvents["Approve"]=function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Approve';if(!pageObj.buttonEventBefore['Approve']){pageObj.buttonEventBefore['Approve']=function(params,ctrl,pageObj,proxy,pageid,rowData,row,submit){var ajax=ctrl;$('#loadingSpinner').show();return true;}}
if(!pageObj.buttonEventAfter['Approve']){pageObj.buttonEventAfter['Approve']=function(result,ctrl,pageObj,proxy,pageid,rowData,row,params){var ajax=ctrl;if(result.hideButton){$('#Declied').hide();}
refreshRoomStatus();$('#loadingSpinner').hide();}
function refreshRoomStatus(){location.reload();}}
$('a[id="Approve"]').each(function(){if($(this).closest('.gridRowAdd').length){return;}
this.id="Approve"+"_"+Runner.genId();var button_Approve=new Runner.form.Button({id:this.id,btnName:"Approve"});button_Approve.init({args:[pageObj,proxy,pageid]});});};