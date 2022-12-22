function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById("table_id");
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    var currentdate = new Date();
    filename = 
    filename?filename+'.xls': 'Reporte del '
    + currentdate.getDate()+'/'
    +(currentdate.getMonth()+1)+ '/'
    + currentdate.getFullYear() + " @ "  
    + currentdate.getHours() + ":"  
    + currentdate.getMinutes() + ":" 
    + currentdate.getSeconds() +'.xls' ;
    
    downloadLink = document.createElement("a");
    document.body.appendChild(downloadLink);

    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
$('#export-btn').confirm({
    title: 'Exportar',
    content: '¿Exportar tabla a excel?',
    buttons: {
        Confirmar: function () {
            exportTableToExcel();
        },
        cancelar: function () {
            $('#export-btn').alert({
                title: 'cancelado!',
                content: 'Peticion cancelada'});
        }
    }
});


