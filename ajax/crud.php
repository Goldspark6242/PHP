<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color:red;
        }
        .success{
            color:green;
        }
    </style>
</head>
<body>
    <h1 id="result"></h1>
    <form action="" id="form" method="post" autocomplete="off">
        <input type="hidden" name="id" id="id">
        <input type="text" name="name" id="name" >
        <input type="email" name="email" id="email" >
        <input type="number" name="phone" id="phone" >
        <input type="submit" value="submit" id="submit" name="submit">
        <input type="submit" value="update" id="update" name="update" style="display:none">
    </form>
    

    <table  border=1>
        <thead>
        <tr>
            <td>Sno</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Action</td>
        </tr>
        </thead>
        <tbody  id="tabledata">
        <tr >
            <td>Sno</td>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Action</td>
        </tr>
        </tbody>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){

            const loadData = () =>{
                $.ajax({
                    url:'load.php',
                    type:'get',
                    success:function(result){
                        // console.log(result);
                        $("#tabledata").html(result);
                    }
                });
            }
//   ============================== Delete =========================================       
            const deleteData = (id) =>{
                $.ajax({
                    url:'delete.php',
                    type:'POST',
                    data:{id:id},
                    success:function(result){
                        result = JSON.parse(result);
                        if(result.status){
                            console.log(id);
                            $('#tr'+id).remove();
                            $("#result").html(result.msg).addClass("success");
                        }
                    }
                });
            }
                    $('body').on("click",".delete",function(){
                        var id = $(this).data('id');
                        deleteData(id);
                    });
                    loadData();
 //   ================================= insert =============================================       
            $('#submit').click(function(e){
                e.preventDefault();
                var formdata= $("#form").serializeArray();
                // console.log(formdata);
                $.ajax({
                    url:'insert.php',
                    type: 'post',
                    data: formdata,
                    success : function(result){
                        // console.log(result);
                        result= JSON.parse(result);
                        // console.log(result);
                        if(result.status){
                            $('#result').html(result.msg).addClass('success');
                            $('#tabledata').append("<tr id='tr"+result.id+"'><td>"+result.id+"</td><td>"+result.data.name+"</td><td>"+result.data.email+"</td><td>"+result.data.phone+"</td><td><button data-id='"+result.id+"' class='edit'>Edit</button> | <button data-id='"+result.id+"' class='delete'>Delete</button></td></tr>");
                            $("#form").trigger("reset");
                        }else{
                            $('#result').html(result.msg).addClass('error');
                        }
                    }
                });

            });
 //   ================================ Edit ===============================================       
            $("body").on("click",".edit",function(e){
                var id=$(this).data('id');
                console.log(id);
                $.ajax({
                    url: 'editLoad.php',
                    type: 'post',
                    data: {id:id},
                    success: function(result){
                        result = JSON.parse(result);
                        console.log(result);
                        if(result.status){
                            $('#name').val(result.data.name);
                            $('#id').val(result.data.id);
                            $('#email').val(result.data.email);
                            $('#phone').val(result.data.phone);
                            $('#submit').hide();
                            $('#update').show();
                        }
                    }
                });
                
            });

            $("#update").click(function(e){
                e.preventDefault();
                var formdata = $("#form").serializeArray();
                $.ajax({
                    url: 'update.php',
                    type: 'post',
                    data: formdata,
                    success: function(result){
                        result = JSON.parse(result);
                        if(result.status){
                            $('#result').html(result.msg).addClass('sus');
                            $("#form").trigger("reset");
                            $('#submit').show();
                            $('#update').hide();
                            loadData();
                        } else{
                            $('#result').html(result.msg).addClass('error');
                        }
                        
                    }
                });
            });

        });
    </script>
</body>
</html>