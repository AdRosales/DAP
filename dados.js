var aImg = ['1.jpg', '2.jpg', '3.png', '4.png', '5.jpg', '6.png'];
    
function getRandomImage(imgAr) {
    var num = Math.floor( Math.random() * imgAr.length );
    var img = imgAr[ num ];
    var imgStr = '<img src="' + img + '" alt = "">';
    document.write(imgStr);
}