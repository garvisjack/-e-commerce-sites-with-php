function add(data,node){
   var id = data

    $.getJSON("?c=car&a=add",{add:id},function(msg){
           node.prev().val(msg[0]);//数量
          node.parent().next().html(msg[1]);//小计
           $("#total").html(msg[2])

    })
}

function minus(data,node) {
    var id = data
    $.getJSON("?c=car&a=minus",{minus:id},function(msg){

            node.next().val(msg[0]);//数量
           node.parent().next().html(msg[1]);//小计
            $("#total").html(msg[2])

    })

}

function deletex(data){

    $.getJSON("?c=car&a=del",{del:data},function(msg){
           if(msg==1){
               location.href="?c=car&a=show";//如果session有值
           }else{
               location.href="?c=car&a=show";
           }
    })
}