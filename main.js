const Loader=document.querySelector('.loader');
async function handlesubmit(e){
    e.preventDefault();

const Passwordvalue=document.getElementById('password')['value'];
const Emailvalue=document.getElementById('email').value;


    console.log(e)
    if(!Emailvalue || !Passwordvalue){
       return alert('all fields are needed')
    }
    
    else{
        const updateRequest = new FormData();
        updateRequest.append('updateRequest', 'next-period');
        const formattedFormData = {
            email:Emailvalue,
            password: Passwordvalue
        }
        Loader.classList.remove('hidden')
   await fetch('submit.php',
   {
       method: 'POST',
       /*
        * We also need to stringify the values, turn the
        * JavaScript object to a single string that is accepted
        * as JSON. So we are sending one string that contains
        * all our values
        */
       body: JSON.stringify(formattedFormData)
   })
        .then(async (response) => {
            
            const data= await response.text()
        console.log(data)})
        .then(data =>  
           { 
          
            Loader.classList.add('hidden')
        }
   
            ).catch(error=>{
                console.log(error)
                alert('login eroor')
                Loader.classList.add('hidden')
            });
      
    
    }
        
}

const John = document.getElementById('john');
John.addEventListener('click',handlesubmit);



class errorHandler{
    constructor( error){
this.error= error

    }

DisplayError() {
      if( this.error.status===true){
        return this.error.message;
      }
    }
}

//newError.DisplayError()
const newError= new errorHandler({status:true,message:"hello martins"});

document.getElementById("errordisplay").innerHTML=newError.DisplayError();


class saveProducts{
static  comechop(params) {
    console.log(params)
}

    saveProducts(Products){
localStorage.setItem("cart",{...products})
    }
getproducts(){
    localStorage.getItem("cart").then(products=>this.saveProducts(products))
}

}
const products =new saveProducts()
document.addEventListener("loaded",products.saveProducts())
// saveProducts.comechop(params)

const clickbutton= document.getElementById('clickmenow')
clickbutton.addEventListener('click',(e)=>console.log(e.target))