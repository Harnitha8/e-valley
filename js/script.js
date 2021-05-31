function fun1(x){
    var content;
    switch (parseInt(x))
    {
        case 1:
            content=" Clothes ";
            break;
        case 2:
            content=" Foot-wear ";
            break;
        case 3:
            content=" Mobiles ";
            break;
        case 4:
            content=" Laptops ";
            break;
        case 5:
            content=" Luggage-Bags ";
            break;
        case 6:
            content=" Stationary ";
            break;
        case 7:
            content=" Food & Beverages ";
            break;
        case 8:
            content=" Accessories ";
            break;
        default:
            content="";
    }
    document.getElementById("text").innerHTML=content;
}
function fun2(){
    document.getElementById("text").innerHTML="";
}