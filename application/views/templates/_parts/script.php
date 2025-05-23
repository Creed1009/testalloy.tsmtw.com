<!-- <script src="/node_modules/vue/dist/vue.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.min.js"></script> -->
<!-- <script src="/node_modules/axios/dist/axios.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.17.1/axios.min.js"></script> -->
<!-- <script src="/assets/admin/js/app.js"></script> -->
<script src="/node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.js"></script> -->
<script src="/node_modules/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"></script> -->
<!-- 拖曳 -->
<!-- <script src="/assets/admin/js/jquery.nestable.js"></script> -->
<!-- <script src="/assets/admin/js/excanvas.min.js"></script> -->
<script src="/node_modules/bootstrap3.3.7/dist/js/bootstrap.min.js?v=3.3.7"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<script src="/node_modules/chosen-js/chosen.jquery.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.5/chosen.jquery.min.js"></script> -->
<script src="/node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
<!-- <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> -->
<script src="/assets/admin/js/dataTables.bootstrap.min.js"></script>
<!-- <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script> -->
<script src="/assets/admin/js/flaty.js"></script>
<!-- <script src="/node_modules/jquery.cookie/jquery.cookie.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script> -->
<script src="/node_modules/moment/min/moment.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js"></script> -->
<script src="/node_modules/moment/locale/zh-tw.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/locale/zh-tw.js"></script> -->
<script src="/node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script> -->
<script src="/node_modules/bootstrap-datepicker/dist/locales/bootstrap-datepicker.zh-TW.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/locales/bootstrap-datepicker.zh-TW.min.js"></script> -->
<!-- <script src="/node_modules/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script src="/assets/admin/js/bootstrap-formhelpers.js"></script>
<script src="/node_modules/jquery-validation/dist/jquery.validate.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script> -->
<script src="/node_modules/jquery-validation/dist/localization/messages_zh_TW.js"></script>

<script>
  	$('.fancybox').fancybox({
  		'width'     : 1920,
  		'height'    : 1080,
  		'type'      : 'iframe',
  		'autoScale' : false
  	});

  	$('.datepicker').datepicker({
  		format: "yyyy-mm-dd",
	    autoclose: true,
	    clearBtn: true,
	    todayBtn: true,
	    todayHighlight: true,
	    weekStart: 0,
	    language: 'zh-TW'
  	});

  	$('.datepicker_mu').datepicker({
  		format: "yyyy-mm-dd",
	    //autoclose: true,
	    clearBtn: true,
	    todayBtn: true,
	    todayHighlight: true,
	    multidate: true,
	    weekStart: 0,
	    language: 'zh-TW'
  	});

	$('.datepicker-ym').datepicker({
	    format: "yyyy-mm",
	    autoclose: true,
	    clearBtn: true,
	    viewMode: "months",
    	minViewMode: "months",
	    todayBtn: true,
	    todayHighlight: true,
	    weekStart: 0,
	    language: 'zh-TW'
	});

	$('.datepicker-y').datepicker({
	    format: "yyyy",
	    autoclose: true,
	    viewMode: "years",
    	minViewMode: "years",
	    clearBtn: true,
	    todayHighlight: true,
	    weekStart: 0,
	    language: 'zh-TW'
	});

	$('.datepicker-y-mu').datepicker({
	    format: "yyyy",
	    autoclose: false,
	    viewMode: "years",
    	minViewMode: "years",
	    clearBtn: true,
	    todayHighlight: true,
	    multidate: true,
	    weekStart: 0,
	    language: 'zh-TW'
	});

	$('.datepicker-m').datepicker({
	    format: "mm",
	    autoclose: true,
	    viewMode: "months",
    	minViewMode: "months",
	    clearBtn: true,
	    todayHighlight: true,
	    weekStart: 0,
	    language: 'zh-TW'
	});

	$('.datetimepicker').datetimepicker({
      	locale: 'zh-TW',
      	format: 'YYYY-MM-DD HH:mm:ss',
    });

	$('.modal-btn').on('click', function(e){
		e.preventDefault();
		//$('#use-Modal').modal('show').find('.modal-body').load($(this).attr('href'));
		$('#use-Modal').modal('show').find('.modal-body').load(this.href);
	});

  	function responsive_filemanager_callback(field_id)
	{
	    if (field_id) {
	        //console.log(field_id);
	        var url = jQuery('#' + field_id).val();
	        document.getElementById(field_id+'_preview').src = '<?php echo base_url(); ?>assets/uploads/' + url;
	        $('#'+field_id+'_preview').show();
	    }
	}

	function searchFilter(page_num) {
	    page_num = page_num?page_num:0;
		var keywords  = $('#keywords').val();
		var sortBy    = $('#sortBy').val();
		var category  = $('#category').val();
		var category2 = $('#category2').val();
		var status    = $('#status').val();
	    $.ajax({
	        type: 'GET',
	        url: '<?php echo base_url(); ?>admin/<?php echo $this->uri->segment(2); ?>/ajaxData/'+page_num,
	        data:'page='+page_num+'&keywords='+keywords+'&sortBy='+sortBy+'&category='+category+'&category2='+category2+'&status='+status,
	        beforeSend: function () {
	            $('#loading').show();
	        },
	        success: function (html) {
	            $('#datatable').html(html);
	            $('#loading').fadeOut("fast");
	        }
	    });
	}

	(function update_time(){
	    var now = moment().format('YYYY年MM月DD日 dddd HH點mm分ss秒');
	    $('#NowTime').text(now);
	    setTimeout(update_time, 1000);
	})();

	$(document).ready(function() {
	// $(window).load(function() {
	    $.ajax({
	      	url: "/admin/contact/get_count",
	      	type: "GET",
	      	data: {},
	      	dataType: "html",
	      	cache: false,
	      	success: function(data) {
	        	// if (data==0) {
	          		//
	        	// } else {
	          		//alert(data);
	          		// count_notice+=data;
	          		$("#contact_count").html(data);
	        	// }
	      	}
	    });
	});
</script>

<script src="/assets/admin/tinymce4.4.3/tinymce.min.js" type="text/javascript"></script>
<!-- <script src="/assets/admin/tinymce/tinymce.min.js" type="text/javascript"></script> -->
<script>
	tinymce.init( {
	    language: 'zh_TW',
	    selector: '.tinymce',
	    menubar: false,
        statusbar: false,
        // toolbar: false,
	    plugins: [
            "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking save responsivefilemanager",
            "table contextmenu directionality emoticons template textcolor paste textcolor colorpicker textpattern code image imagetools imagetools responsivefilemanager"
        ],
        toolbar: 'removeformat responsivefilemanager link code',
	    // toolbar: 'insert undo redo | fontselect fontsizeselect | responsivefilemanager | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | code removeformat',
	    // image_advtab: true,
	    // fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt 48pt 60pt 72pt 84pt 96pt",
	    // content_css: ['/assets/admin/bootstrap/dist/css/bootstrap.min.css'],
	    // font_formats: '微軟正黑體=微軟正黑體,Microsoft JhengHei;新細明體=PMingLiU,新細明體;標楷體=標楷體,DFKai-SB,BiauKai;黑體=黑體,SimHei,Heiti TC,Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=v erdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats;',
	    external_filemanager_path:"/assets/admin/filemanager/",
	    filemanager_title: "媒體庫" ,
	    filemanager_access_key: "NshstuPrivateKey" ,
	    external_plugins: { "filemanager" : "plugins/responsivefilemanager/plugin.min.js"}
  	});

  	tinymce.init( {
	    language: 'zh_TW',
	    selector: '.tinymce1',
	    // menubar: false,
        // statusbar: false,
        // Forces absolute urls (without protocol and host)
   		relative_urls: false,
   		remove_script_host: false,
   		document_base_url : "<?php echo base_url() ?>uploads",
        // toolbar: false,
	    plugins: [
            "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking save responsivefilemanager",
            "table contextmenu directionality emoticons template textcolor paste textcolor colorpicker textpattern code image imagetools imagetools responsivefilemanager"
        ],
	    toolbar: 'insert undo redo | fontselect fontsizeselect | image | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | code removeformat',
	    image_advtab: true,
	    fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt 48pt 60pt 72pt 84pt 96pt",
	    content_css: ['/assets/admin/bootstrap/dist/css/bootstrap.min.css'],
	    font_formats: '微軟正黑體=微軟正黑體,Microsoft JhengHei;新細明體=PMingLiU,新細明體;標楷體=標楷體,DFKai-SB,BiauKai;黑體=黑體,SimHei,Heiti TC,Andale Mono=andale mono,times;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;Comic Sans MS=comic sans ms,sans-serif;Courier New=courier new,courier;Georgia=georgia,palatino;Helvetica=helvetica;Impact=impact,chicago;Symbol=symbol;Tahoma=tahoma,arial,helvetica,sans-serif;Terminal=terminal,monaco;Times New Roman=times new roman,times;Trebuchet MS=trebuchet ms,geneva;Verdana=v erdana,geneva;Webdings=webdings;Wingdings=wingdings,zapf dingbats;',
	    external_filemanager_path:"/assets/admin/filemanager/",
	    filemanager_title:"媒體庫" ,
	    external_plugins: { 
	    	"responsivefilemanager": "plugins/responsivefilemanager/plugin.min.js",
	    	"filemanager": "/assets/admin/filemanager/plugin.min.js",

	    }
  	});
</script>