<?php

/*

  type: layout
  content_type: static
  name: Empty
  description: Empty layout

*/

?>

 <?php include "header.php"; ?>
 <?php include "community_header.php"; ?>

    <div class="container main">
          <h4>Great, open new discusion. It is easy</h4>  <br>
          <form action="#" method="post" id="new-topic">
              <div  class="mw_dropdown mw_dropdown_type_monster" data-value="-1">
                    <span class="mw_dropdown_val_holder">
                        <span class="mw_dropdown_val">Select from main categories</span>
                        <span class="dd_rte_arr"></span>
                    </span>
                  <div class="mw_dropdown_fields">
                    <ul>
                      <li value="1"><a href="javascript:;">API</a></li>
                      <li value="2"><a href="javascript:;">Development</a></li>
                      <script>for(var i=3;i<=30;i++){mwd.write('<li value="'+i+'"><a href="javascript:;">Other - '+i+'</a></li>')}</script>
                    </ul>
                  </div>
              </div>
              <input type="text" class="box" placeholder="New Discusion - Title" style="width: 100%;" />
              <div class="box" id="topic-editor-holder">
                <textarea id="topic-editor"></textarea>
              </div>
              <script>
                  $(document).ready(function(){
                      var editor_area = mwd.getElementById('topic-editor');
                      mw.tools.iframe_editor(editor_area);
                  });
              </script>
              <div id="new-topic-footer">
                  <label class="lcheck"><input type="checkbox" checked="checked" /><span>Notify me by e-mail on new answer</span></label>
                  <a href="javascript:;" class="orangebtn pull-right">Publish Topic</a>
                  <a href="javascript:;" class="blue pull-right">Preview</a>
              </div>
          </form>

    </div>
 <?php include "footer.php"; ?>