const detailsTagArr = document.querySelectorAll("details");
const detailsItems = document.querySelectorAll(".items");



/*detailsTagArr.forEach((item)=>{
    item.addEventListener("mouseover", ()=>{
      item.setAttribute('open','');
    });
  });
  detailsItems.forEach((item)=>{
    item.addEventListener('mouseout',()=>{
      item.removeAttribute('open');
    });
  }); */

  for(let i=0;i<detailsTagArr.length; i++){
    detailsTagArr[i].addEventListener("mouseover",()=>{
      detailsTagArr[i].setAttribute('open','');
    });
    detailsItems[i].addEventListener("mouseout",()=>{
      detailsTagArr[i].removeAttribute('open');
    });
  }
