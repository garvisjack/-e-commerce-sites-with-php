/* 
* @Author: anchen
* @Date:   2016-12-23 10:15:44
* @Last Modified by:   anchen
* @Last Modified time: 2016-12-23 10:26:44
*/

var Tool = {

   addEvent:function(node,ename,fn){
                  if(navigator.userAgent.toLowerCase().indexOf("ie")!=-1){//是ie
                         node.attachEvent("on"+ename, fn);
                   }else{
                         node.addEventListener(ename,fn, false);
                   }
            },

    removeEvent:function(node,ename,fn){
                      if(navigator.userAgent.toLowerCase().indexOf("ie")!=-1){//是ie
                                 node.detachEvent("on"+ename, fn);
                           }else{
                                 node.removeEventListener(ename,fn, false);
                           }
                        },

    getWidthHeight:function(){

                 var arr = new Array();
                    if(window.innerWidth){
                        arr[0] = window.innerWidth;
                        arr[1] = window.innerHeight;
                     }else{
                        arr[0] = document.documentElement.clientWidth;
                        arr[1] = document.documentElement.clientHeight;
                    } 
                    return arr;

    },

    $:function(data){
          return document.getElementById(data);
    }                    

};