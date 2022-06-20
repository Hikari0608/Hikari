// 获取要操作的元素
let items=document.querySelectorAll('.item');
let current_tag=document.querySelector('.current-tag');
let handler=document.querySelector('.handler');
let left_box=document.querySelector('.left-box');

// 设置选中项的样式
function setActive(){
    items.forEach((item)=>{
        item.classList.remove('active');
    })
    this.classList.add('active');
    current_tag.innerText=this.innerText;
}
function changeSrc(){
	document.getElementById("myiframe").src=this.value;
	if(this.value >= 8){
		document.getElementById("myiframe").src="https://www.bilibili.com/video/BV1cY411M7KM"
	}
}
// 为每一个li设置点击事件
items.forEach((item)=>{
    item.addEventListener('click',setActive);
    item.addEventListener('click',changeSrc);
})

handler.addEventListener('click',function(){
    if(!this.classList.contains('close')){
        left_box.style.width=0;
        this.classList.add('close');
    }else{
        left_box.style.width=250+'px';
        this.classList.remove('close');
    }
})