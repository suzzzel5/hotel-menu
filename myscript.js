


// function deleteitem(id) {
//     var r = confirm("Are you sure to delete?");
//     if (r == false) {
//     return false;
//     }

//     $.ajax({
//     url: "delete.php",
//     method: "get",
//     data: { id: id },
//     beforeSend: function () {
//         const newLocal = "<div class='loader'></div>";
//         $(".content").html(newLocal);
//     },
//     success: function (response) {
//         $(".content").html("<div class='msg success'>" + response + "</div>");
//     },
//     error: function (response) {
//         $(".content").html(
//     "<div class='msg delete'>" + response.responseText + "</div>"
//         );
//     },
//     });
//     return false;
// }
var cart=[]
function addtocart(){
    event.preventDefault();
    var itemname=$("select[name='itemname']").val();
    var price=$("select[name='itemname'] option:selected").attr("price");
    var id=$("select[name='itemname'] option:selected").attr("myid");
    
    var quantity=$("input[name='quantity']").val();
    var obj={"id":id,"itemname":itemname,"price":price,"quantity":quantity}
    cart.push(obj);
    console.clear();
    console.log(cart);
    displaycart();
    
}
function displaycart(){

    var table="<table border=1 class='display_table'>";
    table+="<tr><th>SN<th>Item Name<th>Quantity<th>Price<th>total</tr>"
    var sumTotal=0;
    for(var i=0; i<cart.length;i++){
        table+="<tr>";

        table+="<td>"+(i+1);
        table+="<td>"+cart[i]['itemname'];
        table+="<td>"+cart[i]['quantity'];
        table+="<td>"+cart[i]['price'];
        var total=cart[i]['quantity']*cart[i]['price'];
        sumTotal+=total;
        table+="<td>"+total;
        table+="<td><button onclick='deleteFromCart("+i+")' class='btn delete'>Delete</button>"
        table+="</tr>";
    }
     table+="<tr>";
     table+="<td align=center colspan=4>Total</td>";
     table+="<td>" +sumTotal;
     table+="</table>";
    //  console.log(table);
     $(".cart").html(table);
}
    function deleteFromCart(index){
        event.preventDefault();
        cart.splice(index,1);
        displaycart();
    }