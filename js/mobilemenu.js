
        /**
    * @name             mobilemenu
    * @descripton           This $ plugin makes creating mobilemenus pain free
    * @version            1.3
    * @requires           $ 1.2.6+
    *
    * @author             Jan Jarfalk
    * @author-email         jan.jarfalk@unwrongest.com
    * @author-website         http://www.unwrongest.com
    *
    * @licens             MIT License - http://www.opensource.org/licenses/mit-license.php
    */

    (function($){
         $.fn.extend({  
             mobilemenu: function() {       
                return this.each(function() {
                  
                  var $ul = $(this);
                  
            if($ul.data('accordiated'))
              return false;
                              
            $.each($ul.find('ul, li>div'), function(){
              $(this).data('accordiated', true);
              $(this).hide();
            });
            
            $.each($ul.find('span.head'), function(){
              $(this).click(function(e){
                activate(this);
                return void(0);
              });
            });
            
            var active = (location.hash)?$(this).find('a[href=' + location.hash + ']')[0]:'';

            if(active){
              activate(active, 'toggle');
              $(active).parents().show();
            }
            
            function activate(el,effect){
              $(el).parent('li').toggleClass('active').siblings().removeClass('active').children('ul, div').slideUp('fast');
              $(el).siblings('ul, div')[(effect || 'slideToggle')]((!effect)?'fast':null);
            }
            
                });
            } 
        }); 
    })($);