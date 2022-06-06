function searchQueue(e){
    if (e.value.length === 0) {
        return false;
    }else{
        fetchQueue(e.value);
    }

}

function fetchQueue(fila){
    $.ajax({
        type: "GET",
        url: "../../backend/listarFilas.php",             
        dataType: "html",
        data:{
            'fila': fila  
        },               
        success: function(response){                    
            $("#queues").html(response); 
        },
    });
}