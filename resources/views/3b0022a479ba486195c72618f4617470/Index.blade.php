@extends('layouts.mt9f6db8edc741443f8e0d102a7ebc0195')
    @section('dzContenidoPag')
<form method="POST" enctype="multipart/form-data" id="frm38a56791a0dd45e48afa84a6cde3e4b4"><input type="hidden" name="hid38a56791a0dd45e48afa84a6cde3e4b4" id="hid38a56791a0dd45e48afa84a6cde3e4b4" value="38a56791a0dd45e48afa84a6cde3e4b4" />{!! csrf_field() !!}<div class="row"><div class="col-md-3"><button tabindex="1" type="submit" id="ctl792f8175b8ea401ba069bc3a4b444e50_38a56791a0dd45e48afa84a6cde3e4b4" name="ctl792f8175b8ea401ba069bc3a4b444e50_38a56791a0dd45e48afa84a6cde3e4b4" class="btn btn-default" ><?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg3c58bf129bb547849ea299c31f29535a'); ?></button></div></div></form><table id="tb8781cd0d7592473db2a44e9c6c63bb79" data-paging="true" data-ordering="true" class="display" cellspacing="0" width="100%">
<thead>
<tr>
<th data-visible="true" data-width="200px" data-data="fld030b7872cbd48e8a60b59f448cd61ff" data-orderable="false" data-class="">
<?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg4b5a927d8db549e4a71635818f183207'); ?></th>
<th data-visible="true" data-width="200px" data-data="fl0b24c905b9e648d8a5074c6e8579b58f" data-orderable="false" data-class="">
<?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg27ecdc1c8d794f0a84e33e12371e3876'); ?></th>
<th data-visible="true" data-width="{Width}px" data-data="fl0b24c905b9e648d8a5074c6e8579b58f" data-orderable="false">
<?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgf12b47434a7247ada271a67e43db8c5a'); ?>
</th>
<th data-visible="true" data-width="{Width}px" data-data="fl0b24c905b9e648d8a5074c6e8579b58f" data-orderable="false">
<?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgf1a38ea4d86a473986005737b9151b2c'); ?>
</th>
</tr>
</thead>
<tbody>
</tbody>
</table>

<div class="modal fade" id="mdlfdab7191cef64b65b8c3ac59a726feabConfirm" tabindex="-1" role="dialog" aria-labelledby="mdlLabelfdab7191cef64b65b8c3ac59a726feabConfirm">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close btnClosefdab7191cef64b65b8c3ac59a726feabConfirm" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="mdlLabelfdab7191cef64b65b8c3ac59a726feabConfirm"><?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg955a0dc0869b4dee98df22419aa573b4'); ?></h4>
      </div>
      <div class="modal-body">
        Desea eliminar el registro
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="btnfdab7191cef64b65b8c3ac59a726feabConfirm"><?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg701d5d854e584ff5ad53a585f2458dc9'); ?></button>
        <button type="button" class="btn btn-default btnClosefdab7191cef64b65b8c3ac59a726feabConfirm" data-dismiss="modal"><?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgfea1f43fa89c4971b465cf7422e346ad'); ?></button>
      </div>
    </div>
  </div>
</div>
  
<div class="modal fade" id="mdl33aabb4bbaea424194b0b5a9c6f05f40Alert" tabindex="-1" role="dialog" aria-labelledby="mdlLabel33aabb4bbaea424194b0b5a9c6f05f40Alert"  data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg208149de52964657ac23ac150e14c667'); ?> <span id="ses33aabb4bbaea424194b0b5a9c6f05f40"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default btnRefresh33aabb4bbaea424194b0b5a9c6f05f40Alert"><?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg0932b5c470c04540987f47f6a4c4a0a8'); ?></button>
      </div>
    </div>
  </div>
</div>
  
@endsection
@section('dzFooter')

@endsection
@section('dzLogoMG')

@endsection
@section('dzMenuNavigation')
{!! str_replace("{Extra}","",$vd034bf0f52524ba7a8177a794c7aadb3) !!}

@endsection
@section('dzMenuUser')

@endsection
@section('dzTitleEncabezadoPagina')
<h1>Tienda X</h1>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
@endsection
@section('styles')
<script type="text/javascript">window.jQuery || document.write('<script src="<?php echo URL::asset("/") ?>/Scripts/jquery-3.6.1.min.js"><'+'/script>')</script><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/css/jquery.dataTables.min.css" /><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/css/responsive.dataTables.min.css" /><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Buttons/css/buttons.dataTables.min.css" /><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/css/dataTables.bootstrap4.min.css" /><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/css/responsive.bootstrap4.min.css" /><link rel="stylesheet" href="<?php echo URL::asset("/") ?>/Scripts/ClientScripts/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css" />
@endsection
@section('scripts')
<script type="text/javascript">function getArrayFromWidget(idOfWidget,typeOfWidget){if(typeOfWidget=='CheckBox'){tmpUrl='';tmpUrlFull='';$('.'+idOfWidget).each(function(){if($(this).is(':checked')){tmpUrl+=$(this).val()+',';}tmpUrlFull+=$(this).val()+',';});if(tmpUrl==''){return tmpUrlFull+'0';}else{return tmpUrl+'0';}}}</script><script type="text/javascript">var fromButton='';var isNew38a56791a0dd45e48afa84a6cde3e4b4=true;var monThousands=''+'<?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgNumericGroupSeparator'); ?>'+'';var currentSystemOriginalShortDatetimeFormat=(''+'<?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgSystemOriginalShortDatetimeFormat'); ?>'+'').toUpperCase();$('#ctl792f8175b8ea401ba069bc3a4b444e50_38a56791a0dd45e48afa84a6cde3e4b4').click(function(){location='<?php echo URL::to("/") ?>/productosForm/0';return false;});</script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/js/jquery.dataTables.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/js/dataTables.responsive.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Buttons/js/dataTables.buttons.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Buttons/js/buttons.html5.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/JSScript/dist/jszip.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/pdfmake/build/pdfmake.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/pdfmake/build/vfs_fonts.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/media/js/dataTables.bootstrap4.min.js" ></script><script type="text/javascript" src="<?php echo URL::asset("/") ?>/Scripts/DataTables/extensions/Responsive/js/responsive.bootstrap4.min.js" ></script><script type="text/javascript">$.fn.dataTable.ext.errMode=function(e,settings,techNote,message){console.log(message);};dt8781cd0d7592473db2a44e9c6c63bb79=false;rel8781cd0d7592473db2a44e9c6c63bb79=false;tot8781cd0d7592473db2a44e9c6c63bb79={!! str_replace("{Extra}","",$v8781cd0d7592473db2a44e9c6c63bb79Total) !!};var tbObj8781cd0d7592473db2a44e9c6c63bb79;$(function(){tbObj8781cd0d7592473db2a44e9c6c63bb79=$('#tb8781cd0d7592473db2a44e9c6c63bb79').DataTable({'drawCallback':function(settings){},dom:'Blrtip',buttons:[{text:'Excel',action:function(e,dt,button,config){dt8781cd0d7592473db2a44e9c6c63bb79=true;dt.one('preXhr',function(e,s,data){data.length=-1;}).one('draw',function(e,settings,json,xhr){var excelButtonConfig=$.fn.DataTable.ext.buttons.excelHtml5;var addOptions={title:'Tabla de datos de Productos',footer:true,exportOptions:{'columns':[0,1]}};$.extend(true,excelButtonConfig,addOptions);excelButtonConfig.action(e,dt,button,excelButtonConfig);}).draw();}},{text:'PDF',action:function(e,dt,button,config){dt8781cd0d7592473db2a44e9c6c63bb79=true;dt.one('preXhr',function(e,s,data){data.length=-1;}).one('draw',function(e,settings,json,xhr){var pdfButtonConfig=$.fn.DataTable.ext.buttons.pdfHtml5;var addOptions={title:'Tabla de datos de Productos',orientation:'landscape',pageSize:'A4',footer:true,exportOptions:{'columns':[0,1]}};$.extend(true,pdfButtonConfig,addOptions);pdfButtonConfig.action(e,dt,button,pdfButtonConfig);}).draw();}}],columnDefs:[{targets:2,render:function(data,type,row){console.log(row);return '<a href="javascript:;" onclick="location=\'<?php echo URL::to("/") ?>/productosForm/'+encodeURIComponent(row.fld030b7872cbd48e8a60b59f448cd61ff == '' ? '' : row.fld030b7872cbd48e8a60b59f448cd61ff)+'\';"><img src="data:image/x-png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAABHNCSVQICAgIfAhkiAAAAAlwSFlzAAALEwAACxMBAJqcGAAAA+VJREFUWIXFl21MG3Ucx7+9u/a4apNG9gjJXhSJGbM1rFHIiGuhxZDAEh/ADVMjJvrCzGwqcW9MeIEvjBm6V2bzhbMuZt3GtmIM05aY+vCqLh0sjI6u9GgZRSfEIvbpWnrnC1xlQNv/tUa/L+9+9/18/v/k/rkD/uco5AwbjUalTqd7T6VSxYrNiaLIOxyOr0k6GTkCBr1+uaWlRb3faCw6d9vvz9TX1x8bHBz8VE5/0bx59OjKxMSE9NXIiFQqiURC6u/vHyXppUjhJ4eGNEqlkkg2l8tBEAQWANrb2x+qSOA+nGVZIvj6WCwWXSaTuWkxm2+WJVAJPJlMcpAkH0PTdaAog6WtLSVLoBL4wsICNBpNM8dx2nWXq9paWzM9PT10SYFK4JG5ebx6PgKqdj9lMreC47j8PYVCoVxaXEyYTKb827dJoBJ4OHIXL9p5xPY8A5emG1FxG0zmVqjV6vwMRVEsTdPBrq4u9SaBUnAhnYZWq93yHj8bweEvZrFSe3BttZk47BkrQqvbcdBkfkACkrQrlUodAf4+CY1Go/IJg2H52PHj6kKvmpBO4+fr19HX14eNgjwfRu+Xc3k4nfgN4QSDhPIRMKtJvC5egE4Vw48/fI94IpGlgCvfeTy9eQGbzXai5cCBD2tqaraEA4BWq8VTTU2oqqp64HqID+OlAnAA0C76EF+l8ZrWiz1MTPKMuX1jHs+T959n1nZEEpqam9HY2FhQYKsEZ3jYzs8XhS9LDwM0cPb3RunQr59Mr4fnBcpJMBjCy45oaTgASszgsbkL01eunmvY2EN0FG/MnWAINkcUfxDC981+fnvy6qlNcKCMHZgOBPHKxV+IV76Pt09NOk89XqhP1g7M3Y3Kgjfw9qlJ58cF4bIEYrEY3vrsJyI4LWVhDJ+N3yoBlyUwMjKCdzvqULsyXhJ+KHsNTbtXvSS9xALz81GwKgYfPA2wK3xB+LOiC+fef4O0lkwgEomgTqdbg1DA6Q4We9Pjm+DPiS5c/qifGE4sMDo6iqmpW0in0wAAhgLsHcBu8V4e/rzkxrBMOLHADZ8PXq8XZ86cRjKZ/Efi8C4YFHfwAsZwaegd2XAigZmZGaQFAQCwEI1iePgScrkcAoEAXN9cwwnDn7h48u2y4ADBQeR2u7G0tASGYVC9bTtSyRTGx2/AarWit/dI2WBigUAggJ07dmBvQwM6Ozuh1+srhsoSGBgYQHV19b8KXR8KAGiazqkKfIiUA6dpGizLCiSzDADE43GX2+2+J0rSzmw2Kxu4MX6/X+A4zkkym/857e7uflTFMFYAdJF5omQEIXTZ6fy20p7/JH8B35D5JVEPO54AAAAASUVORK5CYII=" /></a>';}},{targets:3,render:function(data,type,row){console.log(row);return '<a href="javascript:;" onclick="var obj=this;var tmpd030b7872cbd48e8a60b59f448cd61ff=$(this).find(\'input\')[0].value;$(\'#mdlfdab7191cef64b65b8c3ac59a726feabConfirm\').modal(\'show\');$(\'#btnfdab7191cef64b65b8c3ac59a726feabConfirm\').unbind(\'click\');$(\'#btnfdab7191cef64b65b8c3ac59a726feabConfirm\').click(function(){$(\'#mdlfdab7191cef64b65b8c3ac59a726feabConfirm\').modal(\'hide\');$.ajax({url:\'<?php echo URL::to("/") ?>/api/7eb1819235e1415eb79f892e4f00787f/\'+encodeURIComponent(tmpd030b7872cbd48e8a60b59f448cd61ff)+\'\',success:function(data){rel8781cd0d7592473db2a44e9c6c63bb79=true;$(\'#tb8781cd0d7592473db2a44e9c6c63bb79\').DataTable().ajax.reload(null,false);}});});"><img class="first"  src="data:image/x-png;base64,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" /><input type="hidden" value="'+row.fld030b7872cbd48e8a60b59f448cd61ff+'" /></a>';}},],autoWidth:false,processing:true,serverSide:true,searching:false,responsive:true,pagingType:'full_numbers',language:{processing:''+'<?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg182440a4cf8a4d9db38798344313012b'); ?>'+'',emptyTable:''+'<?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg29e5333999964818bf37dee7da45d286'); ?>'+'',lengthMenu:''+'<?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgf644fa77bf6744c492ee18eb4e4b031f'); ?>'+'',info:''+'<?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msgf93438116076472c8f39d5228e01bdf6'); ?>'+'',infoEmpty:''+'<?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg03c294eb8e924c8cb2af9e48c16f2bac'); ?>'+'',paginate:{first:''+'<?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg28ba9194dfd64831a19b100cd0c9e980'); ?>'+'',last:''+'<?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg408eb50752cd49d687b143dd3aa4709c'); ?>'+'',next:''+'<?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msg7aa947521c5d46e8bbd3fbca5ba36e93'); ?>'+'',previous:''+'<?php echo Lang::get('resource29d45da59f8342fabeb6f23fb9623832.msge7c662ccbe7d4576b56605a23bc752fe'); ?>'+''},},'lengthMenu': [ [10,20,50,100,200,300], [10,20,50,100,200,300] ],ajax: function(data, callback, settings) {var info=$('#tb8781cd0d7592473db2a44e9c6c63bb79').DataTable().page.info();var order=$('#tb8781cd0d7592473db2a44e9c6c63bb79').DataTable().order();var orderby='-';switch(order[0][0]){}order8781cd0d7592473db2a44e9c6c63bb79=order;orderby8781cd0d7592473db2a44e9c6c63bb79=orderby;page8781cd0d7592473db2a44e9c6c63bb79=(info.page + 1);pagesize8781cd0d7592473db2a44e9c6c63bb79=info.length;if(rel8781cd0d7592473db2a44e9c6c63bb79){$.ajax({url:getUrl8781cd0d7592473db2a44e9c6c63bb79Count(),async:false,success:function(res){tot8781cd0d7592473db2a44e9c6c63bb79=res;}});}$.get(getUrl8781cd0d7592473db2a44e9c6c63bb79(),function(res) {callback({recordsTotal:tot8781cd0d7592473db2a44e9c6c63bb79,recordsFiltered:tot8781cd0d7592473db2a44e9c6c63bb79,data: res});});}});});var orderby8781cd0d7592473db2a44e9c6c63bb79;var order8781cd0d7592473db2a44e9c6c63bb79;var page8781cd0d7592473db2a44e9c6c63bb79;var pagesize8781cd0d7592473db2a44e9c6c63bb79;function getUrl8781cd0d7592473db2a44e9c6c63bb79Count(){urlpath=('{!! str_replace("{Extra}","",$v8781cd0d7592473db2a44e9c6c63bb79Ajax) !!}').replace('aa35a6815e6f49e993c3d795e2ba17f2','aa35a6815e6f49e993c3d795e2ba17f2Count');urlpath=urlpath.replace('/{page}','');urlpath=urlpath.replace('/{pagesize}','');urlpath=urlpath.replace('/{orderColumn}','');urlpath=urlpath.replace('/{orderType}','');return urlpath;}function getUrl8781cd0d7592473db2a44e9c6c63bb79(){urlpath='{!! str_replace("{Extra}","",$v8781cd0d7592473db2a44e9c6c63bb79Ajax) !!}';urlpath=urlpath.replace('{page}',page8781cd0d7592473db2a44e9c6c63bb79);if(dt8781cd0d7592473db2a44e9c6c63bb79){urlpath=urlpath.replace('{pagesize}',10000);dt8781cd0d7592473db2a44e9c6c63bb79=false;}else{urlpath=urlpath.replace('{pagesize}',pagesize8781cd0d7592473db2a44e9c6c63bb79);}urlpath=urlpath.replace('{orderColumn}',orderby8781cd0d7592473db2a44e9c6c63bb79);urlpath=urlpath.replace('{orderType}',order8781cd0d7592473db2a44e9c6c63bb79[0][1].toUpperCase());return urlpath;}</script><script type="text/javascript">var int33aabb4bbaea424194b0b5a9c6f05f40;var sesOrig33aabb4bbaea424194b0b5a9c6f05f40={!! str_replace("{Extra}","",$vSessionTimeout) !!}*60000;var sesMin33aabb4bbaea424194b0b5a9c6f05f40=1*60000;var ses33aabb4bbaea424194b0b5a9c6f05f40=sesMin33aabb4bbaea424194b0b5a9c6f05f40;var tim33aabb4bbaea424194b0b5a9c6f05f40=sesOrig33aabb4bbaea424194b0b5a9c6f05f40-sesMin33aabb4bbaea424194b0b5a9c6f05f40;console.log(tim33aabb4bbaea424194b0b5a9c6f05f40);function timer33aabb4bbaea424194b0b5a9c6f05f40(){setTimeout(function(){$('#mdl33aabb4bbaea424194b0b5a9c6f05f40Alert').modal('show');int33aabb4bbaea424194b0b5a9c6f05f40=setInterval(function(){if (ses33aabb4bbaea424194b0b5a9c6f05f40<=0){clearInterval(int33aabb4bbaea424194b0b5a9c6f05f40);location.reload();}var minutes=Math.floor((ses33aabb4bbaea424194b0b5a9c6f05f40 % (1000 * 60 * 60))/(1000 * 60));var seconds=Math.floor((ses33aabb4bbaea424194b0b5a9c6f05f40 % (1000 * 60))/1000);if(seconds.toString().length==1){seconds='0'+seconds.toString();}if(minutes.toString().length==1){minutes='0'+minutes.toString();}ses33aabb4bbaea424194b0b5a9c6f05f40-=1000;$('#ses33aabb4bbaea424194b0b5a9c6f05f40').html(minutes+'m '+seconds+'s');},1000);$('.btnRefresh33aabb4bbaea424194b0b5a9c6f05f40Alert').click(function(){$.ajax({url:location.href});ses33aabb4bbaea424194b0b5a9c6f05f40=sesMin33aabb4bbaea424194b0b5a9c6f05f40;clearInterval(int33aabb4bbaea424194b0b5a9c6f05f40);$('#mdl33aabb4bbaea424194b0b5a9c6f05f40Alert').modal('hide');timer33aabb4bbaea424194b0b5a9c6f05f40();return false;});},tim33aabb4bbaea424194b0b5a9c6f05f40);}timer33aabb4bbaea424194b0b5a9c6f05f40();</script>
@endsection
