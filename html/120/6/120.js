// 获取要操作的元素
let items=document.querySelectorAll('button');

// 设置选中项的样式
function setActive(){
    this.classList.add('active');
}
function clearActive(){
    this.classList.remove('active');
}

//document.getElementById("button").src
items.forEach((item)=>{
    item.addEventListener('mouseover',setActive);
    item.addEventListener('mouseleave',clearActive);
})