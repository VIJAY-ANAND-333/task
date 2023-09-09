$(document).ready(function(){

    function del(id){
        alert(id);
        $.ajax({
            url:'delete.php',
            method:'POST',
            type:'json',
            success:function(data){
                console.log(data);
            }
        });
    }
});