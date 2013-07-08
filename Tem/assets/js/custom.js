/**************** ADD NEW RAWS TO TABLE ***********************/
var cRow= ' <tr> <td> <div class="control-group"> <div class="controls"> <select class="input-block-level"> <option>ذكر</option> <option>أنثى</option> </select> <span class="help-inline"></span> </div> </div> </td> <td> <div class="control-group"> <div class="controls"> <input type="number" class="input-block-level" id="inputdata"> <span class="help-inline"></span> </div> </div> </td> <td> <div class="control-group"> <div class="controls"> <select class="input-block-level"> <option>تي شيرت</option> <option>بنطلون</option> <option>ثوب</option> <option>فستان</option> <option>اخرى</option> </select> <span class="help-inline"></span> </div> </div> </td> <td> <div class="control-group"> <div class="controls"> <input type="text" class="input-block-level" id="inputdata"> <span class="help-inline"></span> </div> </div> </td> <td> <div class="control-group"> <div class="controls"> <input type="number"class="input-block-level" id="inputdata"> <span class="help-inline"></span> </div> </div> </td> </tr> ';
var fRow = ' <tr> <td> <div class="control-group"> <div class="controls"> <input type="text" class="input-block-level" id="inputdata"> <span class="help-inline"></span> </div> </div> </td> <td> <div class="control-group"> <div class="controls"> <input type="number" class="input-block-level" id="inputdata"> <span class="help-inline"></span> </div> </div> </td> <td> <div class="control-group"> <div class="controls"> <select class="input-block-level"> <option>ذكر</option> <option>أنثى</option> </select> <span class="help-inline"></span> </div> </div> </td> <td> <div class="control-group"> <div class="controls"> <input type="number" class="input-block-level" id="inputdata"> <span class="help-inline"></span> </div> </div> </td> <td> <div class="control-group"> <div class="controls"> <select class="input-block-level"> <option>XXL</option> <option>XL</option> <option>L</option> <option>M</option> <option>S</option> </select> <span class="help-inline"></span> </div> </div> </td> <td> <div class="control-group"> <div class="controls"> <select class="input-block-level"> <option>XXL</option> <option>XL</option> <option>L</option> <option>M</option> <option>S</option> </select> <span class="help-inline"></span> </div> </div> </td> <td> <div class="control-group"> <div class="controls"> <input type="number" class="input-block-level" id="inputdata"> <span class="help-inline"></span> </div> </div> </td> <td> <div class="control-group"> <div class="controls"> <input type="text" class="input-block-level" id="inputdata"> <span class="help-inline"></span> </div> </div> </td> </tr>';

$(function() {

    $('#addClothsBtn').click(function() {
		$('#addClothesTable tbody').append(cRow);
		
    });
    
    /***************************************/
    
    $('#removeClothsBtn').click(function() {
       $('#addClothesTable tr:last').remove()       
    });
    
    /***************************************/
    $('#addFamilyBtn').click(function() {
		$('#addFamilyTable tbody').append(fRow);
		
    });
    
    /***************************************/
    
    $('#removeFamilyBtn').click(function() {
       $('#addFamilyTable tr:last').remove()       
    });
    
    /***************************************/
    
   /*
 $('td').onblur(function(){
	   if( 
    });
*/
});
