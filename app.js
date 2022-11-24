
 
    
       // getting the inputs from the modal to put values in them

       var book_id = document.querySelector("#bookId");
       var title_inp = document.querySelector("#title");
       var about_inp = document.querySelector("#about");
       var date_inp = document.querySelector("#date");
       var type_inp = document.querySelector("#type");
       var price_inp = document.querySelector("#price");
       var writer_inp = document.querySelector("#writer");
       var quantity_inp=document.querySelector("#quantity");
       


function gitElementToModal(id){

       // hiding the save button in the modal modification

     document.querySelector('#ModaleTitle').innerHTML=" 📚 Update book ";
    document.querySelector('#save-btn').style.display="none";
    document.querySelector('#update-btn').style.display="block";


 

   // (1) getting the curent from  into the books table
    let curent_title = document.getElementById(id).querySelector('.titleoftab').innerHTML;
    let curent_date = document.getElementById(id).querySelector('.dateoftab').innerHTML;
   let curent_about = document.getElementById(id).querySelector('.abuotoftab').innerHTML;
   let curent_price = document.getElementById(id).querySelector('.priceoftab').innerHTML;
   let curent_type= document.getElementById(id).querySelector('.typeoftab').innerHTML;
   let curent_quantity = document.getElementById(id).querySelector('.quantityoftab').innerHTML;
   let curent_writer = document.getElementById(id).querySelector('.writeroftab').innerHTML;
   
   console.log(curent_price);

  //(2) putting the values into the modal form
   
   book_id.value = id;
   title_inp.value = curent_title;
   about_inp.value = curent_about;
   writer_inp.value = curent_writer;
   date_inp.value = curent_date;
   price_inp.value = curent_price ;
   type_inp.value = curent_type ;
   quantity_inp.value = curent_quantity ;
    
}

function hidebuttonupdate(){

       // hiding the update button in the modal modification

       document.querySelector('#update-btn').style.display="none";
       document.querySelector('#save-btn').style.display="block";

}

function clear_form(){
   document.getElementById("form").reset();
 }

