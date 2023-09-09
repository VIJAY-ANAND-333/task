

        $(document).ready(function () {
            $('#country').on('change', function () {
                var id=$('#country').val();
                console.log(id);
                if(id!=""){
                    $.ajax({
                        url: 'get_products.php',
                        type: 'POST',
                        data:{id:id},
                        success: function (data) {
                           $('#state').html(data);
                        },
                        error: function(err){
                            console.log(err)
                        }
                    });
                }
            });

        });
        
        $(document).ready(function(){
            function lodetable(){
                $.ajax({
                    url : 'cart_data_select.php',
                    type : 'GET',
                    success : function(data) {
                      $('#table-data').html(data);
                    }
                });
            }
            lodetable();
            update();
            function lodeCartData(){
                $.ajax({
                    url : 'cart_data.php',
                    type : 'GET',
                    success : function(data) {
                      $('#cart-data').html(data);
                    }
                });
            }
            lodeCartData();
            $(document).on("click","#add",function(e){
                e.preventDefault();
                var id = $(this).data('id');
                $.ajax({
                    url : 'cart_data_insert.php',
                    type : 'POST',
                    data : {cart_id:id},
                    success : function(data) {
                        lodetable();
                        update();
                        $("#error").text(data);
                    }
                });
            });
            update();
            $(document).on("click","#remove",function(e){
                e.preventDefault();
                var id = $(this).data('id');
                $.ajax({
                    url : 'cart_data_delete.php',
                    type : 'POST',
                    data : {cart_id:id},
                    success : function(data) {
                        lodetable();
                        update();
                        alert("Data Deleted Successfully");
                       
               }
            });
        });
           function update(){
            $.ajax({
                url : 'update_cart_data.php',
                type : 'POST',
                success : function(data) {
                    add();
                    var pro=`<div>${data}</div>`;
                    $('#carts').html(pro);
                }
            });
           } 
        });
        
        function add(id,qty){
            $.ajax({
                url : 'plus_quantity.php',
                method : 'POST',
                type:'json',
                data:{id:id,qty:qty},
                success : function(data) {
                    console.log(data);
                }
            });
        } 
        function subtraction(id){
            $.ajax({
                url : 'subtract_quantity.php',
                method : 'POST',
                type:'json',
                data:{id:id},
                success : function(data) {
                    console.log(data);
                }
            });
        } 

        

        // $(document).ready(function(){
        //     $('.toast').toast('show');
        //   });
        
