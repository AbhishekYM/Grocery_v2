$(document).ready(function(){
    //-- Click on detail
    $("ul.menu-items > li").on("click",function(){
        $("ul.menu-items > li").removeClass("active");
        $(this).addClass("active");
    })

    $(".attr,.attr2").on("click",function(){
        var clase = $(this).attr("class");

        $("." + clase).removeClass("active");
        $(this).addClass("active");
    })

    //-- Click on QUANTITY
    $(".btn-minus").on("click",function(){
        var now = $(".section > div > input").val();
        if ($.isNumeric(now)){
            if (parseInt(now) -1 > 0){ now--;}
            $(".section > div > input").val(now);
        }else{
            $(".section > div > input").val("1");
        }
    })            
    $(".btn-plus").on("click",function(){
        var now = $(".section > div > input").val();
        if ($.isNumeric(now)){
            $(".section > div > input").val(parseInt(now)+1);
        }else{
            $(".section > div > input").val("1");
        }
    }) 
    
    
}) 

function addToCart(productId,userId,quantity,details) {
    if(productId != null && userId != null && quantity != null && details != null){
        $.ajax({
            url:"add-to-cart.php",    //the page containing php script
            type: "post",    //request type,
            dataType: 'json',
            data: {productId: productId,userId:userId,quantity:quantity,details:details,added:"yes"},
            success:function(result){
                console.log(result);
                if(result){
                    alert('Added to cart successfully');
                }
            }
        });
    }
    
}