@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Excel To Json</div>

                <div class="card-body">
                    <form enctype="multipart/form-data">
                        <input id="upload" type=file  name="files[]">
                    </form>

                    <div id="output"></div>
                </div>
            </div>
        </div>
    </div>
</div>

                                <div class="table-responsive m-b-40">
                                    <table class="table table-borderless table-data3" id="tablaProductos">
                                        <thead>
                                            <tr>
                                                <th>date</th>
                                                <th>type</th>
                                                <th>description</th>
                                                <th>status</th>
                                                <th>price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
                                </div>


<script>
  var tmp;
    var ExcelToJSON = function() {

      this.parseExcel = function(file) {
        var reader = new FileReader();

        reader.onload = function(e) {
          var data = e.target.result;
          var workbook = XLSX.read(data, {
            type: 'binary'
          });
          workbook.SheetNames.forEach(function(sheetName) {
            // Here is your object
            var XL_row_object = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetName]);
            var json_object = JSON.stringify(XL_row_object);
            console.log(JSON.parse(json_object));

            //Llenado de tabla
            tmp = JSON.parse(json_object);
            $("#tablaProductos thead tr").remove();
            $("#tablaProductos tbody tr").remove();
            $("#tablaProductos thead").append('<tr></tr>');
            $.each(tmp[0],function(index, value){
                    $("#tablaProductos thead tr").append('<th>'  + index + '</th>');
            });
            for(var k in tmp) {
                $("#tablaProductos tbody").append('<tr id='+k+'></tr>');
                $.each(tmp[k],function(index, value){
                    $("#"+k).append('<td>'  + value + '</td>');
                   
                });
            }

         

            //jQuery( '#xlx_json' ).val( json_object );
          })
        };

        reader.onerror = function(ex) {
          console.log(ex);
        };

        reader.readAsBinaryString(file);
      };
  };

  function handleFileSelect(evt) {
    
    var files = evt.target.files; // FileList object
    var xl2json = new ExcelToJSON();
    xl2json.parseExcel(files[0]);
  }

document.getElementById('upload').addEventListener('change', handleFileSelect, false);
var output = document.getElementById('output');


</script>
@endsection