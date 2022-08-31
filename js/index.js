// let list = document.getElementsByTagName('a');

// for(i=0,len = list.length;i<len;i++){
//     console.log(list.item(i).href);
// }

/**-------------------------------------------------------------- */
// let current = new Date();
// let nam = document.getElementsByName('time');
// nam[0].value = current.toLocaleTimeString();

// document.addEventListener('DOMContentLoaded',function(){
//     let flag = document.createDocumentFragment();
//     let books = [
//         {ttl:'php',price:3200},
//         {ttl:'java',price:2680},
//         {ttl:'android',price:2000}
//     ];

//     let list = document.getElementById('list');

//     for(i=0,len=books.length;i<len;i++){
//         let b = books[i];
//         let li = document.createElement('li');
//         let text = document.createTextNode(b.ttl+':'+b.price+'円');
//         li.appendChild(text);
//         flag.appendChild(li);
//     }
//     list.appendChild(flag);
// })
// document.addEventListener('DOMContentLoaded',function(){
//     document.getElementById('fm').addEventListener('submit',function(e){
//         if(!window.confirm('ページを送信してもよろしいですか？')){
//             e.preventDefault();

//         }
//     },false);
// },false);
// document.addEventListener('DOMContentLoaded',function(){
//     let btn = document.getElementById('btn');
//     // let listener = function(){window.alert('こんにちは');};
//     // btn.addEventListener('click',listener,false);
//     // btn.removeEventListener('click',listener,false);
//     btn.addEventListener('click',function(e){
//         let target = e.target;
//         console.log('発生元:'+target.nodeName + '/' + target.id);
//     },false);

//     let main = document.getElementById('main');
//     main.addEventListener('mousemove',function(e){
//         main.innerHTML = 'スクリーン ' + e.screenX + ' / '  + e.screenY+ '<br />'+ 'page '+ e.pageX + ' / ' + e.pageY+'<br />'+'client ' + e.clientX+ ' / '+e.clientY+'<br />'+'offset '+ e.offsetX+' / '+e.offsetY; 
//     },false);
// },false);
// document.addEventListener('DOMContentLoaded',function(){
//     let list = document.getElementById('list');
//     let del = document.getElementById('del');
//     let pic = document.getElementById('pic');

//     list.addEventListener('click',function(e){
//         let isbn = e.target.getAttribute('data-isbn');
//         console.log(isbn);
//     },false);
// },false);
/**-------------------------------------------------------------- */
let el= document.getElementById('img_wrap');
let img = document.getElementsByClassName('img');
let i = 0;
let len = img.length;
console.log(len);
img.animate([{opacity: '1'}, {opacity: '0'}], 50);
img.item(1).animate([{opacity: '0'}, {opacity: '1'}], 5000);
// let slide= function(){
//     if(i<len) {
//         img.animate([{opacity: '1'}, {opacity: '0'}], 500);
//         img.item(i).animate([{opacity: '0'}, {opacity: '1'}], 500);
        
//         i++;
//         console.log(i);
//         console.log(len);
//     }else {
//         i=0;
//         console.log(i);
//         console.log(len);
//     }
// }
// setInterval(slide,2000);

/**-------------------------------------------------------------- */
/**-------------------------------------------------------------- */
/**-------------------------------------------------------------- */