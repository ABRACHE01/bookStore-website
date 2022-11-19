	   // getting the inputs from the modal to put values in them

       var book_id = document.getElementById("adminId");
       var title_inp = document.getElementById("title");
       var about_inp = document.getElementById("about");
       var date_inp = document.getElementById("date");
       var type_inp = document.getElementById("type");
       var price_inp = document.getElementById("price");

       var writer_inp = document.getElementById("writer");
       var quantity_inp=document.getElementById("quantity");
       

function gitElementToModal(id){ 

   // (1) getting the curent from  the table task 
   let curent_title = document.getElementById(id).querySelector('.titleoftab').innerHTML;
   let curent_date = document.getElementById(id).querySelector('.dateoftab').innerHTML;
   let curent_about = document.getElementById(id).querySelector('.aboutoftab').innerHTML;
   let curent_price = document.getElementById(id).querySelector('.priceoftab').innerHTML;
   let curent_type= document.getElementById(id).querySelector('.typeoftab').innerHTML;
   let curent_quantity = document.getElementById(id).querySelector('.quantityoftab').innerHTML;
   
   //(2) putting the values into the modal form
   
   book_id.value=id;
   title_inp.value=curent_title;
   about_inp.value=;
   price_inp.value= date ;
   type_inp.value = priority ;
   quantity_inp.value =  ;
    
}

function clear_form(){
   document.getElementById("form-task").reset();
 }