
<?php $db = Database::Connection(); ?>
<link rel="stylesheet" href="<?php echo Config::Get('ASSETS'); ?>Editor/css/froala_editor.css">
<link rel="stylesheet" href="<?php echo Config::Get('ASSETS'); ?>Editor/css/froala_style.css">
<link rel="stylesheet" href="<?php echo Config::Get('ASSETS'); ?>Editor/css/plugins/code_view.css">
<link rel="stylesheet" href="<?php echo Config::Get('ASSETS'); ?>Editor/css/plugins/draggable.css">
<link rel="stylesheet" href="<?php echo Config::Get('ASSETS'); ?>Editor/css/plugins/colors.css">
<link rel="stylesheet" href="<?php echo Config::Get('ASSETS'); ?>Editor/css/plugins/emoticons.css">
<link rel="stylesheet" href="<?php echo Config::Get('ASSETS'); ?>Editor/css/plugins/image_manager.css">
<link rel="stylesheet" href="<?php echo Config::Get('ASSETS'); ?>Editor/css/plugins/image.css">
<link rel="stylesheet" href="<?php echo Config::Get('ASSETS'); ?>Editor/css/plugins/line_breaker.css">
<link rel="stylesheet" href="<?php echo Config::Get('ASSETS'); ?>Editor/css/plugins/table.css">
<link rel="stylesheet" href="<?php echo Config::Get('ASSETS'); ?>Editor/css/plugins/char_counter.css">
<link rel="stylesheet" href="<?php echo Config::Get('ASSETS'); ?>Editor/css/plugins/video.css">
<link rel="stylesheet" href="<?php echo Config::Get('ASSETS'); ?>Editor/css/plugins/fullscreen.css">
<link rel="stylesheet" href="<?php echo Config::Get('ASSETS'); ?>Editor/css/plugins/file.css">
<link rel="stylesheet" href="<?php echo Config::Get('ASSETS'); ?>Editor/css/plugins/quick_insert.css">
<link rel="stylesheet" href="<?php echo Config::Get('ASSETS'); ?>Editor/css/plugins/help.css">
<link rel="stylesheet" href="<?php echo Config::Get('ASSETS'); ?>Editor/css/third_party/spell_checker.css">
<link rel="stylesheet" href="<?php echo Config::Get('ASSETS'); ?>Editor/css/plugins/special_characters.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.css">
<div id="preloader">
    <div class="loader"></div>
</div>
<div class="page-container">
    <div class="sidebar-menu">
        <div class="sidebar-header">
            <div class="logo">
                <a href="<?php echo Config::Get('SERVER_URL'); ?>Home"><h4><?php echo Config::Get('SERVER_NAME'); ?></h4></a>
            </div>
        </div>
        <?php require_once('GLOBAL/Sidebar.php'); ?>
        <div class="main-content">
            <?php require_once('GLOBAL/Navbar.php'); ?>
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="<?php echo Config::Get('ADMIN'); ?>Home">Home</a></li>
                                <li><a href="javascript:;">Param1</a></li>
                                <li><span>Param2</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-content-inner">
                
                <div class="row">
                    <div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <div class="col-12 mt-5">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="col-form-label">Title</label>
                                            <input type="text" class="form-control title" placeholder="Title...">
                                            <label class="col-form-label">Image</label>
                                            <input type="text" class="form-control image" placeholder="Image">
                                            <label for="example-text-input" class="col-form-label">Category</label>
                                            <select class="form-control category p-1">
                                                <option value="1" selected>Update</option>
                                                <option value="2">Announcement</option>
                                                <option value="3">New</option>
                                            </select>
                                            <div id="editor">
                                                <div id='edit' style="margin-top: 30px;"></div>
                                            </div>
                                            <button id="save" type="button" class="col-md-2 btn btn-primary mt-4 pr-4 pl-4">Share Post</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.3.0/mode/xml/xml.min.js"></script>

<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/froala_editor.min.js" ></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/align.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/char_counter.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/code_beautifier.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/code_view.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/colors.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/draggable.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/emoticons.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/entities.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/file.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/font_size.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/font_family.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/fullscreen.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/image.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/image_manager.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/line_breaker.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/inline_style.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/link.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/lists.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/paragraph_format.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/paragraph_style.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/quick_insert.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/quote.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/table.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/save.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/url.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/video.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/help.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/print.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/third_party/spell_checker.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/special_characters.min.js"></script>
<script type="text/javascript" src="<?php echo Config::Get('ASSETS'); ?>Editor/js/plugins/word_paste.min.js"></script>

  <script>
    $(function(){
      $('#edit').froalaEditor()
    });
    $("#save").click(function(){
        $.ajax({
            type: 'POST',
            url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Admin/SharePost.php',
            data: {"Param1": $('#edit').froalaEditor('html.get'), "Param2": $(".title").val(), "Param3": $(".image").val(), "Param4": $(".category").val()},
            success: function(resultData){
                if(resultData.error) swal('<?php echo Lang::Get('Error'); ?>!', resultData.msg, 'error');
                else swal('<?php echo Lang::Get('Successful'); ?>!', resultData.msg, 'success');
            }
        });
    });
  </script>