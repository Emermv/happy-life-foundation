{
    "use strict";

  
  window.app = {
    MOBILE_BREAK_POINT: 968,
 
    isDesktop() {
      return app.MOBILE_BREAK_POINT <= window.innerWidth;
    },
    queryToObject(query) {
      var p = new URLSearchParams(query);
      var obj = {};
      p.forEach((val, key) => {
        obj[key] = val;
      });
      return obj;
    },

  };
  app.is_desktop=window.innerWidth>960;
  app.$resize={};
  var template=document.getElementById("template");
var style=template.content.querySelector('style');
if(style){
  document.getElementsByTagName('head')[0].appendChild(style);
}
var script=template.content.querySelector("script");
var m={};
if(script){
   try{
    Function('module','exports',script.innerText ).call({},m);
   }catch(ex){
     console.error(ex);
   }
}

if(!m.exports){
  m.exports={};
}
m.exports.template=template.content.querySelector('template').content.firstElementChild.outerHTML;
   Vue.component(template.attributes.component.value,m.exports);
  

    Vue.use(Vuetify);
   app.root= new Vue({
        el: '#app',
        data:{
          sheet:false
        },
        created(){
        
        },
        mounted(){

       
        },
        computed:{
          
         
        },
        methods: {
        
    
        },
        vuetify: new Vuetify({
          icons:{
            iconfont:'md'
          },
          theme:{
            themes:{
              light:{
                primary: '#584194',
                secondary: '#1d9cb3',
                accent: '#82B1FF',
                error: '#FF5252',
                info: '#2196F3',
                success: '#4CAF50',
                warning: '#FFC107',
                'light-grey':'#e6e6e6'
              }
            }
          }
        }),
      });
      
      window.onresize=function(){
        if(window.innerWidth>960){
          if(app.is_desktop){
            return;
          }
           app.is_desktop=true;
        }else{
          if(!app.is_desktop){
              return;
          }
          app.is_desktop=false;
        }
         for(var call in app.$resize){
          app.$resize[call](app.is_desktop,{
            height:window.innerHeight,
            width:window.innerWidth
          });
         }
      };

  app.$ = {
    empty: function (el) {
      try {
        while (el.firstChild) {
          el.removeChild(el.firstChild);
        }
      } catch (err) {
        console.warn(err);
      }
    }
  };

  app.toFormData = function (args = {}) {
    let data = new FormData();
    for (let a in args) {
      if (typeof args[a] == 'object') {
        data.append(a, JSON.stringify(args[a]));
      } else if (typeof args[a] == 'boolean') {
        data.append(a, args[a] ? 1 : 0);
      } else {
        data.append(a, args[a]);
      }
    }
    return data;
  };

  app.uniqueId = function (length = 8) {
    var chars = 'abcdefghijklmnopqrstuvwxyz'.split('');
    if (!length) {
      length = Math.floor(Math.random() * chars.length);
    }
    var str = '';
    for (var i = 0; i < length; i++) {
      str += chars[Math.floor(Math.random() * chars.length)];
    }
    return str;
  };

  app.calcHeight = function (quit = 0) {
    return window.innerHeight - 48 - quit;
  };



}