/* Button to Tiny MCE */

(function() {
   tinymce.create('tinymce.plugins.column', {
      init : function(ed, url) {
         ed.addButton('column', {
            title : 'column',
            image : url+'/column.png',
            onclick : function() {
               var width = prompt("How wide is the column? Choose 2 for 1/2, 3 for 1/3, 2_3 for 2/3 or 4 for 1/4.", "1");
               var extra = prompt("Extra classes: box-light, box-dark", "");

               if (width == 2 ){
                   var width_output = "m-all s-all t-1of2 d-1of2 dl-1of2 xl-1of2";
               }

               else if (width == 3 ){
                   var width_output = "m-all s-all t-all d-1of3 dl-1of3 xl-1of3";
               }

               else if (width == 4 ){
                   var width_output = "m-all s-1of2 t-1of2 d-1of2 dl-1of4 xl-1of4";
               }

               else if (width = "2_3" ){
                   var width_output = "m-all s-all t-all d-2of3 dl-2of3 xl-2of3";
               }
               
               else {
                   var width_output = "m-all s-all t-all d-all dl-all xl-all";
               }

               ed.execCommand('mceInsertContent', false, '[column width="'+width_output+'" extra="'+extra+'"][/column]');

            }
         });
      },
      createControl : function(n, cm) {
         return null;
      },
      getInfo : function() {
         return {
            longname : "Recent Posts",
            author : 'Konstantinos Kouratoras',
            authorurl : 'http://www.kouratoras.gr',
            infourl : 'http://www.smashingmagazine.com',
            version : "1.0"
         };
      }
   });
   tinymce.PluginManager.add('column', tinymce.plugins.column);
})();