const dotBtn = document.querySelectorAll("nav-link");
[...dotBtn].forEach((item) =>item.addEventListener("click",function(i){
[...dotBtn].forEach(itemlist =>itemlist.classList.remove("active"));
if(item.className != "nav-item active")
{
    item.className +=" active";
}
})
);


