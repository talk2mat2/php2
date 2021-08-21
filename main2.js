
const clickbutton= document.getElementById('clickmenow')
const clickbutton2= document.getElementById('clickmenow2')
const cartitem= document.getElementById('cartitem')



class storage{
    saveTostorage(data){
    
localStorage.setItem(data,JSON.stringify(data));

    }
    getFromStorage(data){
return localStorage.getItem(data)?JSON.parse(localStorage.getItem(data)):'empty';
    }
    
    async deleteFromStorage(data){
return localStorage.getItem(data)?localStorage.removeItem(data):null;
    }
}
document.addEventListener("DOMContentLoaded",()=>{
    var Storage=new storage();
    clickbutton2.addEventListener('click',(e)=>{
        Storage.deleteFromStorage(clickbutton.dataset.id).then(()=>{
            cartitem.innerText=Storage.getFromStorage("3");
        });
      
    }
        );
    clickbutton.addEventListener('click',(e)=>{
      
        Storage.saveTostorage(clickbutton.dataset.id);
        cartitem.innerText=Storage.getFromStorage("3");
    }
        );
        cartitem.innerText=Storage.getFromStorage("3")   

})

