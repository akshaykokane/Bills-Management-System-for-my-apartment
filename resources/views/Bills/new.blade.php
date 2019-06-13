@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Bill</h1>
  <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Bill #</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="date">Date</label>  
  <div class="col-md-4">
  <input id="date" name="date" type="date" placeholder="Date of purchase" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button Drop Down -->
<div class="form-group">
  <label class="col-md-4 control-label" for="paidBy">Payer</label>
  <div class="col-md-4">
    <div class="input-group">
      <input id="paidBy" name="paidBy" class="form-control" placeholder="Please select name" type="text" required="">
      <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
          Select
          <span class="caret"></span>
        </button>
        <ul class="dropdown-menu pull-right">
          <li><a href="#">Akshay</a></li>
          <li><a href="#">Mehir</a></li>
          <li><a href="#">Atharva</a></li>
          <li><a href="#">Roomate-4</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="container">
<!--Table-->
        <table id="itemTable" class="table">
        <!--Table head-->
          <thead>
            <tr>
              <th>#</th>
              <th>Item Name</th>
              <th>Qty</th>
              <th>Price</th>
              <th>Akshay</th>
              <th>Mehir</th>
              <th>Atharva</th>
              <th>Roomate-4</th>
            </tr>
          </thead>
          <!--Table head-->
          <!--Table body-->
          <tbody>
            <tr>
              <th scope="row" name="rowNum1">1</th>
              <td><input type="text" id="itemName1" name="itemName1"></td>
              <td><input type="number" id="itemQty1"></td>
              <td><input type="number" id="itemPrice1"></td>
              <td><input type="checkbox" id="Ak1" value="Ak"></td>
              <td><input type="checkbox" id="M1"  value="M"></td>
              <td><input type="checkbox" id="Aj1" value="Aj"></td>
              <td><input type="checkbox" id="R41"  value="R4"></td>
               <td> <button class="btn btn-danger" onclick="deleteRow(1)">Delete</button></td>
              
            </tr>
        
          </tbody>
          <!--Table body-->
          
        </table>
        
         <span onclick="addRow()" class="btn btn-primary">Add</span>
<br>

<hr>
<input type="checkbox" id="confirmation" onclick="enableCalcBtn()"> I have rechecked the list and confirming the items and prices.
Please calculate only after checking the list   <span onclick="calculate()" id="calculateBtn" class="btn btn-success" disabled>Calculate</span>
<hr>
<br><br>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-6">
                     <hr>
            <h1>Akshay's Item</h1>
             <table id="itemTableForAkshay" class="table">
        <!--Table head-->
          <thead>
            <tr>
              <th>#</th>
              <th>Item Name</th>
              <th>Qty</th>
              <th>Price</th>
            </tr>
          </thead>
          <!--Table head-->
          <!--Table body-->
          <tbody>
         
        
         </tbody>
          <!--Table body-->
          
        </table>         
        </div>
       
        <div class="col-md-6">
             <hr>
                 <h1>Mehir's Item</h1>
             <table id="itemTableForMehir" class="table">
        <!--Table head-->
          <thead>
            <tr>
              <th>#</th>
              <th>Item Name</th>
              <th>Qty</th>
              <th>Price</th>
            </tr>
          </thead>
          <!--Table head-->
          <!--Table body-->
          <tbody>
          
        
         </tbody>
          <!--Table body-->
          
        </table>         
        </div>
        <hr>
        <div class="col-md-6">
                     <hr>
             <h1>Atharva's Item</h1>
             <table id="itemTableForAtharva" class="table">
        <!--Table head-->
          <thead>
            <tr>
              <th>#</th>
              <th>Item Name</th>
              <th>Qty</th>
              <th>Price</th>
            </tr>
          </thead>
          <!--Table head-->
          <!--Table body-->
          <tbody>
           
        
         </tbody>
          <!--Table body-->
          
        </table>         
        </div>
        <hr>
        <div class="col-md-6">
                     <hr>
               <h1>R4's Item</h1>
             <table id="itemTableForR4" class="table">
        <!--Table head-->
          <thead>
            <tr>
              <th>#</th>
              <th>Item Name</th>
              <th>Qty</th>
              <th>Price</th>
            </tr>
          </thead>
          <!--Table head-->
          <!--Table body-->
          <tbody>
          
        
         </tbody>
          <!--Table body-->
          
        </table>         
        </div>
        <hr>
   
    </div>
    <div class="row"></div>
</div>




<!--Table-->

</fieldset>
 
</form>

 <ul class="list-unstyled" id="list"></ul>
</div>

<script>

  function addRow()
 {
   var arrTables = document.getElementById('itemTable');
   var oRows = arrTables.rows;
   var numRows = oRows.length;

   var newRow = document.getElementById('itemTable').insertRow( numRows );
   var rowNum = newRow.insertCell(0);
   var itemName = newRow.insertCell(1);
   var Qty = newRow.insertCell(2);
   var Price = newRow.insertCell(3);   
   var Akshay = newRow.insertCell(4);
   var Mehir = newRow.insertCell(5);
   var Atharva = newRow.insertCell(6);
   var Roomate = newRow.insertCell(7);
  
   var del = newRow.insertCell(8);
  
   rowNum.innerHTML = "<span id="+numRows+">"+numRows;
   itemName.innerHTML = "<input type='text' id='itemName"+numRows+"'>";
   Qty.innerHTML = "<input type='number' id='itemQty"+numRows+"'>";
   Price.innerHTML = "<input type='number' id='itemPrice"+numRows+"'>";
   
   Akshay.innerHTML = "<input type='checkbox' id='Ak"+numRows+"'  value='Ak'>"
   Mehir.innerHTML = "<input type='checkbox' id='M"+numRows+"'  value='M'>"
   Atharva.innerHTML = "<input type='checkbox' id='Aj"+numRows+"'  value='Aj'>"
   Roomate.innerHTML = "<input type='checkbox' id='R4"+numRows+"'  value='R4'>"
   del.innerHTML = "<button class='btn btn-danger' onclick='deleteRow("+numRows+")'>Delete</button>"
   
 }
 
 function deleteRow(rowNum){
     document.getElementById("itemTable").deleteRow(rowNum);
     
 }
 
 function calculate(){
     
    var arrTables = document.getElementById('itemTable');
   
    var oRows = arrTables.rows;
    var numRows = oRows.length;
      var AkTotalPrice = 0;
        var AjTotalPrice = 0;
        var MTotalPrice = 0;
        var r4TotalPrice = 0;
    for(var i = 1; i < numRows; i++){
        
        var itemNameStr = "itemName"+i;
        var QtyStr = "itemQty"+i;
        var priceStr = "itemPrice"+i;
        var AkCheckBox = "Ak"+i;
        var MCheckBox = "M"+i;
        var AjCheckBox = "Aj"+i;
        var R4CheckBox = "R4"+i;
        var countForAk = 0;
        
        var itemName = document.getElementById(itemNameStr).value;
        var Qty = document.getElementById(QtyStr).value;
        var price =  document.getElementById(priceStr).value;
      
       console.log(itemName);
      if(document.getElementById(AkCheckBox).checked && document.getElementById(MCheckBox).checked && document.getElementById(AjCheckBox).checked && document.getElementById(R4CheckBox).checked  )
      {
          console.log("checked all 4");
          var pricePerHead = price / 4;
          console.log(pricePerHead);
          
          addRowInAk(itemName, pricePerHead);
          addRowInAj(itemName, pricePerHead);
          addRowInM(itemName, pricePerHead);
          addRowInR4(itemName, pricePerHead);
          
          AkTotalPrice += pricePerHead;
          AjTotalPrice += pricePerHead;
          MTotalPrice += pricePerHead;
          r4TotalPrice += pricePerHead;
          
      }
      else if(document.getElementById(AkCheckBox).checked && document.getElementById(MCheckBox).checked && document.getElementById(AjCheckBox).checked){
          console.log("checked Ak, AJ and M"); 
          
           var pricePerHead = price / 3;
          console.log(pricePerHead);
          
          addRowInAk(itemName, pricePerHead);
          addRowInAj(itemName, pricePerHead);
          addRowInM(itemName, pricePerHead);
          
          AkTotalPrice += pricePerHead;
          AjTotalPrice += pricePerHead;
          MTotalPrice += pricePerHead;
         
      }
      else if(document.getElementById(AkCheckBox).checked && document.getElementById(AjCheckBox).checked && document.getElementById(R4CheckBox).checked){
          console.log("checked Ak, AJ and R4"); 
          
         
          var pricePerHead = price / 3;
          console.log(pricePerHead);
          
          addRowInAk(itemName, pricePerHead);
          addRowInAj(itemName, pricePerHead);
          addRowInR4(itemName, pricePerHead);
          
          AkTotalPrice += pricePerHead;
          AjTotalPrice += pricePerHead;
          r4TotalPrice += pricePerHead;
          
      }
      else if(document.getElementById(MCheckBox).checked && document.getElementById(AjCheckBox).checked && document.getElementById(R4CheckBox).checked){
          console.log("checked M, AJ and R4"); 
          
         
          var pricePerHead = price / 3;
          console.log(pricePerHead);
          
          addRowInAj(itemName, pricePerHead);
          addRowInM(itemName, pricePerHead);
          addRowInR4(itemName, pricePerHead);
          
          AjTotalPrice += pricePerHead;
          MTotalPrice += pricePerHead;
          r4TotalPrice += pricePerHead;
          
      }
      else if(document.getElementById(AkCheckBox).checked && document.getElementById(MCheckBox).checked)
      {
          console.log("checked Ak and M");
          
          var pricePerHead = price / 2;
          console.log(pricePerHead);
          
          addRowInAk(itemName, pricePerHead);
          addRowInM(itemName, pricePerHead);
          
          AkTotalPrice += pricePerHead;
          MTotalPrice += pricePerHead;
     
          
      }
      else if(document.getElementById(AkCheckBox).checked && document.getElementById(AjCheckBox).checked)
      {
          console.log("checked Ak and Aj");
         
          var pricePerHead = price / 2;
          addRowInAk(itemName, pricePerHead);
          addRowInAj(itemName, pricePerHead);
          
          AkTotalPrice += pricePerHead;
          AjTotalPrice += pricePerHead;
          
         
      }
      else if(document.getElementById(AkCheckBox).checked && document.getElementById(R4CheckBox).checked)
      {
          console.log("checked Ak and R4");
           var pricePerHead = price / 2;
          addRowInAk(itemName, pricePerHead);
          addRowInR4(itemName, pricePerHead);
          
          AkTotalPrice += pricePerHead;
          r4TotalPrice += pricePerHead;
      }
      else if(document.getElementById(MCheckBox).checked && document.getElementById(AjCheckBox).checked)
      {
          console.log("checked M and Aj");
           var pricePerHead = price / 2;
           
          addRowInAj(itemName, pricePerHead);
          addRowInM(itemName, pricePerHead);
  
          AjTotalPrice += pricePerHead;
          MTotalPrice += pricePerHead;
         
         
      }
      else if(document.getElementById(MCheckBox).checked && document.getElementById(R4CheckBox).checked)
      {
          console.log("checked M and R4");
          
           var pricePerHead = price / 2;
          addRowInM(itemName, pricePerHead);
          addRowInR4(itemName, pricePerHead);

          MTotalPrice += pricePerHead;
          r4TotalPrice += pricePerHead;
      }
      else if(document.getElementById(AjCheckBox).checked && document.getElementById(R4CheckBox).checked)
      {
          console.log("checked Aj and R4");
           var pricePerHead = price / 2;
         
          addRowInAj(itemName, pricePerHead);
          addRowInR4(itemName, pricePerHead);
          
          AjTotalPrice += pricePerHead;
          r4TotalPrice += pricePerHead;
      } 
      else if(document.getElementById(AjCheckBox).checked)
      {
          console.log("checked Aj");
           var pricePerHead = price / 1;
           
          addRowInAj(itemName, pricePerHead);
          
          AjTotalPrice += pricePerHead;
        
         
      }  
      else if(document.getElementById(AkCheckBox).checked)
      {
          console.log("checked Ak");
           var pricePerHead = price / 1;
           
          addRowInAk(itemName, pricePerHead);
          AkTotalPrice += pricePerHead;
        
      }
      else if(document.getElementById(MCheckBox).checked)
      {
          console.log("checked M");
          
           var pricePerHead = price / 1;
         
          addRowInM(itemName, pricePerHead);
          
          MTotalPrice += pricePerHead;
      }
     else if(document.getElementById(R4CheckBox).checked)
      {
          console.log("checked R4");
          
           var pricePerHead = price / 2;
        
          addRowInR4(itemName, pricePerHead);
          
          r4TotalPrice += pricePerHead;
      }
      
    }
     
         addRowInAk("***TOTAL***", AkTotalPrice);
          addRowInAj("***TOTAL***", AjTotalPrice);
          addRowInM("***TOTAL***", MTotalPrice);
          addRowInR4("***TOTAL***", r4TotalPrice);
     
     
}

function addRowInAk(itemName1, price){
    var arrTables = document.getElementById('itemTableForAkshay');
   var oRows = arrTables.rows;
   var numRows = oRows.length;

   var newRow = document.getElementById('itemTableForAkshay').insertRow( numRows );
   var rowNum = newRow.insertCell(0);
   var itemName = newRow.insertCell(1);
   var Qty = newRow.insertCell(2);
   var Price = newRow.insertCell(3);   
   
   rowNum.innerHTML = "<span id="+numRows+">"+numRows;
   itemName.innerHTML = itemName1;
   Qty.innerHTML = 1;
   Price.innerHTML = price;
}
function addRowInAj(itemName1, price){
    var arrTables = document.getElementById('itemTableForAtharva');
   var oRows = arrTables.rows;
   var numRows = oRows.length;

   var newRow = document.getElementById('itemTableForAtharva').insertRow( numRows );
   var rowNum = newRow.insertCell(0);
   var itemName = newRow.insertCell(1);
   var Qty = newRow.insertCell(2);
   var Price = newRow.insertCell(3);   
   
   rowNum.innerHTML = "<span id="+numRows+">"+numRows;
   itemName.innerHTML = itemName1;
   Qty.innerHTML = 1;
   Price.innerHTML = price;
}

function addRowInM(itemName1, price){
    var arrTables = document.getElementById('itemTableForMehir');
   var oRows = arrTables.rows;
   var numRows = oRows.length;

   var newRow = document.getElementById('itemTableForMehir').insertRow( numRows );
   var rowNum = newRow.insertCell(0);
   var itemName = newRow.insertCell(1);
   var Qty = newRow.insertCell(2);
   var Price = newRow.insertCell(3);   
   
   rowNum.innerHTML = "<span id="+numRows+">"+numRows;
   itemName.innerHTML = itemName1;
   Qty.innerHTML = 1;
   Price.innerHTML = price;
}
function addRowInR4(itemName1, price){
    var arrTables = document.getElementById('itemTableForR4');
   var oRows = arrTables.rows;
   var numRows = oRows.length;

   var newRow = document.getElementById('itemTableForR4').insertRow( numRows );
   var rowNum = newRow.insertCell(0);
   var itemName = newRow.insertCell(1);
   var Qty = newRow.insertCell(2);
   var Price = newRow.insertCell(3);   
   
   rowNum.innerHTML = "<span id="+numRows+">"+numRows;
   itemName.innerHTML = itemName1;
   Qty.innerHTML = 1;
   Price.innerHTML = price;
}
function enableCalcBtn(){
    var btn = document.getElementById("calculateBtn"); 
    if(btn.disabled)
        btn.disabled = false;
    else
        btn.disabled = true;

}

</script>
@endsection
