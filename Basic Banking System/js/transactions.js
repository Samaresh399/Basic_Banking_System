$(document).ready(function(){
    $("#transactionForm").on("submit", function(e){
        e.preventDefault();
        var dataArray = {
            sender :  $('#txt_sender').val(),
            receiver : $('#txt_receiver').val(),
            amount :  $('#txt_amount').val()
        }

        var dataarr = JSON.stringify(dataArray);

        $.ajax({
            url:"./Database/Transaction.php",
            type:"POST",
            data:"dataarr="+dataarr,
            success:function(res){
                alert('Amount Transfered Successfuly');
                location.href = "customers.php";
            }
        });
    });

})
